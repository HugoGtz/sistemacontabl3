$( document ).ready(function() {
    send_message();
    chat_status();
    create_chat();
    setInterval("show_message()",500)
});
    
    // Check if there is already a conversation with an admin,according to the id_user, and return true or false depending on the state.
    var chat_status = function(){
      var status = $.ajax({
          async : false,
          url   : 'chat/chat_status',
          type  :  'get',
          data  :{ 'GetConfig'  :  'YES'},
          dataType:"JSON"
      }).responseJSON;
      console.log(status);
      return status;
    }
    
    // Create a new chat
    var create_chat = function(){
        $("#button_new").on('click',function(){
            $(this).hide();
            
     var new_chat = $.ajax({
          async : false,
          url   : 'chat/new_chat',
          type  :  'get',
          data  :{ 'GetConfig'  :  'YES'},
          dataType:"JSON"
            }).responseJSON;
            var btn_send = "<button id='button_send' class='btn waves-effect waves-light blue col right' type='submit' name='action'>Enviar<i class='material-icons right'>send</i></button>";
         $('#buttons').html(btn_send);
       });
    }
    
    // Command the messages to the controller and the inserts in the db.
    var send_message = function(){
        $("#button_send").on("click",function(e){
          e.stopPropagation();
          e.preventDefault();
          var msg = $("#input_chat").val();
          if (msg!="") {
              
          $.ajax({
              type: "GET",
               url: "chat/send_message",
              data: {'msg':msg}
          }).done(function(info){
              $("#input_chat").val("");
          });
          }else{
             alert("No puedes mandar mansajes en blanco.")
          }
        });
    }
    
  
    // Get messages on this chat.
    var show_message = function(){
         $.ajax({
            type: "POST",
             url: "chat/loadMessages"
        }).donde(function(new_messages){//Da error aqui de ajax
            var json = JSON.parse(new_messages);
            var messages = "";
            
            for(message in json){
                messages += '';
            }
        });
    }


    // Get id_user
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
    
    // Get name_user
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