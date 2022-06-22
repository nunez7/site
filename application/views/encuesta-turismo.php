<!DOCTYPE html>
<html class="no-js" lang="es">

<style>
  #save-btn {
  background-image: url('../../img/boton_encuesta_turistica.png');
  background-size: cover;
  cursor: pointer;
  width:246px; 
  height:67px;
  border: solid 0px;
  border-radius: 50px;
}
.card-image{
  padding-top: 20px
}
#save-data{
  text-align:center; 
  padding-top: 20px;
}
.navbar{
  height:91px;
}
.encuesta{
  padding-top: 30px;
}
</style>
<head>
    <meta charset="utf-8" />
    <title>Turismo Nayarit - Encuesta</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- OG TAGS -->
    <meta property="og:title" content="Turismo Nayarit" />
    <?php $this->load->view('scripts') ?>
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="turismo-banner">
    <?php $this->load->view('jscripts'); ?>
    <div class="row encuesta">
        <div class="col s12 m4 l2"></div>
        <div class="col s12 l8">
          <div class="card">

            <div class="card-image ">              
              <div class="col s6">
                <img src="../../img/gobierno/tianguis_turistico_mexico.png" >                 
              </div>
              <div class="col s6">
                <img src="../../img/gobierno/Marca_turistica.png" > 
              </div>
            </div>

            <div class="card-content">
              <!-- form -->
              <div class="row">
                <form  method="POST" class="col s12" id="save-data">
                    <!-- imput -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="nombre_completo" name="nombre_completo" type="text" class="validate mayus" required>
                        <label for="nombre_completo" data-error="wrong" data-success="right">Nombre Completo</label>
                      </div>
                    </div>
                    <!-- imput -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="edad" name="edad" type="text" class="validate numero" required value="18" min="5" max="99" maxlength="2">
                        <label for="edad" data-error="wrong" data-success="right">Edad</label>
                      </div>
                    </div>
                    <!-- imput -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="procedencia" name="procedencia" type="text" class="validate mayus" required value="">
                        <label for="procedencia" data-error="wrong" data-success="right">Procedencia</label>
                      </div>
                    </div>
                    <!-- imput -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="tel" name="tel" type="text" class="validate numero" required value="" maxlength="10" minlength="10">
                        <label for="tel" data-error="wrong" data-success="right">Número de teléfono (10 dígitos)</label>
                      </div>
                    </div>
                   <!-- imput -->
                   <div class="row">
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate" required value="">
                      <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                  </div>
                  <!--  -->  
                  <input type="submit" id="save-btn" value=""></input>             
                </form>
                
              </div>
              <div class="row">
                <p class="alert d-none" id="mensaje"></p>
              </div>
              <!-- end form -->
            </div>             
          </div>
        </div>
        <div class="col s12 m4 l2"></div>
      </div>
      <!--JavaScript at end of body for optimized loading-->      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(".mayus").focusout(function() {
            this.value = this.value.toUpperCase();
        });

        $(".numero").bind('keypress', function(event) {
          var regex = new RegExp("^[0-9]+$");
          var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
          if (!regex.test(key)) {
            event.preventDefault();
            return false;
          }
        });

        $("#save-data").submit(function(e){
          e.preventDefault();

          const formData = new FormData(e.target);          
          var URL = "<?php echo base_url(); ?>" + "index.php/turismonayarit/savetest";

          fetch(URL, {
            method : "POST",
            body : formData
          }) 
          .then( res => res.text() )
          .then(function(res){
              if (res == "ok") {
                $("#mensaje").removeClass("d-none");
                $("#save-btn").addClass("d-none");                
                $("#save-data input,#save-data select").attr("disabled", true);
                $("#mensaje").removeClass('alert-warning');
                $("#mensaje").addClass('alert-success');
                $("#mensaje").html("¡Muchas gracias... <br/> Te esperamos pronto en <b>Nayarit</b>!");                
              } else {
                error_peticion("Los datos ya existen en un registro.");
              }
              $("#save-btn").removeAttr("disabled")
          })
          .catch(function(err){
              $("#mensaje").text("Error al guardar:"+err),
              $("#mensaje").removeClass("d-none"),
              $("#mensaje").removeClass('alert-success'),
              $("#mensaje").addClass('alert-warning')
          });  

         });
        
        function error_peticion(data) {
            $("#mensaje").removeClass("d-none");
            $("#mensaje").removeClass('alert-success');
            $("#mensaje").addClass('alert-warning');
            $("#mensaje").text(data);
        }

    </script>
</body>

</html>

