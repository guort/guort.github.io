<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>今日我的运势是<?php echo $title; ?>，你也来测测吧～</title>
<link rel="shortcut icon" href="/ico/<?php echo $hehe; ?>.ico" type="image/x-icon">

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
<img src="/images/<?php echo $hehe; ?>.jpg" style="position:absolute;width:0;height:0;">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/scripts/bootstrap.min.js"></script>

<script src="https://res.wx.qq.com/open/js/jweixin-1.1.0.js"></script>

<div id="cstart" class="container-fluid">
	<a id="again" href="javascript:void(0);"></a>
	<a id="share" href="javascript:void(0);"></a>
</div>

<div id="cshare">
<div class="test"></div>
</div>

<style type="text/css">
/*.container-fluid{padding:0;}
.row{padding:0;}*/
#cstart{background:url(/images/<?php echo $hehe; ?>.jpg);background-size:100% 100%;}
#again{display:block;width:120px;height:60px;position:absolute;}
#share{display:block;width:120px;height:60px;position:absolute;}
#cshare{position:absolute;top:0;display:none;background:url(/images/share.png);background-size:100% 100%;}
.test {
            height:124px;width:95px;
            position:fixed;
            top:10%;
            right: 12%;
            -webkit-animation:big 1.5s  linear infinite alternate;
            animation:big 1.5s linear infinite alternate;
            background:url(images/arrow.png) no-repeat;
        }

        @keyframes big {
            0%{
                transform: scale(1.2);
            }
            100% {
                transform: scale(1.6);
            }
        }
        @-webkit-keyframes big {
            0%{
                transform: scale(1.2);
            }
            100% {
                transform: scale(1.6);
            }
        }
</style>
<script type="text/javascript">
$(function() {
	$('#cstart').css('width', $(window).width());
	$('#cstart').css('height', $(window).height());
	$('#cshare').css('width', $(window).width());
	$('#cshare').css('height', $(window).height());

	$('#share').css('top', $(window).height() - 100);
	$('#share').css('left', $(window).width() - ($(window).width() / 2) + 10);
	$('#again').css('top', $(window).height() - 100);
	$('#again').css('left', $(window).width() - ($(window).width() / 2) - 130);

	$('#again').click(function() {
		again();
	});

	$('#share').click(function() {
		$('#cshare').show();
	});
	$('#cshare').click(function() {
		$('#cshare').hide();
	});

	function again() {
		location.href = '/welcome/index/hehe';
	}
});

</script>
</body>
</html>