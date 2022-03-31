<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <title>Monitoreo</title>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container pt-2 pb-2">
            <img src="{{asset('images/logo.png')}}" style="width: 4%" alt="Logo Lion Script" />
            <div class="m-2"></div>
            <a class="navbar-brand">HUTEMP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{action('DatosController@index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('DatosController@documentacion')}}">Documentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('DatosController@listado')}}">Listado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{action('DatosController@monitoreo')}}">Monitoreo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 p-3">Monitoreo de datos</h1>
            <a href="{{action('DatosController@monitoreo')}}"" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="bi bi-arrow-clockwise"></i> Recargar</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <?php 
                for($x = 0; $x< 1;$x++){
                    $menorTf = $menorT[$x]-> fecha;
                    $menorTt = $menorT[$x]-> temperatura;
                    $menorTh = $menorT[$x]-> humedad;
                }
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Temperatura mínima registrada
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{$menorTt.' °C'}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $menorTt?>%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mt-2 text-xs font-weight-bold text-uppercase mb-1">
                                        <p>Fecha: {{date('d/m/Y',$menorTf)}} <br>
                                        Hora: {{date('H:i:s',$menorTf)}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                for($x = 0; $x< 1;$x++){
                    $mayorTf = $mayorT[$x]-> fecha;
                    $mayorTt = $mayorT[$x]-> temperatura;
                }
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Temperatura maxima registrada
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{$mayorTt.' °C'}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $mayorTt?>%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 text-xs font-weight-bold text-uppercase mb-1">
                                    <p>Fecha: {{date('d/m/Y',$mayorTf)}} <br>
                                    Hora: {{date('H:i:s',$mayorTf)}} </p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                for($x = 0; $x< 1;$x++){
                    $menorHf = $menorH[$x]-> fecha;
                    $menorHh = $menorH[$x]-> humedad;
                }
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Humedad mínima registrada
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{$menorHh.' %'}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $menorHh?>%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mt-2 text-xs font-weight-bold text-uppercase mb-1">
                                        <p>Fecha: {{date('d/m/Y',$menorHf)}} <br>
                                        Hora: {{date('H:i:s',$menorHf)}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                for($x = 0; $x< 1;$x++){
                    $mayorHf = $mayorH[$x]-> fecha;
                    $mayorHh = $mayorH[$x]-> humedad;
                }
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Humedad maxima registrada
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{$mayorHh.' %'}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $mayorHh?>%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mt-2 text-xs font-weight-bold text-uppercase mb-1">
                                        <p>Fecha: {{date('d/m/Y',$mayorHf)}} <br>
                                        Hora: {{date('H:i:s',$mayorHf)}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Content Row -->

        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0font-weight-bold text-dark"> Monitoreo de temperatura</h6>
                        <div class="dropdown no-arrow">
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0font-weight-bold text-dark">Informacion Actual</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <?php
                        $actualT = 0;
                        $actualH = 0;
                        
                        for($x = 0; $x< count($datos);$x++){
                            $actualT = $datos[$x]-> temperatura;
                            $actualH = $datos[$x]-> humedad;
                        }
                        
                    ?>
                    <!-- Card Body -->

                    <div class="card-body">
                        <div class="card-body">
                            <h4 class="small font-weight-bold">
                                Temperatura actual: <span class="float-right p-3">{{round($actualT,3).' °C'}}</span> <br>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{round($actualT,3)}}%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">
                                Humedad actual <span class="float-right">{{round($actualH,3).' %'}}</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{round($actualH,3)}}%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0font-weight-bold text-dark">Promedio</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <?php
                        $promedioT = 0;
                        $promedioH = 0;
                        $fechaI = 0;
                        $fechaF = 0;

                        $i=0;
                        for($x = 0; $x< count($mayorT);$x++){
                            $promedioT += $mayorT[$x]-> temperatura;
                            $promedioH += $mayorT[$x]-> humedad;
                            $fechaI = $fecha[0]-> fecha;
                            $fechaF = $fecha[$x]-> fecha;
                            $i++;
                        }
                        $promedioT = $promedioT/$i; 
                        $promedioH = $promedioH/$i;
                    ?>
                    <div class="card-body">
                        <div class="card-body">
                            <p class="">Periodo de monitoreo: <span class="float-right p-3">{{date('d/m/Y',$fechaI).' - '. date('d/m/Y', $fechaF)}}</span></p>
                            <h4 class="small font-weight-bold">
                                Temperatura promedio: <span class="float-right p-3">{{round($promedioT,3).' °C'}}</span> <br>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{round($promedioT,3)}}%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">
                                Humedad promedio <span class="float-right">{{round($promedioH,3).' %'}}</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{round($promedioH,3)}}%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0font-weight-bold text-dark"> Monitoreo de humedad</h6>
                        <div class="dropdown no-arrow">
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      

    <!-- Footer -->
    <footer class="py-2 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; HUTEMP 2022</p></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = [
            <?php 
                foreach ($fecha as $fech) {?>
                    '<?php echo date('d/m/Y H:i:s',$fech -> fecha);?>',
                <?php }
                ?>
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: 'Humedad',
            backgroundColor: 'rgb(0, 123, 255)',
            borderColor: 'rgb(0, 123, 255)',
            data: [
                <?php 
                foreach ($fecha as $fech) {?>
                    '<?php echo $fech -> humedad;?>',
                <?php }
                ?>
            ],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {}
        };
    </script>
    <script>
        const myChart = new Chart(
          document.getElementById('myChart'),
          config
        );
    </script>

    <script>
        const ctx = document.getElementById('myChart1').getContext('2d');
        const myChart1 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    <?php 
                foreach ($fecha as $fech) {?>
                    '<?php echo date('d/m/Y H:i:s',$fech -> fecha);?>',
                <?php }
                ?>
                ],
                datasets: [{
                    label: 'Temperatura',
                    data: [
                        <?php 
                        foreach ($fecha as $fech) {?>
                            '<?php echo $fech -> temperatura;?>',
                        <?php }
                        ?>
                    ],
                    backgroundColor: 'rgb(255, 193, 7)',
                    borderColor: 'rgb(255, 193, 7)',
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