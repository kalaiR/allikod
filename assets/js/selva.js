$(document).ready(function()
{
	alert("hello");
	// $('.bootstrap-select').load(function()
	// {
	// 	alert("hello1");
	// 	$(this).addclass('.button-boxs');
	// });

	$(document).delegate(".bootstrap-select","load",function(e) {
	  // Handler for .load() called.
	  alert("hello1");
	});
	
});