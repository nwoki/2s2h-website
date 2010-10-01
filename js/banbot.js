// JavaScript Document
$(document).ready(function() {

$(".en").hide(); 
$(".change").css('cursor','pointer');

$(".change").click(function() {
	$(".change").toggle();
	$(".language").toggle();
	return false;
});

})