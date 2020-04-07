$(document).ready(function() {
	$(".add-row").click(function() {
		var category = $(".dropdown-category").val();
		var itemName = $(".item-name").val();
		var itemAmount= $(".item-amount").val();
		$("div.monthly-payments table tbody").append("<tr><td>" + category + "</td><td>" + itemName + "</td><td>" + itemAmount + "</td><td><button class='delete-row' type='button' name='button'>Delete</button></td></tr>");
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
	})
});
