<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.10.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header class="text-white-600 body-font head">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center pl-16 pr-10 navbar">
            <a class="flex title-font font-medium items-center text-white-900 mb-4 md:mb-0">
                <img class="logo" src="../Travel_Guru.png"></img>
                <span class="ml-3 text-3xl">Travel Guru</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a href="#intro" class="mr-5 text-2xl hover:text-white-900">Introduction</a>
                <a href="#photo" class="mr-5 text-2xl hover:text-white-900">Photos</a>
                <a href="#contact" class="mr-5 text-2xl hover:text-white-900">Contact Us</a>
                <button class="w-40 p-2 rounded-xl focus:outline-none bg-red-200 " onclick="search()">Search</button>
            </nav>
        </div>
    </header>

    <div class="carosel">
        <div class="img">
            <img src="./MEGHALYA.jpg" alt="" srcset="">
        </div>
    </div>


    <div class="detail">
        <div class="description">
            Tucked away in the hills of eastern sub-Himalayas is Meghalaya, one of the most beautiful State in the country. Nature has blessed her with abundant rainfall, sun-shine, virgin forests, high plateaus, tumbling waterfalls, crystal clear rivers, meandering streamlets and above all with sturdy, intelligent and hospitable people.
            Emergence of Meghalaya as an Autonomous State on 2nd April 1970 and as a full-fledged State on 21st January 1972 marked the beginning of a new era of the geo-political history of North Eastern India. It also marked the triumph of peaceful democratic negotiations, mutual understanding and victory over violence and intrigue.
            The State of Meghalaya is situated on the north east of India. It extends for about 300 kilometres in length and about 100 kilometres in breadth. It is bounded on the north by Goalpara, Kamrup and Nowgong districts, on the east by Karbi Anglong and North Cachar Hills districts, all of Assam, and on the south and west by Bangladesh. <span id="dots">...</span>
            <span id="more">
                Meghalaya TOURISM, Shillong, Tura, Jowai, Cherrapunjee, Nongpoh, Baghmara are some of the famous tourist destinations in Meghalaya. To be more specific Wards Lake, Lady Hydari Park, Sweet Falls, the Butterfly Museum, Nohkalikai Falls, Mawsmai Cave, Thangkarang Park, Eco Park, Khoh Ramhah, Green Rock Ranch are tourist places in Meghalaya - all worth visiting. When it comes to taking back something, you are going to be satisfied with your bag of moments turning into memories plus can also take along the brilliant handicrafts that are made of the residents of this state. Overall, this overwhelmingly beautiful, green and alive state makes a perfect holiday destination and can be thoroughly enjoyed by all!
            </span>
        </div>
        <button onclick="myFunction()" id="myBtn">Read more</button>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-5xl font-medium title-font mb-4 text-gray-900">Attractions</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-3xl">Explore Meghalaya the abode of clouds</p>
            </div>

            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://media.istockphoto.com/photos/nohkalikai-falls-at-sunset-meghalaya-india-picture-id1158622134?k=6&m=1158622134&s=612x612&w=0&h=7Q0aZYi2rD05BTIDVw_miR1IUpLE4Pv6sEoTno38gh0=">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nohkalika</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://media.istockphoto.com/photos/living-roots-bridge-over-river-shillong-meghalaya-india-picture-id840514260?k=6&m=840514260&s=612x612&w=0&h=igcIGA2kQBvonI9uhbGfjXUbyo4d3dGlvG-UaVpeWgw=">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shillong</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://media.istockphoto.com/photos/bridge-at-shnongpdeng-tourist-destination-meghalaya-picture-id964220434?k=6&m=964220434&s=612x612&w=0&h=hTk6vGU5lJVgP9OZRnKxYwcUZWu05vgbrCJnh7-Rz-I=">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shnongpdeng</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-2/3 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://i.pinimg.com/originals/d4/b3/06/d4b306c297f5038ddb9f2d23377f1994.jpg">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Vidyasagar Setu</h1>
                            <p class="leading-relaxed">It is a toll bridge
                                over the Hooghly River in West Bengal, India, linking the cities of Kolkata and Howrah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://media.istockphoto.com/photos/interior-siju-cave-garo-hills-meghalaya-india-picture-id1187326989?k=6&m=1187326989&s=612x612&w=0&h=dlrR-_MESESngOTjv2RfHxTij0e9EgG1KurRgqG5fTk=">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Siju cave, Garo Hills</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative card-img">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="https://media.istockphoto.com/photos/belur-math-kolkata-picture-id515751488?k=6&m=515751488&s=612x612&w=0&h=-jyWHLxwJtKWO5e54bT965W_a4Oi9Kjv34nMczZFqwE=">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">&emsp;
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white-600 body-font foot footer">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white-900">
                    <img class="logo" src="../Travel_Guru.png"></img>
                    <span class="ml-3 text-xl">Travel Guru</span>
                </a>
                <p class="mt-2 text-sm text-white-500">Your Tourism guide for best ever places you can think of visiting
                </p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2
                        class="title-font font-extrabold text-white-900 underline font-serif tracking-widest text-sm mb-3">
                        State Tourism Websites</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="https://www.gujarattourism.com/"
                                class="text-white-600 hover:text-white-800">Gujrat</a>
                        </li>
                        <li>
                            <a href="https://uttarakhandtourism.gov.in/"
                                class="text-white-600 hover:text-white-800">Uttrakhand</a>
                        </li>
                        <li>
                            <a href="http://megtourism.gov.in/"
                                class="text-white-600 hover:text-white-800">Meghalaya</a>
                        </li>
                        <li>
                            <a href="https://www.mptourism.com/" class="text-white-600 hover:text-white-800">Madhya
                                Pradhesh</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white-900 tracking-widest text-sm mb-3">&emsp;</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="https://www.keralatourism.org/"
                                class="text-white-600 hover:text-white-800">Kerela</a>
                        </li>
                        <li>
                            <a href="https://wbtourism.gov.in/" class="text-white-600 hover:text-white-800">West
                                Bengal</a>
                        </li>
                        <li>
                            <a href="http://www.uptourism.gov.in/" class="text-white-600 hover:text-white-800">Uttar
                                Pradesh</a>
                        </li>
                        <li>
                            <a href="https://tourism.bihar.gov.in/"
                                class="text-white-600 hover:text-white-800">Bihar</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white-900 tracking-widest text-sm mb-3">&emsp;</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="https://tourism.assam.gov.in/"
                                class="text-white-600 hover:text-white-800">Assam</a>
                        </li>
                        <li>
                            <a href="https://haryanatourism.gov.in/"
                                class="text-white-600 hover:text-white-800">Haryana</a>
                        </li>
                        <li>
                            <a href="http://punjabtourism.gov.in/"
                                class="text-white-600 hover:text-white-800">Punjab</a>
                        </li>
                        <li>
                            <a href="http://www.tamilnadutourism.org/" class="text-white-600 hover:text-white-800">Tamil
                                Nadu</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2
                        class="title-font font-extrabold underline text-white-900 font-serif tracking-widest text-sm mb-3">
                        Union Territory Tourism</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="http://www.delhitourism.gov.in/delhitourism/index.jsp"
                                class="text-white-600 hover:text-white-800">Delhi</a>
                        </li>
                        <li>
                            <a href="https://www.andaman.gov.in/" class="text-white-600 hover:text-white-800">Andaman
                                Nicobar</a>
                        </li>
                        <li>
                            <a href="https://www.lakshadweeptourism.com/"
                                class="text-white-600 hover:text-white-800">Lakshwadweep</a>
                        </li>
                        <li>
                            <a href="http://www.pondytourism.in/"
                                class="text-white-600 hover:text-white-800">Pudducherry</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>

    </footer>
    <script src="./Script.js"></script>
</body>

</html>