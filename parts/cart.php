<div id="cart-sidebar" class="cart-toggle fs-grid">

	<!-- Header-->
	<div id="cart-sidebar__header">
		<div class='wrapper'>
			<div class="fs-row">
				<div class="fs-cell fs-all-half"><span id="cart-sidebar__title" class="color--blue">Your Cart</span></div>
				<div class="fs-cell fs-all-half text-right"><a href="" class="ss-gizmo ss-delete color--blue"></a></div>
			</div>
		</div>
		<hr class="divider nomargin bg--black-25">
	</div>

	<div id="cart-sidebar__content">
		<div class="wrapper">
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
			<?php include('cart-item.php'); ?>
		</div>
	</div>

	<!-- Footer -->
	<div id="cart-sidebar__footer" class="pinned pinned--bottom">
		<hr class="divider nomargin bg--black-25">
  	<div class="wrapper">
  		<div class="fs-row">
  			<div class="fs-cell fs-all-half color--blue"><span id="cart-sidebar__subtotal">Subtotal</span></div>
  			<div class="fs-cell fs-all-half text-right color--blue"><span id="cart-sidebar__cost">$200</span></div>
  			<div class="fs-cell fs-all-full color--blue-50"><em id="cart-sidebar__note" class="accent">Shipping, taxes and discounts calculated at checkout.</em></div>
  			<div class="fs-cell fs-all-full"><a href="#" class="btn btn--full bg--blue color--white">Checkout</a></div>
  		</div>
  	</div>
  </div>

</div>