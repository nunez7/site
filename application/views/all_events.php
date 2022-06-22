<?php 
$months = array('01' => 'Enero',
  '02' => 'Febrero',
  '03' => 'Marzo',
  '04' => 'Abril',
  '05' => 'Mayo',
  '06' => 'Junio',
  '07' => 'Julio',
  '08' => 'Agosto',
  '09' => 'Septiembre',
  '10' => 'Octubre',
  '11' => 'Noviembre',
  '12' => 'Diciembre'); 
  ?>
<!DOCTYPE html>
<html class="no-js" lang="es"> 
  <head>
    <meta charset="utf-8" />
    <title>UT de la Costa: Eventos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php $this->load->view('scripts') ?>
  </head>
   <body>
      <?php $this->load->view('navigation') ?>

      <div class="container section">
        <!-- SECTION TITLE -->
        <div class="row bg-gray section-title">
          <div class="col-md-12"><h2>EVENTOS DEL <?php echo date('Y'); ?></h2></div>
        </div>
        <!-- EVENTS -->
        <div class="row section">
          <div class="col-md-12">
            <div class="events-row first">
              <div class="year">CALENDARIO</div>
            </div>
            <br />
            <ul class="events">
            <!-- FIRST MONTH EVENTS -->
            <?php 
            $month = '';
            foreach($events as $event):
              if ($month != $event['month']){
                ?>
            <div class="events-row clearfix">
              <div class="month"><?php echo $months[$event['month']]; ?></div>
            </div>
             <?php
              }
              $month = $event['month'];
              ?>
              <li>
                <div class="calendar">
                  <p class="number"><?php echo $event['day']; ?></p>
                  <p class="month-xs"><?php echo $months[$event['month']]; ?></p>
                </div>
                <a href="<?php echo site_url("event/index/".$event['folio']);?>">
                  <div class="event-info">
                    <p class="event-title">UT de La Costa</p>
                    <p class="event-excerpt"><?php echo $event['title']; ?></p>
                  </div>
                </a>
              </li>
              </a>
              <?php
              endforeach;
              if($month==""){
                ?>
                <div class="events-row clearfix">
                  <div class="month"><?php echo $months[date("m")]; ?></div>
                </div>
                <li>
                <div class="calendar">
                  <p class="number"><?php echo date("d") ?></p>
                  <p class="month-xs"><?php echo $months[date("m")]; ?></p>
                </div>
                <a href="<?php echo base_url(); ?>">
                  <div class="event-info">
                    <p class="event-title">UT de La Costa</p>
                    <p class="event-excerpt">No hay eventos</p>
                  </div>
                </a>
              </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>

      <?php $this->load->view('footer'); ?>
      <?php $this->load->view('jscripts'); ?>
   </body>
</html>
