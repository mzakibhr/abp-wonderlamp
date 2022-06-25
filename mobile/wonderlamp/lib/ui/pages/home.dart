import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';
import 'package:wonderlamp/cubit/pages_cubit.dart';
import 'package:wonderlamp/ui/pages/login.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:wonderlamp/ui/widgets/details/gigihiurekom.dart';
import 'package:wonderlamp/ui/widgets/details/pahawangrekom.dart';
import 'package:wonderlamp/ui/widgets/details/waykambasrekom.dart';

import 'package:wonderlamp/ui/widgets/popular_card.dart';
import '../../shared/theme.dart';

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key: key);

  // Title
  Widget title() {
    return Column(crossAxisAlignment: CrossAxisAlignment.start, children: [
      Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Container(
            width: 100,
            height: 100,
            decoration: BoxDecoration(
              image: new DecorationImage(
                image: AssetImage('Wonderlamp.png'),
              ),
            ),
          )
        ],
      ),
      const SizedBox(
        height: 5,
      ),
      Text(
        "Wonderful Lampung",
        style: TextStyle(fontSize: 30, fontWeight: FontWeight.bold),
      ),
      const SizedBox(
        height: 5,
      ),
    ]);
  }

  // Popular Cities
  Widget wisataLampung() {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          'Wisata di Lampung',
          style: titleBlue.copyWith(
            fontSize: 16,
          ),
        ),
        SingleChildScrollView(
          scrollDirection: Axis.horizontal,
          child: Row(
            children: [
              PopularCard(
                namaKota: 'Pulau Gigi Hiu',
                urlImage: 'gigihiu.jpg',
              ),
              PopularCard(
                namaKota: 'Pulau Pahawang',
                urlImage: 'pahawang.jpg',
              ),
              PopularCard(
                namaKota: 'Way Kambas',
                urlImage: 'waykambas.jpg',
              ),
              PopularCard(
                namaKota: 'Wisata Malam',
                urlImage: 'wisatamalam.jpg',
              ),
            ],
          ),
        )
      ],
    );
  }

  // Rekomendasi Rumah
  Widget rekomendasiTempat() {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          'Rekomendasi Tempat',
          style: titleBlue.copyWith(
            fontSize: 16,
          ),
        ),
        SizedBox(
          height: 16,
        ),
        ReccomendationGigiHiu(
          urlImage: 'gigihiu.jpg',
          nama: 'Pantai Gigi Hiu',
          skor: 4,
          kota: 'Lampung',
          negara: 'Indonesia',
          harga: '10.000',
        ),
        ReccomendationWaykambas(
          skor: 3,
          urlImage: 'waykambas.jpg',
          nama: 'Taman Nasional Way Kambas',
          kota: 'Lampung Timur',
          negara: 'Lampung, Indonesia',
          harga: '5.000 - 7.000',
        ),
        ReccomendationPahawang(
          skor: 5,
          urlImage: 'pahawang.jpg',
          nama: 'Pulau Pahawang',
          kota: 'Lampung',
          negara: 'Indonesia',
          harga: '30.000',
        ),
      ],
    );
  }

  Widget detailLampung() {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          'Tentang Lampung',
          style: titleBlue.copyWith(
            fontSize: 16,
          ),
        ),
        const SizedBox(
          height: 12,
        ),
        Text(
          'Lampung adalah sebuah provinsi paling selatan di pulau Sumatra, Indonesia, dengan ibu kota atau pusat pemerintahan berada di kota Bandar Lampung. Provinsi ini memiliki dua kota yaitu kota Bandar Lampung dan kota Metro serta 13 kabupaten. Posisi provinsi Lampung secara geografis di sebelah Barat berbatasan dengan Samudra Hindia, di sebelah Timur dengan Laut Jawa, di sebelah Utara berbatasan dengan provinsi Sumatra Selatan, dan di sebelah Selatan berbatasan dengan Selat Sunda.',
          textAlign: TextAlign.justify,
          style: yellowText.copyWith(
            fontSize: 15,
            fontWeight: FontWeight.normal,
            color: Colors.black,
          ),
        ),
      ],
    );
  }

  @override
  Widget build(BuildContext context) {
    return BlocBuilder<PagesCubit, int>(
      builder: (context, state) {
        return Scaffold(
          body: SingleChildScrollView(
            scrollDirection: Axis.vertical,
            child: Container(
              padding: EdgeInsets.only(
                top: 24,
                left: 24,
              ),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  title(),
                  SizedBox(
                    height: 30,
                  ),
                  wisataLampung(),
                  SizedBox(
                    height: 30,
                  ),
                  rekomendasiTempat(),
                  SizedBox(
                    height: 10,
                  ),
                  detailLampung(),
                  SizedBox(
                    height: 100,
                  )
                ],
              ),
            ),
          ),
        );
      },
    );
  }
}
