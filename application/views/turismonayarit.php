<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8" />
    <title>Turismo Nayarit</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- OG TAGS -->
    <meta property="og:title" content="Turismo Nayarit" />
    <?php $this->load->view('scripts') ?>
</head>

<body class="turismo-banner">
    <?php $this->load->view('jscripts'); ?>

    <div class="container ep-turismo">
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <img src="../img/gobierno/NayaritColores.png" width="70%" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-xs-4 col-md-4 barra-lateral">
                <img src="../img/gobierno/Marca_turistica.png" width="70%" class="img-fluid align-self-center align-middle" alt="Responsive image">
            </div>
            <div class="col-xs-4 col-md-4">
                <img src="../img/gobierno/EscudoHorizontal.png" width="70%" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
    <div class="container m-top-lg ">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div align="center" class="embed-responsive embed-responsive-16by9" id="vide-oc">
                    <video id="video" controls preload class="embed-responsive-item">
                        <source src="../video/prueba.mp4" type="video/mp4" />
                        <source src="../video/prueba.webm" type="video/webm" />
                        <source src="../video/prueba.ogv" type='video/ogg' />
                    </video>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <button style="margin-right: 15px;" onclick="reload()" class="btn btn-tinto">Reiniciar </button>
            <button style="margin-right: 15px;" id="play-pau" onclick="playPause()" class="btn btn-tinto">Reproducir/ pausar</button>
            <a class="d-none" id="link-contenido" href="#video-media">Ir al contenido</a>
        </div>
        <br />
        <div id="video-media" class="d-none">
            <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&url=http://www.utdelacosta.edu.mx/documentos/turismonay/manual1.pdf#toolbar=0&scrollbar=0" frameBorder="0" scrolling="auto" style="height: 500px;" width="100%"></iframe>
        </div>
    </div>
    <script>
        var video = document.getElementById("video");
        $("#video").on('ended', function() {
            $("#video-media").show(300);
            $("#link-contenido").click();
            setTimeout(function() {
                $("#link-contenido").click();
                $("#vide-oc, #play-pau").addClass("d-none");
            }, 500);
        });

        function playPause() {
            if (video.paused)
                video.play();
            else
                video.pause();
        }

        function reload() {
            $("#vide-oc, #play-pau").removeClass("d-none");
            $("#video-media").hide(500);
            video.pause();
            video.currentTime = 0;
            video.load();
            video.play();
        }
    </script>
</body>

</html>