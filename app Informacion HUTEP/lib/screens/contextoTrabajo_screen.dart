import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class ContextoTrabajo extends StatelessWidget {
  const ContextoTrabajo({Key? key}) : super(key: key);

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
                  leading:
                      Icon(Icons.add_task_rounded, color: AppTheme.primary),
                  title: Text('\nContexto del trabajo'),
                  subtitle: Text(
                    '\nPrototipo de sistema embebido para detección de temperatura y humedad con el sensor DHT21, para la implementación en un sistema controlado de cultivos en invernadero. El DHT21 es un sensor digital de temperatura y humedad relativa de buena precisión en un empaque robusto.\n\n Es utilizado en aplicaciones de control automático de temperatura, aire acondicionado, monitoreo en agricultura y más.',
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
