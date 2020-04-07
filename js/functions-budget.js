$(document).ready(function() {
	$(".save").click(function() {
		var sum = 0;
		$(".amount-input").each(function() {
			if ($(this).val()) {
				sum += parseInt($(this).val())
			}
		});

		if (!$("span#budget-amount").is(':empty')) {
			console.log(parseInt($("span#mbudget-amount").html()));
			console.log(sum);
			$("span#budget-amount").html(parseInt($("span#budget-amount").html()) - sum);
		}
		console.log($("span#budget-amount").is(':empty'));

		// var budget = $("#update-amount").val();
		// var monthly = $("#monthly-amount").val();
		// if (budget && monthly) {
		// 	$("span#budget-amount").html(budget);
		// 	$("span#monthly-amount").html(monthly);
		// } else {
		// 	alert("Please input an update amount and monthly income");
		// }
	});
	$(".add-row").click(function() {
		var category = $(".dropdown-category").val();
		var itemName = $(".item-name").val();
		var itemAmount= $(".item-amount").val();
		if (itemAmount && itemName) {
			$("div.monthly-payments table tbody").append("<tr><td>" + category + "</td><td>" + itemName + "</td><td>" + itemAmount + "</td><td><button class='delete-row' type='button' name='button'>Delete</button></td></tr>");
		} else {
			alert("Please input the item name and/or item amount");
		}
	});
	$("#update").click(function() {
		var budget = $("#update-amount").val();
		var monthly = $("#monthly-amount").val();
		if (budget && monthly) {
			$("span#budget-amount").html(budget);
			$("span#monthly-amount").html(monthly);
		} else {
			alert("Please input an update amount and monthly income");
		}
	});
	$(document.body).on('click', '.delete-row', function() {
		$(this).closest("tr").remove();
	});
});