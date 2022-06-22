<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8" />
  <title>Aspirante: Reportar pago</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation') ?>
  <div class="container section">
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>REPORTAR PAGO DE INSCRIPCIÓN</h2></div>
    </div>
    <br />
    <div class="row" id="este_form">
      <p class="green">
       * Selecciona tu comprobante de pago necesario para inscribirte.
     </p>
     <p class="reduced">El formato de documentos puede ser .pdf o imagen. Verifica que el nombre del archivo no tenga caracteres especiales (#, %, ñ, etc.)</p>
     <p class="reduced">¿Tus archivos pesan más de 5Mg? Reduce su tamaño antes de subirlos, para <a target="_blank" href="https://tinypng.com/">imagen</a> o para <a href="https://smallpdf.com/es/comprimir-pdf" target="_blank">PDF</a>.</p>
     <br />
     <div class="alert alert-warning" role="alert">
        <b>IMPORTANTE:</b> Es necesario que se indique el nombre del aspirante en el comprobante de pago.
     </div>
     <form class="form-general" id="form_archivos" enctype="multipart/form-data" action="" method="post">
      <div class="form-group col-md-12 col-sm-6">
        <label for="">Comprobante de pago </label>
        <input type="file" class="form-control-file" id="comprobante" name="comprobante" required>
      </div> 
     <!-- <div class="form-group col-md-4 col-sm-6">
        <label for="">Acta de nacimiento</label>
        <input type="file" class="form-control-file" id="acta" name="acta" required>
      </div> 
      <div class="form-group col-md-4 col-sm-12">
        <label for="">Constancia de estudios ó certificado de bachillerato</label>
        <input type="file" class="form-control-file" id="constancia" name="constancia">
      </div> -->
      <div class="col-md-12">
        <button type="submit" id="btnBuscar" class="btn btn-send pull-right">Enviar</button> 
      </div>
    </form>
    <br />
  </div>
  <div class="row">
    <div class="col-md-12 d-flex justify-content-center">
      <p class="alert d-none alert-success" id="mensaje"><strong>¡Hemos recibido tus documentos!</strong> <br /> Una vez validados se te dará respuesta vía correo electrónico. La documentación recibida solo es para validar tu registro, los documentos se deberán entregar de manera presencial en ventanilla de Servicios Escolares para digitalizarlos correctamente.</p>
    </div>
  </div>
</div>
</div>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('jscripts'); ?>
<script>
  $( document ).ready(function() {
    $("#form_archivos").submit(function(e){
      e.preventDefault();

      var r = confirm("¿El archivo contiene el nombre del alumno?");
      if (r == false) {
         return false;
      }

      var file1 = document.getElementById("comprobante").value;
     // var file2 = document.getElementById("acta").value;
     // var file3 = document.getElementById("constancia").value;
      var extArray = new Array(".jpg", ".png", ".pdf", ".jpeg");

      var ext1 = file1.slice(file1.indexOf(".")).toLowerCase();
      //var ext2 = file2.slice(file2.indexOf(".")).toLowerCase();

      var aprobado = false;
      var aprobado2 = false;
      for (var i = 0; i < extArray.length; i++)
      {
        if (extArray[i] === ext1)
        {
          aprobado = true;
          break;
        }
      }
      /*for (var i = 0; i < extArray.length; i++)
      {
        if (extArray[i] === ext2)
        {
          aprobado2 = true;
          break;
        }
      }*/
      if (aprobado == false) {
        alert("Los archivos deben ser pdf ó imagen");
        return false;
      }

      /*if(file1==file2){
        alert("El acta de nacimiento y el comprobante de pago no deben ser iguales.");
        return false;
      }*/

      /*if(file3==null || file3==""){
        var s = confirm("No tienes cargada la constancia de estudios o certificado de bachillerato. Eres consciente de esto, por lo cual deberás entregar el documento faltante antes del inicio de clases.");
        if (!s) {
         return false;
       }
     }*/

     $.ajax({
      type: "post",
      url: "<?php echo base_url(); ?>" + "index.php/aspirante/subir_archivos",
      data: new FormData($(this)[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        var dato = data.split("*_*");

        switch (dato[0]) {
          case "save":
          //Enviamos los datos mediante notificación
          var parametros2 = {
                "file1" : dato[1],
                "file2" : dato[2],
                "file3" : dato[3]
              };
          $.ajax({
            type: "get",
            url: "http://201.155.208.37/dexter/emailaspirante",
            data: parametros2,
            error: function(){
            }, success: function(html){
            }
          });
          $("#mensaje").removeClass('d-none');
          $("#este_form").addClass('d-none');
          break;
          case "exist":
          alert("Ya subiste los documentos, espera a que inscripciones los valide.");
          break;
          case "fail":
          alert("Los datos son incorrectos");
          break;
          default:
          alert("Ocurrió un error al procesaro los datos. " + data);
          break;
        }
      }, error: function (data) {
        console.log(data);
        alert("¡Ups! No se pudo conectar con el servidor :(!");
      }
    });

   });
  });
</script>
</body>
</html>