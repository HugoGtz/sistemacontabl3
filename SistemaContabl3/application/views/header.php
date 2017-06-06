<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistemacontabl3.com</title>
	
	<!-- Compiled and minified jQuery -->
	<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  
	<!-- Compiled and minified CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!-- Compiled and minified Socicon -->
  <link href="/SistemaContabl3/css/buttons.css" rel="stylesheet">

  <!-- CSS Styles -->
  <link rel="stylesheet" href="<?php echo base_url('css/').'main.css' ?>" type="text/css" />
  
  <!-- Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="<?php echo base_url('css/').'imgs.css' ?>" type="text/css" />
  <script src="<?php echo base_url('js/').'facebook.js' ?>"></script>
   <!--<script src="<?php echo base_url('js/').'chat-user.js' ?>"></script>-->
   <script src="<?php echo base_url('js/').'apartados.js' ?>"></script>
    <script src="<?php echo base_url('js/').'cont.js' ?>"></script>
   
   <link rel="stylesheet" type="text/css" href="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

</head>

<body>
  
  <!-- Header de la pagina. -->
  <div class="navbar-fixed">
    <nav role="navigation">
      <div class="nav-wrapper container ">
        <a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo">
          <div class="col s9 m6 l2 logo-rd"><img cl ass = "responsive-img" src="https://app.sistemacontabl3.com/subusuarios/despacho.php?accion=LogoDominio&dominio=app.sistemacontabl3.com&ajax=true"></img></div>
        </a>
        <ul id="line" class="right hide-on-med-and-down">
          <li><a class="black-text" href="<?php echo base_url('sections/quiensomos') ?>">¿Quiénes somos?</a></li>
          <li><a class="black-text" href="<?php echo base_url('sections/registro') ?>">Regístrate</a></li>
          <li><a class="black-text" href="<?php echo base_url('sections/contacto') ?>">Contacto</a></li>
          <li><a class="black-text" href="<?php echo base_url('sections/soporte') ?>">Soporte</a></li>
          <li><a class="black-text" href="<?php echo base_url('sections/faq') ?>">FAQ</a></li>
        </ul>
      
        <ul id="nav-mobile" class="side-nav">
          <li><a href="<?php echo base_url('sections/quiensomos') ?>" class="secondary-item">¿Quiénes somos?<i class="material-icons left">perm_identity</i></a></li>
          <li><a href="<?php echo base_url('sections/registro') ?>" class="secondary-item">Resgístrate<i class="material-icons left">last_page</i></a></li>
          <li><a href="<?php echo base_url('sections/iniciar') ?>" class="secondary-item">Iniciar sesión<i class="material-icons left">portrait</i></a></li>
          <li><a href="<?php echo base_url('sections/contacto') ?>" class="secondary-item">Contacto<i class="material-icons left">phone</i></a></li>
          <li><a href="<?php echo base_url('sections/soporte') ?>" class="secondary-item">Soporte<i class="material-icons left">mail_outline</i></a></li>
          <li><a href="<?php echo base_url('sections/faq') ?>" class="secondary-item">FAQ<i class="material-icons left">info_outline</i></a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse black-text"><i class="material-icons">menu</i></a>
      </div>
      
    </nav>
    <a id="open_chat" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">chat_bubble_outline</i></a>
  </div>
 <!-- script para side mobile y para collapsible de chat. -->
  <script type="text/javascript" >
      $('.button-collapse').sideNav();
      $('.collapsible').collapsible();

  </script>
  
  
  <script type="text/javascript">
    // mostrar chat o no segun login.
  </script>
  

 <script>
  $(document).ready(function(){
        $("#open_chat").click(function(){
            $("#chatfb").toggleClass("show_hide");
        });
  });
</script>