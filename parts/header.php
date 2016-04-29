<?php $assets = 'mizzenmain-95451137/assets/'; ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Mizzen + Main</title>
<meta name="description" content="">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo $assets; ?>main.min.css">

<?php include('lib/config.fonts.php' ); ?>
<?php include('lib/config.menus.php' ); ?>

</head>
<body class="cart-toggle">

<div id="wrapper"  class="cart-toggle">

<div id="header" class="header header--lg pinned pinned--top fs-grid color--white">
  <br>
  <div class="fs-row">
    <div class="fs-cell fs-lg-third fs-centered text-center">
      <a id="header__logo" class="btn btn--nav" href="#"><img src="/assets/mizzenmain-logo_white.png" class="img-responsive" /></a>
    </div>
    <div class="fs-cell fs-lg-fourth">
      <a class="btn btn--nav btn--first" href="#">Join Email List</a>
    </div>
    <div class="fs-cell fs-lg-half text-center">
      <a class="btn btn--nav swap" data-swap-target="#header__dropdown" href="#">Shop</a>
      <a class="btn btn--nav" href="#">Lookbooks</a>
      <a class="btn btn--nav" href="#">About Us</a>
      <a class="btn btn--nav" href="#">Blog</a>
    </div>
    <div class="fs-cell fs-lg-fourth text-right">
      <a class="btn btn--nav" href="#">Sign In</a>
      <a class="btn btn--nav btn--last swap btn--cart" data-swap-target=".cart-toggle" href="#">(0) Bag</a>
    </div>
    <div id="header__bottom" class="fs-cell fs-all-full"></div>
  </div>
  <div id="header__dropdown" class="header pinned bg--white">
    <div class="fs-row">
      <div class="fs-cell fs-all-full color--black">
        <hr class="invisible compact">
          Hey girl
        <hr class="invisible compact">
      </div>
    </div>
  </div>
</div>

<div id="content">





