<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<nav class="flex items-center justify-between px-6 md:px-16 lg:px-32 py-3 border-b-3 border-[#003CFF] text-black">
    <a href="/">
        <img src="{{ asset('images/logo.png') }}" alt="TiketIn Logo" class="cursor-pointer w-28 md:w-32">
    </a>

    <div class="flex items-center gap-4 lg:gap-8 max-md:hidden">
        <a href="{{ route('tiketin.home') }}" class="hover:text-black transition font-bold">Home</a>
        <a href="{{ route('tiketin.explore') }}" class="hover:text-black transition font-bold">Explore</a>
        <a href="{{ route('tiketin.about') }}" class="hover:text-black transition font-bold">About Us</a>
        <a href="{{ route('tiketin.contact') }}" class="hover:text-black transition font-bold">Contact</a>
    </div>

</nav>

