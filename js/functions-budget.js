$(document).ready(function() {
	$(".add-row").click(function() {
		var category = $(".dropdown-category").val();
		var itemName = $(".item-name").val();
		var itemAmount= $(".item-amount").val();
		$("div.monthly-payments table tbody").append("<tr><td>" + category + "</td><td>" + itemName + "</td><td>" + itemAmount + "</td><td><button type='button' name='button'>Edit</button></td><td><button class='delete-row' type='button' name='button'>Delete</button></td></tr>");
	});
	$(".delete-row").click(function() {
		$(this).closest("tr").remove();
	});
});