import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Alternativas_de_solucion extends StatelessWidget {
  const Alternativas_de_solucion({Key? key}) : super(key: key);

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
            title: Text('\nAlternativas de solución'),
            subtitle: Text('\nSe opto por utilizar una metodología ágil. Dentro de este proyecto se hizo uso de los programas de software de Arduino, Laravel, MySQL, y Flutter. Cuyos objetivos es diseñar un prototipo de aplicación web para monitoreo de temperatura y humedad, para ser implementado en un futuro en invernaderos, el cual subirá los datos a un servidor para su monitoreo a distancia.\n\nPor lo cual se optó por dar seguimiento a los problemas de los diferentes sectores tanto agrícolas y tecnológicos, y ver las aplicaciones prácticas en dichos sectores Los resultados fundamentan la necesidad detectada y la justificación del dispositivo HUTEMP como sistema embebido. Tras el desarrollo del prototipo se procedió a la implementación en el laboratorio de cómputo siguiendo el método científico experimental, se procesó la información para obtener un análisis que nos encamino a establecer las conclusiones.',textAlign: TextAlign.justify,),
          ),
          Padding(
            padding: const EdgeInsets.all(20),
          child: Row(
            mainAxisAlignment: MainAxisAlignment.end,
            children:
            const [
        ],
      ),)
         ], ),
    ),
        ],
      ),
    ); 
}
}