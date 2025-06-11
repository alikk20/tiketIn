@include('navbar')

<div class="py-10">
    <div class="container mx-auto px-4 flex flex-col md:flex-row gap-10">
        <!-- Gambar Poster -->
        <div class="flex-shrink-0 mx-auto md:mx-0 bg-[#E9F3F4] rounded-lg p-4">
            <img src="{{ asset('storage/' . $acara->foto) }}" alt="{{ $acara->nama }}" class="w-[300px] h-auto object-contain rounded">
        </div>

        <!-- Detail Event -->
        <div class="flex-1 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $acara->nama }}</h2>
            <p class="text-blue-600 font-semibold mb-4">Stok : <span class="text-blue-800">{{ $acara->stok }}</span></p>
            <p class="text-gray-700 text-sm mb-4">
                {{ $acara->deskripsi }}
            </p>
            <p class="text-xl font-bold text-gray-900 mb-4">Rp. {{ number_format($acara->harga, 0, ',', '.') }}</p>
            <hr class="mb-4">

            <div class="space-y-2 text-sm text-gray-700">
                <p><span class="font-semibold">Tanggal :</span> {{ \Carbon\Carbon::parse($acara->tanggal)->format('d M Y') }}</p>
                <p><span class="font-semibold">Tempat :</span> {{ $acara->lokasi }}</p>
            </div>

            <a href="https://wa.me/62{{ $acara->notelp }}" target="_blank">
                <button class="mt-6 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Pesan Sekarang
                </button>
            </a>
        </div>
    </div>
</div>
