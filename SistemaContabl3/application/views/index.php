
<div class="carousel carousel-slider center" data-indicators="true">

    <div class="carousel-item imgs2 white-text" href="#one!">
      <div class="down">
        <h1 class="black-text">Rigasa S.C.</h1>
        <h5 class="black-text">Bienvenido <span id="response"></span></h5>
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
       <a href="https://twitter.com/Asesorfiscalcol">
    <div class="col s4 twitter bar center z-depth-3">
        <h4 class="white-text center">Twitter</h4>
      </div>
       </a> 
      <a href="https://www.facebook.com/pg/tusaludfiscal/">
    <div class="col s4 facebook bar center z-depth-3">
      <h4 class="white-text center">Facebook</h4>
    </div>
      </a>
    <a href="https://www.youtube.com/channel/UCaQK4c7Kz5y-o7ge2DDjryA">
    <div class="col s4 google bar center z-depth-3">
      <h4 class="white-text center">Google</h4>
    </div>
    </a>
    
    </div>
    
  </div>
  
  
  <div  class="blue">
    <div class="col s12">
    <div class="row">
      <div class="col l4 left">
         <ul class="collection bar-lateral col l12" style="padding:0px">
    <li class="collection-item avatar aprt active" alt="1">
      <i class="material-icons circle blue">work</i>
      <span class="title">Utilerias Fiscales.</span>
      <p>First Line <br>
      </p>
        
    </li>
    <li class="collection-item avatar aprt" alt="2">
      <i class="material-icons circle amber">settings_remote</i>
      <span class="title">Servicios en linea</span>
      <p>First Line <br>
      </p>
      
    </li>
    <li class="collection-item avatar aprt" alt="3">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Contabilidad Electronica</span>
      <p>First Line <br>
      </p>
      
    </li>
    <li class="collection-item avatar aprt" alt="4">
      <i class="material-icons circle red">receipt</i>
      <span class="title">Facturacion</span>
      <p>First Line <br>
      </p>
      
    </li>
  </ul>
      </div>
       <div class="col s8 bar-lateral white z-depth-3" style="margin-top:10px">
         
         <div class="row loader" style="display:none">
            <div class="progress white">
      <div class="indeterminate"></div>
        </div>
         </div>
         
         <div class="row apart" id="utilerias">
           <h4 class="center">Utilerias Fiscales.</h4>
         </div>
         <div style="display:none;" class="row apart" id="servicios">
           <h4 class="center">Servicios en Linea.</h4>
         </div>
         <div style="display:none;" class="row apart" id="contabilidad">
           <h4 class="center">Contabilidad Electronica.</h4>
         </div>
         <div style="display:none;" class="row apart" id="facturacion">
           <h4 class="center">Facturacion.</h4>
         </div>
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
  
 
