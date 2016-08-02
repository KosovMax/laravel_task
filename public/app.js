$(document).ready(function(){
	$(".text-forum").keyup(function(){
		var len=$(this).val().length;
		$("#symbol").text(len);
	});
});