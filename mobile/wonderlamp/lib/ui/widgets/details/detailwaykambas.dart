import 'dart:ui';

import 'package:flutter/material.dart';
import 'package:wonderlamp/ui/widgets/button_cta.dart';
import 'package:wonderlamp/ui/widgets/foto.dart';
import 'package:url_launcher/url_launcher.dart';
import '../../../shared/theme.dart';

class detailWaykambas extends StatelessWidget {
  const detailWaykambas({Key? key}) : super(key: key);

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
                      'Kabupaten Lampung Timur',
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
                        'https://www.google.com/maps/place/Way+Kambas+National+Park/@-4.9275705,105.7747396,17z/data=!3m1!4b1!4m5!3m4!1s0x2e40813cf143bc13:0x4c426b2efc4681a3!8m2!3d-4.9275758!4d105.7769283');
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
                  fotoFasilitas(namafile: 'waykambas1'),
                  fotoFasilitas(namafile: 'waykambas2'),
                  fotoFasilitas(namafile: 'waykambas3'),
                  fotoFasilitas(namafile: 'waykambas4'),
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
                  'waykambas.jpg',
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
                                        'Taman Nasional Way Kambas',
                                        style: titleBlue.copyWith(
                                          fontSize: 22,
                                          color: Colors.white,
                                        ),
                                      ),
                                      Text.rich(
                                        TextSpan(
                                          text: 'IDR 5.000 - 7.000',
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
                                          'star-gray.png',
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
                                      'Pulau Pahawang terkenal dengan keindahan pantai dan bawah lautnya. Sudah banyak yang mengakui pesonanya, baik wisatawan nusantara maupun wisatawan lokal LampungPulau Pahawang masuk wilayah Kecamatan Punduh Pidada, Kabupaten Pesawaran, Provinsi Lampung. Tepatnya berada di Teluk Lampung.',
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
