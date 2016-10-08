<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="x5-orientation" content="portrait">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>测试工具</title>

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

<script src="https://res.wx.qq.com/open/js/jweixin-1.1.0.js"></script>
<script language="javascript" type="text/javascript">
function autoPlay(){
var myAuto = document.getElementById('myaudio');
myAuto.play();
}
autoPlay();
</script>
<audio id="myaudio" src="/scripts/shake.mp3" controls="controls" loop="false" hidden="true">
</audio>
<input type="button" onclick="autoPlay()" value="播放"/>
</body>
</html>