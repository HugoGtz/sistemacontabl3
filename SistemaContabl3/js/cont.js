$(document).ready(function(){
    $(".cont").on('click',function(){
       var cont = $(this).attr('alt');
       $(".cont").fadeOut('slow');
       $(".formulario_cont").fadeIn('fast');
        $("#cont").val(cont);
    });
    $(".comeback2").on('click', function(){
        $(".formulario_cont").fadeOut('fast');
        $(".cont").fadeIn('fast');
        $("#cont").val(false);
    });
    
    $(".comeback").on('click', function() {
        window.location.href = "https://sistemacontabl3-hugodevweb.c9users.io/SistemaContabl3/admin";
       
    });
});