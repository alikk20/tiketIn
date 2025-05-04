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
        <a href="/home" class="hover:text-black transition font-bold">Home</a>
        <a href="/explore" class="hover:text-black transition font-bold">Explore</a>
        <a href="/about" class="hover:text-black transition font-bold">About Us</a>
        <a href="/contact" class="hover:text-black transition font-bold">Contact</a>
    </div>

    <ul class="hidden md:flex items-center gap-4">
        <li>
            <button class="p-2 hover:text-gray-900 transition" aria-label="Search">
                <svg class="w-5 h-5 text-gray-600 hover:text-gray-900" fill="none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.626 10.625L14.7088 14.7084" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96293 11.7489C11.6387 10.6117 12.886 7.52075 11.7488 4.84499C10.6116 2.16924 7.52063 0.921971 4.84488 2.05914C2.16913 3.19631 0.921857 6.28729 2.05902 8.96304C3.19619 11.6388 6.28718 12.8861 8.96293 11.7489Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </li>
        <li>
            <a href="/" class="flex items-center gap-2 hover:text-gray-900 transition">
                <img src="{{ asset('images/user.png') }}" alt="user icon" class="w-10 h-10">
                <p class="font-medium">Nara</p>
            </a>
        </li>
    </ul>
</nav>

