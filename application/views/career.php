<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8">
  <title>Carreras</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
  </head>
  <body>
    <?php $this->load->view('navigation') ?>
   <div class="container section">
    <!-- SECTION TITLE -->
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>DIRECCIÓN DE CIENCIAS AGROPECUARIAS</h2></div>
    </div>
    <!-- STUDY PLAN -->
    <div class="row section">
      <div class="col-md-12 text-center">
        <ul class="plan">
          <li class="one">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/agro");?>" class="mas">MÁS</a>
          </li>
          <li class="six">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/tal");?>" class="mas">MÁS</a>
          </li>
          <li class="three">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/acui");?>" class="mas">MÁS</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- SECTION TITLE -->
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>DIRECCIÓN DE NEGOCIOS</h2></div>
    </div>
     <!-- STUDY PLAN -->
    <div class="row section">
      <div class="col-md-12 text-center">
        <ul class="plan">
          <li class="two">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/turismo");?>" class="mas">MÁS</a>
          </li>
          <li class="four">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/admin");?>" class="mas">MÁS</a>
          </li>
          <li class="five">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/merca");?>" class="mas">MÁS</a>
          </li>
          <li class="eight">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/gastronomia");?>" class="mas">MÁS</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- SECTION TITLE -->
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>DIRECCIÓN DE CIENCIA Y TECNOLOGÍA</h2></div>
    </div>
     <!-- STUDY PLAN -->
    <div class="row section">
      <div class="col-md-12 text-center">
        <ul class="plan">
          <li class="seven">
            <p class="title">&nbsp;</p>
            <p class="description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a href="<?php echo site_url("career/tic");?>" class="mas">MÁS</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php $this->load->view('footer'); ?>
  <?php $this->load->view('jscripts'); ?>
</body>
</html>
