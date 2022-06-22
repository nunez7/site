<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8" />
  <title>Aspirante: recuperación</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation') ?>

  <div class="container section">
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>Recuperación de ficha de aspirante</h2></div>
    </div>
    <br />
    <div class="row">
      <p class="green ">
        Ingresa el correo electrónico con el que te registraste
      </p>
      <form class="form-general">
        <div class="form-group col-md-12">
          <input type="text" id="search" class="form-control" placeholder="email_ejemplo@gmail.com">
        </div> 
        <div class="col-md-12">
          <button type="button" id="btnBuscar" class="btn btn-send pull-right">Buscar</button> 
        </div>
      </form>
      <br />
    </div>
    <p>Resultados:</p>
    <div id="fichas"> 
      <span id="mensaje">Sin resultados</span>
    </div>
    <br />
  </div>
</div>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('jscripts'); ?>
<script>
  $( document ).ready(function() {

    $("#btnBuscar").click(function() {
      var email = $("#search").val();

      if ($("#search").val()=="") {
        $("#mensaje").text("No se ha especificado nada.");
        return false;
      }else{
        if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email)){
         $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/get_list_email",
          data: "email="+email,
          error: function(){
            $("#mensaje").text("Error en la petición.");
          }, success: function(html){
            $("#fichas").html(html).show();
          }
        });
       } else {
          $("#mensaje").text("No hay un email válido");
       }

     }
   });
  });
</script>
</body>
</html>