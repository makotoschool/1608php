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
	var input=$('#input').find('p').find('input');
	input.each(function(i,elem){
		input_data.push($(elem).val());

	});
	if(input.val()!==''){
		$.ajax({
			url:'data.php',
			type:'POST'	,
			data:{
			'data':input_data

			}
		}).done(function(data){

			$('#data').html(data);

		}).fail(function(){
				alert('送信に失敗しました');
			});
	}else{
		alert('何か入力してね');
	}


});
		

	

	


});

