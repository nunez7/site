<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <!--<li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
    <li data-target="#myCarousel" data-slide-to="12"></li>-->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active clic-slider" data-link="https://docs.google.com/forms/d/1u975HXKtMqelxkEOCM5cCMkPMe3rQwst8zzZKlULh3E/viewform?edit_requested=true">
      <img src="img/flayer/BANNERINSCRIPCIONES202112.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo base_url(); ?>recorrido_virtual">
      <img src="img/flayer/banner_visita_virtual.png" alt="Img" >
    </div>
    <!--<div class="item clic-slider" data-link="<?php echo site_url("aspirante");?>">
      <img src="img/flayer/INSCRIPCIÓN EN LINEA 2021.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("aspirante/despresurizado");?>">
      <img src="img/flayer/banner_despre.png" alt="Img" >
    </div>
    <div class="item">
      <img src="img/flayer/VICENTEGUERRERO.png" alt="Img" >
    </div>
    <div class="item">
      <img src="img/flayer/banner_inscripcion_tel.png" alt="Img" >
    </div>-->
    <div class="item clic-slider" data-link="<?php echo site_url("career/acui"); ?>">
      <img src="img/flayer/ACUI FLAYER 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/gastronomia"); ?>">
      <img src="img/flayer/GASTRONOMIA FLAYER 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/agro"); ?>">
      <img src="img/flayer/ING. AGRO 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/tal"); ?>">
      <img src="img/flayer/ING. PROC. ALIM. 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/tic");?>">
      <img src="img/flayer/ING. TI. 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/admin");?>">
      <img src="img/flayer/LIC. ADMON 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/merca"); ?>">
      <img src="img/flayer/LIC. MERCAD 2020.png" alt="Img" >
    </div>
    <div class="item clic-slider" data-link="<?php echo site_url("career/turismo"); ?>">
      <img src="img/flayer/LIC. TURISMO.png" alt="Img" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<script>
  $(".clic-slider").click(function(e){
    e.preventDefault();
    var link = $(this).attr("data-link");
    location.href = link;
  });
</script>