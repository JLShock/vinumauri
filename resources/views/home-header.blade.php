<div class="mobile-menu">
	<div class="mobile-menu-wrap">
			<a href="/thewine"><div class="mobile-menu-option">The Wine</div></a>
			<a href="/order"><div class="mobile-menu-option">Order</div></a>
			<a href="/membership"><div class="mobile-menu-option">Membership</div></a>
			<a href="/history"><div class="mobile-menu-option">History</div></a>
			<a href="/contact"><div class="mobile-menu-option">Contact</div></a>
	</div>
</div>

<header class="home-header">
	<div class="on">
		<div class="navicon-wrap"></div>
	</div>
	
	<a href="/"><div class="logo"></div></a>

	<div class="navbar-wrap">
		<nav>
			<a href="/thewine">The Wine</a>
			<a href="/order">Order</a>
			<a href="/membership">Membership</a>
			<a href="/history">History</a>
			<a href="/contact">Contact</a>
		</nav>
	</div>
</header>

<script type=text/javascript>
	$(document).ready(function() {
		$('.navicon-wrap').on('click', function() {
			$('.mobile-menu').toggleClass('on');
		});

		$('.mobile-menu').on('click', function() {
			$(this).removeClass('on');
		});
	});
</script>