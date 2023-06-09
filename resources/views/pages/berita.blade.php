@extends('main')

@section('content')
    <section class="lg:px-[165px] lg:py-[100px] py-[75px]">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16 text-center">
            <p class="font-bold text-xl text-gray-900 lg:text-2xl">Berita Terkini</p>
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SMK Negeri 1 Garut</h2>
        </div>
        <div
            class="slider relative lg:h-[350px] mx-auto bg-white shadow-2xl p-8 rounded-2xl h-auto transition-all duration-300 overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative flex items-center">
                    <div
                        class=" slide-image after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-gradient-to-r after:from-blue-500 after:via-slate-200 after:to-orange-400 after:opacity-20 after:transition-all after:duration-300 relative w-[320px] h-[280px] flex-shrink-0 rounded-[20px] mr-[20px] overflow-hidden">
                        <img class=" object-cover block opacity-0 transition-all duration-300" src="images/video.png"
                            alt="">
                    </div>
                    <div class="slide-content pr-[25px]">
                        <div
                            class="slide-date text-[#444]block font-[500] text-gray-600 mb-3 opacity-0 transform translate-y-6 transition-all duration-400">
                            05 February 2023</div>
                        <div
                            class="slide-title font-[700] text-[#222] text-2xl mb-4 opacity-0 transform translate-y-6 transition-all duration-400">
                            Lorem, ipsum dolor.</div>
                        <div
                            class="slide-desc text-gray-500 leading-relaxed mb-6 opacity-0 transform translate-y-6 transition-all duration-400">
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Aliquam excepturi similique quo ipsum provident.</div>
                        <a href="#"
                            class="read-more inline-block bg-black py-4 px-9 rounded-full text-white shadow-lg text-uppercase font-medium tracking-wide opacity-0 transform translate-y-6 transition-all duration-400">Selengkapnya</a>
                    </div>
                </div>
                <div class="slide-pagination  mt-8"></div>
            </div>
        </div>
    </section>

    <section class="bg-slate-200 dark:bg-gray-900 lg:pb-[100px] pb-[75px]">
        <div class="py-[50px] px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Lainnya
                </h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How
                            to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap
                        lots of websites and are becoming the basis for a variety of tools that even influence both web
                        designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                                Jese Leos
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our
                            first project with React</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap
                        lots of websites and are becoming the basis for a variety of tools that even influence both web
                        designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                Bonnie Green
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
