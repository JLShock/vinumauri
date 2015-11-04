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

	$('input.item-quantity').keydown(function(event){
	    if (event.keyCode == 109 || event.keyCode == 189) {
	        event.preventDefault();
	        return false;
	    };
	});

	$('input.item-quantity').on('change', function() {
		console.log("UPDATED!");
		
		var quantity = $(this).val();
		var productID = $(this).parents('tr').attr('data-productID');

		$.post("/api/cart/add", {productID: productID, quantity: quantity}, function( data ) {
  			console.log(data);
		});

		function recalcTotal () {
			var cartTotal = 0;
			$('tr.cart-item').each( function(i, val) {
				var itemQuantity = $(this).children('td.cart-item-quantity').children('input.item-quantity').val();
				var itemPriceString = $(this).children('td.cart-item-price').text();
				var itemPriceFloat = (parseFloat(itemPriceString));

				cartTotal += (itemQuantity * itemPriceFloat);
			});

			$('.cart-total-price').text("$" + cartTotal + ".00");
		}

		recalcTotal();
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
		var itemPriceString = $(this).parents('tr').children('td.cart-item-price').text();
		var itemPriceFloat = (parseFloat(itemPriceString));
		var itemTotal = (quantity * itemPriceFloat);

		cartTotal = (cartTotal - itemTotal);
		cartCount = (cartCount - 1);

		$('.cart-total-price').text("$" + cartTotal + ".00");
		$('.cart-total-count').text(cartCount);
	});

	$("img").bind('dragstart', function(){
    	return false; 
	});

});