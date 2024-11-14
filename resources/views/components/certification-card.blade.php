@props(['certification'])
<div class="relative flex-grow text-center p-2 sm:p-5 rounded-xl bg-white/50 border-2 hover:scale-105 transition-transform duration-300 {{ $certification->paid ? 'border-orange-600' : 'border-green-600' }}">
    <p class="font-bold text-2xl hyphens-auto">{{ $certification->name }}</p>
    @if($certification->paid)
        <p class="text-orange-600 text-xl">Цена: {{ number_format($certification->price, 0, ',') }} RUB</p>
    @else
        <p class="text-green-600 text-xl">Бесплатно</p>
    @endif
    <div class="">
        <p class="text-xs hyphens-auto">{{ $certification->url }}</p>
    </div>
    <a class="absolute inset-0" href="{{ $certification->url }}"></a>
</div>
