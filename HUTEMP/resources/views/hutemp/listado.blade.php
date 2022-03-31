<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Listado de datos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container pt-2 pb-2">
            <img src="{{asset('images/logo.png')}}" style="width: 4%;" alt="Logo Lion Script">
            <div class="m-2"></div>
            <a class="navbar-brand">HUTEMP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="{{action('DatosController@index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{action('DatosController@documentacion')}}">Documentación</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{action('DatosController@listado')}}">Listado</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{action('DatosController@monitoreo')}}">Monitoreo</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <center><h2 class="p-3">Lista de Datos</h2></center>
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Temperatura (°C)</th>
                        <th>Humedad (%)</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $dato)
                    <tr>
                        <td> {{date('d/m/Y H:i:s', $dato -> fecha)}} </td>
                        <td> {{$dato -> temperatura.' °C'}} </td>
                        <td> {{$dato -> humedad.' %'}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>