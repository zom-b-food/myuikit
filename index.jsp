<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="../assets-mat/compiled/MATRLIZE-STARTER.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="../assets-mat/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../assets-mat/compiled/MATRLIZE-STARTER.min.js"></script>
<script src="../assets-mat/js/components/topnav.js"></script>
<script src="../assets-mat/js/components/jquery.html5Loader.min.js"></script>
	<link rel="stylesheet" href="../assets-mat/css/components/loader.css">

	<style type="text/css">
		html {
			background-color: #05080f !important;

		}

		body, .ghostly {
			margin: 0;
			padding: 0;
			background-color: #05080f !important;
			height: 2000px;
		}

		img {
			max-width: 100%;
			height: auto;
		}

		h2.white {
			color: lightslategray;
			text-align: center;
			margin-top: 60px;
			font-family: Candara, sans-serif;
			font-style: italic;
		}

		#innerhead {
			position: relative;
			margin: 0 auto;
			width: 960px;
			padding-top: 20px;
			padding-bottom: 20px;
			display: block;
		}

		.sk-cube-grid {
			width: 40px;
			height: 40px;
			margin: 100px auto;
		}

		.sk-cube-grid .sk-cube {
			width: 33%;
			height: 33%;
			background-color: #cccccc;
			float: left;
			-webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
			animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
		}

		.sk-cube-grid .sk-cube1 {
			-webkit-animation-delay: 0.2s;
			animation-delay: 0.2s;
		}

		.sk-cube-grid .sk-cube2 {
			-webkit-animation-delay: 0.3s;
			animation-delay: 0.3s;
		}

		.sk-cube-grid .sk-cube3 {
			-webkit-animation-delay: 0.4s;
			animation-delay: 0.4s;
		}

		.sk-cube-grid .sk-cube4 {
			-webkit-animation-delay: 0.1s;
			animation-delay: 0.1s;
		}

		.sk-cube-grid .sk-cube5 {
			-webkit-animation-delay: 0.2s;
			animation-delay: 0.2s;
		}

		.sk-cube-grid .sk-cube6 {
			-webkit-animation-delay: 0.3s;
			animation-delay: 0.3s;
		}

		.sk-cube-grid .sk-cube7 {
			-webkit-animation-delay: 0s;
			animation-delay: 0s;
		}

		.sk-cube-grid .sk-cube8 {
			-webkit-animation-delay: 0.1s;
			animation-delay: 0.1s;
		}

		.sk-cube-grid .sk-cube9 {
			-webkit-animation-delay: 0.2s;
			animation-delay: 0.2s;
		}

		@-webkit-keyframes sk-cubeGridScaleDelay {
			0%, 70%, 100% {
				-webkit-transform: scale3D(1, 1, 1);
				transform: scale3D(1, 1, 1);
			}
			35% {
				-webkit-transform: scale3D(0, 0, 1);
				transform: scale3D(0, 0, 1);
			}
		}

		@keyframes sk-cubeGridScaleDelay {
			0%, 70%, 100% {
				-webkit-transform: scale3D(1, 1, 1);
				transform: scale3D(1, 1, 1);
			}
			35% {
				-webkit-transform: scale3D(0, 0, 1);
				transform: scale3D(0, 0, 1);
			}
		}
	</style>
</head>
<body style="background-color: black!important;">
<div class="ghostly">

	<h2 class="white">Loading assets...</h2>

	<div class="sk-cube-grid">
		<div class="sk-cube sk-cube1"></div>
		<div class="sk-cube sk-cube2"></div>
		<div class="sk-cube sk-cube3"></div>
		<div class="sk-cube sk-cube4"></div>
		<div class="sk-cube sk-cube5"></div>
		<div class="sk-cube sk-cube6"></div>
		<div class="sk-cube sk-cube7"></div>
		<div class="sk-cube sk-cube8"></div>
		<div class="sk-cube sk-cube9"></div>
	</div>
</div>
</body>
<script type="text/javascript">
	jQuery(function ($) {
		$('.ghostly').animate({
			opacity: '1'
		}, 3000);
		$(window).load(function (event) {
			event.preventDefault();

			$("body").fadeOut(4000, function () {
				window.location.href = "pages-mat/jump.php"
			});
		});
	});

	//var loaderAnimation = $("#html5Loader").LoaderAnimation();
	$.html5Loader({filesToLoad: './files.json',
		//onUpdate: loaderAnimation.update,
		/*onUpdate: function () {
		 console.log("Asset updated!");
		 },*/
		onElementLoaded: function () {
			console.log("Asset loaded!");
		},
		onMediaError: function () {
			console.log("wtf!");
		},
		debugMode: true
	});
</SCRIPT>

</html>