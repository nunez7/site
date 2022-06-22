<header>
   <nav class="navbar" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logo-ut.png" class="img-responsive" alt="Universidad Tecnológica de la Costa"></a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="<?php echo site_url("sala");?>">SALA <br><span>(Inicio)</span></a></li>
             <li><a href="<?php echo site_url("/sala/filosofia");?>">FILOSOFÍA<br><span>&nbsp;</span></a></li>
             <li><a href="<?php echo site_url("/sala/servicios");?>">SERVICIOS<br><span>&nbsp;</span></a></li>
             <li><a href="<?php echo site_url("/sala/somos");?>">¿QUIENES <br><span>SOMOS?</span></a></li>
           </ul>
         </div><!-- /.navbar-collapse -->
       </div>
     </div>
   </div>
 </nav>
</header>