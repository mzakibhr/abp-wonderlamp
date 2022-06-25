import 'package:flutter/material.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter/material.dart';
import 'package:wonderlamp/ui/pages/login.dart';

void main() => runApp(NotificationPage());

class NotificationPage extends StatelessWidget {
  NotificationPage({Key? key}) : super(key: key);

  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
            title: Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Text("Contact us",
                    style:
                        TextStyle(color: Color.fromARGB(255, 255, 255, 255))),
                ElevatedButton(
                  onPressed: () async => {
                    await FirebaseAuth.instance.signOut(),
                    Navigator.pushAndRemoveUntil(
                        context,
                        MaterialPageRoute(
                          builder: (context) => Login(),
                        ),
                        (route) => false)
                  },
                  child: Text('Logout'),
                  style: ElevatedButton.styleFrom(primary: Colors.blueGrey),
                )
              ],
            ),
            backgroundColor: Colors.black),
        body: Column(
          children: <Widget>[
            SizedBox(
              height: 10,
            ),
            Center(
                child: Image.asset(
              'assets/contact1_us.png',
              height: 250,
            )),
            SizedBox(
              height: 10,
            ),
            Text(
              'NEED HELP? FEEL FREE TO CONTACT US',
              textAlign: TextAlign.center,
              style: TextStyle(
                  fontSize: 15,
                  fontWeight: FontWeight.bold,
                  color: Color.fromARGB(255, 0, 95, 159)),
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: <Widget>[
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Container(
                    height: 100,
                    width: 170,
                    decoration: BoxDecoration(
                        color: Colors.white,
                        borderRadius: BorderRadius.circular(12),
                        boxShadow: [
                          BoxShadow(
                            color: Colors.grey,
                            blurRadius: 20,
                          )
                        ]),
                    child: Column(
                      children: <Widget>[
                        Icon(
                          Icons.email_rounded,
                          color: Color.fromARGB(255, 0, 95, 159),
                          size: 50,
                        ),
                        new Text(
                          "Email",
                          style: TextStyle(
                              color: Color.fromARGB(255, 1, 1, 1),
                              fontSize: 16.0,
                              fontWeight: FontWeight.bold),
                        ),
                        Text('Wonderlamp@gmail.com'),
                      ],
                    ),
                  ),
                ),
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Container(
                    height: 100,
                    width: 170,
                    decoration: BoxDecoration(
                        color: Colors.white,
                        borderRadius: BorderRadius.circular(12),
                        boxShadow: [
                          BoxShadow(
                            color: Colors.grey,
                            blurRadius: 20,
                          )
                        ]),
                    child: Column(
                      children: <Widget>[
                        Icon(
                          Icons.whatsapp_outlined,
                          color: Color.fromARGB(255, 0, 95, 159),
                          size: 50,
                        ),
                        new Text(
                          "Whatsapp",
                          style: TextStyle(
                              color: Color.fromARGB(255, 1, 1, 1),
                              fontSize: 16.0,
                              fontWeight: FontWeight.bold),
                        ),
                        Text(
                          '081212345678',
                          textAlign: TextAlign.center,
                        ),
                      ],
                    ),
                  ),
                ),
              ],
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: <Widget>[
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Container(
                    height: 100,
                    width: 170,
                    decoration: BoxDecoration(
                        color: Colors.white,
                        borderRadius: BorderRadius.circular(12),
                        boxShadow: [
                          BoxShadow(
                            color: Colors.grey,
                            blurRadius: 20,
                          )
                        ]),
                    child: Column(
                      children: <Widget>[
                        Icon(
                          Icons.facebook_rounded,
                          color: Color.fromARGB(255, 0, 95, 159),
                          size: 50,
                        ),
                        new Text(
                          "Facebook",
                          style: TextStyle(
                              color: Color.fromARGB(255, 1, 1, 1),
                              fontSize: 16.0,
                              fontWeight: FontWeight.bold),
                        ),
                        Text('Wonderlamp Lampung'),
                      ],
                    ),
                  ),
                ),
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Container(
                    height: 100,
                    width: 170,
                    decoration: BoxDecoration(
                        color: Colors.white,
                        borderRadius: BorderRadius.circular(12),
                        boxShadow: [
                          BoxShadow(
                            color: Colors.grey,
                            blurRadius: 20,
                          )
                        ]),
                    child: Column(
                      children: <Widget>[
                        Icon(
                          Icons.telegram_sharp,
                          color: Color.fromARGB(255, 0, 95, 159),
                          size: 50,
                        ),
                        new Text(
                          "Telegram",
                          style: TextStyle(
                              color: Color.fromARGB(255, 1, 1, 1),
                              fontSize: 16.0,
                              fontWeight: FontWeight.bold),
                        ),
                        Text('wonderlamp999'),
                      ],
                    ),
                  ),
                ),
              ],
            ),
            Text(
              'Location :',
              style: TextStyle(color: Color.fromARGB(255, 0, 95, 159)),
            ),
            Text(
              'Bandar Lampung, Lampung, Indonesia',
              style: TextStyle(color: Color.fromARGB(255, 0, 95, 159)),
            ),
          ],
        ),
      ),
    );
  }
}
