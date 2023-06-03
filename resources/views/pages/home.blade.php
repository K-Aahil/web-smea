@extends('main')

@section('content')
    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url(images/banner1.png)">
        <div class="px-10 mx-auto max-w-screen-xl text-center py-24 lg:py-56 md:text-start md:mx-[165px] md:px-0">
            <h1
                class="mb-4 text-[36px] lg:text-[64px] font-[700] tracking-tight leading-[110%] text-white md:text-5xl lg:text-6xl">
                Selamat Datang di <br> SMK Negeri 1 Garut!
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl lg:w-[680px]">
                Kami memiliki komitmen yang kuat untuk mengembangkan potensi setiap individu dan mempersiapkan mereka
                untuk menghadapi tantangan dunia kerja yang semakin kompetitif.
            </p>
        </div>
    </section>

    <section>
        <div
            class="px-10 lg:px-4 mx-auto mt-[75px] lg:mt-[100px] max-w-screen-xl items-center justify-center md:mx-[165px] lg:py-16">
            <div class="text-center">
                <div class="flex justify-center items-center lg:gap-3">
                    <h1 class="text-[22px] font-medium tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[36px]">
                        Lebih dekat dengan
                    </h1>
                    <div class="hidden lg:block w-[36px] h-[3px] bg-black"></div>
                </div>
                <p class="lg:mt-6 mt-[5px] text-[30px] font-black text-gray-900 lg:text-[48px] sm:px-16 lg:px-48">SMK Negeri
                    1 Garut
                </p>
            </div>

            <div
                class="mt-[45px] lg:mt-[60px] p-[25px] lg:p-0 lg:h-[500px] rounded-t-xl lg:rounded-xl justify-between shadow-sm sm:flex bg-[#FFF2E7]">
                <div class=" lg:flex lg:flex-wrap lg:py-[100px] lg:pl-[96px] text-center lg:text-left">
                    <div class="lg:flex lg:flex-col h-full">
                        <h3 class="text-[22px] lg:text-[36px] font-[600] text-gray-900 mt-[10px] lg:mt-0">
                            Profile SMK Negeri 1 Garut
                        </h3>
                        <p
                            class="lg:text-left lg:w-[456px] mt-3 lg:mt-1 text-[#475467] font-inter text-[14px] lg:text-[20px] dark:text-gray-400">
                            Kami adalah sekolah menengah kejuruan yang berdedikasi untuk mempersiapkan siswa-siswa kami
                            menghadapi dunia kerja saat ini.
                        </p>
                        <div class="lg:mt-auto mt-[30px]">
                            <button type="button"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 transition-all text-sm">
                                Selengkapnya
                                <svg class="w-2.5 h-auto" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1 7C0.447715 7 -3.73832e-07 7.44771 -3.49691e-07 8C-3.2555e-07 8.55228 0.447715 9 1 9L13.0858 9L7.79289 14.2929C7.40237 14.6834 7.40237 15.3166 7.79289 15.7071C8.18342 16.0976 8.81658 16.0976 9.20711 15.7071L16.0303 8.88388C16.5185 8.39573 16.5185 7.60427 16.0303 7.11612L9.20711 0.292893C8.81658 -0.0976318 8.18342 -0.0976318 7.79289 0.292893C7.40237 0.683417 7.40237 1.31658 7.79289 1.70711L13.0858 7L1 7Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="hidden lg:inline-flex bg-white w-[60px] h-[60px] lg:w-[100px] lg:h-[100px] rounded-full items-center justify-center absolute lg:ml-[628px] lg:mt-[265px]  z-50">
                    <span
                        class="pulse:before absolute h-full w-full bg-white rounded-full z-[-1] opacity-10 animate-pulse"></span>
                    <span
                        class="pulse:after absolute h-full w-full bg-white rounded-full z-[-1] opacity-50 animate-pulse-delay"></span>

                    <img class="lg:w-auto lg:h-auto w-[25px] h-[25px]" src="icons/play.svg" alt="">
                </div>

                <div
                    class="hidden lg:inline flex-shrink-0 relative w-full rounded-xl overflow-hidden sm:rounded-l-xl sm:max-w-[15rem] md:rounded-l-none md:max-w-xs lg:max-w-none lg:w-[480px]">
                    <img class="w-full h-full absolute top-0 left-0 object-cover" src="images/video.png"
                        alt="Image Description">
                </div>
            </div>
            <div class="lg:hidden relative justify-center items-center pb-[75px]">
                <div class="bg-red-100 w-500px">
                    <img class="w-full h-[250px] top-0 left-0 object-cover rounded-b-xl" src="images/video.png"
                        alt="Image Description">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F2F4F7]">
        <div
            class=" py-8 px-10 lg:px-0 mx-auto max-w-screen-xl items-center justify-center md:mx-[165px]
            lg:py-16">
            <div class="text-center lg:mt-[100px] mt-[75px]">
                <div class="flex justify-center items-center lg:gap-3">
                    <h1
                        class="text-[22px] font-medium tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[36px]">
                        Mengapa memilih
                    </h1>
                    <div class="hidden lg:block w-[36px] h-[3px] bg-black"></div>
                </div>
                <p class="lg:mt-6 mt-[5px] text-[30px] font-black text-gray-900 lg:text-[48px] sm:px-16 lg:px-48">SMK Negeri
                    1 Garut?
                </p>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center lg:gap-5 pb-[75px] lg:pb-[100px]">
                <div
                    class="mt-[50px] lg:mt-[60px] w-[270px] h-[320px] lg:w-[355px] lg:h-[400px] bg-[#004C77] rounded-[25px] shadow-[0_12px_50px_3px_rgba(0, 0, 0, 0.13)] inline-flex justify-center items-center text-center">
                    <div class="">
                        <img class="w-[150px] h-[120px] lg:w-[200px] lg:h-[155px]" src="icons/toga.svg" alt="" />
                        <h5 class="text-white text-[24px] lg:text-[36px] font-[500] mt-[30px] lg:mt-[40px]">Lulusan <br>
                            Berkualitas
                        </h5>
                    </div>
                </div>
                <div
                    class="mt-[50px] lg:mt-[60px] w-[270px] h-[320px] lg:w-[355px] lg:h-[400px] bg-white rounded-[25px] shadow-[0_12px_50px_3px_rgba(0, 0, 0, 0.13)] inline-flex justify-center items-center text-center">
                    <div class="">
                        <img class="w-[150px] h-[120px] lg:w-[200px] lg:h-[155px]" src="icons/score.svg" alt="" />
                        <h5 class="text-black text-[24px] lg:text-[36px] font-[500] mt-[30px] lg:mt-[40px]">Guru <br>
                            Kompeten
                        </h5>
                    </div>
                </div>
                <div
                    class="mt-[50px] lg:mt-[60px] w-[270px] h-[320px] lg:w-[355px] lg:h-[400px] bg-[#004C77] rounded-[25px] shadow-[0_12px_50px_3px_rgba(0, 0, 0, 0.13)] inline-flex justify-center items-center text-center">
                    <div class="">
                        <img class="w-[150px] h-[120px] lg:w-[200px] lg:h-[155px]" src="icons/book.svg" alt="" />
                        <h5 class="text-white text-[24px] lg:text-[36px] font-[500] mt-[30px] lg:mt-[40px]">Fasilitas <br>
                            Lengkap
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FFF0E2]">
        <div class="px-10 lg:px-0 mx-auto max-w-screen-xl items-center justify-center md:mx-[165px]
            lg:py-16">
            <div class="text-center">
                <div class="flex justify-center items-center gap-3 pt-[75px]">
                    <h1
                        class="text-[30px] font-medium tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[48px] lg:font-[700]">
                        Kompetensi Keahlian
                    </h1>
                    <div class="hidden lg:inline w-[36px] h-[3px] bg-black"></div>
                </div>
                <p class="mt-6 text-[16px] text-[#475467] lg:text-[24px] sm:px-16 lg:px-48">Kami memiliki 10
                    kompetensi keahlian yang berkualitas untuk memberikan pendidikan dan pelatihan yang terbaik bagi
                    para siswa - siswi.
                </p>
            </div>
            <div class="swiper majorSwiper mt-[75px] pb-[100px] hidden lg:block">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card lg:w-[269px] lg:h-[332px] bg-white shadow-xl items-center justify-center">
                        <a href="">
                            <img class="w-[200px] h-[190px] mt-[39px]" src="images/major/sij.png" alt="" />
                            <a class="items-center text-center" href="">
                                <p class="card-title mt-[18px] mb-[30px] px-[12px]">Pengembangan Perangkat Lunak dan
                                    Gim
                                </p>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper majorSwiperMobile mt-[50px] pb-[115px] lg:hidden">
                <div class="swiper-wrapper relative">
                    <div class="swiper-slide card h-[350px] bg-white shadow-xl items-center justify-center">
                        <a href="">
                            <img class="w-[200px] h-[190px] mt-[39px]" src="images/major/sij.png" alt="" />
                            <a class="items-center text-center" href="">
                                <p class="card-title mt-[18px] mb-[30px] px-[12px]">Pengembangan Perangkat Lunak dan
                                    Gim
                                </p>
                            </a>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination pb-[50px]"></div>
            </div>
        </div>
    </section>

    <section class="bg-[#004C77]">
        <div class="px-10 lg:px-0 mx-auto max-w-screen-xl items-center justify-center md:mx-[165px]
            lg:py-16">
            <div class="lg:flex lg:flex-col lg:mt-[100px] text-center pt-[75px] lg:pt-0">
                <div class="lg:flex items-center gap-3 ">
                    <h1
                        class="text-[30px] font-medium tracking-tight leading-none text-white md:text-5xl lg:text-[48px] lg:font-[700]">
                        Ekstrakulikuler
                    </h1>
                    <div class="hidden lg:inline w-[36px] h-[3px] bg-white"></div>
                </div>
                <div class="flex justify-between items-center mt-6 relative">
                    <p class="lg:w-[910px] font-inter text-[16px] text-[#F7F1F1] font-[400] lg:text-[24px]">
                        Kami memiliki 10 Selain Kompetensi Keahlian, ada lebih dari 35 Ekstrakulikuler yang dapat
                        dipilih berdasarkan minat serta bakat yang dimiliki.
                    </p>
                    <div class="hidden lg:block w-[165px] absolute right-0">
                        <div
                            class="w-[66px] h-[66px] bg-white rounded-full hover:cursor-pointer flex items-center justify-center swiper-button-next after:hidden">
                            <img src="icons/next.svg" alt="">
                        </div>
                        <div
                            class="w-[66px] h-[66px] bg-white rounded-full hover:cursor-pointer flex items-center justify-center swiper-button-prev after:hidden">
                            <img src="icons/back.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper eXSwiper mt-[47px] pb-[100px] hidden lg:block">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card lg:w-[210px] lg:h-[230px] bg-white shadow-xl items-center justify-cente">
                        <a class="" href="">
                            <img class="w-[160px] h-[135px] mt-[30px]" src="images/major/sij.png" alt="" />
                            <a class="items-center text-center" href="">
                                <p class="card-title mt-[18px]">SIJA</p>
                            </a>
                        </a>
                    </div>
                </div>
            </div>

            <div class="swiper eXSwiperMobile mt-[50px] pb-[100px] lg:hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card h-[200px] bg-white shadow-xl items-center justify-cente">
                        <a class="" href="">
                            <img class="w-[130px] h-[120px] mt-[25px]" src="images/major/sij.png" alt="" />
                            <a class="items-center text-center" href="">
                                <p class="card-title mt-[12px]">SIJA</p>
                            </a>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination pb-[40px]"></div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="px-10 lg:px-0 mx-auto max-w-screen-xl items-center justify-center md:mx-[165px] lg:py-16">
            <div class="text-center">
                <div class="lg:flex justify-center items-center gap-3 pt-[75px] lg:pt-0 lg:mt-[100px]">
                    <h1
                        class="text-[30px] font-medium tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[48px] lg:font-[700]">
                        Berita Terbaru
                    </h1>
                    <div class="hidden lg:inline w-[36px] h-[3px] bg-black"></div>
                </div>
                <p class="mt-6 text-[16px] text-[#475467] lg:text-[24px] sm:px-16 lg:px-48">
                    Cek berita terbaru dari SMK Negeri 1 Garut!
                </p>
            </div>

            <div class="mx-auto max-w-screen-xl mt-[50px] lg:mt-[100px]">
                <div class="lg:flex lg:justify-between lg:pb-[100px]">
                    <div class="lg:w-[820px] lg:flex pb-[75px] lg:pb-0">
                        <div class="lg:mr-[48px] mt-[80px] lg:mt-0">
                            <div
                                class="h-[300px] w-[310px] lg:h-[390px] lg:w-[365px] bg-[#004C77] rounded-[20px] left-[20px] relative lg:left-[23px] lg:top-[23px]">
                                <div class="absolute -left-[15px] lg:-left-[23px] -top-[23px]">
                                    <img class="h-[300px] w-[310px] lg:h-[390px] lg:w-[365px] rounded-[20px] "
                                        src="images/video.png" alt="">
                                </div>
                            </div>
                            <div class="mt-[30px] lg:mt-[50px] lg:max-w-[385px]">
                                <p class="text-[20px] lg:text-[24px] font-[500] ">Siswa SMK Negeri 1 Garut raih juara
                                    Nasional!!!
                                </p>
                                <p
                                    class="text-justify font-inter font-[400] text-[14px] lg:text-[16px] mt-[10px] lg:mt-[20px]">
                                    Lorem
                                    ipsum dolor
                                    sit amet
                                    consectetur
                                    adipisicing elit. Possimus
                                    deserunt eligendi
                                    quibusdam amet? Aliquid quaerat ipsa exercitationem maiores distinctio explicabo
                                    nemo, ab quae est quam, quo eaque, ut earum nisi!</p>

                                <a href="#" class="inline-flex items-center mt-[20px] lg:mt-[30px]">
                                    <div class="w-[30px] h-[30px] lg:w-[52px] lg:h-[52px]">
                                        <img class="rounded-full" src="images/major/sij.png" alt="">
                                    </div>
                                    <div class="text-left ml-[10px] lg:ml-[14px]">
                                        <div class="-mt-1 font-sans text-sm font-semibold">Admin</div>
                                        <div class="mb-1 text-xs">23 Juni 2023</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="lg:mr-[48px] mt-[80px] lg:mt-0">
                            <div
                                class="h-[300px] w-[310px] lg:h-[390px] lg:w-[365px] bg-[#004C77] rounded-[20px] left-[20px] relative lg:left-[23px] lg:top-[23px]">
                                <div class="absolute -left-[15px] lg:-left-[23px] -top-[23px]">
                                    <img class="h-[300px] w-[310px] lg:h-[390px] lg:w-[365px] rounded-[20px] "
                                        src="images/video.png" alt="">
                                </div>
                            </div>
                            <div class="mt-[30px] lg:mt-[50px] lg:max-w-[385px]">
                                <p class="text-[20px] lg:text-[24px] font-[500] ">Siswa SMK Negeri 1 Garut raih juara
                                    Nasional!!!
                                </p>
                                <p
                                    class="text-justify font-inter font-[400] text-[14px] lg:text-[16px] mt-[10px] lg:mt-[20px]">
                                    Lorem
                                    ipsum dolor
                                    sit amet
                                    consectetur
                                    adipisicing elit. Possimus
                                    deserunt eligendi
                                    quibusdam amet? Aliquid quaerat ipsa exercitationem maiores distinctio explicabo
                                    nemo, ab quae est quam, quo eaque, ut earum nisi!</p>

                                <a href="#" class="inline-flex items-center mt-[20px] lg:mt-[30px]">
                                    <div class="w-[30px] h-[30px] lg:w-[52px] lg:h-[52px]">
                                        <img class="rounded-full" src="images/major/sij.png" alt="">
                                    </div>
                                    <div class="text-left ml-[10px] lg:ml-[14px]">
                                        <div class="-mt-1 font-sans text-sm font-semibold">Admin</div>
                                        <div class="mb-1 text-xs">23 Juni 2023</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-[288px] lg:inline hidden">
                        <div class="flex justify-between items-center pb-[39px] mb-[39px] border-b-gray-400 border-b-2 ">
                            <div class="lg:max-w-[130px]">
                                <p class="lg:text-[18px] font-[500] ">Siswa SMK Negeri 1 Garut raih juara Nasional!
                                </p>

                                <a href="#" class="inline-flex items-center lg:mt-[10px]">
                                    <div class="lg:w-[30px] lg:h-[30px]">
                                        <img class="rounded-full" src="images/major/sij.png" alt="">
                                    </div>
                                    <div class="text-left lg:ml-[11px]">
                                        <div class="-mt-1 text-sm font-[500] text-[14px]">Admin</div>
                                        <div class="mb-1 text-xs">23 Juni 2023</div>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="lg:w-[130px] lg:h-[130px] bg-[#004C77] rounded-[20px] relative left-[8px] top-[8px]">
                                <div class="absolute -left-[8px] -top-[8px]">
                                    <img class="lg:w-[]130px] lg:h-[130px] rounded-[20px] " src="images/video.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pb-[39px] mb-[39px] border-b-gray-400 border-b-2 ">
                            <div class="lg:max-w-[130px]">
                                <p class="lg:text-[18px] font-[500] ">Siswa SMK Negeri 1 Garut raih juara Nasional!
                                </p>

                                <a href="#" class="inline-flex items-center lg:mt-[10px]">
                                    <div class="lg:w-[30px] lg:h-[30px]">
                                        <img class="rounded-full" src="images/major/sij.png" alt="">
                                    </div>
                                    <div class="text-left lg:ml-[11px]">
                                        <div class="-mt-1 text-sm font-[500] text-[14px]">Admin</div>
                                        <div class="mb-1 text-xs">23 Juni 2023</div>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="lg:w-[130px] lg:h-[130px] bg-[#004C77] rounded-[20px] relative left-[8px] top-[8px]">
                                <div class="absolute -left-[8px] -top-[8px]">
                                    <img class="lg:w-[]130px] lg:h-[130px] rounded-[20px] " src="images/video.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pb-[39px] mb-[39px] border-b-gray-400 border-b-2 ">
                            <div class="lg:max-w-[130px]">
                                <p class="lg:text-[18px] font-[500] ">Siswa SMK Negeri 1 Garut raih juara Nasional!
                                </p>

                                <a href="#" class="inline-flex items-center lg:mt-[10px]">
                                    <div class="lg:w-[30px] lg:h-[30px]">
                                        <img class="rounded-full" src="images/major/sij.png" alt="">
                                    </div>
                                    <div class="text-left lg:ml-[11px]">
                                        <div class="-mt-1 text-sm font-[500] text-[14px]">Admin</div>
                                        <div class="mb-1 text-xs">23 Juni 2023</div>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="lg:w-[130px] lg:h-[130px] bg-[#004C77] rounded-[20px] relative left-[8px] top-[8px]">
                                <div class="absolute -left-[8px] -top-[8px]">
                                    <img class="lg:w-[]130px] lg:h-[130px] rounded-[20px] " src="images/video.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white px-10 ">
        <div
            class="px-[35px] mx-auto max-w-screen-xl items-center justify-center md:mx-[165px] lg:py-[100px] bg-[#F2F4F7] shadow-xl lg:px-[95px] mb-[75px] lg:mt-0">
            <div class="lg:max-w-[525px] pt-[40px] lg:pt-0">
                <p class="lg:text-[16px] text-[14px] font-[500]">Ingin informasi lebih lanjut?</p>
                <p class="lg:text-[36px] text-[24px] font-black mt-1 lg:mt-[10px]">Hubungi Kami!</p>
                <p class="lg:text-[16px] text-[14px] font-inter mt-1 font-[500] lg:mt-[15px]">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Enim sunt eum expedita repudiandae. Non, unde natus! Quaerat, repellat laudantium
                    vitae ullam eaque suscipit officia porro cumque quas, optio nisi eos?</p>
            </div>
            <div class="lg:flex lg:mt-[60px] lg:justify-between">
                <div class="hidden lg:inline gap-5 lg:w-[280px]">
                    <div class="items-center lg:mb-[18px]">
                        <div class="flex">
                            <img src="icons/location.svg" class="h-12 lg:w-[25px] lg:h-[25px]" alt="" />
                            <p class="ls:text-[16px] font-[500]  lg:ml-[9px]">(0262) 233316</p>
                        </div>
                        <p class="lg:text-[16px] font-[400]">Jl. Cimanuk No.309A, Sukagalih, Kec.
                            Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</p>
                    </div>
                    <div class="flex items-center lg:mb-[18px]">
                        <img src="icons/email-black.svg" class="h-12 lg:w-[25px] lg:h-[25px] text-black"
                            alt="" />
                        <p class="ls:text-[16px] font-[500]  lg:ml-[9px]">smkn1garut@ymail.com</p>
                    </div>
                    <div class="flex items-center lg:mb-[18px]">
                        <img src="icons/phone-black.svg" class="h-12 lg:w-[25px] lg:h-[25px]" alt="" />
                        <p class="ls:text-[16px] font-[500]  lg:ml-[9px]">(0262) 233316</p>
                    </div>
                </div>
                <div class="lg:w-[555px] mt-5 lg:mt-0  pb-[40px] lg:pb-0">
                    <form>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="floating_first_name" id="floating_first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_first_name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                    depan</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="floating_last_name" id="floating_last_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_last_name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                    belakang</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="floating_company" id="floating_company"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_company"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone"
                                    id="floating_phone"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_phone"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No.
                                    HP</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">

                            <textarea name="floating_company" id="floating_company" rows="4"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required></textarea><label for="floating_company"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan
                                pesan disini!</label>
                        </div>
                        <button type="button"
                            class="text-white bg-black hover:bg-white hover:text-black font-medium rounded-2xl text-sm px-5 py-2.5 text-center inline-flex items-center lg:mt-[10px] lg:w-[120px] justify-centerlg:pb-0">
                            Kirim
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
