<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WondeLamp : Wonderful Lampung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.10.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>

<header class="text-white-600 body-font head">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center pl-16 pr-16">
        <a class="flex title-font font-medium items-center text-white-900 mb-4 md:mb-0">
            <img class="logo" src="./Travel_Guru.png"></img>
            <span class="ml-3 text-xl">WondeLamp : Wonderful Lampung</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

            <a href="#intro" class="mr-5 hover:text-white-900">Introduction</a>
            <a href="#photo" class="mr-5 hover:text-white-900">Photos</a>
            <a href="#contact" class="mr-5 hover:text-white-900">Contact US</a>
        </nav>
        <!-- <button class="w-32 p-2 rounded-2xl focus:outline-none bg-red-200 " onclick="search()">Search</button> -->

    </div>
</header>

<body>
    <div class="mainitems w-full h-full">
        <div class="container_f1">
            <form name="f1" class="f1">
                <img class="image1" name="image1" src="https://source.unsplash.com/2480x1080/?india,monuments" alt=""></img>
            </form>
        </div>

        <section id="intro" class="text-white-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="flex w-full mb-20 flex-wrap flex-col items-center">
                    <h1>Incredible India</h1>
                    <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base para" id="para">One of the oldest civilisations in the world
                        India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions,the country is
                        among the most popular tourist destinations in the world.It covers an area of 32, 87,263 sq. km, extending from
                        the snow-covered Himalayan heights to the tropical rain forests of the south. As the 7th largest country in the world, India stands
                        apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.
                        Fringed by the Great Himalayas in the north, it stretches southwards and at the Tropic of Cancer, tapers off into the
                        Indian Ocean between the Bay of Bengal on the east and the Arabian Sea on the west. As you travel the expanse of the country,
                        you are greeted by diverse nuances of cuisines, faiths, arts, crafts, music, nature, lands, tribes, history and adventure sports.
                        India has a mesmeric conflation of the old and the new. As the bustling old bazaars rub shoulders with swanky shopping malls, and
                        majestic monuments accompany luxurious heritage hotels, the quintessential traveller can get the best of both worlds. Head to the
                        mountains, enjoy a beach retreat or cruise through the golden Thar, India has options galore for all.</p>
                    <button id="readmore" class="underline text-blue-500 p-2 w-28 m-1">Read more</button>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://i0.wp.com/kelloggsnyc.com/wp-content/uploads/2020/04/teluk-kiluan.png">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://www.planetware.com/photos-large/IND/india-top-attractions-varanasi.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://images.pexels.com/photos/5186627/pexels-photo-5186627.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://procaffenation.com/wp-content/uploads/2017/04/beautiful-view-of-howrah-bridge-at-evening-compressor.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2019/12/statue-of-unity-1575646730.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://im.indiatimes.in/content/2020/Nov/cherry-blossom_5fb8f33489dab.jpg?w=2184&h=1116&cc=1">
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://www.holidify.com/images/bgImages/GUWAHATI.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Assam</h1>
                                <p class="leading-relaxed mb-3">Assam is a state in northeastern India known for its wildlife, archeological sites and tea plantations. In the west, Guwahati, Assam’s largest city, features silk bazaars and the Kamakhya Temple.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/mindrolling-monastery-dehradun-picture-id842997752?k=6&m=842997752&s=612x612&w=0&h=CfR47AZV46kmFtfBJHiC1p6NCsPCizYa2vdI7lMkfBo=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Uttrakhand</h1>
                                <p class="leading-relaxed mb-3">Uttarakhand, a state in northern India crossed by the Himalayas, is known for its Hindu pilgrimage sites. Rishikesh, a major centre for yoga study, was made famous by the Beatles’ 1968 visit.</p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./Pages/Uttarakhand.html">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/nohkalikai-falls-at-sunset-meghalaya-india-picture-id1158622134?k=6&m=1158622134&s=612x612&w=0&h=7Q0aZYi2rD05BTIDVw_miR1IUpLE4Pv6sEoTno38gh0=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Meghalaya</h1>
                                <p class="leading-relaxed mb-3">Meghalaya is a state in Northeast India. Meghalaya was formed by carving out two districts from the state of Assam: the United Khasi Hills and Jaintia Hills, and the Garo Hills on 21 January 1972.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./Pages/Meghalaya.html">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/gwalior-fort-picture-id481494314?k=6&m=481494314&s=612x612&w=0&h=j1W9toLT4BH91fw0UQeUnKFfWqegpTnB8g8XBFBrjRs=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1"></h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Madhya Pradhesh</h1>
                                <p class="leading-relaxed mb-3">Madhya Pradesh, a large state in central India, retains landmarks from eras throughout Indian history. Begun in the 10th century, its Hindu and Jain temples at Khajuraho.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/houseboat-on-the-kerala-backwaters-in-india-picture-id472114428?k=6&m=472114428&s=612x612&w=0&h=oKGoMt0eT0VaMuk7yLn_morobacxGr4lsXkiWU1XyWg=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Kerela</h1>
                                <p class="leading-relaxed mb-3">Kerala, a state on India's tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It's known for its palm-lined beaches and backwaters, a network of canals.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/victoria-memorial-landmark-in-calcutta-india-picture-id466240080?k=6&m=466240080&s=612x612&w=0&h=D46kD5bZsVw45pln__Smqvn0hJKyuqYA1x0RKrnXRd0=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">West Bengal</h1>
                                <p class="leading-relaxed mb-3">Kolkata (formerly Calcutta) is the capital of India's West Bengal state. Founded as an East India Company trading post, it was India's capital under the British Raj from 1773–1911.</p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./Pages/Kolkata.html">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.pexels.com/photos/1603650/pexels-photo-1603650.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Uttar Pradesh</h1>
                                <p class="leading-relaxed mb-3">Uttar Pradesh is a state in northern India. With over 200 million inhabitants, it is the most populous state in India as well as the most populous country subdivision in the world.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Tamil Nadu</h1>
                                <p class="leading-relaxed mb-3">Tamil Nadu, a South Indian state, is famed for its Dravidian-style Hindu temples. In Madurai, Meenakshi Amman Temple has high ‘gopuram’ towers ornamented with colourful figures.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://www.holidify.com/images/bgImages/FATEHPUR.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Rajasthan</h1>
                                <p class="leading-relaxed mb-3">Rajasthan is a state located in northern India. The state covers an area of 342,239 square kilometres or 10.4 percent of the total geographical area of India. It is the seventh largest Indian state.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./Pages/Rajasthan.html">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/india-gate-picture-id510795912?k=6&m=510795912&s=612x612&w=0&h=-sOHjGDi3d2RZ20gq2jTB9d3eexyRdrg3TETLbe4zq4=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Delhi</h1>
                                <p class="leading-relaxed mb-3">Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India.</p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./Pages/Delhi.html">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/junagadh-city-in-gujarat-picture-id477553380?k=6&m=477553380&s=612x612&w=0&h=uCyWrqdQuHNTrq9hlpsDuzuNq_3YaGIGioAUMLpqlx8=" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Gujrat</h1>
                                <p class="leading-relaxed mb-3">Gujarat is a state on the western coast of India with a coastline of 1,600 km – most of which lies on the Kathiawar peninsula – and a population of 60.4 million.It is the fifth-largest Indian state.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://www.holidify.com/images/tooltipImages/AMRITSAR.jpg" alt="blog">
                            <div class="p-6">
                                <!-- <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">CATEGORY</h2> -->
                                <h1 class="title-font text-lg font-medium text-white-900 mb-3">Punjab</h1>
                                <p class="leading-relaxed mb-3">Punjab, a state bordering Pakistan, is the heart of India’s Sikh community. The city of Amritsar, founded in the 1570s by Sikh Guru Ram Das, is the site of Harmandir Sahib, the holiest gurdwara.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
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
                <img class="logo" src="./Travel_Guru.png"></img>
                <span class="ml-3 text-xl">Travel Guru</span>
            </a>
            <p class="mt-2 text-sm text-white-500">Your Tourism guide for best ever places you can think of visiting</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-extrabold text-white-900 underline font-serif tracking-widest text-sm mb-3">State Tourism Websites</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="https://www.gujarattourism.com/" class="text-white-600 hover:text-white-800">Gujrat</a>
                    </li>
                    <li>
                        <a href="https://uttarakhandtourism.gov.in/" class="text-white-600 hover:text-white-800">Uttrakhand</a>
                    </li>
                    <li>
                        <a href="http://megtourism.gov.in/" class="text-white-600 hover:text-white-800">Meghalaya</a>
                    </li>
                    <li>
                        <a href="https://www.mptourism.com/" class="text-white-600 hover:text-white-800">Madhya Pradhesh</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-white-900 tracking-widest text-sm mb-3">&emsp;</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="https://www.keralatourism.org/" class="text-white-600 hover:text-white-800">Kerela</a>
                    </li>
                    <li>
                        <a href="https://wbtourism.gov.in/" class="text-white-600 hover:text-white-800">West Bengal</a>
                    </li>
                    <li>
                        <a href="http://www.uptourism.gov.in/" class="text-white-600 hover:text-white-800">Uttar Pradesh</a>
                    </li>
                    <li>
                        <a href="https://tourism.bihar.gov.in/" class="text-white-600 hover:text-white-800">Bihar</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-white-900 tracking-widest text-sm mb-3">&emsp;</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="https://tourism.assam.gov.in/" class="text-white-600 hover:text-white-800">Assam</a>
                    </li>
                    <li>
                        <a href="https://haryanatourism.gov.in/" class="text-white-600 hover:text-white-800">Haryana</a>
                    </li>
                    <li>
                        <a href="http://punjabtourism.gov.in/" class="text-white-600 hover:text-white-800">Punjab</a>
                    </li>
                    <li>
                        <a href="http://www.tamilnadutourism.org/" class="text-white-600 hover:text-white-800">Tamil Nadu</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-extrabold underline text-white-900 font-serif tracking-widest text-sm mb-3">Union Territory Tourism</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="http://www.delhitourism.gov.in/delhitourism/index.jsp" class="text-white-600 hover:text-white-800">Delhi</a>
                    </li>
                    <li>
                        <a href="https://www.andaman.gov.in/" class="text-white-600 hover:text-white-800">Andaman Nicobar</a>
                    </li>
                    <li>
                        <a href="https://www.lakshadweeptourism.com/" class="text-white-600 hover:text-white-800">Lakshwadweep</a>
                    </li>
                    <li>
                        <a href="http://www.pondytourism.in/" class="text-white-600 hover:text-white-800">Pudducherry</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>

</footer>

</html>