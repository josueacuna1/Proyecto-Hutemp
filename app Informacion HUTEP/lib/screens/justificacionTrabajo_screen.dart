import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Justificacion_trabajo extends StatelessWidget {
  const Justificacion_trabajo({Key? key}) : super(key: key);

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
                    '\nEn base a los conocimientos de las materias del presente periodo, se optó por realizar un proyecto el cual tendrá la finalidad de integrar tecnologías y conocimientos de cada materia e incorporarlo en un sistema, donde estén conectadas dentro de un sistema embebido, el cual darán como finalidad y función a la demanda de control de temperatura y humedad de medios de cultivo. \n\nDicho esto, se implementará en diferentes áreas o sectores de la empresa, como son los silos de semillas para abarcar cierto grado de temperatura para su conservación antes de su uso. Como también el uso adecuado del control de temperatura para los diferentes cultivos, para simular la temperatura nativa del cultivo usado.',
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
