<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    @include('navbar')
        <div class="px-12 md:px-24 pt-10">
        <div class="max-w-screen-xl mx-auto bg-[#E6F4FB] rounded-xl px-6 md:px-12 py-8 md:py-10 flex flex-col md:flex-row justify-between items-center">
            <div class="max-w-xl text-center md:text-left">
                <p class="text-2xl md:text-3xl font-semibold text-black mb-2">
                    Punya event sekolah yang menarik?
                </p>
                <h1 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                    Jual tiketmu di sini!
                </h1>
                <button class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">
                    Daftar Sekarang
                </button>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/murid.png') }}" alt="Promo" class="w-[300px] md:w-[400px] object-contain">
            </div>
        </div>
        </div>
    </div>  
    <div class="px-4 md:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
        <div class="flex flex-col items-center bg-[#E6F4FB] rounded-lg p-4 pb-2 w-full max-w-[200px] mx-auto">
            <img src="{{ asset('images/trophy_icon.png') }}" alt="Lomba" class="w-8 h-8 mb-2">
            <p class="text-sm font-bold">LOMBA</p>
            <p class="text-xs text-gray-600">20 Event</p>
        </div>
        <div class="flex flex-col items-center bg-[#E6F4FB] rounded-lg p-4 pb-2 w-full max-w-[200px] mx-auto">
            <img src="{{ asset('images/seminar.png') }}" alt="Lomba" class="w-8 h-8 mb-2">
            <p class="text-sm font-bold">SEMINAR</p>
            <p class="text-xs text-gray-600">20 Event</p>
        </div>
        <div class="flex flex-col items-center bg-[#E6F4FB] rounded-lg p-4 pb-2 w-full max-w-[200px] mx-auto">
            <img src="{{ asset('images/konser.png') }}" alt="Lomba" class="w-8 h-8 mb-2">
            <p class="text-sm font-bold">KONSER</p>
            <p class="text-xs text-gray-600">20 Event</p>
        </div>
        <div class="flex flex-col items-center bg-[#E6F4FB] rounded-lg p-4 pb-2 w-full max-w-[200px] mx-auto">
            <img src="{{ asset('images/charity.png') }}" alt="Lomba" class="w-8 h-8 mb-2">
            <p class="text-sm font-bold">CHARITY</p>
            <p class="text-xs text-gray-600">20 Event</p>
        </div>
    </div>
    </div>
  </body>
</html>
