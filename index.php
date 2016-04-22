<?php $assets = 'mizzenmain-95451137/assets/'; ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo $assets; ?>main.css">

<?php include('lib/config.fonts.php' ); ?>
<?php include('lib/config.menus.php' ); ?>

</head>
<body>

<div id="wrapper">
<div id="content">

<?php include('pages/home.php'); ?>

</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo $assets; ?>vendor.min.js"></script>
<script src="<?php echo $assets; ?>main.min.js"></script>

</body>
</html>
