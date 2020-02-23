$(document).ready(function() {
	$(".row").click(function() {
		var icon = $(this).find('i.fa');
		icon.toggleClass("fa-caret-down fa-caret-right");
		$(this).find("div.dropdown").toggle();
	});
	// $(".row").click(function() {                

 //      $.ajax({    //create an ajax request to display.php
 //        type: "GET",
 //        url: "display.php",             
 //        dataType: "html",   //expect html to be returned                
 //        success: function(response){                    
 //            $("#responsecontainer").html(response); 
 //            //alert(response);
 //        }
	// 	});
 //  	});
});