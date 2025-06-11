@include('navbar')

<!-- Banner -->
<div>
    <img src="{{ asset('images/about-banner.png') }}" alt="About Banner" class="w-full h-[300px] object-cover">
</div>

<!-- Main Content -->
<div class="bg-white py-12 px-4 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Left Content (2/3) -->
        <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About TiketIn</h2>
            <p class="text-gray-600 mb-4">
                Di lingkungan sekolah, berbagai kegiatan seperti pentas seni, lomba, dan seminar rutin diselenggarakan untuk mendukung kreativitas dan pengembangan diri murid. Namun, sistem pembelian tiket yang masih dilakukan secara manual—seperti pembayaran tunai dan pencatatan di kertas—sering menimbulkan kendala, seperti antrian panjang, risiko kehilangan tiket, pencatatan data peserta yang kurang rapi, dan pengelolaan keuangan yang tidak efisien.
            </p>
            <p class="text-gray-600">
                Sebagai solusi atas permasalahan tersebut, dibangunlah sebuah aplikasi pembelian tiket online khusus untuk murid sekolah. Aplikasi ini memudahkan murid membeli tiket secara cepat dan aman melalui perangkat digital, sekaligus membantu panitia dalam mengelola penjualan tiket, memantau peserta, dan membuat laporan keuangan otomatis. Dengan sistem digital ini, administrasi event diharapkan menjadi lebih efisien, transparan, dan profesional.
            </p>
        </div>

        <!-- Right Sidebar (1/3) -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-600">Overview</h3>
            <h4 class="text-2xl font-bold text-gray-800">About Us</h4>
        </div>
    </div>
</div>
