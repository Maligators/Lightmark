<?php
$post = htmlspecialchars($_GET["post"]);
$file = ('posts/' . $post . '.md');
if (file_exists($file)):
?>
	<html>
	<head>
		<title><?=$post?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="module" src="/js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link href="/css/prism.css" rel="stylesheet">
	</head>
	<body>
		<div id="particles-js"></div>
		<script type="text/javascript" src="/js/particles.js"></script>
		<script type="text/javascript" src="/js/app.js"></script>
		<h1 id="page-title"><?=$post?></h1>
		<ul class="menu">
			<li class="menu-item">
				<a class="menu-link" href="/">Home</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="/About">About</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="/Contact">Contact</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="/signup.php">Sign Up</a>
			</li>
		</ul>
		<script>
			var div_top = $('.menu').offset().top;

			$(window).scroll(function() {
			    var window_top = $(window).scrollTop() - 0;
			    if (window_top > div_top) {
			        if (!$('.menu').is('.sticky')) {
			            $('.menu').addClass('sticky');
			        }
			    } else {
			        $('.menu').removeClass('sticky');
			    }
			});
		</script>
		<div class="sidebar">
			<div class="profile">
				<img src="https://avatars.githubusercontent.com/u/68654963?v=4" alt="Profile Picture">
				<h3>The Maligator</h3>
				<p></p>
			</div>
		</div>
		<div class="article">
			<?php
			include('etc/Parsedown.php');
			$html = file_get_contents('posts/' . $post . '.md');
			$Parsedown = new Parsedown();
			echo $Parsedown->text($html);
			?>
		</div>
		<script src="/js/prism.js"></script>
	</body>
	</html>
<?php else: ?>
	<html>
	<head>
	    <title>404 - Page Not Found</title>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <script src="/js/glitch.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="/css/error_style.css">
	</head>
	<body>
		<div id="particles-js"></div>
		<script type="text/javascript" src="/js/particles.js"></script>
		<script type="text/javascript" src="/js/app.js"></script>
	    <h1>404 - Page Not Found</h1>
	    <h4>No /etc/passwd for you!</h4>
	    <script>
	        $( function() {
	            $( "body" ).mgGlitch({
	                destroy : false, // set 'true' to stop the plugin
	                glitch: true, // set 'false' to stop glitching
	                scale: true, // set 'false' to stop scaling
	                blend : true, // set 'false' to stop glitch blending
	                blendModeType : 'hue', // select blend mode type
	                glitch1TimeMin : 600, // set min time for glitch 1 elem
	                glitch1TimeMax : 900, // set max time for glitch 1 elem
	                glitch2TimeMin : 10, // set min time for glitch 2 elem
	                glitch2TimeMax : 115, // set max time for glitch 2 elem
	                zIndexStart : 8, // because of absolute position, set z-index base value
	            });
	        });
	    </script>
	</body>
	</html>
<?php endif ?>