import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Descripcion_trabajo extends StatelessWidget {
  const Descripcion_trabajo({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("HUTEMP"),
        elevation: 0,
      ),
      body: ListView(
        children: [
          Card(
            child: Column(
              children: [
                const ListTile(
                  leading: Icon(Icons.note_add_sharp, color: AppTheme.primary),
                  title: Text('\nPlaneación'),
                  subtitle: Text(
                    '\nSe desarrollo este proyecto por la materia de integradora en la cual se tiene que implementar distintas materias como son Aplicaciones de IOT, Aplicaciones web para I 4.0, Base de Datos para computo en la nube, Desarrollo Móvil Multiplataforma e Inglés. Se vieron las diferentes posibilidades de desarrollo por parte del enfoque académico del área de desarrollo de software.\n De las posibilidades investigadas del contexto se implementó el desarrollo de un prototipo de detección de temperatura y humedad para el uso en la agricultura.  Consiguientemente se dio seguimiento a la investigación de los diferentes tipos de software para utilizar y así crear un enfoque más efectivo. Como también se dio a conocer varios tipos de tarjetas o modelos de detección de temperatura y humedad, así mismo para la complementación del uso de la tarjeta de red o wifi, que se utilizó para así mandar los datos recabados por la red a una aplicación web funcional.\n\n Dando como resultado el uso de la tarjeta de red / WIFI: ESP32DEVKITV1 la cual es una tarjeta de dos componentes integrados (WIFI y Bluetooth), tarjeta de temperatura y humedad modelo DHT11, Arduino UNO, cables macho - hembra, Protoboard, y cable USB tipo A. Para programar la placa de Arduino se utilizó librerías adicionales dentro de la programación del Arduino, las cuales se instalan manualmente  usando la pestaña de programa, opción, incluir librería, y administrar bibliotecas; las librerías que se añadirán sera respectivamente para el control del ESP32DEVKITV1 será la librería ESP32 DEV MODULE, y para el sensor de temperatura y humedad será la librería DHT11 para la correcta gestión de los datos del sensor y la correcta comunicación del compilado del programa hacia los sensores.\n En base a las tecnologías y componentes propuestos en la fase de plantación se eligió el uso de lenguajes de programación, entre los cuales destacan PHP para el Backend, C++ para la programación de los componentes electrónicos, complementando la parte web se utilizaron el uso de JavaScript, tecnologías básicas de la web (CSS, HTML) y como el Framework de desarrollo se utilizará Laravel en su versión 5.5. Una vez optado lo anterior se implementará el desarrollo de la codificación de los distintos componentes para su función específica dentro del sistema embebido. Dentro del gestor de base de datos se incluyó el uso de MYSQL de forma local, en el cual se archivarán los datos recabados del sistema embebido en función. \n\n',
                    textAlign: TextAlign.justify,
                  ),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [],
                  ),
                )
              ],
            ),
          ),
          Card(
            child: Column(
              children: [
                const ListTile(
                  leading: Icon(Icons.note_add_sharp, color: AppTheme.primary),
                  title: Text('\nImplementación'),
                  subtitle: Text(
                    '\nUna vez obtenido los componentes a utilizar, se hizo la estructuración del uso de la placa de Arduino con el módulo Wifi dando uso de la implementación recabada en el Video: Martin Gerlero el cual puede ser consultado en el apartado de Anexo 1 al final de este documento, en el cual se explica la conexión de los componentes para una relativa función, dado las conexiones se establece la creación del código dentro del Arduino el cual recabará los datos y se subirán al componente de Arduino, por consiguiente el sensor de temperatura y humedad compartirá los datos recabados con el uso de la tarjeta de WIFI, para así ser enviadas al servidor local en nuestro caso para así mostrar el prototipo embebido. Por otro lado, se implementó codificación de Backend para el diseño de la aplicación web donde se recabara la información enviada al servidor local de MYQSL, todo esto por medio del framework Laravel y el uso de componentes internos de la web como PHP, CSS y HTML.',
                    textAlign: TextAlign.justify,
                  ),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [],
                  ),
                )
              ],
            ),
          ),
        ],
      ),
    );
  }
}
