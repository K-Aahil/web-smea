@extends('main')

@section('content')
    <section class="hero justify-start lg:px-[165px] lg:h-[400px] bg-slate-400 bg-blend-multiply"
        style="background-image: url(/images/container.png);">
        <div class="hero-content text-neutral-content">
            <h1 class="mb-4 text-[64px] font-[700] tracking-tight leading-[110%] text-white md:text-5xl lg:text-6xl">
                Struktur <br> Organisasi
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-[100px] lg:px-6">
            <div class="text-center">
                <div class="flex justify-center items-center lg:gap-3">
                    <h1 class="text-[22px] font-medium tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[36px]">
                        Struktur Organisasi
                    </h1>
                    <div class="hidden lg:block w-[36px] h-[3px] bg-black"></div>
                </div>
                <p class=" mt-[5px] text-[30px] font-black text-gray-900 lg:text-[48px] sm:px-16 lg:px-48">SMK Negeri
                    1 Garut
                </p>
            </div>

            <div class="relative overflow-x-auto lg:py-[75px]">
                <table class="text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Lampiran
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                SK Kepala SMK Negeri 1 Garut
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nomor
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                421.5/247.b/SMKN1/KCD WIL XI
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                20 Juli 2020
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tentang
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                Pembagian Tugas Guru dan Tugas Tambahan Tahun Pelajaran 2020/2021
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <img src="images/struktur.png" alt="">
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-[100px] lg:px-6">
            <div class="text-center">
                <div class="flex justify-center items-center lg:gap-3">
                    <h1 class="text-[22px] font-[700] tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[48px]">
                        Wali Kelas
                    </h1>
                    <div class="hidden lg:block w-[36px] h-[3px] bg-black"></div>
                </div>
            </div>
            <div class="lg:py-[75px]">
                <img src="images/struktur.png" alt="">
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-[100px] lg:px-6">
            <div class="text-center">
                <div class="flex justify-center items-center lg:gap-3">
                    <h1 class="text-[22px] font-[700] tracking-tight leading-none text-gray-900 md:text-5xl lg:text-[48px]">
                        Pembina dan Pelatih
                    </h1>
                    <div class="hidden lg:block w-[36px] h-[3px] bg-black"></div>
                </div>
            </div>
            <div class="lg:py-[75px]">
                <img src="images/struktur.png" alt="">
            </div>
        </div>
    </section>
@endsection
