<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8">
  <title>Ut de La Costa: Oferta de trabajo</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation') ?>

  <div class="container section">
    <!-- SECTION TITLE -->
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>Oferta de empleo en <?php echo $empresa; ?></h2></div>
    </div>
    <!-- SINGLE -->
    <div class="row m-top-lg">
      <div class="col-md-12">
        <img src="<?php echo base_url(); ?>documentos/oferta_trabajo/<?php echo $imagen; ?>" class="img-responsive center-block">
        <div class="m-top-md text-justify">
          <P><?php echo $descripcion; ?></P>
          <br />
          <p class="reduced">Para mayores informes puedes enviar un correo a <strong>practicas-estadias@utdelacosta.edu.mx</strong></p>
        </div>
        <h4 class="pull-right text-green"><?php echo $fecha; ?></h4>
      </div>
    </div>
  </div>

  <?php $this->load->view('footer'); ?>
  <?php $this->load->view('jscripts'); ?>
</body>
</html>