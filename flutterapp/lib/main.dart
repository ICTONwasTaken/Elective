import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context){
    return const MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: Center(
           child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            crossAxisAlignment: CrossAxisAlignment.center,
              children: [
                              Icon(
                                Icons.account_circle,
                               color: Colors.deepPurple,
                               size: 100,                              
                               ),
                              Text(
                                'Marius L. Manarang',
                                style: TextStyle(fontSize: 21, color: Colors.black),
                              ),
                              Text(
                                'Place Holder Masters',
                                style: TextStyle(color: Colors.grey),
                              ),
                              SizedBox(height: 90),

                              Row(
                                mainAxisAlignment: MainAxisAlignment.center,
                                children: [
                                  Column(
                                    mainAxisAlignment: MainAxisAlignment.center,
                                    crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      Icon(
                                        Icons.home,
                                        color: Colors.deepPurple,
                                        size: 45,                              
                                        ),
                                      Text(
                                        'Home',
                                        style: TextStyle(color: Colors.deepPurple),
                                      ),
                                    ],
                                  ),

                                  SizedBox(width: 30),

                                  Column(
                                    mainAxisAlignment: MainAxisAlignment.center,
                                    crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      Icon(
                                        Icons.menu_book,
                                        color: Colors.deepPurple,
                                        size: 45,                              
                                        ),
                                      Text(
                                        'Courses',
                                        style: TextStyle(color: Colors.deepPurple),
                                      ),
                                    ],
                                  ),

                                  SizedBox(width: 30),

                                  Column(
                                    mainAxisAlignment: MainAxisAlignment.center,
                                    crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      Icon(
                                        Icons.person_outline,
                                        color: Colors.deepPurple,
                                        size: 45,                              
                                        ),
                                      Text(
                                        'Profile',
                                        style: TextStyle(color: Colors.deepPurple),
                                      ),
                                    ],
                                  ),
                                ],
                              ),

                              SizedBox(height: 300),

                              Text(
                                'Place Holder Compliment',
                                style: TextStyle(color: Colors.grey),
                              )
                        ],
            ),
          ),
        ),

    );
  }//Widget build
}

