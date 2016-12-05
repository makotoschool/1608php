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
        $('#selectedday').text('');
        $('#msg').text('未選択');
    });
    

    $('#go').on('click',function(){
        //配列の中で重複する値を削除
        day=day.filter(function (x, i, self) {
            return self.indexOf(x) === i;
        });

        
        $('#msg').text('選択した日');
        for(i=0;i<day.length;i++){
             $('#selectedday').append(day[i]+'日/');
            }  
        
        
       
 


       
    });
    

});