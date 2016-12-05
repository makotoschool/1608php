$(function(){
    //選んだ日にクラスをつける
    var td=$('#calendar').find('td');
    var day=Array();
    td.on('click',function(event){
        $(event.target).addClass('selected');
        day.push($(event.target).text());
        
    });
    $('#clear').on('click',function(){

        $('.selected').removeClass('selected');
        day=Array();
    });
    

    $('#go').on('click',function(){
        alert(day);
        
        //.selectedがついているtdにidをふる
        // var selected=$('#calendar .selected');

        // selected.each(function(i){
        //     selected.attr('id','check'+i);
        //     alert(i);

            
        // });
        
        
        // var day=Array();

    
        // var selected=$('#calendar .selected');
  
        // selected.each(function(i){
        //     alert(i);
        //     var date=selected.text();
        //     alert(date);
        //     day.push(date);

   
        // });


       
    });
    

});