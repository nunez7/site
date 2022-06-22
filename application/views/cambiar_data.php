<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
  <meta charset="utf-8" />
  <title>Aspirantes: Cambio de modalidad/carrera</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('scripts') ?>
</head>
<body>
  <?php $this->load->view('navigation') ?>

  <div class="container section">
    <div class="row bg-gray section-title">
      <div class="col-md-12"><h2>CAMBIO DE CARRERA Y/O MODALIDAD (NUEVO INGRESO)</h2></div>
    </div>
    <br />
    <div class="row ml-form">
      <p class="green cita">
        * Modifica los datos y da clic en el botón actualizar.
      </p>
      <p class="reduced" id="requisito-inscripcion">Conoce los requisitos de inscripción: <a href="<?php echo base_url(); ?>documentos/INFO INSCRIPCION Y REINSCRIPCION_Marzo2019.pdf">Descargar requisitos.</a></p>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <p class="alert d-none" id="mensaje"></p>
        </div>
      </div>
      <form action="" method="post" class="form-general" id="save-aspirante" accept-charset="utf-8">
        <div class="row form-group">
          <div class="col-md-12">
            <label>Nombre (s)</label>
            <input type="hidden" id="cve_aspirante" value="<?= $aspirante['cve_aspirante'] ?>" />
            <input type="hidden" id="nombre" value="<?= $aspirante['nombre'].' '.$aspirante['apellido_paterno'].' '.$aspirante['apellido_materno'] ?>" />
            <input type="hidden" id="bachillerato" value="<?= $aspirante['bachillerato_procede'] ?>" />
            <input type="text" name="nombre" readonly disabled class="form-control mayus" required value="<?= $aspirante['nombre'].' '.$aspirante['apellido_paterno'].' '.$aspirante['apellido_materno'] ?>">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <label>Bachillerato de procedencia</label>
             <input type="text" name="bachillerato" readonly disabled class="form-control mayus" required value="<?= $aspirante['bachillerato_procede'] ?>">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label>Turno</label>
          <select name="turno" id="turno" class="form-control" required >
            <option value="1" <?php if($aspirante['cve_turno']==1){?>selected <?php } ?>>Escolarizado (Lunes a viernes)</option>
            <option value="2" <?php if($aspirante['cve_turno']==2){?>selected <?php } ?>>Semiescolarizado (Sabatino)</option>
          </select>
        </div>
        <div class="col-md-8">
          <label>Carrera</label>
          <select name="carrera" id="carrera" class="form-control" required>
            <?php foreach($carreras as $career): ?>
              <option value="<?= $career->cve_carrera ?>"><?= $career->nombre ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="row form-group <?php if($aspirante['cve_turno']==1){echo 'd-none';} ?>" id="empresa_div">
        <div class="col-md-12" >
          <label>Empresa donde trabaja</label>
            <input type="text" name="empresa_trabaja" class="form-control mayus" 
            maxlength="80" title="Escribe el nombre" id="empresa_trabaja" value="<?= $aspirante['empresa_trabaja'] ?>">
        </div>
        </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label>Teléfono (000-000-0000)</label>
          <input type="text" name="telefono" id="telefono" class="form-control telefono" required value="<?= $aspirante['numero_telefonico'] ?>">
        </div>
        <div class="col-md-8">
          <label>E-mail (correo electrónico)</label>
          <input type="email" name="email" id="email" class="form-control" required value="<?= $aspirante['email'] ?>">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-12">
          <button type="submit" id="save-btn" class="btn btn-send pull-right">Actualizar</button>
        </div>
      </div>
    </form>
    <br />
    <p class="font-weight-bold d-none" id="ficha-pago">¡Datos actualizados! <a target="_blank" href="" id="link-ficha-pago" class="btn btn-link">Reimprime tú ficha de pago</a></p>  
  </div>
  <div class="row ml-form">
    <p class="reduced">Si tienes dudas sobre las carreras o registro de la información puedes enviar un correo a: <strong>eestrada@utdelacosta.edu.mx</strong> ó <strong>inscripciones@utdelacosta.edu.mx</strong></p>  
    <p class="reduced">Si ya fuiste alumno y quieres continuar con tus estudios no es necesario que te registres, comunícate directamente con: <strong>cvelazquez@utdelacosta.edu.mx</strong></p>  
  </div>
</div>
</div>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('jscripts'); ?>
<script src="<?php echo base_url(); ?>js/jquery.mask.min.js"></script>
<script>
  $( document ).ready(function() {
    $('.telefono').mask('000-000-0000');
    $(".mayus").focusout(function () {
      this.value = this.value.toUpperCase();
    });
    $("#turno").change(function(){
      var turno = $(this).val();
      if(turno=="2"){
        $("#empresa_div").removeClass('d-none');
      }else{
        $("#empresa_div").addClass('d-none');
      }
      $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>" + "index.php/aspirante/get_carreras_turno",
        data: "cve_turno="+turno,
        error: function(){
        }, success: function(data){
         $("#carrera").html(data);
       }
     });
    });
      //Guardamos el aspirante
      $("#save-aspirante").submit(function (e) {
        e.preventDefault();

        var turno = $('select#turno option:selected').val();

        if( (turno=="2") && ($("#empresa_trabaja").val().trim()=="" || $("#empresa_trabaja").val() == "NINGUNA" || $("#empresa_trabaja").val() == "NINGUN" || $("#empresa_trabaja").val() == "NO")){
          alert("¡La empresa donde trabaja es requerida para completar la actualización de datos, ya que el sistema semiescolarizado es para personas que trabajan!");
          $("#empresa_trabaja").focus();
          return false;
        }

        $("#save-btn").attr("disabled", true);
        var parametros = {
          "carrera" : $("#carrera").val(),
          "turno" : turno,
          "telefono" : $("#telefono").val(),
          "email" : $("#email").val(),
          "cve_aspirante": $("#cve_aspirante").val(),
          "empresa_trabaja": $("#empresa_trabaja").val()
        };
        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/update",
          data: parametros,
          error: function(e){
            error_peticion(e);
          }, success: function(data){
            var datos = data.split("-");
            console.log(datos);
            if(datos[0]=="created"){
              $("#mensaje").removeClass("d-none");
              $("#save-aspirante").addClass("d-none");
              $(".cita").addClass("d-none");
              $("#requisito-inscripcion").addClass("d-none");
              //Una vez guardados los datos reenviamos un email
              var parametros2 = {
                "nombre" : $("#nombre").val(),
                "bachillerato" : $("#bachillerato").val(),
                "carrera" : $("#carrera option:selected").text(),
                "turno" : $("#turno option:selected").text(),
                "telefono_fijo" : $("#telefono").val(),
                "email" : $("#email").val(),
                "actualizacion": true,
                "cve_aspirante": $("#cve_aspirante").val(),
                "empresa_trabaja": $("#empresa_trabaja").val()
              };
              $.ajax({
                type: "post",
                url: "http://201.155.208.37/dexter/emailaspirante",
                data: parametros2,
                error: function(){
                }, success: function(html){
                }
              });
              //Agregamos la URL de dirección 
              $("#link-ficha-pago").attr('href', "<?php echo site_url('aspirante/ficha_aspirante');?>/<?= $aspirante['cve_aspirante'] ?>");
              $("#ficha-pago").removeClass('d-none');
              $("#mensaje").removeClass('alert-danger');
              $("#mensaje").removeClass('alert-warning');
              $("#mensaje").addClass('alert-success');
              $("#mensaje").html("Hemos actuaizado tú información. <strong>Descarga</strong> tú ficha, <strong>realiza</strong> el pago y <strong>envíala</strong> escaneada a cualquiera de los correos de abajo."); 
            }else if(datos[0]=="exist"){
              alert("Ya se tiene el registro actual. No hubo cambios en los datos!");
            }else{
              error_peticion2("Ocurrió un error.");
            }
          }
        });
        $("#save-btn").removeAttr("disabled");
      });
      function error_peticion(data){
        $("#mensaje").removeClass("d-none");
        $("#mensaje").removeClass('alert-success');
        $("#mensaje").removeClass('alert-danger');
        $("#mensaje").addClass('alert-warning');
        $("#mensaje").text(data);
      }
      function error_peticion2(data){
        $("#mensaje").removeClass("d-none");
        $("#mensaje").removeClass('alert-success');
        $("#mensaje").removeClass('alert-danger');
        $("#mensaje").addClass('alert-warning');
        $(".cita").addClass("d-none");
        $("#requisito-inscripcion").addClass("d-none");
        $("#mensaje").html(data);
      }
    });
  </script>
</body>
</html>
