@include('navbar')

<div class="py-10">
    <div class="container mx-auto px-4 flex flex-col md:flex-row gap-10">
        <!-- Gambar Poster -->
        <div class="flex-shrink-0 mx-auto md:mx-0 bg-[#E9F3F4] rounded-lg p-4">
            <img src="{{ asset('images/temusija.png') }}" alt="Temu Sija 2025" class="w-[300px] h-auto object-contain rounded">
        </div>

        <!-- Detail Event -->
        <div class="flex-1 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Temu Sija 2025</h2>
            <p class="text-blue-600 font-semibold mb-4">Stok : <span class="text-blue-800">200</span></p>
            <p class="text-gray-700 text-sm mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Cras elementum ultricies diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisi sit amet erat.
            </p>
            <p class="text-xl font-bold text-gray-900 mb-4">Rp. 35.000</p>
            <hr class="mb-4">

            <div class="space-y-2 text-sm text-gray-700">
                <p><span class="font-semibold">Tanggal :</span> Tanggal</p>
                <p><span class="font-semibold">Tempat :</span> Tempat</p>
                <p><span class="font-semibold">Jam :</span> Jam</p>
            </div>

            <button class="mt-6 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Pesan Sekarang
            </button>
        </div>
    </div>
</div>
