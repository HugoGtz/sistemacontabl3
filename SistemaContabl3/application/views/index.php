<div class="carousel carousel-slider center " style="min-height:615px" data-indicators="true">

    <div class="carousel-item imgs1 white-text " href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item imgs2 white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
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
  <div class="blue">
    <div style="height:615px" class="col s12"></div>
  </div>
  <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 4500));
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 6000);
    }
  </script>
 