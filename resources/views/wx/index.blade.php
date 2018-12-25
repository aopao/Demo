<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<title>二维码分享</title>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body style="visibility:hidden">
<div class="box">
	<p class="weixin wow zoomIn bg-red"><img src="{{ asset('img/1.png') }}"></p>
	<p class="shibie">请长按识别二维码</p>
	<p class="weixin1 wow swing" data-wow-iteration="2">
		<img src="/storage/{{ $info['pic_url'] }}">
	</p>
	<p class="weixin2 wow bounceInLeft"><img src="{{ asset('img/6.png') }}"></p>
	<p class="weixin3 wow bounceInRight"><img src="{{ asset('img/3.png') }}"></p>
	<p class="weixin4 wow bounceInLeft"><img src="{{ asset('img/5.png') }}"></p>
	<p class="weixin5 wow bounceInRight"><img src="{{ asset('img/4.png') }}"></p>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/flexible.js') }}"></script>
<script src="{{ asset('js/flexible_css.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
    $(function () {
        $("body").css("visibility", "visible");
    });
</script>
<!-- 加载wow -->
<script>
    new WOW().init();
</script>
</body>
</html>