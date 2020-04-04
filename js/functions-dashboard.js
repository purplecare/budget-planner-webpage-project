$(document).ready(function(){
	$("form.ajax").on('submit',function(){
		var category = $("#category").val();
		var itemName = $("#name").val();
		var itemAmount= $("#amount").val();
		var data='{"category":"'+category+'","name":"'+itemName+'","amount":'+itemAmount+'}';
		var msg=$("#dbupdateresult");
		$.ajax(
			{
				type:"POST",
				url:"newitem.php",
				data:{mydata:data},
				success:function(){
					msg.show();
				},
				error: function(e){
					console.log(e.message);
				}
			}
		)
	})
	$("button.edit").click(function(){
		alert(this.value);
	})
	$("button.delete").click(function(){
		var result=confirm("Do you want to delete this item?");
		if (result){
			var id= this.value;
			var tr=$("#"+id);
			$.ajax(
				{
					type:"POST",
					url:"deleteItem.php",
					data:{id:this.value},
					success:function(id){
						tr.remove();
					},
					error: function(e){
						console.log(e.message);
					}
				}
			)
		}
		else{

		}
	})




});
