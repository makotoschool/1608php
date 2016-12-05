$(function(){
    //選んだ日にクラスをつける
    var td=$('#calendar').find('td');
    
    td.on('click',function(event){
        $(event.target).addClass('selected');
        
    });
    td.on('dblclick',function(event){

        $(event.target).removeClass('selected');
        
    });
    

    $('#go').on('click',function(){
        var day=Array();
        
        var selected=$('#calendar .selected');
        selected.each(function(){

            var date=selected.text();
            alert(date);
            day.push(date);

   
        });

        alert(day);
       
    });
    

});