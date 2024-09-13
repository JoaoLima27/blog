<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Big Picture by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ url('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{ url('assets/css/noscript.css')}}/"></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Big Picture</h1>
				<nav>
					<ul>
						<li><a href="#intro">Intro</a></li>
						<li><a href="#one">What I Do</a></li>
						<li><a href="#two">Who I Am</a></li>
						<li><a href="#work">My Work</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>

            <!--POST-->
            <div class="container">
                @yield('content')
            </div>


		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.poptrox.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{ url('assets/js/browser.min.js')}}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{ url('assets/js/util.js')}}"></script>
			<script src="{{ url('assets/js/main.js')}}"></script>

	</body>
</html>
