$(document).ready(function() {
	
	$('a#show').click(function() {
	  $('#toppanel').fadeIn();
	});
	
	$('a#hide').click(function() {
	  $('#toppanel').fadeOut();
	});
	
	// Expand Panel
	$("#open").click(function(){
		$("div#panel").slideDown("slow");
	
	});	
	
	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");	
		$("#load").fadeOut();
	});		
	
	// Switch buttons from "LogIn" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
	
	$("#adminTab a").click(function () {
		$("#adminTab a").toggle();
	});			
		
});