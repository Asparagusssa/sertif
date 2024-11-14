<x-app-layout>
    <div class="flex flex-col items-center justify-center my-10">
        <h2 class="text-2xl font-bold text-center mb-3">Найти сайт сертификации</h2>
        <form class="w-full sm:w-2/3" action="/search">
            @csrf
            <x-form.input name="q" placeholder="ООО Яндекс"/>
        </form>
    </div>
    <div class="flex flex-wrap gap-5">
        @foreach($certifications as $certification)
            <x-certification-card :$certification />
        @endforeach
    </div>
</x-app-layout>
