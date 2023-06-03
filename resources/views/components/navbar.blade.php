 <header class="bg-red-100">
     <nav class="lg:h-[60px] bg-[#004C77] border-gray-200 dark:bg-gray-900 dark:border-gray-700 drop-shadow-lg">
         <div class="max-w-screen-xl flex flex-wrap justify-end lg:mx-[165px] p-4">
             <ul class="flex text-white gap-5">
                 <li class="flex items-center gap-2">
                     <img src="icons/email.svg" class="h-12 lg:w-[25px] lg:h-[25px]" alt="" />
                     <p>smkn1garut@ymail.com</p>
                 </li>
                 <li class="flex items-center gap-2">
                     <img src="icons/phone.svg" class="h-12 lg:w-[25px] lg:h-[25px]" alt="" />
                     <p>(0262) 233316</p>
                 </li>
             </ul>
         </div>
     </nav>
     <nav class="lg:h-[100px] bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 drop-shadow-lg">
         <div class="max-w-screen-xl flex flex-wrap items-center justify-between lg:mx-[165px] p-4">
             <a href="/" class="flex items-center">
                 <img src="images/logo.png" class="h-12 lg:w-[72px] lg:h-[72px]" alt="Logo" />
             </a>
             <button data-collapse-toggle="navbar-dropdown" type="button"
                 class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                 aria-controls="navbar-dropdown" aria-expanded="false">
                 <span class="sr-only">Open main menu</span>
                 <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                         d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                         clip-rule="evenodd"></path>
                 </svg>
             </button>
             <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                 <ul
                     class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                     <li>
                         <a href="/"
                             class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Beranda</a>
                     </li>
                     <li class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                         <button id="hs-mega-menu-basic-dr" type="button"
                             class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                             Profil
                             <img src="icons/dropdown.svg" alt="" class="pl-2">
                         </button>
                         <div
                             class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="sambutan"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                         Prakata Kepala Sekolah</a>
                                 </li>
                                 <li>
                                     <a href="tentang"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah,
                                         Visi, dan Misi</a>
                                 </li>
                                 <li>
                                     <a href="struktur"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Struktur
                                         Organisasi</a>
                                 </li>
                                 <li>
                                     <a href="komite"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Komite</a>
                                 </li>
                                 <li>
                                     <a href="kompetensi-keahlian"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kompetensi
                                         Keahlian</a>
                                 </li>
                                 <li>
                                     <a href="ekstrakulikuler"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekstrakulikuler</a>
                                 </li>
                                 <li>
                                     <a href="informasi-kurikulum"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Informasi
                                         Kurikulum</a>
                                 </li>
                                 <li>
                                     <a href="bkk"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bursa
                                         Kerja Khusus</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                         <button id="hs-mega-menu-basic-dr" type="button"
                             class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                             Staf dan Pendidik
                             <img src="icons/dropdown.svg" alt="" class="pl-2">
                         </button>
                         <div
                             class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tenaga
                                         Pendidik</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Staf
                                         Tata Usaha</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                         <button id="hs-mega-menu-basic-dr" type="button"
                             class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                             Kegiatan Sekolah
                             <img src="icons/dropdown.svg" alt="" class="pl-2">
                         </button>
                         <div
                             class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita
                                         Sekolah</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Galeri</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                         <button id="hs-mega-menu-basic-dr" type="button"
                             class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                             Teaching Factory
                             <img src="icons/dropdown.svg" alt="" class="pl-2">
                         </button>
                         <div
                             class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">AKL</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MPL</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PMS</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MTM</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TJK</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TKF</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TLM</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PPL</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TLG</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TET</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li>
                         <a href="#"
                             class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">PPDB</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

 </header>
