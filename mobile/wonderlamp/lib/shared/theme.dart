import 'package:flutter/cupertino.dart';
import 'package:google_fonts/google_fonts.dart';

Color primaryBlue = black;
Color primaryYellow = const Color.fromARGB(255, 179, 173, 93);
Color secondaryBlue = const Color(0xff045497);
Color tersierBlue = const Color(0xff5189C6);
Color gray = const Color(0xff7A7E86);
Color white = const Color(0xffFFFFFF);
Color black = const Color(0xff000000);
Color transparant = const Color.fromARGB(0, 255, 255, 255);

FontWeight medium = FontWeight.w500;
FontWeight light = FontWeight.w300;
FontWeight bold = FontWeight.w700;
FontWeight regular = FontWeight.w400;

TextStyle titleBlue = GoogleFonts.poppins(
  color: primaryBlue,
  fontWeight: medium,
);

TextStyle yellowText = GoogleFonts.poppins(
  color: primaryYellow,
  fontWeight: medium,
);

TextStyle grayText = GoogleFonts.poppins(
  color: gray,
);
