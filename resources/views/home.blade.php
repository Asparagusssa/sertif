<x-app-layout>
    <div class="space-y-10">
        <section class="p-6 bg-gray-800 border-t border-white flex lg:flex-row flex-col items-center">
            <div class="w-1/3 flex justify-center">
                <img src="{{ Vite::asset('/resources/images/head.webp') }}" alt="logo" class="h-[300px] lg:block hidden">
            </div>
            <div class="lg:w-2/3 w-full flex flex-col justify-center items-center p-6">
                <h1 class="font-bold text-5xl text-center mb-6 text-white">Бизнес сертификация</h1>
                <p class="text-center text-2xl font-medium text-gray-300 mb-3">Сертификация онлайн-магазина - это первый шаг к успеху!</p>
                <p class="text-center text-xl text-gray-300 mb-6">Получите официальный документ, подтверждающий соответствие
                    вашего сайта требованиям законодательства, и повысьте доверие к вашему бренду.</p>
                <x-buy-button href="/certification">Посмотреть сертификаты</x-buy-button>
            </div>
        </section>
        <section class="mx-auto max-w-7xl pb-6 px-6 lg:px-8 lg:flex">
            <div class="w-full space-y-6 lg:w-1/2 lg:text-start text-center">
                <h1 class="text-3xl font-bold">Для чего нужен этот сайт?</h1>
                <ul class="list-disc space-y-2">
                    <x-li>Удобно найти все сервисы для получения сертификата</x-li>
                    <x-li>Сравнить цены на сертификаты</x-li>
                    <x-li>Выбрать подходящий сервис для получения сертификата</x-li>
                    <x-li>Найти контактные данные сервиса</x-li>
                </ul>
                <x-buy-button href="/certification">Посмотреть сертификаты</x-buy-button>
            </div>
            <div class="w-1/2 flex justify-center items-center">
                <img src="{{ Vite::asset('/resources/images/section1.webp') }}" alt="logo" class="h-[300px] lg:block hidden">
            </div>
        </section>
    </div>
</x-app-layout>
