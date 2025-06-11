@include('navbar')

<div>
    <div class="border-b border-blue-600"></div>

    <!-- Main Content -->
    <main class="container mx-auto p-8 text-center">
        <h1 class="text-4xl font-extrabold mb-12 text-black">Contact Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Feedback and Suggestions Card -->
            <div class="bg-[#F1F9FE] p-6 rounded-xl shadow-sm flex flex-col justify-between h-full">
                <div>
                    <h2 class="text-lg md:text-xl font-extrabold mb-2 text-gray-900">Feedback and Suggestions</h2>
                    <p class="text-gray-700 text-sm md:text-base">
                        Kami selalu berusaha memberikan layanan terbaik. Jika Anda memiliki ide, kritik, atau saran untuk pengembangan aplikasi, kami sangat menghargainya.
                    </p>
                </div>
                <a href="https://wa.me/62851421312300"
                   class="mt-6 block w-full bg-blue-500 hover:blue-700 text-white text-sm font-semibold py-2 rounded text-center hover:bg-blue-700 transition duration-300">
                    Kirim Masukan dan Saran
                </a>
            </div>

            <!-- Ticket and Account Support Card -->
            <div class="bg-[#F1F9FE] p-6 rounded-xl shadow-sm flex flex-col justify-between h-full">
                <div>
                    <h2 class="text-lg md:text-xl font-extrabold mb-2 text-gray-900">Ticket and Account<br>support</h2>
                    <p class="text-gray-700 text-sm md:text-base">
                        Mengalami kendala saat membeli tiket atau mengakses akun? Tim bantuan kami siap membantu Anda menyelesaikan masalah dengan cepat dan mudah.
                    </p>
                </div>
                <a href="https://wa.me/62851421312300"
                   class="mt-6 block w-full bg-blue-500 hover:blue-700 text-white text-sm font-semibold py-2 rounded text-center hover:bg-blue-700 transition duration-300">
                    Kunjungi Pusat Bantuan
                </a>
            </div>
        </div>
    </main>
</div>
