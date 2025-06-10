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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
                dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultricies diam. Maecenas ligula
                massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est
                eleifend mi, non fermentum diam nisi sit amet erat.
            </p>
            <p class="text-gray-600">
                Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.
                Praesent egestas leo in pede. Praesent blandit odio eu enim.
            </p>
        </div>

        <!-- Right Sidebar (1/3) -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-600">Overview</h3>
            <h4 class="text-2xl font-bold text-gray-800">About Us</h4>
        </div>
    </div>
</div>
