<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-center mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            {{ __('🏠 Kos Hunter 🔍') }}
        </h2>
        <h2
            class="text-center mb-4 text-4xl font-light leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
            {{ __('Cari kos/kontrakan impianmu di sini') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:bg-gray-900 dark:text-white">


                    <!-- something here -->

                    <!-- carousel -->
                    <!-- carousel -->
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            @foreach ($propertis as $index => $properti)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <a href="{{ route('properti.show', $properti->id) }}" class="block w-full h-full">
                                        <img src="{{ asset($properti->images->first()->image_url ?? 'path/to/default/image.jpg') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                                            alt="{{ $properti->nama }}">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent">
                                        </div>
                                        <div class="absolute bottom-0 left-0 p-4 text-white">
                                            <h1 class="text-xl font-bold">{{ $properti->nama }}</h1>
                                            <p class="text-sm">Rp{{ number_format($properti->harga, 0) }}/perbulan</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            @foreach ($propertis as $index => $properti)
                                <button type="button" class="w-3 h-3 rounded-full"
                                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $index + 1 }}"
                                    data-carousel-slide-to="{{ $index }}"></button>
                            @endforeach
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-200/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-200/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <hr class="my-12 border-gray-200 dark:border-gray-700">

                    <!-- services -->
                    <section class="py-8">
                        <h2
                            class="text-center mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                            {{ __('Layanan Kami') }}
                        </h2>
                        <div class="container mx-auto">
                            <div class="flex flex-wrap justify-between">
                                <div class="w-full">
                                    <div class="flex justify-between items-center mb-4">
                                        <div>
                                            <!-- <h2 class="text-2xl font-semibold">Our Services</h2> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full md:w-1/3 px-4 mb-6">
                                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="text-blue-500">
                                                <span class="bi bi-cart text-2xl"></span>
                                            </div>
                                            <div class="ml-4 flex items-center">
                                                <svg class="w-8 h-8 mr-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM13 19H18V9.15745L12 3.7029L6 9.15745V19H11V13H13V19Z">
                                                    </path>
                                                </svg>
                                                <h2 class="text-3xl font-semibold">Kos</h2>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="text-gray-700 dark:text-white">
                                                Menyediakan rumah kos dengan harga terjangkau dan fasilitas yang
                                                lengkap. Insyaallah harga kos cocok untuk kalangan mahasiswa.
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#" class="text-blue-500 flex items-center">Read more
                                                <span class="bi bi-chevron-right ml-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-4 mb-6">
                                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="text-blue-500">
                                                <span class="bi bi-calendar4-week text-2xl"></span>
                                            </div>
                                            <div class="ml-4 flex">
                                                <svg class="w-8 h-8 mr-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19ZM8.59117 13.8089C8.52937 13.5486 8.49666 13.277 8.49666 12.9978C8.49666 12.7186 8.52936 12.4471 8.59115 12.1868L7.60001 11.6145L8.59952 9.88333L9.59136 10.456C9.98427 10.0843 10.4633 9.80273 10.9954 9.64436V8.49998H12.9945V9.64436C13.5266 9.80272 14.0056 10.0843 14.3985 10.4559L15.3904 9.88323L16.39 11.6144L15.3987 12.1867C15.4605 12.447 15.4932 12.7186 15.4932 12.9978C15.4932 13.277 15.4605 13.5485 15.3988 13.8088L16.39 14.381L15.3905 16.1122L14.3986 15.5396C14.0057 15.9112 13.5267 16.1928 12.9946 16.3512V17.4956H10.9955V16.3512C10.4634 16.1929 9.98437 15.9114 9.59144 15.5397L8.59957 16.1123L7.60001 14.3811L8.59117 13.8089ZM11.995 14.4971C12.823 14.4971 13.4942 13.8258 13.4942 12.9978C13.4942 12.1698 12.823 11.4985 11.995 11.4985C11.1669 11.4985 10.4957 12.1698 10.4957 12.9978C10.4957 13.8258 11.1669 14.4971 11.995 14.4971Z">
                                                    </path>
                                                </svg>
                                                <h2 class="text-3xl font-semibold">Kontrakan</h2>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="text-gray-700 dark:text-white">
                                                Menyediakan rumah kontrakan dengan harga terjangkau dan fasilitas yang
                                                lengkap. Insyaallah harga kontrakan cocok untuk kalangan mahasiswa juga.
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#" class="text-blue-500 flex items-center">Read more
                                                <span class="bi bi-chevron-right ml-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-4 mb-6">
                                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="text-blue-500">
                                                <span class="bi bi-card-checklist text-2xl"></span>
                                            </div>
                                            <div class="ml-4 flex">
                                                <svg class="w-8 h-8 mr-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M19.0049 2C20.1068 2 21 2.89821 21 3.9908V20.0092C21 21.1087 20.1074 22 19.0049 22H3V2H19.0049ZM7 4H5V20H7V4ZM19 4H9V20H19V4ZM14 8L18 12H15V16H13V12H10L14 8ZM24 12V16H22V12H24ZM24 6V10H22V6H24Z">
                                                    </path>
                                                </svg>
                                                <h2 class="text-3xl font-semibold">Booking dulu</h2>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="text-gray-700 dark:text-white">
                                                Sebelum pergi ke Malang, alangkah baiknya mahasiwa survey kos dan
                                                mem-bookingnya agar tidak missing-out kos/kontrakan terjangkau sebelum
                                                diserbu maba
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#" class="text-blue-500 flex items-center">Read more
                                                <span class="bi bi-chevron-right ml-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!-- pencarian -->
                    <br><br>
                    <h2
                        class="text-center mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-3xl dark:text-white">

                        {{ __('Kos/kontrakan terkini') }}
                    </h2>
                    <section class="bg-gray-50 dark:bg-gray-900 mt-8 flex items-center">
                        <div class="max-w-screen-xl mx-auto w-full shadow">
                            <!-- Start coding here -->
                            <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                <div
                                    class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                                    <div class="w-full md:w-1/2">
                                        <form action="{{ route('dashboard') }}" method="GET" class="flex items-center">
                                            <label for="simple-search" class="sr-only">Search</label>
                                            <div class="relative w-full">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg aria-hidden="true"
                                                        class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <input type="text" id="simple-search" name="search"
                                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Search" value="{{ request('search') }}">
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br><br>
                    <!-- card -->
                    <!-- card -->
<div class="grid gap-6 md:grid-cols-3">
    @include('partials.properti_cards')
</div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $propertis->appends(request()->query())->links() }}
                    </div>



                </div>
            </div>
            <!-- tambahkan paginasi bawaan laravel -->


            <!-- create a long horizontal line to separate sections -->
            <hr class="my-12 border-gray-200 dark:border-gray-700">

            <!-- <br> -->
            <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
                <div class="mx-auto max-w-screen-xl text-center">
                    <a href="#"
                        class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                        <svg class="mr-2 h-8" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2355 17.6853 16.8089 18.1621L14.2533 21.0188C13.773 21.5556 13.4373 21.4276 13.4373 20.7075C13.4315 20.7342 12.1689 23.9903 15.5149 25.9202C16.8005 26.6618 18.6511 26.3953 19.9367 25.6538L26.7486 21.7247C29.2961 20.2553 31.0948 17.7695 31.6926 14.892C31.7163 14.7781 31.7345 14.6639 31.7542 14.5498L25.2696 13.126Z"
                                fill="url(#paint0_linear_11430_22515)" />
                            <path
                                d="M23.5028 9.20133C24.7884 9.94288 25.3137 11.0469 25.3137 12.53C25.3137 12.7313 25.2979 12.9302 25.2694 13.1261L28.0141 14.3051L31.754 14.5499C32.2329 11.7784 31.2944 8.92561 29.612 6.65804C28.3459 4.9516 26.7167 3.47073 24.7581 2.34097C23.167 1.42325 21.5136 0.818599 19.8525 0.486816L17.9861 2.90382L17.3965 5.67918L23.5028 9.20133Z"
                                fill="url(#paint1_linear_11430_22515)" />
                            <path
                                d="M1.5336 11.2352C1.5329 11.2373 1.53483 11.238 1.53556 11.2358C1.67958 10.8038 1.86018 10.3219 2.08564 9.80704C3.26334 7.11765 5.53286 5.32397 8.32492 4.40943C11.117 3.49491 14.1655 3.81547 16.7101 5.28323L17.3965 5.67913L19.8525 0.486761C12.041 -1.07341 4.05728 3.51588 1.54353 11.2051C1.54233 11.2087 1.53796 11.2216 1.5336 11.2352Z"
                                fill="url(#paint2_linear_11430_22515)" />
                            <path
                                d="M19.6699 25.6538C18.3843 26.3953 16.8003 26.3953 15.5147 25.6538C15.3402 25.5531 15.1757 25.4399 15.0201 25.3174L12.7591 26.8719L10.8103 30.0209C12.9733 31.821 15.7821 32.3997 18.589 32.0779C20.7013 31.8357 22.7995 31.1665 24.7582 30.0368C26.3492 29.1191 27.7 27.9909 28.8182 26.7195L27.6563 23.8962L25.7762 22.1316L19.6699 25.6538Z"
                                fill="url(#paint3_linear_11430_22515)" />
                            <path
                                d="M15.0201 25.3175C14.0296 24.5373 13.4371 23.3406 13.4371 22.0588V21.931V11.2558C13.4371 10.6521 13.615 10.5494 14.1384 10.8513C13.3323 10.3864 11.4703 8.79036 9.17118 10.1165C7.88557 10.858 6.8269 12.4949 6.8269 13.978V21.8362C6.8269 24.775 8.34906 27.8406 10.5445 29.7966C10.6313 29.874 10.7212 29.9469 10.8103 30.0211L15.0201 25.3175Z"
                                fill="url(#paint4_linear_11430_22515)" />
                            <path
                                d="M28.6604 5.49565C28.6589 5.49395 28.6573 5.49532 28.6589 5.49703C28.9613 5.83763 29.2888 6.23485 29.6223 6.68734C31.3648 9.05099 32.0158 12.0447 31.4126 14.9176C30.8093 17.7906 29.0071 20.2679 26.4625 21.7357L25.7761 22.1316L28.8181 26.7195C34.0764 20.741 34.09 11.5388 28.6815 5.51929C28.6789 5.51641 28.67 5.50622 28.6604 5.49565Z"
                                fill="url(#paint5_linear_11430_22515)" />
                            <path
                                d="M7.09355 13.978C7.09354 12.4949 7.88551 11.1244 9.17113 10.3829C9.34564 10.2822 9.52601 10.1965 9.71002 10.1231L9.49304 7.38962L7.96861 4.26221C5.32671 5.23364 3.1897 7.24125 2.06528 9.83067C1.2191 11.7793 0.75001 13.9294 0.75 16.1888C0.75 18.0243 1.05255 19.7571 1.59553 21.3603L4.62391 21.7666L7.09355 21.0223V13.978Z"
                                fill="url(#paint6_linear_11430_22515)" />
                            <path
                                d="M9.71016 10.1231C10.8817 9.65623 12.2153 9.74199 13.3264 10.3829L13.4372 10.4468L22.3326 15.5777C22.9566 15.9376 22.8999 16.2918 22.1946 16.4392L22.7078 16.332C23.383 16.1908 23.9999 15.8457 24.4717 15.3428C25.2828 14.4782 25.5806 13.4351 25.5806 12.5299C25.5806 11.0468 24.7886 9.67634 23.503 8.93479L16.6911 5.00568C14.1436 3.53627 11.0895 3.22294 8.29622 4.14442C8.18572 4.18087 8.07756 4.2222 7.96875 4.26221L9.71016 10.1231Z"
                                fill="url(#paint7_linear_11430_22515)" />
                            <path
                                d="M20.0721 31.8357C20.0744 31.8352 20.0739 31.8332 20.0717 31.8337C19.6252 31.925 19.1172 32.0097 18.5581 32.0721C15.638 32.3978 12.7174 31.4643 10.5286 29.5059C8.33986 27.5474 7.09347 24.7495 7.09348 21.814L7.09347 21.0222L1.59546 21.3602C4.1488 28.8989 12.1189 33.5118 20.0411 31.8421C20.0449 31.8413 20.0582 31.8387 20.0721 31.8357Z"
                                fill="url(#paint8_linear_11430_22515)" />
                            <defs>
                                <linearGradient id="paint0_linear_11430_22515" x1="20.8102" y1="23.9532"
                                    x2="23.9577" y2="12.9901" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1724C9" />
                                    <stop offset="1" stop-color="#1C64F2" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_11430_22515" x1="28.0593" y1="10.5837"
                                    x2="19.7797" y2="2.33321" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C64F2" />
                                    <stop offset="1" stop-color="#0092FF" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_11430_22515" x1="16.9145" y1="5.2045"
                                    x2="4.42432" y2="5.99375" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0092FF" />
                                    <stop offset="1" stop-color="#45B2FF" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_11430_22515" x1="16.0698" y1="28.846"
                                    x2="27.2866" y2="25.8192" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C64F2" />
                                    <stop offset="1" stop-color="#0092FF" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_11430_22515" x1="8.01881" y1="15.8661"
                                    x2="15.9825" y2="24.1181" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1724C9" />
                                    <stop offset="1" stop-color="#1C64F2" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_11430_22515" x1="26.2004" y1="21.8189"
                                    x2="31.7569" y2="10.6178" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0092FF" />
                                    <stop offset="1" stop-color="#45B2FF" />
                                </linearGradient>
                                <linearGradient id="paint6_linear_11430_22515" x1="6.11387" y1="9.31427"
                                    x2="3.14054" y2="20.4898" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1C64F2" />
                                    <stop offset="1" stop-color="#0092FF" />
                                </linearGradient>
                                <linearGradient id="paint7_linear_11430_22515" x1="21.2932" y1="8.78271"
                                    x2="10.4278" y2="11.488" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1724C9" />
                                    <stop offset="1" stop-color="#1C64F2" />
                                </linearGradient>
                                <linearGradient id="paint8_linear_11430_22515" x1="7.15667" y1="21.5399"
                                    x2="14.0824" y2="31.9579" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0092FF" />
                                    <stop offset="1" stop-color="#45B2FF" />
                                </linearGradient>
                            </defs>
                        </svg>
                        Kos Hunter Malang Raya
                    </a>

                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                            class="hover:underline">Framework Programming™</a>. All Rights Reserved.</span>
                </div>

            </footer>
        </div>

        <div class="modal" id="bookingConfirmationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Booking</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin membooking kos ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary" id="confirmBookingButton">Ya</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->

    </div>
    </div>
    <script>
        $(document).ready(function() {
            // Show modal when a card is clicked
            $(".card").click(function() {
                $("#bookingConfirmationModal").modal("show");
            });

            // Handle booking confirmation
            $("#confirmBookingButton").click(function() {
                // Perform booking process
                fetch('{{ route('admin.booking.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            properti_id: '{{ $properti->id }}', // Use the appropriate properti ID
                            user_id: '{{ Auth::id() }}', // Use the authenticated user's ID
                            jumlah: 1 // Set the number of bookings (e.g., 1 for single booking)
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            // Booking successful
                            alert("Booking confirmed!");
                            $("#bookingConfirmationModal").modal("hide");
                        } else {
                            // Booking failed
                            alert("Failed to confirm booking. Please try again.");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("An error occurred. Please try again.");
                    });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function updateRoomStatus() {
                const statusSpans = document.querySelectorAll('[id^="room-status-"]');
                statusSpans.forEach(span => {
                    const propertiId = span.dataset.propertiId;
                    const initialRooms = parseInt(span.dataset.initialRooms);

                    fetch(`/api/properti/${propertiId}/room-count`)
                        .then(response => response.json())
                        .then(data => {
                            const availableRooms = data.available_rooms;
                            if (availableRooms <= 0) {
                                span.textContent = 'Sold Out';
                                span.className =
                                    'inline-block bg-red-200 text-red-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                            } else {
                                span.textContent = `Sisa ${availableRooms} kamar`;
                                span.className =
                                    'inline-block bg-green-200 text-green-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching room count:', error);
                            span.textContent = `Sisa ${initialRooms} kamar`;
                            span.className =
                                'inline-block bg-yellow-200 text-yellow-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                        });
                });
            }

            // Update initially and then every 30 seconds
            updateRoomStatus();
            setInterval(updateRoomStatus, 30000);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition));
                sessionStorage.removeItem('scrollPosition');
            }
        });
    </script>
<script>
    $(document).ready(function() {
        let typingTimer;
        const doneTypingInterval = 300; // milliseconds

        $('#simple-search').on('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(performSearch, doneTypingInterval);
        });

        function performSearch() {
            let query = $('#simple-search').val();
            $.ajax({
                url: '{{ route('dashboard') }}',
                method: 'GET',
                data: { search: query },
                success: function(response) {
                    // Parse the HTML response and update only the properti cards
                    let $newContent = $(response).find('.grid.gap-6.md\\:grid-cols-4');
                    $('.grid.gap-6.md\\:grid-cols-4').html($newContent.html());
                    updateRoomStatus();
                }
            });
        }

        function updateRoomStatus() {
            // Your existing updateRoomStatus function here
        }
    });
</script>

</x-app-layout>
