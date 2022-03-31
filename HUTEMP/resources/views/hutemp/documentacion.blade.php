<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Document</title>
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
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="{{action('DatosController@index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{action('DatosController@documentacion')}}">Documentación</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{action('DatosController@listado')}}">Listado</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{action('DatosController@monitoreo')}}">Monitoreo</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="py-5">
        <div class="container px-lg-5 mb-3">
            <div class="p-4 p-lg-5 bg-secondary rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Bienvenido a la documentación del proyecto HUTEMP</h1>
                    <p class="fs-4">La documentación se encuentra divida por secciones con la finalidad de buscar alguna parte en particular que les interese. Aquí se explica a  cabalidad cada uno de los aspectos que se tomaron en cuenta para la realización de proyecto HUTEMP.</p>
                    <a class="btn btn-info btn-lg" href="#1">Ver secciones</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5" id="1">
                <div class="col-lg-6 col-xxl-4 mb-5" >
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-briefcase"></i></div>
                            <h2 class="fs-4 fw-bold">Contexto del trabajo</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Contexto_del_trabajo">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-search"></i></div>
                            <h2 class="fs-4 fw-bold">Análisis de la situación</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Analisis_de_la_situacion">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-globe"></i></div>
                            <h2 class="fs-4 fw-bold">Objetivo del trabajo</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Objetivo_del_trabajo">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-award"></i></div>
                            <h2 class="fs-4 fw-bold">Justificación del trabajo</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Justificacion_del_trabajo">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-alt"></i></div>
                            <h2 class="fs-4 fw-bold">Alternativas de solución</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Alternativas_de_solucion">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-book"></i></div>
                            <h2 class="fs-4 fw-bold">Fundamento teórico</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Fundamento_teorico">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-journal-code"></i></div>
                            <h2 class="fs-4 fw-bold">Descripción del trabajo</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Descripcion_del_trabajo">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                            <h2 class="fs-4 fw-bold">Resultados</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Resultados">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-journal-text"></i></div>
                            <h2 class="fs-4 fw-bold">Conclusiones</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Conclusiones">Ver</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-info bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-link-45deg"></i></div>
                            <h2 class="fs-4 fw-bold">Referencias</h2>
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#Referencias">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-2 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; HUTEMP 2022</p></div>
    </footer>
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade modal-dialog-scrollable" id="Contexto_del_trabajo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contexto del trabajo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">Prototipo de sistema embebido para detección de temperatura y humedad con el sensor DHT21, para la implementación en un sistema controlado de cultivos en invernadero. El DHT21 es un sensor digital de temperatura y humedad relativa de buena precisión en un empaque robusto. <br><br> 
                Es utilizado en aplicaciones de control automático de temperatura, aire acondicionado, monitoreo en agricultura y más.
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade modal-dialog-scrollable" id="Analisis_de_la_situacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Análisis de la situación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">El alcance del proyecto es diseñar un prototipo de aplicación web para monitoreo de temperatura y humedad a través de la placa de Arduino Uno, mediante la asignación de la tarjeta de red ESP01 para enviar la información del sensor a la base de datos de un servidor o a una página web. Por consiguiente, dentro de la aplicación web se desglosará toda la información recabada por el sensor y se mostrará los cambios de temperatura y humedad de la unidad o área localizada.
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Objetivo_del_trabajo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Objetivo del trabajo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">Diseñar un prototipo de aplicación web para monitoreo de temperatura y humedad, para ser implementado en un futuro en invernaderos, el cual subirá los datos a un servidor para su monitoreo a distancia. <br><br>
                Necesidad de tener una medición de mayor control dentro de los diferentes invernaderos, para monitorear la temperatura y humedad de las distintas plantas para su producción y eficiencia.
                
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Justificacion_del_trabajo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Justificación del trabajo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">En base a los conocimientos de las materias del presente periodo, se optó por realizar un proyecto el cual tendrá la finalidad de integrar tecnologías y conocimientos de cada materia e incorporarlo en un sistema, donde estén conectadas dentro de un sistema embebido, el cual darán como finalidad y función a la demanda de control de temperatura y humedad de medios de cultivo. <br><br>
                Dicho esto, se implementará en diferentes áreas o sectores de la empresa, como son los silos de semillas para abarcar cierto grado de temperatura para su conservación antes de su uso. Como también el uso adecuado del control de temperatura para los diferentes cultivos, para simular la temperatura nativa del cultivo usado.
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Alternativas_de_solucion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alternativas de solución</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">Se opto por utilizar una metodología ágil. Dentro de este proyecto se hizo uso de los programas de software de Arduino, Laravel, MySQL, y Flutter. Cuyos objetivos es diseñar un prototipo de aplicación web para monitoreo de temperatura y humedad, para ser implementado en un futuro en invernaderos, el cual subirá los datos a un servidor para su monitoreo a distancia. <br> <br>
                Por lo cual se optó por dar seguimiento a los problemas de los diferentes sectores tanto agrícolas y tecnológicos, y ver las aplicaciones prácticas en dichos sectores Los resultados fundamentan la necesidad detectada y la justificación del dispositivo HUTEMP como sistema embebido. Tras el desarrollo del prototipo se procedió a la implementación en el laboratorio de cómputo siguiendo el método científico experimental, se procesó la información para obtener un análisis que nos encamino a establecer las conclusiones.
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Fundamento_teorico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fundamento teórico</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">
                <b> Arduino Uno</b><br>
                
                Es una placa basada en el microcontrolador ATmega328P. Tiene 14 pines de entrada/salida digital (de los cuales 6 pueden ser usando con PWM), 6 entradas analógicas, un cristal de 16Mhz, conexión USB, conector jack de alimentación, terminales para conexión ICSP y un botón de reseteo. Tiene toda la electrónica necesaria para que el microcontrolador opere, simplemente hay que conectarlo a la energía por el puerto USB ó con un transformador AC-DC. (Arduino, s.f.) <br><br><br>

                <b>LED</b> <br>
                El acrónimo inglés LED (Light Emitting Diode) que en castellano significa literalmente “Diodo Emisor de Luz’’ es un elemento capaz de recibir una corriente eléctrica moderada y emitir una radiación electromagnética transformada en luz. Coloquialmente es conocido como Diodo Luminoso. (Auto, Luces LED, 2021) <br><br><br>

                <b>Protoboard</b><br>
                Una placa de pruebas o placa de inserción, es un tablero con orificios que se encuentran conectados eléctricamente entre sí de manera interna, habitualmente siguiendo patrones de líneas, en el cual se pueden insertar componentes electrónicos y cables para el armado y prototipado de circuitos electrónicos y sistemas similares. Está hecho de dos materiales, un aislante, generalmente un plástico, y un conductor que conecta los diversos orificios entre sí. Uno de sus usos principales es la creación y comprobación de prototipos de circuitos electrónicos antes de llegar a la impresión mecánica del circuito en sistemas de producción comercial. (Wikipedia, Placa de pruebas, 2022) <br><br><br>


                <b>WIFI</b><br>

                Wi-Fi es la tecnología móvil que se usa para conectar computadoras, tablets, smartphones y otros dispositivos a Internet. Wi-Fi es la señal de radio que se envía desde un enrutador inalámbrico a un dispositivo cercano, que traduce la señal en datos que puedes ver y usar. El dispositivo transmite una señal de radio al enrutador, que se conecta a Internet por cable. (Verizon, 2022) <br><br><br>
 
                <b>Cable macho – hembra</b><br>

                La función del cable macho-hembra es con frecuencia usado en el tablero protoboard haciendo posible la conexión de dos elementos, uno ingresado en dicho tablero y el extremo opuesto al sensor (normalmente). (Anda, 2018)<br><br><br>

                <b>Laravel</b><br>
                Laravel es un framework de PHP para ayudarnos en un tipo de desarrollo sobre aplicaciones escritas en este lenguaje de programación. Esté framework o más bien podría llamarlo compañero de ahora en adelante, nos ayuda en muchas cosas al desarrollar una aplicación, por medio de sus sistema de paquetes y de ser un framework del tipo MVC (Modelo-Vista-Controlador) da como resultado que podamos “despreocuparnos” (por así decirlo) en ciertas aspecto del desarrollo, cómo instanciar clases y métodos para usarlos en muchas partes de nuestra aplicación sin la necesidad de escribirlo y repetirlos muchas veces con lo que eso conlleva a la hora de modificar algo en el código. (Vera, 2021)<br><br><br>

                <b>JavaScript</b><br>

                JavaScript es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web, cada vez que una página web hace algo más que sentarse allí y mostrar información estática para que la veas, muestra oportunas actualizaciones de contenido, mapas interactivos, animación de Gráficos 2D/3D, desplazamiento de máquinas reproductoras de vídeo, etc., puedes apostar que probablemente JavaScript está involucrado. Es la tercera capa del pastel de las tecnologías web estándar, dos de las cuales (HTML y CSS) hemos cubierto con mucho más detalle en otras partes del Área de aprendizaje. (Mozilla, 2022) <br><br><br>

                <b>MySQL</b><br>
                MySQL es el sistema de gestión de bases de datos relacional más extendido en la actualidad al estar basada en código abierto. Desarrollado originalmente por MySQL AB, fue adquirida por Sun MicroSystems en 2008 y esta su vez comprada por Oracle Corporation en 2010, la cual ya era dueña de un motor propio InnoDB para MySQL. <br><br>
                MySQL es un sistema de gestión de bases de datos que cuenta con una doble licencia. Por una parte es de código abierto, pero por otra, cuenta con una versión comercial gestionada por la compañía Oracle. (Robledano, 2019)<br><br><br>
                <b>Flutter</b><br>

                Flutter es un SDK desarrollado por Google para crear aplicaciones móviles tanto para Android como para iOS (Apple). Fue desarrollado como un software para uso interno dentro de la compañía pero vieron el potencial que tenia y decidieron lanzarlo como proyecto de código libre. Actualmente es uno de los proyectos de desarrollo de aplicaciones móviles que más está creciendo. Además, desde la última versión estable, también es posible realizar aplicaciones Web y de escritorio para Windows y Mac. Aunque en estas dos plataformas aún está en fase experimental (beta). (Tic, 2021) <br><br><br>

                <b>DHT21</b><br>

                El DHT21 es un sensor digital de temperatura y humedad relativa de buena precisión en un empaque robusto. Integra un sensor capacitivo de humedad, un termistor y un microcontrolador encargado de realizar la conversión analógica a digital. Su empaque de plástico es más robusto comparado a los sensores DHT11 y DHT22, esto hace del DHT21 un sensor ideal para aplicaciones en exteriores. Utilizado en aplicaciones de Control automático de temperatura, Aire Acondicionado, Monitoreo ambiental en agricultura y más. (JPM, 2021) <br><br><br>

                <b>ESP32</b><br>

                El módulo ESP32 es una solución de Wi-Fi/Bluetooth todo en uno, integrada y certificada que proporciona no solo la radio inalámbrica, sino también un procesador integrado con interfaces para conectarse con varios periféricos. El procesador en realidad tiene dos núcleos de procesamiento cuyas frecuencias operativas pueden controlarse independientemente entre 80 megahercios (MHz) y 240 MHz. (Beningo, 2020) <br><br><br>

                <b>Sensor</b><br>

                Un sensor, también llamado entrada o input, es un dispositivo capacitado para captar acciones o estímulos externos y responder en consecuencia. En otras palabras, permite captar la información del medio físico que nos rodea. (Auto, Significado de sensor, 2021) <br><br><br>

                <b>IOT</b><br>

                La Internet de las cosas (IoT) describe la red de objetos físicos ("cosas") que llevan incorporados sensores, software y otras tecnologías con el fin de conectarse e intercambiar datos con otros dispositivos y sistemas a través de Internet. Estos dispositivos van desde objetos domésticos comunes hasta herramientas industriales sofisticadas. Con más de 7 mil millones de dispositivos IoT conectados en la actualidad, los expertos prevén que este número aumentará a 10 mil millones para el 2020 y 22 mil millones para el 2025. Oracle cuenta con una red de socios de dispositivos. (ORACLE, 2022) <br><br><br>

                <b>HUTEMP</b><br>

                Prototipo aplicación web para detección de Humedad y temperatura para cultivos de invernadero. <br><br><br>

                <b>Cable USB tipo A</b><br>

                USB Tipo A: Ha sido el conector predominante entre los periféricos y ordenadores principales hasta la llegada de otros más pequeños. Los USB de Tipo A pueden ser utilizados con los estándares USB 1.0, 2.0, así como por los USB 3.0 y 3.1. (FERNÁNDEZ, 2021) <br><br><br>

                <b>Librería</b><br>

                Las librerías únicamente solucionan un problema concreto, haciendo el código más fácil de leer dentro de los frameworks o programas.  (ViewNext, 2022) <br><br><br>

                <b>Tarjeta electrónica</b><br> 

                Las tarjetas electrónicas, también conocidas como PCB «Printed circuit board» son una superficie que se compone de pistas, huecos y vías que están hechas de un material conductor laminado sobre una base no conductora. (Electronic Board, 2021) <br><br><br>

                <b>Framework</b><br>

                Un framework es un esquema o marco de trabajo que ofrece una estructura base para elaborar un proyecto con objetivos específicos, una especie de plantilla que sirve como punto de partida para la organización y desarrollo de software. (ADIX, 2021) <br><br><br>

                <b>Sistema Embebido</b><br>

                Un sistema embebido, embarcado o empotrado (integrado, incrustado) es un sistema de computación basado en un microprocesador o un microcontrolador diseñado para realizar una o algunas pocas funciones dedicadas, frecuentemente en un sistema de computación en tiempo real. Al contrario de lo que ocurre con los ordenadores de propósito general (como por ejemplo una computadora personal o PC) que están diseñados para cubrir una amplia gama de necesidades, los sistemas embebidos se diseñan para cubrir necesidades específicas. En un sistema embebido la mayoría de los componentes se encuentran incluidos en la placa madre y muchas veces los dispositivos resultantes no tienen el aspecto de lo que se suele asociar a una computadora. Algunos ejemplos de sistemas embebidos podrían ser dispositivos como un taxímetro, un sistema de control de acceso, la electrónica que controla una máquina expendedora o el sistema de control de una fotocopiadora entre otras múltiples aplicaciones. (Wikipedia, Sistema embebido, 2022) <br><br><br>

                <b>Código</b><br>

                En el caso de la informática, se conoce como código fuente al texto desarrollado en un lenguaje de programación y que debe ser compilado o interpretado para poder ejecutarse en un ordenador, también llamado computadora. (Definicion, 2022) <br><br><br>

                <b>PHP</b><br>

                Es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML. (PHP.net, 2021) <br><br><br>


                <b>CSS</b><br>

                Es lo que se denomina lenguaje de hojas de estilo en cascada y se usa para estilizar elementos escritos en un lenguaje de marcado como HTML. CSS separa el contenido de la representación visual del sitio (B, 2022). <br><br><br>

                <b>HTML</b><br>

                Es el componente más básico de la Web. Define el significado y la estructura del contenido web. Además de HTML, generalmente se utilizan otras tecnologías para describir la apariencia/presentación de una página web (CSS) o la funcionalidad/comportamiento (JavaScript). (Developer Mozilla, 2022) <br><br><br>
                <b>Prototipo</b><br>
                Un prototipo es un primer modelo que sirve como representación o simulación del producto final y que nos permite verificar el diseño y confirmar que cuenta con las características específicas planteadas. (EnPrototipos, 2020) <br><br><br>
                <b>Metodología</b><br>
                La metodología es la disciplina que estudia el conjunto de técnicas o métodos que se usan en las investigaciones científicas para alcanzar los objetivos planteados. Es una pieza fundamental para el estudio de las ciencias. (Conceptos.de, s.f.) 
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Descripcion_del_trabajo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Descripción del trabajo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">
                <b>Planeación</b><br><br> 

                Se desarrollo este proyecto por la materia de integradora en la cual se tiene que implementar distintas materias como son Aplicaciones de IOT, Aplicaciones web para I 4.0, Base de Datos para computo en la nube, Desarrollo Móvil Multiplataforma e Inglés. Se vieron las diferentes posibilidades de desarrollo por parte del enfoque académico del área de desarrollo de software.
                De las posibilidades investigadas del contexto se implementó el desarrollo de un prototipo de detección de temperatura y humedad para el uso en la agricultura.  Consiguientemente se dio seguimiento a la investigación de los diferentes tipos de software para utilizar y así crear un enfoque más efectivo. Como también se dio a conocer varios tipos de tarjetas o modelos de detección de temperatura y humedad, así mismo para la complementación del uso de la tarjeta de red o wifi, que se utilizó para así mandar los datos recabados por la red a una aplicación web funcional. <br><br> 
                
                Dando como resultado el uso de la tarjeta de red / WIFI: ESP32DEVKITV1 la cual es una tarjeta de dos componentes integrados (WIFI y Bluetooth), tarjeta de temperatura y humedad modelo DHT11, Arduino UNO, cables macho - hembra, Protoboard, y cable USB tipo A. Para programar la placa de Arduino se utilizó librerías adicionales dentro de la programación del Arduino, las cuales se instalan manualmente  usando la pestaña de programa, opción, incluir librería, y administrar bibliotecas; las librerías que se añadirán sera respectivamente para el control del ESP32DEVKITV1 será la librería ESP32 DEV MODULE, y para el sensor de temperatura y humedad será la librería DHT11 para la correcta gestión de los datos del sensor y la correcta comunicación del compilado del programa hacia los sensores. (Gerlero, 2020) <br>
                En base a las tecnologías y componentes propuestos en la fase de plantación se eligió el uso de lenguajes de programación, entre los cuales destacan PHP para el Backend, C++ para la programación de los componentes electrónicos, complementando la parte web se utilizaron el uso de JavaScript, tecnologías básicas de la web (CSS, HTML) y como el Framework de desarrollo se utilizará Laravel en su versión 5.5. Una vez optado lo anterior se implementará el desarrollo de la codificación de los distintos componentes para su función específica dentro del sistema embebido. Dentro del gestor de base de datos se incluyó el uso de MYSQL de forma local, en el cual se archivarán los datos recabados del sistema embebido en función. <br><br>
                
                 <b>Implementación</b>   <br><br>
                
                Una vez obtenido los componentes a utilizar, se hizo la estructuración del uso de la placa de Arduino con el módulo Wifi dando uso de la implementación recabada en el Video: Martin Gerlero el cual puede ser consultado en el apartado de Anexo 1 al final de este documento, en el cual se explica la conexión de los componentes para una relativa función, dado las conexiones se establece la creación del código dentro del Arduino el cual recabará los datos y se subirán al componente de Arduino, por consiguiente el sensor de temperatura y humedad compartirá los datos recabados con el uso de la tarjeta de WIFI, para así ser enviadas al servidor local en nuestro caso para así mostrar el prototipo embebido. Por otro lado, se implementó codificación de Backend para el diseño de la aplicación web donde se recabara la información enviada al servidor local de MYQSL, todo esto por medio del framework Laravel y el uso de componentes internos de la web como PHP, CSS y HTML.
                
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Resultados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Resultados</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">
                
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Conclusiones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Conclusiones </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">
                Se consiguió optar un trabajo en equipo funcional y efectivo para el desarrollo del prototipo de Detección de Temperatura y Humedad (HUTEMP), obteniendo los elementos necesarios para su ejecución, se investigó por diferentes medios de consulta la forma de realizar el objetivo general del prototipo, posteriormente se dieron a conocer ideas que fundamentaron el proyecto para su correcto funcionamiento. Se realizo la conectividad de los componentes utilizados para la conectividad con la base de datos localmente, y la creación de la aplicación web en donde se podrá consultar los datos del sistema embebido. Logrando así la finalización de nuestro prototipo con resultados satisfactorios. <br><br>
                Dentro del plan de trabajo se lograron los objetivos establecidos al principio del documento, como experiencia adquirida fue la adquisición de diferentes métodos de codificación para la implementación del funcionamiento de la tarjeta de Wifi, para subir los datos al servidor local.  
                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="Referencias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Referencias </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="h6">
                ADIX. (19 de Agosto de 2021). Framework. Obtenido de https://www.edix.com/es/instituto/framework/#:~:text=%C2%BFQu%C3%A9%20es%20un%20framework%3F,organizaci%C3%B3n%20y%20desarrollo%20de%20software.   <br><br>
                Anda, N. d. (24 de octubre de 2018). Obtenido de https://www.factor.mx/portal/base-de-conocimiento/cables-jumper-macho-hembra/#:~:text=La%20funci%C3%B3n%20del%20cable%20macho,opuesto%20al%20sensor%20(normalmente).   <br><br>
                Arduino. (s.f.). Arduino UNO. Recuperado el 22 de Marzo de 2022, de https://arduino.cl/arduino-uno/ <br><br>
                Auto, H. (01 de noviembre de 2021). Luces LED. Obtenido de https://helloauto.com/glosario/luces-led <br><br>
                Auto, H. (2021). Significado de sensor. Obtenido de https://helloauto.com/glosario/sensor#:~:text=Significado%20de%20sensor,medio%20f%C3%ADsico%20que%20nos%20rodea.    <br><br>
                B, G. (14 de Enero de 2022). ¿Qué es CSS? Obtenido de https://www.hostinger.mx/tutoriales/que-es-css    <br><br>
                Beningo, J. (21 de Enero de 2020). Cómo seleccionar y usar el módulo ESP32 con Wi-Fi/Bluetooth adecuado para una aplicación de IoT industrial. Obtenido de https://www.digikey.com.mx/es/articles/how-to-select-and-use-the-right-esp32-wi-fi-bluetooth-module  <br><br>
                Conceptos.de. (s.f.). ¿Qué es la metodología? Recuperado el 22 de marzo de 2022, de https://concepto.de/metodologia/    <br><br>
                Definicion. (2022). El código en la informática. Obtenido de https://definicion.de/codigo/#:~:text=El%20c%C3%B3digo%20en%20la%20inform%C3%A1tica,un%20ordenador%2C%20tambi%C3%A9n%20llamado%20computadora.  <br><br>
                Developer Mozilla. (2022). HTML: Lenguaje de etiquetas de hipertexto. Obtenido de https://developer.mozilla.org/es/docs/Web/HTML    <br><br>
                Electronic Board. (2021). ¿Qué es una PCB? ¿Cómo funcionan las tarjetas electrónicas? Obtenido de https://www.electronicboard.es/que-es-una-pcb/    <br><br>
                EnPrototipos. (23 de Septiembre de 2020). ¿Qué es un prototipo y para qué sirve? Obtenido de https://prototip0.com/diseno-de-prototipos/    <br><br>
                FERNÁNDEZ, Y. (26 de Julio de 2021). Tipos de cable USB: cuáles existen y cómo identificarlos. Obtenido de https://www.xataka.com/basics/tipos-cable-usb-cuales-existen-como-identificarlos#:~:text=Tipos%20de%20conectores%20USB&text=USB%20Tipo%20A%3A%20Ha%20sido,los%20USB%203.0%20y%203.1. <br><br>
                Gerlero, M. (27 de marzo de 2020). Conexión entre ESP8266 Nodemcu y PHP con MySQL usando sensor DHT11. Obtenido de https://www.youtube.com/watch?v=jvHh6LzrX10  <br><br>
                JPM, M. (2021). DHT21 AM2301 Sensor Temperatura - Humedad. Obtenido de https://www.microjpm.com/products/ad28820/#:~:text=Descripci%C3%B3n%3A,la%20conversi%C3%B3n%20anal%C3%B3gica%20a%20digital.  <br><br>
                Mozilla, D. (2022). ¿Qué es JavaScript? Obtenido de https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps/What_is_JavaScript   <br><br>
                ORACLE. (2022). ¿Qué es el IoT? Obtenido de https://www.oracle.com/mx/internet-of-things/what-is-iot/   <br><br>
                PHP.net. (2021). ¿Qué es PHP? Obtenido de https://www.php.net/manual/es/intro-whatis.php    <br><br>
                Robledano, A. (24 de Septiembre de 2019). Qué es MySQL: Características y ventajas. Obtenido de https://openwebinars.net/blog/que-es-mysql/ <br><br>
                Tic, A. (2021). Flutter. Obtenido de https://aurestic.es/que-es-flutter/    <br><br>
                Vera, R. A. (31 de Marzo de 2021). Laravel. Obtenido de https://openwebinars.net/blog/que-es-laravel-caracteristicas-y-ventajas/    <br><br>
                Verizon. (2022). WIFI. Obtenido de https://espanol.verizon.com/info/definitions/wifi/   <br><br>
                ViewNext. (2022). Dieferencias entre Librerias y Frameworks. Obtenido de https://www.viewnext.com/diferencias-entre-librerias-y-frameworks/#:~:text=Para%20entenderlo%20de%20una%20forma,c%C3%B3digo%20m%C3%A1s%20f%C3%A1cil%20de%20leer.   <br><br>
                Wikipedia. (01 de marzo de 2022). Placa de pruebas. Obtenido de https://es.wikipedia.org/wiki/Placa_de_pruebas  <br><br>
                Wikipedia. (27 de enero de 2022). Sistema embebido. Obtenido de https://es.wikipedia.org/wiki/Sistema_embebido  <br><br>


                </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>