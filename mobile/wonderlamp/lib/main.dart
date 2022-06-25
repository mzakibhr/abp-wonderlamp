import 'package:flutter/material.dart';
import 'package:firebase_core/firebase_core.dart';
import 'package:flutter_bloc/flutter_bloc.dart';
import 'package:wonderlamp/cubit/pages_cubit.dart';
import 'package:wonderlamp/ui/pages/main_pages.dart';
import 'package:wonderlamp/ui/pages/start.dart';
import 'package:wonderlamp/ui/pages/login.dart';
import 'package:wonderlamp/ui/widgets/details/detailgigihiu.dart';
import 'package:wonderlamp/ui/widgets/details/detailpahawang.dart';
import 'package:wonderlamp/ui/widgets/details/detailwaykambas.dart';

Future<void> main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp(
      options: FirebaseOptions(
    apiKey: "AIzaSyA7Yf7x59Ukq8UfOVTLDLlq3_AlFTWH0T4",
    appId: "1:396258024415:android:0778b83d1778b4db11426a",
    messagingSenderId: "396258024415",
    projectId: "flutterauth-6ff17",
  ));
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MultiBlocProvider(
      providers: [
        BlocProvider(
          create: (context) => PagesCubit(),
        ),
      ],
      child: MaterialApp(
        debugShowCheckedModeBanner: false,
        routes: {
          '/': (context) => Login(),
          '/login': (context) => const StartPage(),
          '/start-page': (context) => const StartPage(),
          '/home-page': (context) => const MainPages(),
          '/gigihiu': (context) => const detailGigihiu(),
          '/waykambas': (context) => const detailWaykambas(),
          '/pahawang': (context) => const detailPahawang(),
        },
      ),
    );
  }
}

class auth extends StatelessWidget {
  final Future<FirebaseApp> _initialization = Firebase.initializeApp();
  @override
  Widget build(BuildContext context) {
    return FutureBuilder(
        future: _initialization,
        builder: (context, snapshot) {
          // Check for Errors
          if (snapshot.hasError) {
            print("Something Went Wrong");
          }
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator());
          }
          return MaterialApp(
            title: 'Flutter Firebase EMail Password Auth',
            theme: ThemeData(
              primarySwatch: Colors.deepPurple,
            ),
            debugShowCheckedModeBanner: false,
            home: Login(),
          );
        });
  }
}
