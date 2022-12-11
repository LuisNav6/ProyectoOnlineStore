<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

    <title>Graficas</title>
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
  </head>
  <body>
              <div class="col-lg-12" style="padding-top:20px">
                <div class="card">
                    <center>
             <div class="card-header">
                   GRAFICA VENTAS DE ARTICULOS DEPORTIVOS
                   </div>
                   </center>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoBar()">Ver grafica en modo horizontal</button>
                          </div>
                          <br>
                          <br>
                            <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoBarHorizontal()">Ver grafica en modo vertical</button>
                       </div>
                       <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoPie()">Ver grafica en modo circular </button>
                            </div>
                            <br>
                       <canvas id="myChart" width="400" height="400"></canvas>
                  </div>
             
               </div>
        </div>
    </div>

  </body>
</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    
    <script>
        
        function CargarDatosGraficoBar(){
            $.ajax({
                url:'controlador_grafico.php',
                type:'POST'
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: titulo,
        datasets: [{
            label: '# of Votes',
            data: cantidad,
            backgroundColor: [
                'rgba(255, 30, 30, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(255, 242, 5, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                'rgba(255, 159, 64, 0.4)',
                'rgba(201, 76, 76, 0.4)',
                'rgba(66, 255, 255, 0.4)',
                'rgba(34, 255, 30, 0.4)',
                'rgba(14, 1, 1, 0.4)'
            ],
            borderColor: [
                'rgba(255, 30, 30, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(242, 255, 5, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(201, 76, 76, 1)',
                'rgba(66, 255, 255, 1)',
                'rgba(34, 255, 30, 1)',
                'rgba(14, 1, 1, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
            })
        }
        function CargarDatosGraficoBarHorizontal(){
            $.ajax({
                url:'controlador_grafico.php',
                type:'POST'
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: titulo,
        datasets: [{
            label: '# of Votes',
            data: cantidad,
            backgroundColor: [
                'rgba(255, 30, 30, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(255, 242, 5, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                'rgba(255, 159, 64, 0.4)',
                'rgba(201, 76, 76, 0.4)',
                'rgba(66, 255, 255, 0.4)',
                'rgba(34, 255, 30, 0.4)',
                'rgba(14, 1, 1, 0.4)'
            ],
            borderColor: [
                'rgba(255, 30, 30, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(242, 255, 5, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(201, 76, 76, 1)',
                'rgba(66, 255, 255, 1)',
                'rgba(34, 255, 30, 1)',
                'rgba(14, 1, 1, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
            })
        }
    
        function CargarDatosGraficoPie(){
            $.ajax({
                url:'controlador_grafico.php',
                type:'POST'
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: titulo,
        datasets: [{
            label: '# of Votes',
            data: cantidad,
            backgroundColor: [
                'rgba(255, 30, 30, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(255, 242, 5, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                'rgba(255, 159, 64, 0.4)',
                'rgba(201, 76, 76, 0.4)',
                'rgba(66, 255, 255, 0.4)',
                'rgba(34, 255, 30, 0.4)',
                'rgba(14, 1, 1, 0.4)'
            ],
            borderColor: [
                'rgba(255, 30, 30, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(242, 255, 5, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(201, 76, 76, 1)',
                'rgba(66, 255, 255, 1)',
                'rgba(34, 255, 30, 1)',
                'rgba(14, 1, 1, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
            })
        }
    </script>