<div id="contacto" class="center" style="height: 500px;">
  <img id="contacto_img" class="responsive-img" src="https://app.sistemacontabl3.com/subusuarios/despacho.php?accion=LogoDominio&dominio=app.sistemacontabl3.com&ajax=true"></img>
  <p>
    TELEFONOS DE CONTACTO.
    <ul>
      <a href="tel:3121020659">
        <li>
          Contacto: 3121020659
        </li>
      </a>
      <a href="tel:3121555794">
        <li>
          WhatsApp: 3121555794
        </li>
      </a>
      <a href="tel:3123143998">
        <li>
          Oficina: 3123143998
        </li>
      </a>
    </ul>
  </p>
    ESCRIBENOS A NUESTROS CORREOS.
   <ul>
     <a href="malito:CONTADORRIOSCORONA@HOTMAIL.COM">
       <li>
         CONTADORRIOSCORONA@HOTMAIL.COM
       </li>
     </a>
     <a href="malito:CPEDUARDORIOS8@GMAIL.COM">
       <li>
         CPEDUARDORIOS8@GMAIL.COM
      </li>
     </a>
     <a href="malito:EDUARDORIOS_8@YAHOO.COM">
       <li>
         EDUARDORIOS_8@YAHOO.COM
       </li>
     </a>
     <a href="malito:EDUARDORIOS_8@HOTMAIL.COM ">
       <li>
         EDUARDORIOS_8@HOTMAIL.COM 
       </li>
     </a>
   </ul>
  </p>
  <p>Dirección</p>
  <p class="blue-text">Calle General Ramón Corona 540 <br>
      Calle General Ramón Corona 540 Real Centenario 28984 <br>
      Ciudad de Villa de Álvarez, Mexico</p>
  
  <div id="map" style="width: 100%; height: 400px; background: grey" />
  <script  type="text/javascript" charset="UTF-8" >
    
/**
 * Moves the map to display over Berlin
 *
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function moveMapToBerlin(map){
  map.setCenter({lat:19.2514061, lng:-103.757981});
  map.setZoom(17);
  var marker = new H.map.Marker({
    lat:19.2514061,
    lng:-103.757981
  });
  map.addObject(marker);
}





/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'RZDmu0AtY4utU2ZXPknN',
  app_code: '3h2OSEA8BfgQX1I-mJzDCw',
  useCIT: true,
  useHTTPS: true
});
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map  - not specificing a location will give a whole world view.
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map);

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
moveMapToBerlin(map);
  </script>
</div>
