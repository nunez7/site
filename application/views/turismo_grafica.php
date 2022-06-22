<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8" />
    <title>Turismo Gráfica</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- OG TAGS -->
    <meta property="og:title" content="Turismo Nayarit" />
    <?php $this->load->view('scripts') ?>
</head>

<body class="turismo-banner">
    <?php $this->load->view('jscripts'); ?>
    <script>
        var labels = [], datos = [];
        var number = 0;
        <?php foreach ($edades as $seg) : ?>
            labels[number] = '<?= $seg->rango ?>';
	        datos[number] = <?= $seg->total ?>;
            number++;
        <?php endforeach ?>
    </script>
<!--     <div class="container ep-turismo">
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <img src="../../img/gobierno/NayaritColores.png" width="70%" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-xs-4 col-md-4">
                <img src="../../img/gobierno/Marca_turistica.png" width="70%" class="img-fluid align-self-center align-middle" alt="Responsive image">
            </div>
            <div class="col-xs-4 col-md-4">
                <img src="../../img/gobierno/EscudoHorizontal.png" width="70%" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>  -->   
    
    <div class="container m-top-lg">
        <div class="section-title">
        <div class="col-md-12">
            <h2>RESULTADOS DE ENCUESTA</h2>
        </div>
        </div>
        <p></p>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                 <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="">
                                <th>Edades</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($edades as $seg) : ?>
                                <tr>
                                    <td><?= $seg->rango ?></td>
                                    <td><?= $seg->total ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    
    <script src="<?php echo base_url(); ?>js/vendor/chart.min.js"></script>                            
    <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Cantidad de veces seleccionado',
            data: datos,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>

</html>