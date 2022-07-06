<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8" />
    <title>Educación continua: Ficha de pago</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('scripts') ?>
</head>

<body>
    <?php $this->load->view('navigation') ?>

    <div class="container section">
        <div class="row bg-gray section-title">
            <div class="col-md-12">
                <h2>EDUCACIÓN CONTINUA: CONSULTA DE FICHA DE PAGO</h2>
            </div>
        </div>
        <br />
        <div class="row">
            <p class="green ">
                Ingresa tu matrícula, sino la tienes consúltala con el área de Educación continua.
            </p>
            <form class="form-general">
                <div class="form-group col-md-12">
                    <input type="text" id="search" class="form-control" placeholder="ING0000022">
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
        <input type="hidden" value="<?php echo $server; ?>" id="url_server" />
        <br />
    </div>
    </div>

    <?php $this->load->view('footer'); ?>
    <?php $this->load->view('jscripts'); ?>
    <script>
        $(document).ready(function() {
            $("#btnBuscar").click(function() {
                var matricula = $("#search").val();
                if ($("#search").val() == "") {
                    $("#mensaje").text("No se ha especificado nada.");
                    return false;
                } else {
                    var URL = $("#url_server").val();
                    fetch(URL + "/apisearch?matricula=" + matricula, {
                            method: 'GET',
                            headers: {
                                "Content-Type": "text/plain"
                            }
                        })
                        .then(res => res.json())
                        .then(datos => {
                            //console.log(datos);
                            if (datos.error == false) {
                                $("#fichas").html("");
                                for (var i = 0; i < datos.personas.length; i++) {
                                    var aside = $("<aside />", {
                                        "html": '<p><strong>Nombre: '+datos.personas[i].nombre+'</strong></p>'
                                    });
                                    var p = $("<p />", {
                                        "html": '<strong>Link de ficha: <a target="_blank" href="http://siest.utdelacosta.edu.mx/dexter/document/ficha_pago.jsp?id='+datos.personas[i].cve_persona+'">Imprimir</a></strong><hr />'
                                    });
                                    var p2 = $("<p />", {
                                        "html": '<strong>Sin adeudos</strong><hr />'
                                    });
                                    aside.append(datos.personas[i].pago==false ? p:p2);
                                    $("#fichas").append(aside);
                                }
                            } else {
                                $("#fichas").html("Verifica la matrícula, no se encontraron datos");
                            }
                        }).catch(err => alert("ERROR al consultar la matrícula" + err));
                }
            });
        });
    </script>
</body>

</html>