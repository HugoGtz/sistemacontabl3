$(document).ready(function() {
   $(".aprt").on('click',function(){
      $(".apart").fadeOut('fast');
      $(".aprt").removeClass('active');
      setTimeout($(".loader").fadeIn('slow'),20000);
      setTimeout($(".loader").fadeOut('slow'),10000);
      var apart = $(this).attr('alt');
      $(this).addClass("active");
      switch (apart) {
        case '1':
           setTimeout( $("#utilerias").fadeIn('fast'),20000);
           
            break;
        case '2':
            $("#servicios").fadeIn('fast');
            break;
        case '3':
            $("#contabilidad").fadeIn('fast');
            break;
        case '4':
            $("#facturacion").fadeIn('fast');
            break;
            
        
        default:
            // code
    }
   });
});

