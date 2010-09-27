// JavaScript Document
$(document).ready(function() {

	$("div#toppanel").show();
	
	$('a#hide').show();
	$('a#show').hide();
	$("#open").show();
	$("#close").hide();
	
	$('a#show').click(function() {
	  $('#toppanel').fadeIn();
	});
	
	$('a#hide').click(function() {
	  $('#toppanel').fadeOut();
	});
	
	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");	
		$("#load").fadeOut();
	});		
	
	$("#open").click(function(){
		$("div#panel").slideDown("slow");	
	});		
	
	// Switch buttons from "LogIn" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
	
	$("#bottomPageInfo a.adminTab").click(function () {
		$("#bottomPageInfo a.adminTab").toggle();
	});			

	
})