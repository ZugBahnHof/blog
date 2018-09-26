<?php
@session_start();
require_once( "inc/config.inc.php" );
require_once( "inc/functions.inc.php" );
$_SESSION['color1'] = $site_color_html;
if ( isset( $_GET['msg'] ) ) {
	$modal      = true;
	$modal_text = $_GET['msg'];
} else {
	$modal = false;
}
if ( $modal ) {
	$toast = "M.toast({html: '$modal_text'})";
} else {
	$toast = "";
}
if ( is_checked_in() == true ) {
	$logged_in = true;
} else {
	$logged_in = false;
}

switch ( $logged_in ) {
	case true:
		$logging_link = "logout.php";
		$logging_imag = "clear";
		$logging_text = "Logout";
		$image_lock   = "lock_open";
		break;

	default:/*
		$logging_link = "login.php";
		$logging_imag = "check";
		$logging_text = "Login";
		$image_lock   = "lock";*/
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta charset="utf-8">
	<title><?= $site_title ?> – blog</title>
	<!--Favicons-->
	<link rel="shortcut icon" href="icons/favicon.ico">
	<link rel="icon" type="image/png" href="icons/favicon.png" sizes="48x48">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.php">

	<!-- Import JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function () {
		$(".button-collapse").sidenav();
		$('.sidenav').sidenav();
		$('.materialboxed').materialbox();
		$('.tooltipped').tooltip();
		$('.modal').modal();
		$('.tabs_js').tabs();
		$('.collapsible').collapsible();
		$('select').formSelect();
		<?= $toast?>
	});
	</script>

</head>
<body class="">
	<header>
		<div class="navbar-fixed">
			<nav class="nav-extended grey lighten-2">
				<div class="nav-wrapper container" style="margin-bottom: 5px;">
					<a href="index.php" class="brand-logo black-text">blog</a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="" class="black-text">Impressum</a></li>
						<li><a href="" class="black-text">Kontakt</a></li>
						<?php if($logged_in==true){?>
						<li><a href="add_article.php" class="<?=$site_color_text?>">Eintrag hinzufügen</a></li>
						<li><a href="add_blog.php" class="<?=$site_color_text?>">Blog erstellen</a></li>
						<li><a href="settings.php" class="<?=$site_color_text?>">Einstellungen</a></li>
					<?php } ?>
					<li><a href="<?= $logging_link ?>" class="<?=$site_color_text?>"><?= $logging_text ?></a></li>
					</ul>
				</div>
				<div class="nav-content container hide-on-med-and-down">
					<ul class="tabs tabs_head tabs-transparent">
							<li class="tab tab_head"><a href="index.php" class="black-text <?=$a1?>">Start</a></li>
							<?php
							$sql = "SELECT * FROM blogs";
							foreach ($pdo->query($sql) as $blogs_list) {
							    $blog_title_list = $blogs_list['title'];
							    $blog_id_list = $blogs_list['blog_id'];
							    echo'
							    <li class="tab tab_head">
							      <a href="view.php?bid='.$blog_id_list.'" class="black-text <?=$a2?>">'.$blog_title_list.'</a>
							    </li>
							    ';
							  }
							?>
					</ul>
				</div>
			</nav>
		</div>

		<ul class="sidenav" id="mobile-demo">
			<li><a href="index.php" class="<?=$r1?>">Start</a></li>
				<li><a href="blog.php" class="<?=$r2?>">"Blog ansehen</a></li>
				<?php if($logged_in==true){?>
				<li><a href="add_article.php" class="<?=$r4?>">Eintrag hinzufügen</a></li>
				<li><a href="add_blog.php" class="<?=$r5?>">Blog erstellen</a></li>
      	<li><div class="divider"></div></li>
				<li><a href="settings.php" class="<?=$r00;?>">Einstellungen</a></li>
			<?php } ?>
			<li><a href="<?= $logging_link ?>" class="<?=$r0?>"><?= $logging_text ?></a></li>
		</ul>
	</header>
	<main class="container">
