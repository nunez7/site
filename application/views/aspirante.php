<!DOCTYPE html>
<html class="no-js" lang="es" <head>
<meta charset="utf-8" />
<title>Aspirantes: Registro</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->load->view('scripts') ?>
</head>

<body>
  <?php $this->load->view('navigation') ?>

  <div class="container section">
    <div class="row bg-gray section-title">
      <div class="col-md-12">
        <h2>REGISTRO DE ASPIRANTES NUEVO INGRESO</h2>
      </div>
    </div>
    <br />
    <div class="row ml-form">
      <p class="green cita">
        * Ingresa tus datos personales y da clic en el botón guardar.
      </p>
      <p class="reduced" id="requisito-inscripcion">Conoce los <strong>requisitos de inscripción:</strong> <a href="<?php echo base_url(); ?>documentos/INFO INSCRIPCION Y REINSCRIPCION_Marzo2019.pdf">Descargar requisitos.</a> ¿Perdiste tu ficha de pago? Clic <a href="<?php echo site_url("/aspirante/recuperacion"); ?>" title="Recuperar ficha">aquí</a> para <strong>recuperar ó cambiar de carrera/ modalidad</strong>.</p>
      <p class="reduced">"Concluiste una carrera de TSU y quieres ingresar a la Continuidad de Estudios (Ingeniería/ Licenciatura)", envía un email a <a href="mailto:serviciosescolares@utdelacosta.edu.mx?Subject=Interesado%20en%20continuar%20con%20estudios">serviciosescolares@utdelacosta.edu.mx</a></p>
      <p class="reduced">¿Ya realizaste tu pago de inscripción? Da clic <a href="<?php echo site_url("/aspirante/reportar_pago"); ?>">aquí</a> para enviar <strong>tu comprobante de pago</strong> y continuar con tu registro.</p>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <p class="alert d-none" id="mensaje"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <p class="alert alert-warning">El periodo de registro no se encuentra habilitado por el momento, gracias.</p>
        </div>
      </div>
      <form action="../aspirante/save.php" method="post" class="form-general d-none" id="save-aspirante" accept-charset="utf-8">
        <fieldset class="form">
          <legend>Datos de carrera</legend>
          <div class="row form-group">
            <div class="col-md-6">
              <label>Bachillerato o Preparatoria de procedencia</label>
              <input list="bachilleratos" name="bachillerato" class="form-control" required title="Selecciona un bachillerato de la lista o escribe el tuyo" id="bachillerato">
              <datalist id="bachilleratos">
                <?php foreach ($bachilleratos as $b) : ?>
                  <option value="<?= $b->nombre ?>"></option>
                <?php endforeach ?>
              </datalist>
            </div>
            <div class="col-md-6">
              <label>Localidad y municipio del bachillerato o preparatoria de procedencia</label>
              <input type="text" placeholder="Ejem: Santiago Ixcuintla, Mun: Santiago Ixcuintla" name="localidad_bachillerato" id="localidad_bachillerato" class="form-control mayus" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <label>Turno</label>
              <select id="turno" class="form-control">
                <option value="1">Escolarizado</option>
                <option value="2">Despresurizado</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Carrera a inscribir</label>
              <select name="carrera" id="carrera" class="form-control" required>
                <?php foreach ($carreras as $career) : ?>
                  <option value="<?= $career->cve_carrera ?>"><?= $career->nombre ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </fieldset>
        <fieldset class="form">
          <legend>Datos personales</legend>
          
          <div class="row form-group">
            <div class="col-md-4">
              <label>Nombre (s)</label>
              <input type="text" name="nombre" id="nombre" class="form-control mayus" required value="">
            </div>
            <div class="col-md-4">
              <label>Primer apellido</label>
              <input type="text" name="apaterno" id="apaterno" class="form-control mayus" required value="">
            </div>
            <div class="col-md-4">
              <label>Segundo apellido</label>
              <input type="text" name="amaterno" id="amaterno" class="form-control mayus" value="">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>Estado</label>
              <select id="cveEstado" class="form-control" required>
                <?php foreach ($estados as $edo) : ?>
                  <option value="<?= $edo->clave_estado ?>" <?php if ($edo->clave_estado == 18) {
                                                              echo "selected";
                                                            } ?>><?= $edo->nombre ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-md-4">
              <label>Municipio</label>
              <select id="cveMunicipio" class="form-control" required>
                <?php foreach ($municipios as $mpo) : ?>
                  <option value="<?= $mpo->cve_municipio ?>" <?php if ($mpo->cve_municipio == 942) {
                                                                echo "selected";
                                                              } ?>><?= $mpo->nombre ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-md-4">
              <label>Localidad</label>
              <select name="cveLocalidad" id="cveLocalidad" class="form-control" required>
                <?php foreach ($localidades as $loc) : ?>
                  <option value="<?= $loc->cve_localidad ?>" <?php if ($loc->cve_localidad == 161857) {
                                                                echo "selected";
                                                              } ?>><?= $loc->nombre ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>Calle</label>
              <input type="text" name="calle" id="calle" class="form-control mayus" placeholder="Puebla/ Carranza/ Etc" required maxlength="50" value="">
            </div>
            <div class="col-md-4">
              <label>No. Exterior</label>
              <input type="text" name="numero_exterior" id="numero_exterior" class="form-control" required max="999" maxlength="3" value="S/N">
            </div>
            <div class="col-md-4">
              <label>Colonia</label>
              <input type="text" name="colonia" id="colonia" class="form-control mayus" placeholder="Ejido/ Centro/ Etc" required maxlength="50" value="Centro">
            </div>
          </div>
          <div class="row form-group">
          <div class="col-md-4">
              <label>Sexo</label>
              <select name="sexo" id="sexo" class="form-control" required>
                <option value="H">Hombre</option>
                <option value="M">Mujer</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Fecha de nacimiento</label>
              <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required value="2021-01-01" min="2021-01-01" />
            </div>
            <div class="col-md-4">
              <label>CURP</label>
              <input type="text" name="curp" id="curp" title="Verifica tu CURP" pattern="^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$" class="form-control mayus" required maxlength="18" value="">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>No. Seguridad Social IMSS</label>
              <input type="text" name="nss" id="nss" class="form-control" required maxlength="12" value="0">
            </div>
            <div class="col-md-4">
              <label>Estado civil</label>
              <select name="estado_civil" id="estado_civil" class="form-control" required>
                <option value="Soltero">Soltero/a</option>
                <option value="Casado">Casado/a</option>
                <option value="Divorciado">Divorciado/a</option>
                <option value="Viudo">Viudo/a</option>
                <option value="Unión Libre">Unión Libre</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Empresa donde trabaja</label>
              <input type="text" name="empresa_trabaja" id="empresa_trabaja" class="form-control mayus" maxlength="80" title="Escribe el nombre" id="empresa_trabaja" placeholder="Obligatorio para despresurizado">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>Teléfono fijo</label>
              <input type="text" name="telefono" id="telefono" class="form-control telefono" required value="">
            </div>
            <div class="col-md-4">
              <label>Teléfono celular</label>
              <input type="text" name="telefono2" id="telefono2" class="form-control telefono" required value="">
            </div>
            <div class="col-md-4">
              <label>E-mail (correo electrónico)</label>
              <input type="email" name="email" id="email" class="form-control" required value="">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>Papá o tutor</label>
              <input type="text" name="tutor" id="tutor" class="form-control mayus" value="" maxlength="120">
            </div>
            <div class="col-md-4">
              <label>Mamá o tutora</label>
              <input type="text" name="tutora" id="tutora" class="form-control mayus" value="" maxlength="120">
            </div>
          </div>
        </fieldset>
        <fieldset class="form">
          <legend>Encuesta</legend>
          <div class="row form-group">
            <div class="col-md-4">
              <label>1. ¿Ha sido promovido/a por algún alumno de UTC?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="promovido" data-p="p1" data-pi="alumno_promotor" class="habilita_pregunta" value="1">Si</label>
                <label class="radio-inline"><input type="radio" name="promovido" data-p="p1" data-pi="alumno_promotor" class="habilita_pregunta" checked value="0">No</label>
              </div>
            </div>
            <div class="col-md-8 d-none" id="p1">
              <label>Nombre del alumno promotor</label>
              <input type="text" name="alumno_promotor" id="alumno_promotor" disabled class="form-control mayus" maxlength="250">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>2. ¿Tiene hijos/as?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="hijos" data-p="p2" data-pi="numero_hijos" class="habilita_pregunta" value="1">Si</label>
                <label class="radio-inline"><input type="radio" name="hijos" data-p="p2" data-pi="numero_hijos" class="habilita_pregunta" checked value="0">No</label>
              </div>
            </div>
            <div class="col-md-8 d-none" id="p2">
              <label>Número de hijos/as</label>
              <input type="number" name="numero_hijos" id="numero_hijos" disabled class="form-control" value="0">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>3. ¿Hablas alguna lengua indigena?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="lengua_ind" value="1">Si</label>
                <label class="radio-inline"><input type="radio" name="lengua_ind" checked value="0">No</label>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>4. ¿Presentas alguna discapacidad?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="discapacidad" class="discapa" value="1">Si</label>
                <label class="radio-inline"><input type="radio" name="discapacidad" class="discapa" checked value="0">No</label>
              </div>
            </div>
            <div class="col-md-8 d-none" id="p4">
              <div class="row">
                <?php foreach ($discapacidades as $dp) : ?>
                  <div class="form-check form-check-inline col-md-6">
                    <input class="form-check-input dades" type="checkbox" value="<?= $dp->descripcion  ?>" id="cb<?= $dp->cve_discapacidad  ?>">
                    <label class="form-check-label" for="cb<?= $dp->cve_discapacidad  ?>">
                      <?= $dp->descripcion  ?>
                    </label>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label>5. ¿Qué opción de estudios fue la Ut?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="opcion_estudio" checked value="1">Primera</label>
                <label class="radio-inline"><input type="radio" name="opcion_estudio" value="2">Segunda</label>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label>6. Medio principal por el cual se enteró de la UT y que más influyó en su ingreso:</label>
              <div class="row">
                <?php foreach ($medios_comunicacion as $mc) : ?>
                  <div class="form-check form-check-inline col-md-4">
                    <input class="form-check-input mcomunica" name="mcomunica" type="radio" <?= $mc->cve_medio == 7 ? "checked" : ""  ?> value="<?= $mc->descripcion  ?>" id="mc<?= $mc->cve_medio  ?>">
                    <label class="form-check-label" for="mc<?= $mc->cve_medio  ?>">
                      <?= $mc->descripcion  ?>
                    </label>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
          <!-- <div class="row form-group">
              <div class="col-md-4">
                <label>7. ¿Usted trabaja?</label>
                <div>
                  <label class="radio-inline"><input type="radio" name="sitrabaja" data-p="p7" data-pi="empresa_trabaja" class="habilita_pregunta" value="1">Si</label>
                  <label class="radio-inline"><input type="radio" name="sitrabaja" data-p="p7" data-pi="empresa_trabaja" class="habilita_pregunta" checked value="0">No</label>
                </div>
              </div>
              <div class="col-md-8 d-none" id="p7">
                <label>Empresa donde trabaja</label>
                <input type="text" name="empresa_trabaja" id="empresa_trabaja" disabled class="form-control mayus" maxlength="80" required title="Escribe el nombre">
              </div>
            </div>-->
        </fieldset>
        <fieldset>
          <div class="row form-group">
            <div class="col-12">
              <button type="submit" id="save-btn" class="btn btn-send pull-right">Guardar</button>
            </div>
          </div>
        </fieldset>
      </form>
      <br />
      <p class="font-weight-bold d-none" id="ficha-pago">¡Ya eres aspirante! <a target="_blank" href="" id="link-ficha-pago" class="btn btn-link">Imprime tú ficha de pago</a></p>
    </div>
    <div class="row ml-form">
      <p class="reduced">Si tienes dudas sobre las carreras o registro de la información puedes enviar un correo a: <strong>eestrada@utdelacosta.edu.mx</strong> ó <strong>inscripciones@utdelacosta.edu.mx</strong></p>
    </div>
  </div>
  </div>

  <?php $this->load->view('footer'); ?>
  <?php $this->load->view('jscripts'); ?>
  <script src="<?php echo base_url(); ?>js/jquery.mask.min.js"></script>
  <script>
    $(document).ready(function() {
      var today = new Date();
      var year = today.getFullYear();
      $("#fecha_nac").val(year-18+"-01-01");
      $("#fecha_nac").attr("min",year-50+"-01-01");
      $("#fecha_nac").attr("max",year-16+"-12-31");
      $('.telefono').mask('000-000-0000');
      $(".mayus").focusout(function() {
        this.value = this.value.toUpperCase();
      });
      $("#turno").change(function() {
        var turno = $(this).val();
        if (turno == "2") {
          alert("Esta opción es exclusiva para trabajadores");
          $("#empresa_trabaja").attr("required", "required");
        } else {
          $("#empresa_trabaja").removeAttr("required", "required");
        }
        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/get_carreras_turno",
          data: "cve_turno=" + turno,
          error: function() {},
          success: function(data) {
            $("#carrera").html(data);
          }
        });
      });
      $("#cveEstado").change(function() {
        var estado = $(this).val();
        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/get_municipios",
          data: "cve_estado=" + estado,
          error: function() {},
          success: function(data) {
            $("#cveMunicipio").html(data);
            $("#cveLocalidad").html("<option>...</option>");
          }
        });
      });
      $("#cveMunicipio").change(function() {
        var municipio = $(this).val();
        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/get_localidades",
          data: "cve_municipio=" + municipio,
          error: function() {},
          success: function(data) {
            $("#cveLocalidad").html(data);
          }
        });
      });
      //Guardamos el aspirante
      $("#save-aspirante").submit(function(e) {
        e.preventDefault();
        var estado = $('select#cveEstado option:selected').text();
        var turno = $('select#turno option:selected').val();
        var municipio = $('select#cveMunicipio option:selected').text();
        var localidad = $('select#cveLocalidad option:selected').text();
        var tiene_discapacidad = $('input:radio[name=discapacidad]:checked').val();
        var si_trabaja = $('input:radio[name=sitrabaja]:checked').val();

        if (($("#empresa_trabaja").val().trim() == "" || $("#empresa_trabaja").val() == "NINGUNA" || $("#empresa_trabaja").val() == "NINGUN" || $("#empresa_trabaja").val() == "NO") && (turno=="2")) {
          alert("¡La empresa donde trabaja es requerida para completar el registro!");
          $("#empresa_trabaja").focus();
          return false;
        }

        var discapacidades = "";
        $(".dades").each(function() {
          if ($(this).is(":checked")) {
            discapacidades += $(this).val() + ",";
          }
        });
        discapacidades = discapacidades.substring(0, discapacidades.length - 1);

        var medios_comunicacion = $("input:radio[name=mcomunica]:checked").val();

        if (tiene_discapacidad == "1" && discapacidades <= 0) {
          alert("Selecciona al menos una discapacidad");
          return false;
        }

        if (medios_comunicacion == "Otro") {
          medios_comunicacion = prompt("Escribe el otro medio por el cual te enteraste:", "");
          if (medios_comunicacion == null) {
            alert("Escribe un medio, da clic en guardar nuevamente");
            return false;
          }
        }

        $("#save-btn").attr("disabled", true);
        var parametros = {
          "nombre": $("#nombre").val(),
          "apaterno": $("#apaterno").val(),
          "amaterno": $("#amaterno").val(),
          "bachillerato": $("#bachillerato").val(),
          "localidad_bachillerato": $("#localidad_bachillerato").val(),
          "carrera": $("#carrera").val(),
          "turno": turno,
          "empresa_trabaja": $("#empresa_trabaja").val(),
          "tutor": $("#tutor").val(),
          "tutora": $("#tutora").val(),
          "localidad": $("#cveLocalidad").val(),
          "calle": $("#calle").val(),
          "numero": $("#numero_exterior").val(),
          "colonia": $("#colonia").val(),
          "nss": $("#nss").val(),
          "curp": $("#curp").val(),
          "estado_civil": $("#estado_civil").val(),
          "telefono_fijo": $("#telefono").val(),
          "telefono_celular": $("#telefono2").val(),
          "email": $("#email").val(),
          "promovido": $('input:radio[name=promovido]:checked').val(),
          "alumno_promotor": $("#alumno_promotor").val(),
          "tiene_hijos": $('input:radio[name=hijos]:checked').val(),
          "no_hijos": $("#numero_hijos").val(),
          "lengua_indigena": $('input:radio[name=lengua_ind]:checked').val(),
          "tiene_discapacidad": tiene_discapacidad,
          "discapacidades": discapacidades,
          "opcion_estudio": $('input:radio[name=opcion_estudio]:checked').val(),
          "medio_entero": medios_comunicacion,
          "sexo": $('#sexo option:selected').val(),
          "fecha_nacimiento": $("#fecha_nac").val()
        };

        var domicilio_completo = "CALLE: " + $("#calle").val() + ", NO. " + $("#numero_exterior").val() + ", " + "COL. " + $("#colonia").val() + ", LOC. " + localidad + ", MPIO. " + municipio + ", EDO. " + estado;

        $.ajax({
          type: "post",
          url: "<?php echo base_url(); ?>" + "index.php/aspirante/nuevo",
          data: parametros,
          error: function(e) {
            error_peticion(e);
          },
          success: function(data) {
            var datos = data.split("-");
            console.log(datos);
            if (datos[0] == "created") {
              $("#mensaje").removeClass("d-none");
              $("#save-aspirante").addClass("d-none");
              $(".cita").addClass("d-none");
              $("#requisito-inscripcion").addClass("d-none");
              //Una vez guardados los datos reenviamos un email
              var parametros2 = {
                "cve_aspirante": datos[1],
                "nombre": $("#apaterno").val() + " " + $("#amaterno").val() + " " + $("#nombre").val(),
                "bachillerato": $("#bachillerato").val(),
                "localidad_bachillerato": $("#localidad_bachillerato").val(),
                "carrera": $("#carrera option:selected").text(),
                "turno": turno=="1" ? "Escolarizado": "Semiescolarizado",
                "empresa_trabaja": $("#empresa_trabaja").val(),
                "domicilio": domicilio_completo,
                "nss": $("#nss").val(),
                "curp": $("#curp").val(),
                "estado_civil": $("#estado_civil").val(),
                "telefono_fijo": $("#telefono").val(),
                "telefono_celular": $("#telefono2").val(),
                "email": $("#email").val(),
                "tutor": $("#tutor").val(),
                "tutora": $("#tutora").val(),
                "promovido": $('input:radio[name=promovido]:checked').val(),
                "alumno_promotor": $("#alumno_promotor").val(),
                "tiene_hijos": $('input:radio[name=hijos]:checked').val(),
                "no_hijos": $("#numero_hijos").val(),
                "lengua_indigena": $('input:radio[name=lengua_ind]:checked').val(),
                "tiene_discapacidad": tiene_discapacidad,
                "discapacidades": discapacidades,
                "opcion_estudio": $('input:radio[name=opcion_estudio]:checked').val(),
                "medio_entero": medios_comunicacion,
                "actualizacion": false
              };

              $.ajax({
                type: "post",
                url: "http://201.155.208.37/dexter/emailaspirante",
                data: parametros2,
                error: function() {},
                success: function(html) {}
              });
              //Agregamos la URL de dirección 
              $("#link-ficha-pago").attr('href', "<?php echo site_url('aspirante/ficha_aspirante'); ?>" + "/" + datos[1]);
              $("#ficha-pago").removeClass('d-none');
              $("#mensaje").removeClass('alert-danger');
              $("#mensaje").removeClass('alert-warning');
              $("#mensaje").addClass('alert-success');
              $("#mensaje").html("Hemos recibido la información, en breve personal de la Universidad se pondrá en contacto contigo. <strong>Descarga</strong> tú ficha, <strong>realiza</strong> el pago y <strong>envíala</strong> escaneada a cualquiera de los correos de abajo.");
              //$('#save-aspirante').trigger("reset"); 
            } else {
              error_peticion2("Los datos ya existen en un pre-registro. Considera <a href='<?php echo site_url("/aspirante/recuperacion"); ?>' title='Recuperar ficha'>recuperar tu ficha</a> ó comunícate a la cuenta de correo electrónico inscripciones@utdelacosta.edu.mx para cambio de carrera o modalidad.");
            }
            $("#save-btn").removeAttr("disabled");
          }
        });
      });

      function error_peticion(data) {
        $("#mensaje").removeClass("d-none");
        $("#mensaje").removeClass('alert-success');
        $("#mensaje").removeClass('alert-danger');
        $("#mensaje").addClass('alert-warning');
        $("#mensaje").text(data);
      }

      function error_peticion2(data) {
        $("#mensaje").removeClass("d-none");
        $("#mensaje").removeClass('alert-success');
        $("#mensaje").removeClass('alert-danger');
        $("#mensaje").addClass('alert-warning');
        $(".cita").addClass("d-none");
        $("#requisito-inscripcion").addClass("d-none");
        $("#mensaje").html(data);
      }
      $(".habilita_pregunta").click(function() {
        var val = $(this).val();
        var pregunta = $(this).attr("data-p");
        var input = $(this).attr("data-pi");
        if (val == "1") {
          mostrar(pregunta, input);
        } else {
          ocultar(pregunta, input);
        }
      });
      $(".discapa").click(function() {
        var val = $(this).val();
        if (val == "1") {
          $("#p4").show(500);
        } else {
          $("#p4").hide(500);
        }
      });

      function ocultar($id, $afectado) {
        $("#" + $id).hide(500);
        $("#" + $afectado).attr("disabled", true);
        $("#" + $afectado).removeAttr("required");
      }

      function mostrar($id, $afectado) {
        $("#" + $id).show(500);
        $("#" + $afectado).removeAttr("disabled");
        $("#" + $afectado).attr("required", true);
      }
    });
  </script>
</body>

</html>