<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{ site_title() }}</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ url(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><a href="{{ url('/') }}">{{ site_title() }}</a></h1>
				</div>
			</div>
		</div>
	</header>
	<nav class="text-center site-navigation">
		<ul class="list-inline">
			<li><a href="{{ url('archive') }}">Posts</a></li>
			<li><a href="{{ url('rss') }}">RSS</a></li>
		</ul>
	</nav>
	<section class="container post-feed">
		@yield('content')
	</section>
	<footer class="text-center">
        <p>Powered by <a href="http://wardrobecms.com">Wardrobe</a> NewYark Theme by <a href="http://tindrlabs.com">TinderLabs</a></p>
    </footer>
</body>
</html>