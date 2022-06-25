import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:wonderlamp/ui/widgets/button_cta.dart';
import '../../shared/theme.dart';

class StartPage extends StatelessWidget {
  const StartPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        bottom: false,
        child: Stack(
          children: [
            Align(
              alignment: Alignment.bottomCenter,
              child: Container(
                width: double.maxFinite,
                height: 700,
                decoration: BoxDecoration(
                  image: DecorationImage(
                    image: AssetImage(
                      '1.png',
                    ),
                  ),
                ),
              ),
            ),
            Container(
              padding: EdgeInsets.only(
                top: 50,
                left: 30,
              ),
              child: Column(
                children: [
                  Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Container(
                        margin: EdgeInsets.only(
                          bottom: 0.5,
                        ),
                        width: 200,
                        height: 200,
                        decoration: BoxDecoration(
                            image: DecorationImage(
                          image: AssetImage('Wonderlampb.png'),
                        )),
                      ),
                      Text(
                        'Sebuah aplikasi review wisata lampung',
                        style: titleBlue.copyWith(
                          fontSize: 24,
                        ),
                      ),
                      SizedBox(
                        height: 10,
                      ),
                      Text(
                        'Keindahan Lampung, ada disini',
                        style: GoogleFonts.poppins(
                          color: primaryYellow,
                          fontWeight: light,
                          fontSize: 16,
                        ),
                      ),
                      ButtonCTA(
                        textButton: 'Lebih Lanjut',
                        widthButton: 210,
                        warna: black,
                        text: yellowText,
                        onClick: () {
                          Navigator.pushNamed(context, '/home-page');
                        },
                      )
                    ],
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
