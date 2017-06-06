
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
      
      <div class="row hide-on-large-only" style="margin-top:10px">
        <div alt="1" style="padding:30px" class="col pointer white-text s3 aprts center blue">Utilerias</div>
        <div alt="2" style="padding:30px" class="col pointer white-text s3 aprts center purple">Servicios</div>
        <div alt="3" style="padding:30px" class="col pointer white-text s3 aprts center green">Contabilidad</div>
        <div alt="4" style="padding:30px" class="col pointer white-text s3 aprts center red">Facturacion.</div>
      </div>
      
        <div class="col s4 hide-on-med-and-down ">
          <ul class="collection" style="height:577px">
      <li  alt="1" class="collection-item aprts active" style="padding-top:50.5px; padding-bottom:50.5px">
        <i style="height:42px; width:42px; line-height:42px;" class="material-icons center white-text circle blue">work</i> Utilerias</li>
      <li  alt="2" class="collection-item aprts" style="padding-top:50.5px; padding-bottom:50.5px">
        <i style="height:42px; width:42px; line-height:42px;" class="material-icons center white-text circle purple">settings_remote</i> Servicios en linea</li>
      <li  alt="3" class="collection-item aprts" style="padding-top:50.5px; padding-bottom:50.5px">
        <i style="height:42px; width:42px; line-height:42px;" class="material-icons center white-text circle green">insert_chart</i> Contabilidad Electronica.</li>
      <li  alt="4" class="collection-item aprts" style="padding-top:50.5px; padding-bottom:50.5px">
        <i style="height:42px; width:42px; line-height:42px;" class="material-icons center white-text circle red">receipt</i> Facturacion.</li>
    </ul>
        </div>
        
    
       <div class="col s12 l8 m12 bar-lateral white z-depth-3" style="margin-top:10px">
         
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
  
 
