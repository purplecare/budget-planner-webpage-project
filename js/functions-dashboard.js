$(document).ready(function() {
	$("#add-button").click(function() {
		var category = $(".dropdown-category").val();
		var itemName = $(".item-name").val();
		var itemAmount= $(".item-amount").val();
		$('div.' + category).find('table tbody').append("<tr><td>" + itemName + "</td><td>" + itemAmount + "</td></tr>");
	});
});