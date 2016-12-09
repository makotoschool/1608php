$(function(){
$('#dell').hide();

$('#add').on('click',function(){
	$('#row').clone().appendTo('#input').find('input').val('');

	if($('#input').find('p').length>1){
		$('#dell').show();

	}


});
$('#dell').on('click',function(){
	$('#row:last-of-type').remove();
	if($('#input').find('p').length==1){
		$('#dell').hide();

	}

});

var input_data=Array();
$('#submit').on('click',function(){
	$('#input').find('p').find('input').each(function(i,elem){
		input_data.push($(elem).val());

	});
	$.ajax({
		url:'data.php',
		type:'POST'	,
		data:{
			'data':input_data

		}
		}).done(function(data){

			$('#data').html(data);

		}).fail(function(){});



});


});

