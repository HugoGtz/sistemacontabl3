<a id="open_chat" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">chat_bubble_outline</i></a>
<div class="carousel carousel-slider center" data-indicators="true">

    <div class="carousel-item imgs2 white-text" href="#one!">
      <div class="down">
        <h1 class="black-text">Rigasa S.C.</h1>
        <h5 class="black-text">Bienvenido</h5>
        <button id="loginBtn" class="btn waves-effect waves-light blue z-depth-5" onclick="FB.login();">Ingresar con Facebook</button><br>
        <button id="ingresar" class="btn waves-effect waves-light blue z-depth-5" type="submit" name="action">Ingresar
      </div>
    </div>
    
    <div class="carousel-item imgs1 white-text " href="#two!">
      <div class="down">

      <h1>Contáctanos</h1>
      <p class="white-text">Obten mas informacion sobre nuestro productos.</p>


    <form class="col s16">
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="email" type="email" class="validate">
          <label for="email" data-error="Incorrecto" data-success="Correcto">Email</label>
          <button class="btn waves-effect waves-light blue z-depth-5" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        </div>

      </div>
    </form>
      </div>
      
    </div>
    
    <div class="carousel-item imgs3 white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item imgs4 white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
  <div class="row bar-m">
    <div class="col s12 n-p">
    <div class="col s4 twitter bar center"></div>
    <div class="col s4 facebook bar center">
    </div><div class="col s4 google bar center"></div>
    </div>
  </div>
  <div  class="blue">
    <div class="col s12">
    <div class="row">
      <div class="col l4 left">
         <ul class="collection bar-lateral col l12">
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>on
      <span class="title">Utilerias Fiscales.</span>
      <p>First Line <br>
      </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Servicios en linea</span>
      <p>First Line <br>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Contabilidad Electronica</span>
      <p>First Line <br>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Facturacion</span>
      <p>First Line <br>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
      </div>
       <div class="col s8 bar-lateral white">
    </div>
    </div>
    </div>
   
  </div>

  <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 10000));
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 10000);
    }
  </script>
  
  <script>
  $(document).ready(function(){
        $("#open_chat").click(function(){
            $("#chatfb").toggleClass("show_hide");
        });
  });
</script>
