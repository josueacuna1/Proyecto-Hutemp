import 'package:flutter/material.dart';
import 'package:integradora_final/router/app_routes.dart';
import 'package:integradora_final/screens/New_Home_Screen.dart';
import 'package:integradora_final/theme/app_theme.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: const NewHomeScreen(),      
      initialRoute: AppRoutes.initialRoute,
      routes: AppRoutes.getAppRoute(),
      theme: AppTheme.lightTheme,     
    );
    
    
  }
}