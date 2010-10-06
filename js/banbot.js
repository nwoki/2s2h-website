// JavaScript Document

$(document).ready(function() {
  
	$(".en").hide();
	
	$("a.change").click(function() {
	
	  if ( $(this).attr('rel') == 'it') {
		  
			$(".en").hide();
			$(".it").show(); 
			
		} else {
		
		  $(".it").hide();
			$(".en").show(); 
		 
		}
	    
		return false;
		
	});	
	
})