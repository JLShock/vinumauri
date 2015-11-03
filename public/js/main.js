$(document).ready(function() {

	$('.shippingtoo').on('click', function() {
		$('.shipping-info').toggleClass('hidden');
	});

	$('button.add-button').on('click', function() {
		console.log("ADDED!");
		
		var quantity = $(this).siblings('input').val();
		var productID = $(this).attr('data-productID');

		$.post("/api/cart/add", {productID: productID, quantity: quantity}, function( data ) {
  			console.log(data);
		});
	});

	$('input.item-quantity').on('change', function() {
		console.log("UPDATED!");
		
		var quantity = $(this).val();
		var productID = $(this).parents('tr').attr('data-productID');

		$.post("/api/cart/add", {productID: productID, quantity: quantity}, function( data ) {
  			console.log(data);
		});

	});

	$('a.cart-delete').on('click', function(e) {
		e.preventDefault();
		console.log("DELETED!");

		var quantity = $(this).parents('tr').children('td.cart-item-quantity').children('input.item-quantity').val();
		var productID = $(this).parents('tr').attr('data-productID');

		$.post("/api/cart/remove", {productID: productID, quantity: quantity}, function( data ) {
  			console.log(data);
		});

		$(this).parents('tr').remove();

		var cartCount = $('.cart-total-count').text();

		var cartTotalString = $('.cart-total-price').text().substring(1, 7);
		var cartTotal = (parseFloat(cartTotalString));
		var vs = $(this).parents('tr').children('td.cart-item-price').text();
		var vf = (parseFloat(vs));
		var itemTotal = (quantity * vf);

		cartTotal = (cartTotal - itemTotal);
		cartCount = (cartCount - 1);

		$('.cart-total-price').text("$" + cartTotal);
		$('.cart-total-count').text(cartCount);

	});

	$("img").bind('dragstart', function(){
    	return false; 
	});

});