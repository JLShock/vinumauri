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

	$("img").bind('dragstart', function(){
    	return false; 
	});

});