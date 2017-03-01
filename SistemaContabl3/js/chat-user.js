$( document ).ready(function() {
    send_message();
});

    var chat_status = function(){
        
    }
    
    var send_message = function(){
        
    }
    
    var show_message = function(){
        
    }


    
    function id_user(){
       var id = $.ajax({
           async:false,
          url: 'users/id',
          type: 'get',
          data:{ 'GetConfig' : 'YES'},
          dataType:"JSON"
        }).responseJSON;
        return id.id;
    }
    
    function name_user(){
        var name = $.ajax({
           async:false,
          url: 'users/name',
          type: 'get',
          data:{ 'GetConfig' : 'YES'},
          dataType:"JSON"
        }).responseJSON;
        return name.name;
    }