<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WondeLamp : Wonderful Lampung</title>
    <link rel="icon" href="image\Wonderlamp.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.10.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>

<header class="text-white-600 body-font head">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center pl-16 pr-16">
        <a class="flex title-font font-medium items-center text-white-900 mb-4 md:mb-0">
            <img class="logo" src="image\Wonderlamp.png"></img>
            <span class="ml-3 text-xl">Wonderful Lampung</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="#intro" class="mr-10 hover:text-white-900">Tentang</a>
            <a href="#photo" class="mr-10 hover:text-white-900">Galeri</a>
            <a href="#contact" class="mr-10 hover:text-white-900">Peta</a>
        </nav>
        <!-- <button class="w-32 p-2 rounded-2xl focus:outline-none bg-red-200 " onclick="search()">Search</button> -->

    </div>
</header>

<body>
    <div class="mainitems w-full h-full">
        <div class="container_f1">
            <form name="f1" class="f1">
                <img class="image1" name="image1" alt=""></img>
            </form>
        </div>

        <section id="intro" class="text-white-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="flex w-full mb-20 flex-wrap flex-col items-center">
                    <h1>Wonderful Lampung</h1>
                    <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base para paraw" id="para">Lampung adalah sebuah provinsi paling selatan di pulau Sumatra, Indonesia, dengan ibu kota atau pusat pemerintahan berada di kota Bandar Lampung.
                        Provinsi ini memiliki dua kota yaitu kota Bandar Lampung dan kota Metro serta 13 kabupaten.
                        Posisi provinsi Lampung secara geografis di sebelah Barat berbatasan dengan Samudra Hindia, di sebelah Timur dengan Laut Jawa,
                        di sebelah Utara berbatasan dengan provinsi Sumatra Selatan, dan di sebelah Selatan berbatasan dengan Selat Sunda.
                        Provinsi Lampung memiliki pelabuhan utama bernama Pelabuhan Panjang dan Pelabuhan Bakauheni,
                        bandar udara utama yakni Radin Intan II terletak 28 km dari ibu kota provinsi,
                        serta Stasiun Tanjung Karang di pusat ibu kota. Tahun 2020, penduduk provinsi Lampung berjumlah 9.007.848 jiwa, dengan kepadatan 268 jiwa/km.
                    </p>
                    <button id="readmore" class="underline text-blue-500 p-2 w-28 m-1">Read more</button>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://i0.wp.com/kelloggsnyc.com/wp-content/uploads/2020/04/teluk-kiluan.png">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://cdn.nativeindonesia.com/foto/2020/10/Keindahan-Air-Terjun-Batu-Putu.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://images.bisnis-cdn.com/thumb/posts/2018/10/31/855051/bendungan-batu-tegi-lampung.jpg?w=600&h=400">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://lampungpost.id/wp-content/uploads/2020/03/OPI12-01-ILUSTRASI-LAMPUNG.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://www.lampost.co/upload/taman-nasional-way-kambas-pasang-pendeteksi-gajah.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="data:image/jpeg;base64,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">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="photo" class="text-white-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://www.itrip.id/wp-content/uploads/2021/04/Pulau-Pahawang-Lampung.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Pulau Pahawang</h1>
                                <p class="leading-relaxed mb-3">Assam is a state in northeastern India known for its wildlife, archeological sites and tea plantations. In the west, Guwahati, Assam’s largest city, features silk bazaars and the Kamakhya Temple.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/pulaupahawang">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.bernas.id/public/foto_news/image_news_535/01458097105Taman-Nasional-Way-Kambas%20(www.liburmulu.com).jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Taman Nasional Way Kambas</h1>
                                <p class="leading-relaxed mb-3">Uttarakhand, a state in northern India crossed by the Himalayas, is known for its Hindu pilgrimage sites. Rishikesh, a major centre for yoga study, was made famous by the Beatles’ 1968 visit.</p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/waykambas">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://bappelitbang.tanggamus.go.id/assets/uploads/berita/20191230112352_pantai-gigi-hiu-kabupaten-tanggamus-provinsi-lampu.jpeg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Pantai Karang Gigi Hiu</h1>
                                <p class="leading-relaxed mb-3">Meghalaya is a state in Northeast India. Meghalaya was formed by carving out two districts from the state of Assam: the United Khasi Hills and Jaintia Hills, and the Garo Hills on 21 January 1972.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/gigihiu">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2m
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://1.bp.blogspot.com/-6CC8TBqco6w/Xq918IRDCwI/AAAAAAAAATU/EjPdR-TWD1IMcZHPMV_7f5_AIXNJoFQpACNcBGAsYHQ/w1200-h630-p-k-no-nu/20200504_084728.png" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1"></h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Air Terjun Curup Gangsa</h1>
                                <p class="leading-relaxed mb-3">Madhya Pradesh, a large state in central India, retains landmarks from eras throughout Indian history. Begun in the 10th century, its Hindu and Jain temples at Khajuraho.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/curupgangsa">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2k
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://kelilinglampung.net/wp-content/uploads/2021/01/Foto-Gambar-Gunung-Pesagi-Lampung-Barat-andi_hendri-pariwisata_lampungbarat.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Gunung Pesagi</h1>
                                <p class="leading-relaxed mb-3">Kerala, a state on India's tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It's known for its palm-lined beaches and backwaters, a network of canals.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/gunungpesagi">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://cdn-2.tstatic.net/travel/foto/bank/images/teluk-kiluan_20160904_230606.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Teluk Kilauan</h1>
                                <p class="leading-relaxed mb-3">Kolkata (formerly Calcutta) is the capital of India's West Bengal state. Founded as an East India Company trading post, it was India's capital under the British Raj from 1773–1911.</p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/telukkilauan">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://www.andalastourism.com/wp-content/uploads/2021/10/Pantai-Tanjung-Setia.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Pantai Tanjung Setia</h1>
                                <p class="leading-relaxed mb-3">Uttar Pradesh is a state in northern India. With over 200 million inhabitants, it is the most populous state in India as well as the most populous country subdivision in the world.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/pantaitanjung">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2m
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/the-statue-of-thiruvalluvar-and-swami-vivekananda-memorial-in-picture-id1256543367?k=6&m=1256543367&s=612x612&w=0&h=bw1Sic9b0o6cM6SWWw6QVkVCfovh4bLrJ8d4YjnX-iM=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Danau Ranau</h1>
                                <p class="leading-relaxed mb-3">Tamil Nadu, a South Indian state, is famed for its Dravidian-style Hindu temples. In Madurai, Meenakshi Amman Temple has high ‘gopuram’ towers ornamented with colourful figures.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="/danauranau">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-white-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>2.2k
                                    </span>
                                    <span class="text-white-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="text-black body-font relative">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=lampung&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: contrast(1.2) opacity(3);"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
                <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-black text-lg mb-1 font-medium title-font">Hubungi Kami</h2>
                    <form>
                        <div class="relative mb-4">
                            <label for="text" class="leading-7 text-sm text-black">Nama</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="number" class="leading-7 text-sm text-black">No Telepon</label>
                            <input type="text" id="number" name="number" maxlength="10" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-black">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="leading-7 text-sm text-black">Pesan</label>
                            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-white-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="contactUs()">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="js/index.js"></script>
<script src="js/validate.js"></script>
<footer class="text-white-600 body-font foot">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white-900">
                <img class="logo" src="image\Wonderlamp.png"></img>
                <span class="ml-3 text-xl">Wonderlamp</span>
            </a>
            <p class="mt-2 text-sm text-white-500">Your Tourism guide for best ever places you can think of visiting</p>
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

</html>