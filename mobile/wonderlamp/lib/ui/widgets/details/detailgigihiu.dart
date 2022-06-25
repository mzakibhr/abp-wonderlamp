import 'dart:ui';

import 'package:flutter/material.dart';
import 'package:wonderlamp/ui/widgets/button_cta.dart';
import 'package:wonderlamp/ui/widgets/foto.dart';
import 'package:url_launcher/url_launcher.dart';
import '../../../shared/theme.dart';

class detailGigihiu extends StatelessWidget {
  const detailGigihiu({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    launchUrl(String url) async {
      if (await canLaunch(url)) {
        launch(url);
      } else {
        throw (url);
      }
    }

    Widget locationDetail() {
      return Container(
        margin: const EdgeInsets.only(
          top: 30,
        ),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Location',
              style: yellowText.copyWith(
                fontSize: 16,
              ),
            ),
            const SizedBox(
              height: 6,
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Text(
                      'Pekon Susuk, Kec. Kelumbayan, Kabupaten Tanggamus',
                      style: grayText.copyWith(
                        fontSize: 14,
                        color: Colors.white,
                      ),
                    ),
                    const SizedBox(
                      height: 2,
                    ),
                    Text(
                      'Lampung',
                      style: grayText.copyWith(
                        fontSize: 14,
                        color: Colors.white,
                      ),
                    )
                  ],
                ),
                InkWell(
                  onTap: () {
                    launchUrl(
                        'https://www.google.com/maps/place/Sharks+Teeth+Beach/@-5.755844,105.057614,17z/data=!3m1!4b1!4m5!3m4!1s0x2e413315a46d600d:0x62535b5f075b8a5b!8m2!3d-5.755844!4d105.057614');
                  },
                  child: Container(
                    padding: const EdgeInsets.all(9),
                    width: 40,
                    height: 40,
                    decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(100),
                      color: primaryYellow,
                    ),
                    child: Container(
                      width: 22,
                      height: 22,
                      decoration: const BoxDecoration(
                        image: DecorationImage(
                          image: AssetImage(
                            'location.png',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ],
            )
          ],
        ),
      );
    }

    Widget photosFacilities() {
      return Container(
        margin: const EdgeInsets.only(
          top: 30,
          bottom: 40,
        ),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Photos',
              style: yellowText.copyWith(
                fontSize: 16,
                color: Colors.white,
              ),
            ),
            const SizedBox(
              height: 12,
            ),
            SingleChildScrollView(
              scrollDirection: Axis.horizontal,
              child: Row(
                children: [
                  fotoFasilitas(namafile: 'gigihiu1'),
                  fotoFasilitas(namafile: 'gigihiu2'),
                  fotoFasilitas(namafile: 'gigihiu3'),
                  fotoFasilitas(namafile: 'gigihiu4'),
                ],
              ),
            ),
          ],
        ),
      );
    }

    return Scaffold(
      body: Stack(
        children: [
          Container(
            width: double.infinity,
            height: 350,
            decoration: const BoxDecoration(
              image: DecorationImage(
                fit: BoxFit.cover,
                image: AssetImage(
                  'gigihiu.jpg',
                ),
              ),
            ),
          ),
          Container(
            child: Column(
              children: [
                Container(
                  margin: const EdgeInsets.only(
                    right: 24,
                    left: 24,
                    top: 30,
                  ),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.spaceBetween,
                    children: [
                      // Back Button
                      InkWell(
                        onTap: () {
                          Navigator.pushNamed(context, '/home-page');
                        },
                        child: Container(
                          padding: const EdgeInsets.all(12),
                          width: 40,
                          height: 40,
                          decoration: BoxDecoration(
                            color: primaryYellow,
                            borderRadius: BorderRadius.circular(1000),
                          ),
                          child: Center(
                            child: Image.asset(
                              'back_arrow.png',
                              width: 20,
                              height: 20,
                            ),
                          ),
                        ),
                      ),
                      // Like Button
                    ],
                  ),
                ),
                Container(
                  child: Expanded(
                    child: ListView(
                      children: [
                        const SizedBox(
                          height: 258,
                        ),
                        Container(
                          width: MediaQuery.of(context).size.width,
                          padding: const EdgeInsets.only(
                            left: 24,
                            right: 24,
                            top: 30,
                          ),
                          decoration: BoxDecoration(
                            borderRadius: const BorderRadius.vertical(
                              top: Radius.circular(20),
                            ),
                            color: primaryBlue,
                          ),
                          child: Column(
                            crossAxisAlignment: CrossAxisAlignment.start,
                            children: [
                              Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  Column(
                                    crossAxisAlignment:
                                        CrossAxisAlignment.start,
                                    children: [
                                      Text(
                                        'Pantai Gigi Hiu',
                                        style: titleBlue.copyWith(
                                          fontSize: 22,
                                          color: Colors.white,
                                        ),
                                      ),
                                      Text.rich(
                                        TextSpan(
                                          text: 'IDR 10.000',
                                          style: yellowText.copyWith(
                                            fontSize: 16,
                                          ),
                                          children: [
                                            TextSpan(
                                              text: ' / orang',
                                              style: grayText.copyWith(
                                                fontSize: 16,
                                                color: Colors.white,
                                              ),
                                            ),
                                          ],
                                        ),
                                      ),
                                    ],
                                  ),
                                  Container(
                                    width: 108,
                                    height: 20,
                                    child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.spaceAround,
                                      children: [
                                        Image.asset(
                                          'star.png',
                                          width: 20,
                                          height: 20,
                                        ),
                                        Image.asset(
                                          'star.png',
                                          width: 20,
                                          height: 20,
                                        ),
                                        Image.asset(
                                          'star.png',
                                          width: 20,
                                          height: 20,
                                        ),
                                        Image.asset(
                                          'star.png',
                                          width: 20,
                                          height: 20,
                                        ),
                                        Image.asset(
                                          'star-gray.png',
                                          width: 20,
                                          height: 20,
                                        ),
                                      ],
                                    ),
                                  ),
                                ],
                              ),
                              Container(
                                margin: const EdgeInsets.only(
                                  top: 30,
                                ),
                                child: Column(
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(
                                      'Deskripsi',
                                      style: yellowText.copyWith(
                                        fontSize: 16,
                                        fontWeight: FontWeight.normal,
                                        color: Colors.white,
                                      ),
                                    ),
                                    const SizedBox(
                                      height: 12,
                                    ),
                                    Text(
                                      'Panorama yang disajikan Pantai Gigi Hiu, berbeda dengan pantai pada umumnya. Di pantai ini pengunjung dijamin akan terpana melihat barisan batu karang lancip yang tertata dan terbentuk secara alami. Setiap kali ombak menerpa batu tersebut, akan terdengar suara pesona pantai yang alami dan menenangkan diri. Di Pantai Gigi Hiu, kurang ideal untuk kegiatan bahari seperti berenang atau snorkeling karena ombaknya cukup besar dan dipenuhi karang-karang tajam. Jika hendak berenang, bisa mencari spot dengan ombak yang lebih tenang.',
                                      textAlign: TextAlign.justify,
                                      style: yellowText.copyWith(
                                        fontSize: 14,
                                        fontWeight: FontWeight.normal,
                                        color: Colors.white,
                                      ),
                                    ),
                                  ],
                                ),
                              ),
                              photosFacilities(),
                              locationDetail(),
                              SizedBox(
                                height: 40,
                              )
                            ],
                          ),
                        ),
                      ],
                    ),
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
