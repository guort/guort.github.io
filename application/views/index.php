<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="x5-orientation" content="portrait">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>幸运签</title>
<!-- Bootstrap -->
<link href="/styles/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="/scripts/iconfont.css">
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script type="text/javascript">
function autoPlayAudio1() {
    wx.config({
        debug: false,
        appId: '',
        timestamp: 1,
        nonceStr: '',
        signature: '',
        jsApiList: []
    });
    wx.ready(function() {
        document.getElementById('sss').play();
    });
}
autoPlayAudio1();
//音乐控制开关
function close() {
    $('.laba').click(function () {
        var music = document.getElementById("sss");
        if(music.paused){
            music.play();
            $(this).html('&#xe604;');
            $(this).removeClass('fixd');

        }else{
            music.pause();
            $(this).html('&#xe605;');
            $(this).addClass('fixd');
        }
    })
}
close();
$(function() {
	$('#cstart').css('width', $(window).width());
	$('#cstart').css('height', $(window).height());
	$('#cshake').css('width', $(window).width());
	$('#cshake').css('height', $(window).height());
	
	
	var SHAKE_THRESHOLD = 3200;
	var last_update = 0;
	var x = y = z = last_x = last_y = last_z = 0;

	if(window.DeviceMotionEvent) {
		window.addEventListener('devicemotion', deviceMotionHandler, false);
	} else {
		alert('本设备不支持devicemotion事件');
	}

	function deviceMotionHandler(eventData) {
		
		var acceleration = eventData.accelerationIncludingGravity;
		var curTime = new Date().getTime();

        var myauto = document.getElementById('musicBox');
		if((curTime - last_update) > 100) {
			var diffTime = curTime - last_update;
			last_update = curTime;
			x = acceleration.x;
			y = acceleration.y;
			z = acceleration.z;
			var speed = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 10000;
			var status = document.getElementById("status");
			if(speed > SHAKE_THRESHOLD) {
				document.getElementById('sss').src = '/scripts/shake.mp3';
                document.getElementById('sss').loop = false;
				setTimeout(doResult,2000);

			}
			last_x = x;
			last_y = y;
			last_z = z;
		}
	}
	function doResult() {
		// alert('大傻逼，让你摇了吗？');
		location.href = '/welcome/done';

	}
	$('#start').css('top', $(window).height() - 130);
	$('#start').css('left', $(window).width() - ($(window).width() / 2) - 75);

	$('#start').click(function() {
		$('#cstart').hide();
		$('#cshake').show();
	});


	<?php if($hehe) { ?>
		$('#cstart').hide();
		$('#cshake').show();
	<?php } ?>
});


</script>
<i class="iconfont laba" >&#xe604;</i>
<div id="cstart" class="container-fluid">
	<a id="start" href="javascript:void(0);"></a>
</div>

<div id="cshake" class="container-fluid" >
	<div class="row">
	<div class="box">
        <img class="yt" src="/images/yt.png">
        <img class="ys" src="/images/ys.png">
        </div>
        <img src="/images/yiy.png" class="yiy">
	</div>
</div>
<audio style="display:hidden" id="musicBox" src="/scripts/shake.mp3"></audio>
<audio style="display:hidden" id="sss" src="/scripts/bg.mp3" autoplay loop></audio>
<style type="text/css">

        .box{
            height: 50%;
            width: 46%;
            position: fixed;
            top:32%;
            left: 12%;
        }
        .box img{
            width:100%;
           height: auto;

        }
        .ys{
            margin-top:-10.5%;
            margin-left:-1%;
            z-index: 100;
            position: relative;

        }
        @keyframes run {
            0%{
                transform: rotate(-15deg);
                transform-origin: bottom center;
            }
            100% {
                transform: rotate(15deg);
                transform-origin: bottom center;
            }
        }
        @-webkit-keyframes run {
            0%{
                transform: rotate(-15deg);
                transform-origin: bottom center;
            }
            100% {
                transform: rotate(15deg);
                transform-origin: bottom center;
            }
        }
        .yt{
             -webkit-animation:run 1s linear infinite alternate;
            animation:run 1s linear infinite alternate;
            z-index: -1;
            position: relative;
        }
        .yiy{
            width: 20%;
            height: auto;
            position: fixed;
            top:20%;
            left: 60%;
             -webkit-animation:big 1.2s linear infinite alternate;
            animation:big 1.2s linear infinite alternate;
        }
        @keyframes big {
    0%{
        transform: scale(1);
        transform-origin: bottom center;
    }
    100% {
        transform: scale(1.4);
        transform-origin: bottom center;
    }
}
@-webkit-keyframes big {
    0%{
        transform: scale(1);
    }
    100% {
        transform: scale(1.4);
    }
    }
div{padding:0;margin:0;}
/*.container-fluid{padding:0;}
.row{padding:0;}*/
#start{display:block;width:150px;height:60px;position:absolute;}
#cshake{display:none; background: #933f3f;background-size:100% 100%;}
#cstart{background:url(/images/fm.gif);background-size:100% 100%;}
</style>

</body>
</html>