<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="caroussel">
        <div class="caroussel-image">
          <img src="/wp-content/themes/jositajositheme/img/caroussel/car2.jpg" alt="Denda"/>
        </div>
        <div class="caroussel-image">
          <div class="caroussel-info">DENDA LOREM IPSUM DOLOR</div>
          <img src="/wp-content/themes/jositajositheme/img/caroussel/car1.jpg" alt="Bordado"/>
        </div>
        <div class="caroussel-image">
          <img src="/wp-content/themes/jositajositheme/img/caroussel/car3.jpg" alt="Lana"/>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.caroussel').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    });
  </script>
<?php get_footer(); ?>
