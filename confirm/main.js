$(function(){
$('#nxt').on('click',function(){
	var flug=confirm('ほんとうに見ますか？');
	if(flug){
			location.href='page2.html';
		}

});

});