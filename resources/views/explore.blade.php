@include('navbar')
<div class="container mx-auto px-4 py-8">
  <h2 class="text-2xl font-bold mb-8 text-left">All Event</h2>
  
  <div class="flex flex-wrap justify-center gap-6">
    @foreach ($acaras as $acara)
      <div class="bg-white shadow-lg rounded-lg overflow-hidden w-[220px]">
        <img src="{{ asset('storage/' . $acara->foto) }}" alt="Event Poster" class="w-full h-44 object-cover">
        <div class="p-3">
          <h3 class="text-base font-semibold">{{ $acara->nama }}</h3>
          <p class="text-xs text-gray-600 mb-2 truncate">{{ $acara->deskripsi }}</p>
          <div class="flex justify-between items-center">
            <span class="text-sm font-bold">Rp. {{ number_format($acara->harga, 0, ',', '.') }}</span>
            <a href="{{ route('tiketin.detail', $acara->id) }}"
               class="bg-[#E9F3F4] text-black text-xs px-3 py-1 rounded hover:bg-blue-300 transition duration-200">
              Order Now
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
