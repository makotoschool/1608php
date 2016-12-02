$(function(){

$('.del').on('click',function(event){
	var target_id=$(event.target);
	$.get(
		'delete.php',
		{'id':target_id.val()}

	);
	target_id.parent('.msg').fadeOut(1000);


});


});