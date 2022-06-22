<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8" />
  <title>Biblioteca</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation') ?>

  <div class="container section">
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>Consulta la bibliografía Universitaria</h2></div>
    </div>
    <br />
    <div class="row">
      <p class="green ">
        La búsqueda puede ser por nombre del libro, autor o ubicación (anaquel).
      </p>
      <form class="form-general">
        <div class="form-group col-md-12">
          <input type="text" id="search" class="form-control" placeholder="¿Qué estás buscando?">
        </div> 
        <div class="col-md-12">
          <button type="button" id="btnBuscar" class="btn btn-send pull-right">Buscar</button> 
        </div>
      </form>
      <br />
    </div>
    <p>Resultados:</p>
    <div id="libros"> 
      <span id="mensaje">Sin resultados</span>
    </div>
    <br /><br />
    <p class="reduced">"Gracias por utilizar este servicio, cualquier comentario o sugerencia: pvalenzuela@utdelacosta.edu.mx ó fgonzalez@utdelacosta.edu.mx".</p>  
  </div>
</div>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('jscripts'); ?>
<script>
  $( document ).ready(function() {

    $("#btnBuscar").click(function() {
      var libro = $("#search").val();

      if ($("#search").val()=="") {
        $("#mensaje").text("No se ha especificado nada.");
        return false;
      }else{
        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/biblioteca/get_list_libros",
          data: "libro="+libro,
          error: function(){
            $("#mensaje").text("Error en la petición.");
          }, success: function(html){
            $("#libros").html(html).show();
          }
        });
      }
    });
  });
</script>
</body>
</html>
