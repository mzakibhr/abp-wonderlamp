<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="icon" href="image\Wonderlamp.png">
    <link rel="stylesheet" href="{{asset('css/content/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.10.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header class="text-white-600 body-font head">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center pl-16 pr-10">
            <a class="flex title-font font-medium items-center text-white-900 mb-4 md:mb-0" href="/">
                <img class="logo" src="image\Wonderlamp.png"></img>
                <span class="ml-3 text-3xl">Wonderful Lampung</span>
            </a>
        </div>
    </header>

    <div class="carosel">
        @yield('carosel')
    </div>


    <div class="detail">
        @yield('detail')
        <button onclick="myFunction()" id="myBtn">Read more</button>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-5xl font-medium title-font mb-4 text-white">Monumen di Lampung</h1>
            </div>

            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-2/3 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://www.jejakpiknik.com/wp-content/uploads/2017/12/@jakaadypurnawarman-630x380.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Menara Siger</h1>
                            <p class="leading-relaxed">Menara Siger adalah menara yang juga menjadi titik nol SumatraGubernur Lampung Sjachroedin Z.P.
                                dalam peresmian Menara Siger pada 30 April 2008, ia menyatakan optimistis Menara Siger akan mendorong kemajuan Lampung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://majalahteras.com/assets/images/2017/08/monumen-kopiah.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Tugu Kopiah Emas</h1>
                            <p class="leading-relaxed">Tugu Kopiah Emas ini dibangun di pinggir jalan lintas Sumatera di kota Gunung Sugih, kabupaten Lampung Tengah.
                                Lokasinya berdampingan dengan Tugu Pengantin yang menampilkan sepasang pengantin pria dan wanita dalam balutan pakaian tradisional Lampung.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Bundaran_Tugu_Adipura_Bandar_Lampung.JPG">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Tugu Adipura</h1>
                            <p class="leading-relaxed">Tugu Adipura atau sering juga disebut Tugu Gajah adalah tugu yang terletak di jantung kota Bandar Lampung, Indonesia.
                                Monumen ini berada antara perempatan Jalan Raden Intan, Jalan Jendral Sudirman, Jalan Diponegoro dan Jalan A Yani.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white-600 body-font foot">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white-900">
                    <img class="logo" src="image\Wonderlamp.png"></img>
                    <span class="ml-3 text-xl">Wonderlamp</span>
                </a>
                <p class="mt-2 text-sm text-white-500">Sebuah Website yang Memperkenalkan Wisata Lampung</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-extrabold text-white-900 font-serif tracking-widest text-sm mb-3">Kontak Kami</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white-600 hover:text-white-800">Telp : (021)-82512732</a>
                        </li>
                        <li>
                            <a class="text-white-600 hover:text-white-800">WA : 0823-8971-2400</a>
                        </li>
                        <li>
                            <a class="text-white-600 hover:text-white-800">Senin - Minggu</a>
                        </li>
                        <li>
                            <a class="text-white-600 hover:text-white-800">24 Jam Non Stop</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-extrabold text-white-900 font-serif tracking-widest text-sm mb-3">Alamat</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white-600 hover:text-white-800">Terbanggi Ilir, Bandar Mataram, Central Lampung Regency, Lampung</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>

    </footer>
    <script src="js/content/script.js"></script>
</body>

</html>