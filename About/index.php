<html>
<head>
	<title>About</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="module" src="/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="/css/prism.css" rel="stylesheet">
</head>
<body>
	<div id="particles-js"></div>
	<script type="text/javascript" src="/js/particles.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	<h1 id="page-title"></h1>
	<script type="text/javascript">document.getElementById("page-title").innerHTML = document.title;</script>
	<ul class="menu">
		<li class="menu-item">
			<a class="menu-link" href="/">Home</a>
		</li>
		<li class="menu-item">
			<a class="menu-link active" href="/About">About</a>
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
	<div class="about">
		<h2>Hello World!</h2>
		<p>My name is Dovid Friedman,<br>I'm a 13 year old Programmer and Hacker living in Israel.<br>I know Python, Web and PHP, plus I also enjoy tinkering with stuff and am steadily piling up trash on my desk.<br>This website will be my cozy little home on the internet, where I'll be sharing random thoughts, open-source projects, and other crap of mine!</p>
	</div>
	<script src="/js/prism.js"></script>
</body>
</html>