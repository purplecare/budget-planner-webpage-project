$(document).ready(function(){
	$("form.ajax").on('submit',function(){
		var category = $("#category").val();
		var itemName = $("#name").val();
		var itemAmount= $("#amount").val();
		var data='{"category":"'+category+'","name":"'+itemName+'","amount":'+itemAmount+'}';

		$.ajax(
			{
				type:"POST",
				url:"newitem.php",
				data:{mydata:data},
				success:function(data){
					alert(data);
				},
				error: function(e){
					console.log(e.message);
				}
			}
		)
	}
)});
