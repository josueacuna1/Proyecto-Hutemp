import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Objetivo_trabajo extends StatelessWidget {
  const Objetivo_trabajo({Key? key}) : super(key: key);

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
                  title: Text('\nObjetivo del trabajo'),
                  subtitle: Text(
                    '\nDiseñar un prototipo de aplicación web para monitoreo de temperatura y humedad, para ser implementado en un futuro en invernaderos, el cual subirá los datos a un servidor para su monitoreo a distancia. \n\n Necesidad de tener una medición de mayor control dentro de los diferentes invernaderos, para monitorear la temperatura y humedad de las distintas plantas para su producción y eficiencia.',
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
