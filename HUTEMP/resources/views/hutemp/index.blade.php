<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container pt-2 pb-2">
                <img src="{{asset('images/logo.png')}}" style="width: 4%;" alt="Logo Lion Script">
                <div class="m-2"></div>
                <a class="navbar-brand">HUTEMP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{action('DatosController@index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{action('DatosController@documentacion')}}">Documentación</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{action('DatosController@listado')}}">Listado</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{action('DatosController@monitoreo')}}">Monitoreo</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5" style="background-image: url('{{asset('images/portada.jpg')}}'); width: 100%; height: 60vh;">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-3">PROTOTIPO</h1>
                            <p class="lead fw-bolder text-white mb-2">“DETECCIÓN DE HUMEDAD Y TEMPERATURA"</p>
                            <hr class="text-white">
                            <p class="fw-bolder text-white mb-4 h4"><span class="text-white h6">by </span> LionScript</p>
                            <div class="mb-5 p-2"></div>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center ">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Sobre el prototipo</a>
                                <a class="btn btn-light btn-lg px-4" href="#Componentes">Componentes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-1 mb-4"><i class="bi bi-check-square"></i></div>
                        <h2 class="h4 fw-bolder mb-3">Aplicaciones prácticas </h2>
                        <p class="p-3">El prototipo de sistema embebido para detección de temperatura y humedad podría ser utilizado en aplicaciones de control automático de temperatura, monitoreo en agricultura, monitoreo en  Data Center, etc.</p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-1 mb-4"><i class="bi bi-bar-chart-fill"></i></div>
                        <h2 class="h4 fw-bolder mb-3">Alcance </h2>
                        <p class="p-3">El alcance del proyecto fue hacer un primer prototipo de aplicación web para monitoreo de temperatura y humedad a través de un sensor de temperatura y humedad, mediante la asignación de la tarjeta de red ESP01 para enviar así la información del sensor a una base de datos de un servidor y se muestre en una aplicación web.</p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-1 mb-4"><i class="bi bi-gear"></i></i></div>
                        <h2 class="h4 fw-bolder mb-3">Implementación</h2>
                        <p class="p-3">El prototipo está ambientado con las características de uno de los sectores de monitores donde podría encajar. Se encuentra en una pequeña maqueta donde podremos ver su integración y un ejemplo muy cercano a lo que podríamos ver en la vida real.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom" id="Componentes">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Componentes que integran el proyecto HUTEMP</h2>
                    <p class="lead mt-3">Se divide en 3</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">Componentes Físicos</div>
                                <div class="mb-3"></div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Módulo WiFi ESP32 devKit1v
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Arduino 1
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Sensor DHT11
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Cables
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Protoboard
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-cpu text-primary"></i>
                                        Cable de datos
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    TECNOLOGÍAS
                                </div>
                                <div class="mb-3"></div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        IDE Arduino
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        Laravel
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        HTML
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        CSS
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        Flutter
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        MySql
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-puzzle text-primary"></i>
                                        Bootstrap
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    Lenguajes de programación
                                </div>
                                <div class="mb-3"></div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-terminal text-primary"></i>
                                        PHP
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-terminal text-primary"></i>
                                        JavaScript
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-terminal text-primary"></i>
                                        c++
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-4 px-lg-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Imágenes del prototipo terminado</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-5">
                        <div class="card h-120">
                            <div class="card-body">
                                <h2 class="h5 fw-bolder mb-3">Prototipo terminado</h2>
                                <img src="{{asset('images/maqueta1.jpg')}}" alt="" style="width: 100%; height: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-120">
                            <div class="card-body">
                                <h2 class="h5 fw-bolder mb-3">Prototipo unido</h2>
                                <img src="{{asset('images/maqueta2.jpg')}}" alt="" style="width: 100%; height: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-120">
                            <div class="card-body">
                                <h2 class="h5 fw-bolder mb-3">Maqueta representativa</h2>
                                <img src="{{asset('images/maqueta3.jpg')}}" alt="" style="width: 100%; height: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-2 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; HUTEMP 2022</p></div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>