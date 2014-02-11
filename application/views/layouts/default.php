<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/stylesheet" href="<?php echo CSS.'default-style.css'; ?>" />
		<link rel="stylesheet" type="text/stylesheet" href="<?php echo CSS.'bootstrap.css'; ?>" />
		<title><?php echo $template['title']; ?></title>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapes navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#"> Data Pasien </a></li>
						<li class="dropdown">
							<a href="#" class="dropdpwn-toggle" data-toggle="dropdown"> Data Obat <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action 1</a></li>
								<li><a href="#">Action 2</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="starter-template">
				<h1><?php echo $template['title']; ?> </h1>
				<p>
					<?php echo $template['body']; ?>
				</p>
			</div>
		</div>
	<script type="text/javascript" src="<?php echo JS.'jquery-2.0.3.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo JS.'bootstrap.js'; ?>"></script>
	</body>
</html>