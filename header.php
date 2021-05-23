<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Wordpress theme skeleton</title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-sm navbar-dark d-flex justify-content-between align-items-stretch">
			<a class="navbar-brand" href="/">GibsDev</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/articles">Articles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/links">Links</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">

		<!-- PAGE CONTENT -->