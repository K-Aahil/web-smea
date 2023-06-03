@extends('main')

@section('content')
    <section class="hero justify-start lg:px-[165px] lg:h-[400px] bg-slate-400 bg-blend-multiply"
        style="background-image: url(/images/container.png);">
        <div class="hero-content text-neutral-content">
            <h1 class="mb-4 text-[64px] font-[700] tracking-tight leading-[110%] text-white md:text-5xl lg:text-6xl">
                Kompetensi <br>Keahlian
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-[100px] lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <p class="font-bold text-xl text-gray-900 lg:text-2xl">Kompetensi Keahlian</p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SMK Negeri 1 Garut</h2>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                <div class="text-center text-gray-500 shadow-lg rounded-lg p-6">
                    <img class="mx-auto mb-4 w-56 h-64 rounded-lg" src="images/major/sij.png" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Pengembangan Perangkat Lunak dan Gim</a>
                    </h3>
                </div>
                <div class="text-center text-gray-500 shadow-lg rounded-lg p-6">
                    <img class="mx-auto mb-4 w-56 h-64 rounded-lg" src="images/major/mtm.png" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Desain Komunikasi Visual</a>
                    </h3>
                </div>
                <div class="text-center text-gray-500 shadow-lg rounded-lg p-6">
                    <img class="mx-auto mb-4 w-56 h-64 rounded-lg" src="images/major/fkk.png" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Teknik Farmasi</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
@endsection
