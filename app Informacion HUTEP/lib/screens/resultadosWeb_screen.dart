import 'package:flutter/material.dart';
import '../theme/app_theme.dart';

class Resultados_web extends StatelessWidget {
  const Resultados_web({Key? key}) : super(key: key);

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
                  title: Text('\nIndex'),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [
                      Center(
                        child: Image(
                          image: AssetImage('web1.png'),width: 452,
                        ),
                      ),
                    ],
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
                  title: Text('\nDocumentacion'),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [
                      Center(
                        child: Image(
                          image: AssetImage('web2.png'),width: 452,
                        ),
                      ),
                    ],
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
                  title: Text('\nListado de datos'),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [
                      Center(
                        child: Image(
                          image: AssetImage('web3.png'),width: 452,
                        ),
                      ),
                    ],
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
                  title: Text('\nMonitoreo'),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [
                      Center(
                        child: Image(
                          image: AssetImage('web4.png'),width: 452,
                        ),
                      ),
                    ],
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
                  title: Text('\nGráficas'),
                ),
                Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: const [
                      Center(
                        child: Image(
                          image: AssetImage('web5.png'),width: 452,
                        ),
                      ),
                    ],
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
