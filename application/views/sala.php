<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8">
  <title>Sala de lectura</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
   <?php $this->load->view('navigation-sala') ?>

   <div class="container">
    <!-- SECTION TITLE -->
        <div class="row bg-gray section-title">
          <div class="col-md-12"><h2>SALA DE LECTURA</h2></div>
        </div>
    <!-- ENTREPRENEURS -->
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url(); ?>img/flayer/SALA DE LECTURA.png" class="img-responsive center-block img-carrera">
      </div>
      <?php 
      //Si no existe la variable
      if (!isset($opcion_sala)){
        ?>
        <div class="container">
        <!-- COURSES -->
        <div class="row section">
          <div class="col-md-12 text-center">
            <ul class="courses">
               <?php foreach($last_events as $event): ?>
              <li>
                <div class="course-title"><?php echo $event["title"]; ?></div>
                <img src="<?php echo $event["image_url"]; ?>">
                <a href="<?php echo site_url("sala/all/".$event['folio']);?>"><div class="info">INFO</div></a>
              </li>
               <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
       <?php 
     }
     //-- Si existe la variable-->
     if (isset($opcion_sala)){
       ?>
       <div class="col-md-12">
        <?php 
        switch($opcion_sala){
         case "filosofia":
          $this->load->view('filosofia-sala');
         break;
         case "servicios":
          $this->load->view('servicios-sala');
         break;
         case "somos":
          $this->load->view('somos-sala');
         break;
       }
       ?>
     </div>
     <?php 
   }
   ?>
 </div>
</div>
     
    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('jscripts'); ?>
</body>
</html>
