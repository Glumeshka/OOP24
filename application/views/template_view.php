<!DOCTYPE html>
<html lang="ru">
<head>
<title></title>
<meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script>
    jQuery(function(){      
      jQuery('#camera_wrap_1').camera({
        height: '317px',
        loader: false,
        pagination: false,
        thumbnails: false
      });
    });
  </script>
  <!--[if lt IE 8]><div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div><![endif]-->
  	<!--[if lt IE 9]>
	   	<script src="js/html5shiv.js"></script>
	   	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>
<body>
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="/" class="logo">Дизайн</a>
					<nav>
						<ul class="menu">
							<li><a href="/">главная</a></li>
							<li><a href="/katalog">каталог</a></li>
							<li><a href="/about">о нас</a></li>
							<li><a href="/contacts">контакты</a></li>
                            <li><a href="/phpinfo">PHP инфо</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<?php include $content_view; ?>
	<footer>
		<div class="container_12">
			<div class="wrapper">
				<div class="grid_8">
					Дизайн взят с интернета и переделан под текущее задание &copy; 2023 &nbsp;  | &nbsp;  Не плохой дизайн <a href="/" class="link">Ссылка удалена</a>
				</div>
				<div class="grid_4">
					<div class="social">
						<a href="/"><img src="images/facebook-icon.png" alt=""></a><a href="/"><img src="images/twitter-icon.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>