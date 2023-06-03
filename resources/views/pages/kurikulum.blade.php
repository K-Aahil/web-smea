@extends('main')

@section('content')
    <section class="hero justify-start lg:px-[165px] lg:h-[400px] bg-slate-400 bg-blend-multiply"
        style="background-image: url(/images/container.png);">
        <div class="hero-content text-neutral-content">
            <h1 class="mb-4 text-[64px] font-[700] tracking-tight leading-[110%] text-white md:text-5xl lg:text-6xl">
                Informasi <br>Kurikulum
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-[100px] lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <p class="font-bold text-xl text-gray-900 lg:text-2xl">Kurikulum</p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SMK Negeri 1 Garut</h2>
            </div>

            <div class="">
                <img src="images/struktur.png" alt="">
            </div>
        </div>
    </section>
@endsection
