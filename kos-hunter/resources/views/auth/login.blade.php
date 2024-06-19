<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=  device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>

    <!-- haedar -->


    <!-- content -->
    <section
        class="h-screen relative flex items-center justify-center bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl  lg:py-16 z-10 relative">
            <div class="flex items-center justify-center flex-col">
                <!-- Center vertically and display items in columns -->
                <div class="flex items-center mb-3"> <!-- Center horizontally -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Logo_Kota_Malang_color.png"
                        class="mr-5 h-6 sm:h-9" alt="Flowbite Logo" />
                    <div class="flex flex-col"> <!-- Center horizontally and vertically for the text div -->
                        <span class="text-x4 whitespace-nowrap dark:text-white">Kos Hunter</span>
                        <span class="text-x4 font-extrabold whitespace-nowrap dark:text-white">Region Malang</span>
                    </div>
                </div>


            </div>
            <br>

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 z-10">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                       Masuk ke Akun Kos Hunter
                    </h1>

                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Masukkan email terdaftar"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Masukkan password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Sign
                            in</button>


                        <p class="flex items-center justify-center font-light text-gray-500 dark:text-gray-400">
                            Belum punya akun?<a href="{{ route('register') }}"
                                class="ml-2 font-medium text-blue-600 hover:underline dark:text-blue-500"> Daftar</a>
                        </p>
                    </form>

                </div>
                
            </div>
            <br><br>
            <div class="flex items-center justify-center flex-col text-sm font-light">
                <!-- home svg -->
                <div class="flex items
                -center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 .296.703V16a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6.004a1 1 0 0 1 .296-.703l7-7A1 1 0 0 1 10 2zm0 2.828L4.879 9.95a1 1 0 0 0-.293.703V16a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-5.347a1 1 0 0 0-.293-.703L10 4.828zM8 18v-4h4v4h3a1 1 0 0 0 1-1V9.414l-6-6-6 6V17a1 1 0 0 0 1 1h3z"
                            clip-rule="evenodd" />
                    </svg>
                    <a href="/" class="ml-2 font-medium text-gray-500 dark:text-gray-400 hover:underline">Kembali ke
                        halaman utama</a>


            </div>
        </div>



        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>