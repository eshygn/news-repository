@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">


            <body class="bg-gray-200">

                <section class="main-content p-4">
                    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news1.jpg" alt="Breaking News 1" class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Artificial Intelligence</h2>
                            <p class="mt-2 text-gray-700"><a href=# class="hover:underline">China opts out of international
                                    blueprint to stop AI
                                    race in
                                    weapons development</a>
                            </p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news2.jpg" alt="Breaking News 2"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Russia-Ukraine</h2>
                            <p class="mt-2 text-gray-700"> <a href="#" class="hover:underline">Putin warns US, NATO
                                    risk war with Russia if long-range strike
                                    bans lifted for Ukraine</a>
                            </p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news3.jpg" alt="Breaking News 3"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Vietnam Typhoon</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline">Vietnam typhoon death
                                    toll rises to 233 as more bodies found in
                                    areas hit by landslides, flooding.</a></p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news4.jpg" alt="Breaking News 4"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Second Assination Attempt</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline">Suspect arrested after
                                    pointing AK-47 at Trump while he was
                                    golfing in Florida amidst US Presidental Election.</a></p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news5.jpg" alt="Breaking News 5"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Papa Guinea shooting</h2>
                            <p class="mt-2 text-gray-700"><a href="#"
                                    class="hover:underline transition duration-200 ease-in-out">Shootouts over gold mine
                                    kill 30 in Papua New Guinea</a></p>

                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news6.jpg" alt="Breaking News 6"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Flood in Europe</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline">'Catastrophe' as deadly
                                    floods hit Central and Eastern Europe,
                                    with one person confirmed to have drowned in Poland</a>
                            </p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news7.jpg" alt="Breaking News 7"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Space</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline">Astronauts reveal what
                                    life is like on ISS - and how they deal
                                    with 'space smell'</a></p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news8.jpg" alt="Breaking News 8"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Social Media</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline">TikTok to begin appeal
                                    against being sold or banned in US</a></p>
                        </article>
                        <article class="news-item bg-white p-4 rounded-lg shadow-md">
                            <img src="/images/news9.jpg" alt="Breaking News 9"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">Football</h2>
                            <p class="mt-2 text-gray-700"><a href="#" class="hover:underline"><a href="#"
                                        class="hover:underline">Football latest: Premier
                                        League reaction as Arsenal and Newcastle win to stay unbeaten</a></p>
                        </article>

                        <footer><News-Portal Laravel></footer>
                    </div>
                </section>
        </div>
    </div>
@endsection
