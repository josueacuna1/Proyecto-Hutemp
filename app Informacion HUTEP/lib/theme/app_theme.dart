import 'package:flutter/material.dart';

class AppTheme {
  static const Color primary = Color.fromRGBO(2, 105, 255, 1);
  


static final ThemeData lightTheme =ThemeData.light().copyWith(
  primaryColor: primary,
  appBarTheme: const AppBarTheme(color: primary, elevation: 0), // color del nabvar elevation sombra
  floatingActionButtonTheme:
    const FloatingActionButtonThemeData(backgroundColor: primary),
    scaffoldBackgroundColor: Color.fromRGBO(52, 58, 64, 1), // para theme.dark()
    textButtonTheme: TextButtonThemeData(style: TextButton.styleFrom(primary: primary)),
);

}