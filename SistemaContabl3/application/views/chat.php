  <!-- Chat collapsible. -->
<div id="chatfb" class="row chat-box">
   <ul class="collapsible z-depth-4" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">
       <div id="name_chat" class="right">
        <div class="chip">
          <img src="http://api.adorable.io/avatar/1382083888499693" alt="Contact Person">
          <p style="display: inline-block; margin-top: 0px">Chat Soporte</p>
        </div>
        <span class="new badge blue">4</span></div>
       </div>
        <div id="chat_output" class="collapsible-body white chats">
           
        </div>
        <div id="chat_input" class="collapsible-body white type-chat">
          <span id="chat_span">
            <textarea  id="input_chat" type="text"  class="materialize-textarea" name="message"></textarea>
            <div id="buttons">
                <?php $status = $this->session->userdata('status'); ?>
        <?php if ($status): ?>
             <button id="button_send" class="btn waves-effect waves-light blue col right" >Enviar
             <i class="material-icons right">send</i>
             </button> 

            <?php else: ?>
             <div  id="button_new" class="btn waves-effect waves-light blue col right">Inicar chat.
             <i class="material-icons right">send</i>
        <?php endif; ?>
            </div>
             </div>   
        </span></div>
      </li>
    </ul>
</div>