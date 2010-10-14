// JavaScript Document

$(document).ready(function () {
	
	$('h1.rss').bind('click', function() {
		$(this).attr('target','blank');
	  location.href = "rss/rss_news.php";
	}); 
	
	$('form[name=login]').submit(function() {
		
		var usr = $('input[name=usr]').val();
		var psw = $('input[name=psw]').val();
		
		$('#load').fadeIn();
		          
		$.post(
			"admin/adminlogin.php", 
			{username:usr, password:psw},
		  function( data ) {
			  
				switch(data.status) {
				  case 1:
					  location.href = "admin/adminpage.php";
					
					default: 
					  $('#load').hide();
						$('#attention').fadeIn().delay(2000).fadeOut();
						$('#usr').focus();
						$('input[name=psw]').val("");
				}
				
			}, "json" );
			
	  return false;
		
	});
	
})