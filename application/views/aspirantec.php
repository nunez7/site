<!DOCTYPE html>
<html class="no-js" lang="es" <head>
<meta charset="utf-8" />
<title>Educación continua: Registro</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->load->view('scripts') ?>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #075c01;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
</head>

<body>
    <?php $this->load->view('navigation') ?>

    <div class="container section">
        <div class="row bg-gray section-title">
            <div class="col-md-12">
                <h2>EDUCACIÓN CONTINUA: REGISTRO</h2>
            </div>
        </div>
        <br />
        <div class="row ml-form">
            <p class="green cita">
                * Ingresa tus datos personales y da clic en el botón guardar.
            </p>
            <p class="reduced">Es importante el registro de un email valido (@gmail.com de preferencia), ya que se enviará tu ficha de pago.</p>
            <div class="row" id="loading">
                <div class="">
                    <div class="loader center-block"></div>
                    <div class="center-block" style="text-align: center;">Cargando... </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <p class="alert d-none" id="mensaje"></p>
                </div>
            </div>
            <form action="" method="post" class="form-general d-none" id="save-aspirante" accept-charset="utf-8">
                <fieldset class="form">
                    <legend>Datos personales</legend>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="nombreP">Nombre(s)</label>
                            <input type="text" maxlength="50" name="nombreP" autofocus title="Nombre" class="form-control aMayuscula" id="nombreP" required title="Nombre" />
                        </div>
                        <div class="col-md-4">
                            <label for="apPaterno">Primer apellido</label>
                            <input type="text" maxlength="30" class="form-control aMayuscula" title="Primer apellido" name="apPaterno" id="apPaterno" required title="Apellido paterno" />
                        </div>
                        <div class="col-md-4">
                            <label for="apMaterno">Segundo apellido</label>
                            <input type="text" maxlength="30" class="form-control aMayuscula" title="Segundo apellido" name="apMaterno" id="apMaterno" title="Apellido materno" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="Femenino">Sexo</label>
                            <select name="sexo" required class="form-control" title="Tu sexo">
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required title="Fecha de nacimiento" />
                        </div>
                        <div class="col-md-4">
                            <label for="curp">CURP</label>
                            <input type="text" maxlength="18" class="aMayuscula form-control" name="curp" id="curp" pattern="[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[0-9]{2}" title="Escribe una CURP valida" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" maxlength="13" class="form-control telefono" required id="telefono" name="telefono" placeholder="323-235-8000" />
                        </div>
                        <div class="col-md-4">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" required placeholder="usuario@ejemplo.com" title="Tu e-mail" />
                        </div>
                        <div class="col-md-4">
                            <label>Matrícula</label>
                            <input class="form-control" readonly value="" id="mimatricula" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="curso">Curso de educación continua</label>
                            <select name="curso" id="curso" class="form-control" required title="Selecciona un curso">
                                <option value="1">Inglés</option>
                                <option value="2">TOELF</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="grupo">Grupo</label>
                            <select name="grupo" id="grupo" class="form-control" required title="Selecciona un grupo">

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="periodo">Periodo a ingresar</label>
                            <select name="periodo" id="periodo" class="form-control" required title="Selecciona un periodo">

                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form">
                    <legend>Domicilio</legend>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="cvePaisA">País</label>
                            <select name="cvePaisA" id="cvePaisA" required class="form-control">

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cveEstadoA">Estado</label>
                            <select name="cveEstadoA" id="cveEstadoA" class="form-control" required>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cveMunicipioA">Municipio</label>
                            <select name="cveMunicipioA" id="cveMunicipioA" required class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label>Localidad</label>
                            <select name="cveLocalidad" id="cveLocalidad" class="form-control" required>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="calle">Calle</label>
                            <input type="text" name="calle" id="calle" class="form-control aMayuscula" placeholder="Puebla" maxlength="40" required />
                        </div>
                        <div class="col-md-4">
                            <label for="numero">Número</label>
                            <input type="number" name="numero" class="form-control" id="numero" value="0" min="0" max="1000" maxlength="4" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" id="colonia" class="form-control aMayuscula" maxlength="40" placeholder="Centro" required />
                        </div>
                        <input type="hidden" name="referencias" value="Ninguno" />
                        <input type="hidden" value="Ninguno" name="comentarios" />
                        <input type="hidden" value="Disponible" name="horario" />
                    </div>
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
            <p class="font-weight-bold d-none" id="ficha-pago">¡Registro completado! <a target="_blank" href="" id="link-ficha-pago" class="btn btn-link">Imprime tú ficha de pago</a></p>
        </div>
        <div class="row ml-form">
            <p class="reduced">Si tienes dudas sobre los cursos puedes enviar un correo a Educación Continua: <strong> educacioncontinua@utdelacosta.edu.mx </strong> o un mensaje al 323-135-5219</p>
        </div>
        <input type="hidden" value="<?php echo $server; ?>" id="url_server" />
    </div>
    </div>

    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('jscripts'); ?>
    <script src="<?php echo base_url(); ?>js/jquery.mask.min.js"></script>
    <script>
        function cargarPeriodos() {
            var URL = $("#url_server").val();
            fetch(URL + "/apiperiodos", {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error === false) {
                        if (datos.habilitado === false) {
                            $("#loading").addClass("d-none");
                            $(".cita").addClass("d-none");
                            $("#mensaje").removeClass("d-none");
                            $("#save-aspirante").addClass("d-none");
                            $("#mensaje").addClass('alert-warning');
                            $("#mensaje").html("El periodo de registro ha finalizado.");
                        } else {
                            for (var i = 0; i < datos.periodos.length; i++) {
                                $('#periodo').append($('<option>', {
                                    value: datos.periodos[i].cve_periodo,
                                    text: datos.periodos[i].nombre
                                }));
                                $('#grupo').append($('<option>', {
                                    value: datos.periodos[i].cve_grupo,
                                    text: datos.periodos[i].grupo
                                }));
                                $("#mimatricula").val(datos.periodos[i].matricula);
                            }
                            cargarPaises();
                        }
                    }
                }).catch(err => {
                    $("#url_server").val("http://172.16.64.2:8080/dexter");
                    cargarPeriodos2();
                });

        }

        function cargarPeriodos2() {
            $("#loading").addClass("d-none");
            var URL = $("#url_server").val();
            fetch(URL + "/apiperiodos", {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error === false) {
                        if (datos.habilitado === false) {
                            $("#loading").addClass("d-none");
                            $(".cita").addClass("d-none");
                            $("#mensaje").removeClass("d-none");
                            $("#save-aspirante").addClass("d-none");
                            $("#mensaje").addClass('alert-warning');
                            $("#mensaje").html("El periodo de registro ha finalizado.");
                        } else {
                            for (var i = 0; i < datos.periodos.length; i++) {
                                $('#periodo').append($('<option>', {
                                    value: datos.periodos[i].cve_periodo,
                                    text: datos.periodos[i].nombre
                                }));
                                $('#grupo').append($('<option>', {
                                    value: datos.periodos[i].cve_grupo,
                                    text: datos.periodos[i].grupo
                                }));
                                $("#mimatricula").val(datos.periodos[i].matricula);
                            }
                            cargarPaises();
                        }
                    }
                }).catch(err => alert("ERROR al cargar los periodos" + err));

        }

        function cargarPaises() {
            $("#save-aspirante").removeClass("d-none");
            var URL = $("#url_server").val();
            fetch(URL + "/apipaises", {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error == false) {
                        for (var i = 0; i < datos.paises.length; i++) {
                            $('#cvePaisA').append($('<option>', {
                                value: datos.paises[i].cve_pais,
                                text: datos.paises[i].nombre
                            }));
                        }
                        $("#cvePaisA option[value='127']").attr("selected", true);
                        cargarEstados(127);
                    }
                }).catch(err => alert("ERROR al cargar los países" + err));
        }

        function cargarEstados(id) {
            var URL = $("#url_server").val();
            fetch(URL + "/apiestados?cvePais=" + id, {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error == false) {
                        $('#cveEstadoA').html("");
                        $('#cveEstadoA').append($('<option>', {
                            value: "",
                            text: "Selecciona "
                        }));
                        for (var i = 0; i < datos.estados.length; i++) {
                            $('#cveEstadoA').append($('<option>', {
                                value: datos.estados[i].cve_estado,
                                text: datos.estados[i].nombre
                            }));
                        }
                        $("#cveEstadoA option[value='18']").attr("selected", true);
                        $("#loading").addClass("d-none");
                        cargarMunicipios(18);
                    }
                }).catch(err => alert("ERROR al cargar los estados" + err));
        }

        function cargarMunicipios(id) {
            var URL = $("#url_server").val();
            fetch(URL + "/apimunicipios?cveEstado=" + id, {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error == false) {
                        $('#cveMunicipioA').html("");
                        $('#cveMunicipioA').append($('<option>', {
                            value: "",
                            text: "Selecciona "
                        }));
                        for (var i = 0; i < datos.municipios.length; i++) {
                            $('#cveMunicipioA').append($('<option>', {
                                value: datos.municipios[i].cve_municipio,
                                text: datos.municipios[i].nombre
                            }));
                        }
                        $("#cveMunicipioA option[value='16']").attr("selected", true);
                        cargarLocalidades(16);
                    }
                }).catch(err => alert("ERROR al cargar los municipios" + err));
        }

        function cargarLocalidades(id) {
            var URL = $("#url_server").val();
            fetch(URL + "/apilocalidades?cveMunicipio=" + id, {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    if (datos.error == false) {
                        $('#cveLocalidad').html("");
                        $('#cveLocalidad').append($('<option>', {
                            value: "",
                            text: "Selecciona "
                        }));
                        for (var i = 0; i < datos.localidades.length; i++) {
                            $('#cveLocalidad').append($('<option>', {
                                value: datos.localidades[i].cve_asentamiento,
                                text: datos.localidades[i].nombre
                            }));
                        }
                        $("#cveLocalidad option[value='543']").attr("selected", true);
                    }
                }).catch(err => alert("ERROR al cargar las localidades" + err));
        }

        function consultaMatricula(curso) {
            var URL = $("#url_server").val();
            fetch(URL + "/getmatricula?cveCurso=" + curso, {
                    method: 'GET',
                    headers: {
                        "Content-Type": "text/plain"
                    }
                })
                .then(res => res.json())
                .then(datos => {
                    //console.log(datos);
                    if (datos.error == false) {
                        $("#mimatricula").val(datos.matricula);
                    }
                }).catch(err => alert("ERROR al consultar la matrícula" + err));
        }
        $(document).ready(function() {
            cargarPeriodos();
            var today = new Date();
            var year = today.getFullYear();
            $("#fechaNacimiento").val(year - 10 + "-01-01");
            $("#fechaNacimiento").attr("min", year - 50 + "-01-01");
            $("#fechaNacimiento").attr("max", year - 10 + "-12-31");
            $('.telefono').mask('000-000-0000');
            $(".aMayuscula").focusout(function() {
                this.value = this.value.toUpperCase();
            });

            $("#cveEstadoA").change(function() {
                var estado = $(this).val();
                cargarMunicipios(estado);
                $("#cveLocalidad").html("");
            });
            $("#cveMunicipioA").change(function() {
                var municipio = $(this).val();
                cargarLocalidades(municipio);
            });
            $("#curso").change(function() {
                var curso = $(this).val();
                consultaMatricula(curso);
            });
            $("#fechaNacimiento").focusout(function() {
                var nombre = $("#nombreP").val();
                var apPaterno = $("#apPaterno").val();
                var apMaterno = $("#apMaterno").val();
                var URL = $("#url_server").val();
                if ($("#nombreP").val() !== "" && $("#apPaterno").val() !== "") {
                    $.ajax({
                        type: "get",
                        url: URL + "/AgregarAlumnoEduCont",
                        data: "nombre=" + nombre + "&paterno=" + apPaterno + "&materno=" + apMaterno,
                        success: function(respuesta) {
                            if (respuesta == 0) {} else {
                                alert("Ya existe un registro previo, contacta al área de educación continua para mayor información");
                                return false;
                            }
                        },
                        error: function() {
                            alert("Algo salío mal");
                        }
                    });
                }
            });
            $("#save-aspirante").submit(function(e) {
                e.preventDefault();
                var URL = $("#url_server").val();
                $.post(URL + "/AgregarAlumnoEduCont", $(this).serialize(), res).fail(error);

                function res(data) {
                    var datos = data.split("-");
                    if (datos[1] === "exist") {
                        error_peticion2("Ya existe un registro con esos datos, contacta a educación continua");
                    } else if (datos[1] === "created") {
                        $(".cita").addClass("d-none");
                        $("#mensaje").removeClass("d-none");
                        $("#save-aspirante").addClass("d-none");
                        $("#save-aspirante")[0].reset();
                        $("#link-ficha-pago").attr('href', "http://" + datos[3] + ":8080/dexter/document/ficha_pago.jsp?id=" + datos[2]);
                        $("#ficha-pago").removeClass('d-none');
                        $("#mensaje").removeClass('alert-danger');
                        $("#mensaje").removeClass('alert-warning');
                        $("#mensaje").addClass('alert-success');
                        $("#mensaje").html("Hemos recibido la información, cubre el costo del curso con la referencia que se te envió a tu email o <strong>Descarga</strong> tú ficha.");
                    } else if (datos[1] === "grupo") {
                        error_peticion2("No existen grupos en ese periodo y en ese nivel, por favor selecciona otro");
                    } else {
                        console.log("Algo salió feo :( -- " + data);
                        alert("Ocurrió un error al procesaro los datos. " + data);
                    }
                }

                function error(data) {
                    // console.log(data);
                    alert("No se pudo conectar con el servidor.");
                }
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
        });
    </script>
</body>

</html>