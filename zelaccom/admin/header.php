<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="?menu=home"> <span>ZELACCOM ADMINISTRATOR</span></a>

				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" href="logout.php">Logout</a>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet"><a href="index.php"><img src="images/beranda.png"><span>BERANDA</span></a></li>
						<li><a href="?menu=admin"><img src="images/folder.png"><span class="hidden-tablet"> ADMIN</span></a></li>
						<li><img src="images/folder.png"><span class="hidden-tablet"> MANAGE WEB PAGE</span>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li>
									<a href="?menu=post"><img src="images/set.png" /><span class="hidden-tablet">Posting</span></a>
								</li>
								<li>
									<a href="#"><img src="images/set.png" /><span class="hidden-tablet">Profil Zelaccom</span></a>
								</li>
								<li>
									<a href="#"><img src="images/set.png" /><span class="hidden-tablet">Cara Pembelian</span></a>
								</li>
								<li>
									<a href="?menu=contact"><img src="images/set.png" /><span class="hidden-tablet">Pesan/Kontak</span></a>
								</li>
								<li>
									<a href="?menu=slider"><img src="images/set.png" /><span class="hidden-tablet">Slider</span></a>
								</li>
							</ul>
						</li>
						<li><img src="images/folder.png"><span class="hidden-tablet"> MANAGE PRODUCT</span>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li>
								<a href="?menu=d_product"><img src="images/set.png" /><span class="hidden-tablet">Product</span></a>
								</li>
								<li>
								<a href="?menu=category"><img src="images/set.png" /><span class="hidden-tablet">Category</span></a>
								</li>
							</ul>
						</li>
						<li><img src="images/folder.png"><span class="hidden-tablet"> MANAGE BOOKING </span>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li>
									<a href="#"><img src="images/set.png" /><span class="hidden-tablet">Pemesanan</span></a>
								</li>
								<li>
									<a href="#"><img src="images/set.png" /><span class="hidden-tablet">Penjualan</span></a>
								</li>
							</ul>
						</li>
					</ul>
					
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
