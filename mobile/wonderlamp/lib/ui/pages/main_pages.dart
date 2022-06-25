import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';
import 'package:wonderlamp/cubit/pages_cubit.dart';
import 'package:wonderlamp/ui/pages/home.dart';
import 'package:wonderlamp/ui/pages/gallery_page.dart';
import 'package:wonderlamp/ui/pages/contact_page.dart';

import '../../shared/theme.dart';
import '../widgets/bottom_nav.dart';

class MainPages extends StatelessWidget {
  const MainPages({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    Widget buildContent(int currentIndex) {
      switch (currentIndex) {
        case 0:
          return HomePage();
        case 1:
          return GalleryPage();
        case 2:
          return NotificationPage();
        default:
          return HomePage();
      }
    }

    Widget navigasiBottom() {
      return Align(
        alignment: Alignment.bottomCenter,
        child: Container(
          padding: EdgeInsets.symmetric(
            horizontal: 30,
          ),
          margin: EdgeInsets.only(
            bottom: 30,
            // bottom: 30,
          ),
          height: 50,
          width: 250,
          decoration: BoxDecoration(
              color: white,
              borderRadius: BorderRadius.circular(23),
              boxShadow: [
                BoxShadow(
                  color: Colors.grey,
                  blurRadius: 20,
                )
              ]),
          child: Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              BottomNavIcon(
                index: 0,
                imgUrl: 'home',
              ),
              BottomNavIcon(
                index: 1,
                imgUrl: 'gallery',
              ),
              BottomNavIcon(
                index: 2,
                imgUrl: 'contact',
              ),
            ],
          ),
        ),
      );
    }

    return BlocBuilder<PagesCubit, int>(
      builder: (context, currentIndex) {
        return Scaffold(
          body: Stack(
            children: [
              buildContent(currentIndex),
              navigasiBottom(),
            ],
          ),
        );
      },
    );
  }
}
