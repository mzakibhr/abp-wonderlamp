import 'package:flutter/material.dart';

void main() => runApp(GalleryPage());

class GalleryPage extends StatelessWidget {
  const GalleryPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: ListViewPage(),
    );
  }
}
// First Stateless Widget with MaterialApp Ends

// Main Stateful Widget Start
class ListViewPage extends StatefulWidget {
  @override
  _ListViewPageState createState() => _ListViewPageState();
}

class _ListViewPageState extends State<ListViewPage> {
  // Title List Here
  var titleList = [
    "Taman Nasional Way Kambas",
    "Pantai Gigi Hiu",
    "Pulau Pahawang",
    "Air Terjun Curup Gangsa",
    "Teluk Kiluan",
    "Danau Ranau",
    "Gunung Pesagi"
  ];

  // Description List Here
  var descList = [
    "Taman nasional Way Kambas terletak di daerah Lampung Timur dan sebagai tempat konservasi gajah sumatera.",
    "Pantai Gigi Hiu terletak di Tanggamus, Lampung dan merupakan pantai yang indah dihiasi batu karang seperti gigi hiu.",
    "Pulau ini berada di Pesawaran, Lampung dan merupakan surga tersembunyi berisi pantai, penginapan dan bawah laut yang indah.",
    "Air terjun ini terletak di Way Kanan, Lampung dan merupakan air terjun yang memiliki dimensi yang besar serta cantik pastinya.",
    "Teluk Kiluan berda di Tanggamus, Lampung dan merupakan objek wisata lumba-lumba hidung botol dan paruh panjang. ",
    "Danau Ranau Terletak di Lampung Barat dan merupan objek wisata danau dengan cuaca yang sejuk dan pemandangan yang indah.",
    "Gunung pesagi terletak di Lampung Barat dan merupakan gunung tertinggi di Lampung dengan ketinggian 2.262 meter.",
  ];

  // Image Name List Here
  var imgList = [
    "assets/waykambas.jpg",
    "assets/pantaigigi.jpg",
    "assets/pulaupahawang.jpg",
    "assets/curupgangsa.jpg",
    "assets/telukkiluan.jpg",
    "assets/danauranau.jpg",
    "assets/gunungpesagi.jpg"
  ];

  @override
  Widget build(BuildContext context) {
    // MediaQuery to get Device Width
    double width = MediaQuery.of(context).size.width * 0.6;
    return Scaffold(
      appBar: AppBar(
        // App Bar
        title: Text(
          "Gallery Information",
          style: TextStyle(
              color: Color.fromARGB(255, 255, 255, 255), fontSize: 20),
        ),
        elevation: 0,
        backgroundColor: Color.fromARGB(255, 0, 0, 0),
      ),
      // Main List View With Builder
      body: ListView.builder(
        itemCount: imgList.length,
        itemBuilder: (context, index) {
          return GestureDetector(
            onTap: () {
              // This Will Call When User Click On ListView Item
              showDialogFunc(
                  context, imgList[index], titleList[index], descList[index]);
            },
            // Card Which Holds Layout Of ListView Item
            child: Card(
              child: Row(
                children: <Widget>[
                  Container(
                    width: 135,
                    height: 100,
                    child: Image.asset(imgList[index]),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(10.0),
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: <Widget>[
                        Text(
                          titleList[index],
                          style: TextStyle(
                            fontSize: 20,
                            color: Color.fromARGB(255, 0, 0, 0),
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        SizedBox(
                          height: 10,
                        ),
                        Container(
                          width: width,
                          child: Text(
                            descList[index],
                            maxLines: 3,
                            style: TextStyle(
                                fontSize: 12,
                                color: Color.fromARGB(255, 41, 41, 41)),
                          ),
                        ),
                      ],
                    ),
                  )
                ],
              ),
            ),
          );
        },
      ),
    );
  }
}

// This is a block of Model Dialog
showDialogFunc(context, img, title, desc) {
  return showDialog(
    context: context,
    builder: (context) {
      return Center(
        child: Material(
          type: MaterialType.transparency,
          child: Container(
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(5),
              color: Colors.white,
            ),
            padding: EdgeInsets.all(2),
            height: 420,
            width: MediaQuery.of(context).size.width * 0.78,
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.center,
              children: <Widget>[
                ClipRRect(
                  borderRadius: BorderRadius.circular(10),
                  child: Image.asset(
                    img,
                    width: 300,
                    height: 300,
                  ),
                ),
                SizedBox(
                  height: 10,
                ),
                Text(
                  title,
                  style: TextStyle(
                    fontSize: 25,
                    color: Color.fromARGB(255, 0, 0, 0),
                    fontWeight: FontWeight.bold,
                  ),
                ),
                SizedBox(
                  height: 10,
                ),
                Container(
                  // width: 200,
                  child: Align(
                    alignment: Alignment.center,
                    child: Text(
                      desc,
                      maxLines: 4,
                      style: TextStyle(
                          fontSize: 15, color: Color.fromARGB(255, 43, 43, 43)),
                      textAlign: TextAlign.center,
                    ),
                  ),
                ),
              ],
            ),
          ),
        ),
      );
    },
  );
}
