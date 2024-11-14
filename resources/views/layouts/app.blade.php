<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Бизнес сертификация</title>
</head>

<body class="h-full bg-gray-300 font-ibm-plex-mono">

    <div class="min-h-screen flex flex-col">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false" onclick="openMobileMenu()">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg id="openMobileMenu" class="block h-6 w-6 transition duration-150 ease-in-out"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg id="closeMobileMenu" class="hidden h-6 w-6 transition duration-150 ease-in-out"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                        <a class="flex flex-shrink-0 items-center" href="/">
                            <img class="h-8 w-auto" src="{{ Vite::asset('/resources/images/logo.svg') }}"
                                alt="logo">
                            <span class="ml-4 text-sm font-bold text-xl text-white">ИзиСерт</span>
                        </a>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-nav-link href="/" :active="request()->is('/')">Главная</x-nav-link>
                                <x-nav-link href="/certification" :active="request()->is('certification')">Сертификаты</x-nav-link>
{{--                                <x-nav-link href="/help" :active="request()->is('help')">Помощь</x-nav-link>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <x-nav-link href="/" :mobile="true" :active="request()->is('/')">Главная</x-nav-link>
                    <x-nav-link href="/certification" :mobile="true" :active="request()->is('certification')">Сертификаты</x-nav-link>
{{--                    <x-nav-link href="/help" :mobile="true" :active="request()->is('help')">Помощь</x-nav-link>--}}
                </div>
            </div>
        </nav>
        <main class="grow">
                @if (request()->is('/'))
                    {{ $slot }}
                @else
                    <div class="mx-auto max-w-7xl sm:pb-6 sm:px-6 lg:px-8 my-4">
                        {{ $slot }}
                    </div>
                @endif

        </main>


        <footer class="bg-white shadow dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 flex items-center justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/" class="hover:text-white">ИзиСерт</a></span>
            <ul class="flex flex-wrap items-center text-sm font-medium text-gray-500 dark:text-gray-400 mt-0 space-x-3">
                <p>Контакты:</p>
                <li>
                    <a href="https://t.me/Cabebra" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="hover:text-white" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path></svg>
                    </a>
                </li>
                <li><a href="https://github.com/Asparagusssa" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="hover:text-white" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg></a></li>
                <li>
                    Тел: <a href="tel:+79501799891" class="hover:text-white">8 (950) 179-98-91</a>
                </li>
              </ul>
            </div>
        </footer>

    </div>
</body>
<script>
    function openMobileMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden')
        document.getElementById('openMobileMenu').classList.toggle('hidden')
        document.getElementById('closeMobileMenu').classList.toggle('hidden')
    }
</script>
</html>
