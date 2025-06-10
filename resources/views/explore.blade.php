@include('navbar')

<div>
    <div class="container mx-auto p-5">
        <h2 class="text-2xl font-bold mb-5">All Event</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="path-to-image" alt="Event Poster" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Temu Sija 2025</h3>
                    <p class="text-gray-600 mb-2">lorem ipsum equality ilik nar...</p>
                    <span class="text-xl font-bold">Rp. 35.000</span>
                    <button class="mt-3 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Order Now</button>
                </div>
            </div>
            <!-- Repeat the above block for more events -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="path-to-image" alt="Event Poster" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Temu Sija 2025</h3>
                    <p class="text-gray-600 mb-2">lorem ipsum equality ilik nar...</p>
                    <span class="text-xl font-bold">Rp. 35.000</span>
                    <button class="mt-3 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Order Now</button>
                </div>
            </div>
            <!-- Add more events as necessary -->
        </div>
    </div>
</div>