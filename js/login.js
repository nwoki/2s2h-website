// JavaScript Document

$(document).ready(function () {
	
	$('form[name=login]').submit(function() {
		
		var usr = $('input[name=usr]').val();
		var psw = $('input[name=psw]').val();
		
		$('#load').fadeIn();
		          
		$.post(
			"admin/adminLogin.php", 
			{username:usr, password:psw},
		  function( data ) {
			  
				switch(data.status) {
				  case 1:
					  location.href = "admin/adminpage.php";
					
					default: 
					  $('#load').hide();
						$('#attention').fadeIn().delay(2000).fadeOut();
						$('#usr').focus();
				}
				
			}, "json" );
			
	  return false;
		
	});
	
	
              
	
	
	
})