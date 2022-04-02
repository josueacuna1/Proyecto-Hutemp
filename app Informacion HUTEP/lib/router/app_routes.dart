import 'dart:html';
import 'dart:js';

import 'package:flutter/material.dart';
import '../models/menu_options.dart';
import '../screens/alternativasSolucion_screen.dart';
import '../screens/analisisSituacion_screen.dart';
import '../screens/contextoTrabajo_screen.dart';
import '../screens/descripciónTrabajo_screen.dart';
import '../screens/justificacionTrabajo_screen.dart';
import '../screens/objetivoTrabajo_screen.dart';
import '../screens/resultadosFisicos_screen.dart';
import '../screens/resultadosWeb_screen.dart';


class AppRoutes {
  static const initialRoute = 'home';

  static final menuOptions = <MenuOptions>[
    
    MenuOptions(
        route: 'Card_ContextoTrabajo',
        icon: Icons.app_registration_rounded,
        nombre: 'Contexto del trabajo',
        screen: const ContextoTrabajo()),
    MenuOptions(
        route: 'Card_Analisis_situacion',
        icon: Icons.assignment,
        nombre: 'Análisis de la situación',
        screen: const Analisis_situacion()),
    MenuOptions(
        route: 'Card_Objetivo_trabajo',
        icon: Icons.emoji_objects_outlined,
        nombre: 'Objetivo del trabajo',
        screen: const Objetivo_trabajo()),
    MenuOptions(
        route: 'card_Justificacion_trabajo',
        icon: Icons.work_outline,
        nombre: 'Justificación del trabajo',
        screen: const Justificacion_trabajo()),
    MenuOptions(
        route: 'card_Alternativas_de_solucion',
        icon: Icons.miscellaneous_services_sharp,
        nombre: 'Alternativas de solución',
        screen: const Alternativas_de_solucion()),
    MenuOptions(
        route: 'card_Descripcion_trabajo',
        icon: Icons.book,
        nombre: 'Descripción del trabajo',
        screen: const Descripcion_trabajo()),
    MenuOptions(
            route: 'card_Resultados_web',
            icon: Icons.web,
            nombre: 'Resultados en la Web',
            screen: const Resultados_web()),
    MenuOptions(
            route: 'card_Resultados_fisico',
            icon: Icons.filter_rounded,
            nombre: 'Resultados en fisico',
            screen: const Resultados_fisico()),
  ];

  static Map<String, Widget Function(BuildContext)> getAppRoute() {
    Map<String, Widget Function(BuildContext)> appRoutes = {};
    for (final option in menuOptions) {
      appRoutes.addAll({option.route: (BuildContext context) => option.screen});
    }
    return appRoutes;
  }
}
