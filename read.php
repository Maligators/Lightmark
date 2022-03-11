<?php
$post = htmlspecialchars($_GET["post"]);
$file = ('posts/' . $post . '.md');
if (file_exists($file)):
?>
	<html>
	<head>
		<title><?=$post?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="module" src="/assets/js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
	</head>
	<body>
		<div id="particles-js"></div>
		<script type="text/javascript" src="/assets/js/particles.js"></script>
		<script type="text/javascript" src="/assets/js/app.js"></script>
		<h1 id="page-title"><?=$post?></h1>
		<ul class="menu">
			<li class="menu-item">
				<a class="menu-link" href="/">Home</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="/about">About</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="/contact">Contact</a>
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
				<h3>Maligator</h3>
				<p></p>
			</div>
		</div>
		<div class="article">
			<?php
			include('assets/etc/Parsedown.php');
			$html = file_get_contents('posts/' . $post . '.md');
			$Parsedown = new Parsedown();
			echo $Parsedown->text($html);
			?>
		</div>
		<script src="/assets/js/prism.js"></script>
		<img alt="shielded" id="shielded-logo" title="The Shielded Site" src="data:image/png;base64,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" height="50" width="50" style="cursor: pointer; margin: 0px auto; display: inherit; left: 0; bottom: 0; position: fixed; z-index: 69;"><script src="https://staticcdn.co.nz/embed/embed.js"></script><script> (function () { window.onload = function(){ var frameName = new ds07o6pcmkorn({ openElementId: "#shielded-logo", modalID: "modal", }); frameName.init(); } })();</script>
	</body>
	</html>
<?php else: ?>
	<html>
	<head>
	    <title>404 - Page Not Found</title>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <script src="/assets/js/glitch.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="/assets/css/error_style.css">
	</head>
	<body>
		<div id="particles-js"></div>
		<script type="text/javascript" src="/assets/js/particles.js"></script>
		<script type="text/javascript" src="/assets/js/app.js"></script>
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
		<img alt="shielded" id="shielded-logo" title="The Shielded Site" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAJcEhZcwAACxMAAAsTAQCanBgAAAL6UExURUdwTEyEYkmDYAD+AAT/BAEYAUiCXwAAAAD/AIXqhUqEYTp6VDp0TQABADFzTDx6VkeBXjZ3UTdwSUuEYgIJAjN1Ti5wSChsQw9EESNpP0WBXAEMASxvRj95VDl4Uj12UA1CDwk9CjVuRjRsRAs/DUV/WyFnPUF9WTh3UUF7Vz54Uh5UJyVqQQhACDlySxFGFQY6BgMDAylgNQCuAEN/WyNaLQJYAgCCAADvABL3EwAGAB1lOgDgAECSVEN9WS9ySyorK0CmUSpiNxVLGy5mPTx1Ty1lOz58WITphF25aWnFcYTmhILkgyFYKwCfAAL9AD+xTQJpAgDxAECcUwY8BgIRAkCjURxjOA8mDwMwAz2DVAQ2BAQbBA00DSVcMCtuRRJrEiZdMTBySyBXKRRJGQwgDCdeM0F6VnnUekBBQXXVeggICAwMDBxSJRESEgiBCBzxHjx8VD2+SSDuJBlfNjrHRT6GVDnMQgDSAA5CDgo4ChAaEA5GDj6NUwxPDBZcFjXUPTR2TwC9ADBoQAD0AACpAD+4SwAfADFpQE2FYx5wHhBVEBI2EhIfEhU+FQBFACAiIhpQIRlOHzJrQiRbLwoaCglCCQAWAABOADEzMgMVAxEuESxkOhc5GFuuaVSyZCMkIyRMJT0+PUGMVnzegH3fgUCQU2i/bmC/bBdNHXfYe02oXUeiWVexZHrbfmPCbxgZGQDJAG3IdQGWAQCIAEVHRwCyAAChAAFtAQavBghaCAu4Cz68SkCfUiYnJ0CvTgD3AAb+Bi/aLxokGgC4AASmBAB2ACwwLwCbAAJIAhgyGAC1AADoABg/GHjOfx1LHTzCRwArAABSABrxGxlIGQBkAAwODgMmAwCOAFmlaV2va27MdCfoK0mAS1OkYU2KTjeGTEubXDBYMmmta06WYWi3clamVjiCTzHaOCp0Qxk9GVybbVabV0qWS0qlWy1kOmW9b3PReTyMUBVbMkqcXASdBAmTCQf4AA2+DQTbBAfNBwx8DAW4BQhjCAPL5LoAAAABdFJOUwBA5thmAAAFD0lEQVRIx5WXd1wURxTHd5e92Z3d4yrcwQF3yNFB5KQX6UrnRKoKdkAC2Etix76WGMUaS6yoMfYSS2J6YnrvvSem9/75ZO84rs4Avj/uc/e5/e57b2bee78hCLSFHk/aExInlcaFjBi3JZi4BfNLUumAIlGuVyr18kQFAHEThwyMDJ04HIBTJcUaee6suSNrh0WOj5VFAGDI8+sXjU8K43jtbRDColdpm6W9xGu1cjVoHtQ3Wx7E6cO/gXDqtwckjGis1cQXzF4cznNR4/pAB6lI/ddHICy9ydiM7TWanjEmXE4asGsXE8V9+TmEByQSxgO28GkzA9VhW9FsEllYJ+bqIN1gEX+wLkKdh2KHkr77RNSFdYNZekagnizwZPOEQyVubj1hEfeXCSvc2a3kIejJesIsHSkj97iyHaSvuLcM0z/M0uF69USXPQor/AnFomCWHh9BOZ82KfULImYMzKbNUWdVO84V+SuaRcP0Q4GkY8PClGUQ+bAX+mU0z4NQG9vM+dscu/vAhUJnqNfaapA61xs025/nXngeD6b0HA/uZ1hq/8vpwfSNr+1MWPmwSyC2b49kqI1WuOWcfZdc4Yamxp0Vl55jzZ4w3c2HxVt6DjhpX+qeB7y9rT8kdw/2S77xOovyzKbFgi2WglD8aN8mF887fLat377prVQkTGtBlwgb+KJSFCzZIdlw54SKzOWosFl6TKEunggGJ+AXSM8+NaG730xZtRLteZkG5BMd4D64l0HA6T5rtu3e/sr96JzF2gTNxFDdMcfJdF3tNU3rJox9FgdrFF2EsfAwBvZuqH9x0+izqRh4ZoSUkO6DnnDPXvk01o+tTrkdA1fxw4noYgQcEGD5MC1cUD/6fKYXGh6pjCZa7oGYsGvSG5bGT3jicTMafqAziIjCwukBC5cuWrA8ExP2LN8gIqgYBzPM2I2LlqwSc/ZChx1ESI/hYO+AxqcHr08YhfFcyxuIEPkRD9i6XuIJW/f86CUJYspmMwIeI27VD4mnsWFvWJR8IcHSE7wQcLYuhCgXj2cTGq6545nkG6mjsMczjxgCvoffIQuDeXn/Y09mpmJK8qtA0EEQWaehcz27mBnbi+luuaWBFujKsLBn/7TDgYo4sRnkUyfxrrFDQEx5srXln0KOKcujXpiZwdK5SoVV3hipEngUDf+BhTM4qbX1TqHudZ5U+AVzYqs6qZiekWHkTjgCZ9nKisprKZUV56/+Pd3MXJx2ps2UYzKdeeNijlPGdVy0bVYFW1zb4cuXrl29kvLn78n//HXFzLS3TbtrV6v3frGZO2B6mJLK752SI0i7LPBizyan/Pfv9Mu/VU5PuGBmWk0Hc1rbD+6a1v7Udcbbxs6NJUMcclOheBeihqw1Z1ObW9L0HAo4Cdl87h0IywYqKzTy3tWyBS58PFBNQk+SCSGuYtcoDIPw+kCk1DyNIHWXv1Kheyos6l/E+QYKLdWeilcYf9RD1rijtGySEIRSvipB+RGEH/YlXOdn8IIBLdkLON3iIlft6uq21h9QRpzc30xx2WInhp9IPEuUpnPDfcmeOkTbkLUUd7ikDH76/t6bEtEc1wR6tb+Mo7ry+7xkHFdRlCz2s1I4VYzgUdsN5b3cSbEyipJu7vd+E6NSUDql9oO3X4Bw9rL5q6sitVqljgLSpAHdrILL4wAAEXxntkaT3cknij+Gj/O7hTtdzAiVIToqKysq2qAqmIy5z/0PTuI39STlZakAAAAASUVORK5CYII=" height="50" width="50" style="cursor: pointer; margin: 0px auto; display: inherit; left: 0; bottom: 0; position: fixed; z-index: 69;"><script src="https://staticcdn.co.nz/embed/embed.js"></script><script> (function () { window.onload = function(){ var frameName = new ds07o6pcmkorn({ openElementId: "#shielded-logo", modalID: "modal", }); frameName.init(); } })();</script>
	</body>
	</html>
<?php endif ?>