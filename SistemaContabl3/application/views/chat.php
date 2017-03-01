  <!-- Chat collapsible. -->
<div class="row chat-box">
   <ul class="collapsible z-depth-4" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">chat_bubble_outline</i>Chat soporte
       <div id="name_chat" class="right">
        <div class="chip">
          <img src="http://api.adorable.io/avatar/1382083888499693" alt="Contact Person">
          Jane Doe
        </div>
        <span class="new badge blue">4</span></div>
       </div>
        <div id="chat_output" class="collapsible-body white chats">
          <span> <div class="chip">
          <img src="http://api.adorable.io/avatar/1382083888499693" alt="Contact Person">
          Jane Doe
        </div>¿Hola que tal?</span>
        <br>
         Date: 15 Feb 2017
         <hr>
        </div>
           <form id="form-chat" role="form">
        <div id="chat_input" class="collapsible-body white type-chat">
          <span id="chat_span">
            <textarea  id="input_chat" type="text"  class="materialize-textarea" name="userchat"></textarea>
            <button id="button_send" class="btn waves-effect waves-light blue col right" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button></span></div>
           </form>
      </li>
    </ul>
</div>