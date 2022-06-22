<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8">
  <title>Incubadora de negocios</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation-incuba') ?>

  <div class="container section">
    <!-- SECTION TITLE -->
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>Incubadora de Negocios GENESIS</h2></div>
    </div>
    <!-- ENTREPRENEURS -->
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url(); ?>img/flayer/INCUBADORA.png" class="img-responsive center-block img-carrera">
      </div>
      <?php 
      //Si no existe la variable
      if (!isset($opcion)){
        ?>
        <div class="col-md-12 text-center">
          <ul class="egresados">
            <li>
              <img src="<?php echo base_url(); ?>img/img-egresados-01.png" class="img-responsive center-block">
              <h4 class="green">IDEA DE<br>NEGOCIO</h4>
            </li>
            <li>
              <img src="<?php echo base_url(); ?>img/img-egresados-02.png" class="img-responsive center-block">
              <h4 class="green">CONCEPTO<br>INNOVADOR</h4>
            </li>
            <li>
              <img src="<?php echo base_url(); ?>img/img-egresados-03.png" class="img-responsive center-block">
              <h4 class="green">ME<br>REGISTRO</h4>
            </li>
            <li>
              <img src="<?php echo base_url(); ?>img/img-egresados-04.png" class="img-responsive center-block">
              <h4 class="green">INCUBO<br>MI NEGOCIO</h4>
            </li>
            <li>
              <img src="<?php echo base_url(); ?>img/img-egresados-05.png" class="img-responsive center-block">
              <h4 class="green">¡SOY<br>EMPRENDEDOR!</h4>
            </li>
          </ul>
        </div>
        <div class="col-md-12">
         <p class="m-top-md text-center">¿QUIERES INCUBAR TU NEGOCIO?</p>
         <p class="text-center"><a href="<?php echo base_url(); ?>documentos/incubar_negocio.docx" class="btn btn-light">Clic aquí</a></p>
       </div>
       <?php 
     }
     //-- Si existe la variable-->
     if (isset($opcion)){
       ?>
       <div class="col-md-12">
        <?php 
        switch($opcion){
         case "filosofia":
          $this->load->view('filosofia');
         break;
         case "servicios":
          $this->load->view('servicios');
         break;
         case "somos":
          $this->load->view('somos');
         break;
         case "objetivos":
          $this->load->view('objetivos');
         break;
         case "mercado":
          $this->load->view('mercado');
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
