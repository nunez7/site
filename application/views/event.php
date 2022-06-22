<!DOCTYPE html>
<html class="no-js" lang="es"> 
  <head>
    <meta charset="utf-8">
    <title>Ut de La Costa: Eventos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('scripts') ?>
  </head>
   <body>
      <?php $this->load->view('navigation') ?>

      <div class="container section">
        <!-- SECTION TITLE -->
        <div class="row bg-gray section-title">
          <div class="col-md-12"><h2><?php echo $title; ?></h2></div>
        </div>
        <!-- SINGLE -->
        <div class="row m-top-lg">
          <div class="col-md-12">
            <img src="<?php echo $image_url; ?>" class="img-responsive center-block">
            <div class="m-top-md text-justify">
              <?php echo $this->load->view($file, '', TRUE); ?>
            </div>
            <h4 class="pull-right text-green"><?php echo $date; ?></h4>
            <?php if($gallery_url != null){ ?>
            <a href="<?php echo $gallery_url; ?>" class="btn btn-light">Imágenes del evento</a>
            <?php } ?>
          </div>
        </div>
      </div>

      <?php $this->load->view('footer'); ?>
      <?php $this->load->view('jscripts'); ?>
   </body>
</html>
