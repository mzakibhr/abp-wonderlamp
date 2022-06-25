import 'package:flutter/material.dart';
import '../../shared/theme.dart';

class PopularCard extends StatelessWidget {
  final String namaKota;
  final String urlImage;
  const PopularCard({
    Key? key,
    required this.namaKota,
    required this.urlImage,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: const EdgeInsets.only(
        top: 16,
        bottom: 11,
        right: 20,
      ),
      child: Stack(
        alignment: Alignment.bottomCenter,
        children: [
          Container(
            width: 210,
            height: 300,
            decoration: BoxDecoration(
              color: primaryBlue,
              borderRadius: BorderRadius.circular(18),
              image: DecorationImage(
                fit: BoxFit.cover,
                image: AssetImage(urlImage),
              ),
            ),
          ),
          Container(
            height: 30,
            width: 170,
            decoration: BoxDecoration(
                color: primaryBlue,
                borderRadius: const BorderRadius.only(
                  bottomLeft: Radius.circular(5),
                  bottomRight: Radius.circular(5),
                )),
            child: Center(
              child: Text(
                namaKota,
                style: yellowText.copyWith(
                  fontSize: 16,
                ),
              ),
            ),
          )
        ],
      ),
    );
  }
}
