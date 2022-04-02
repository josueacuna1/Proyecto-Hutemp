import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Analisis_situacion extends StatelessWidget {
  const Analisis_situacion({Key? key}) : super(key: key);

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
                  title: Text('\nAnálisis de la situación'),
                  subtitle: Text(
                    '\nEl alcance del proyecto es diseñar un prototipo de aplicación web para monitoreo de temperatura y humedad a través de la placa de Arduino Uno, mediante la asignación de la tarjeta de red ESP01 para enviar la información del sensor a la base de datos de un servidor o a una página web. \nPor consiguiente, dentro de la aplicación web se desglosará toda la información recabada por el sensor y se mostrará los cambios de temperatura y humedad de la unidad o área localizada.',
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
