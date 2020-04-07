$(document).ready(function() {
	/*$(".save").click(function() {
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
	});*/
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
	$("form.incomeSaving").on('submit',function(){
		var income = $("#monthly-income").val();
		var saving = $("#monthly-saving").val();
		var data='{"income":'+income+',"saving":'+saving+'}';
		$.ajax(
			{
				type:"POST",
				url:"updateincome.php",
				data:{mydata:data},
				success:function(id){
					alert(id);
				},
				error: function(id){
					alert(id);
				}
			}
		)
	});
	$("#budget-food").change(function(){
		var amount=$("#budget-food").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"food", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#budget-trans").change(function(){
		var amount=$("#budget-trans").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"trans", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#budget-util").change(function(){
		var amount=$("#budget-util").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"util", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#budget-ent").change(function(){
		var amount=$("#budget-ent").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"ent", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#budget-liv").change(function(){
		var amount=$("#budget-liv").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"liv", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#monthly-income").change(function(){
		var amount=$("#monthly-income").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"income", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})
	$("#monthly-saving").change(function(){
		var amount=$("#monthly-saving").val();
		$.ajax(
			{
				type:"POST",
				url:"updateBudget.php",
				data:{category:"savingTarget", amount: amount},
				success:function(id){
					window.location.reload();
				},
				error: function(id){
					alert(id);
				}
			}
		)

	})


});
