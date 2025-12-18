<header
    x-data="{ open: false }"
    class="w-full bg-white sticky top-0 z-90 transition-shadow duration-200"
    :class="{ 'shadow-md': open }">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-2">
                    <img src="/images/logo.png" alt="Prime Space" class="h-[66px]">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-12 font-medium top-nav">
                <a href="/about" class="hover:text-primary transition">About us</a>
                <a href="/portfolio" class="hover:text-primary transition">Portfolio</a>
                <a href="/careers" class="hover:text-primary transition">Careers</a>
                <a href="/contact" class="hover:text-primary transition">Contact us</a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center gap-4">

                <!-- Search -->
                <button
                    class="w-10 h-10 rounded-full border flex items-center justify-center
                    hover:bg-gray-100 transition border-color">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15
                            7.5 7.5 0 0 1 0 15z" />
                    </svg>
                </button>

                <!-- Menu Button (Desktop) -->
                <a href="#"
                    class="hidden lg:flex items-center gap-2 px-5 py-2 rounded-full
                    bg-gradient-to-r from-[#3C6E5C] to-[#A6A48C]
                    text-white font-medium hover:opacity-90 transition">
                    Menu
                    <span>
                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="18.5" cy="18.5" r="18.5" fill="white" />
                            <path d="M11.75 12.1667H17.375C17.6734 12.1667 17.9595 12.2896 18.1705 12.5084C18.3815 12.7272 18.5 13.0239 18.5 13.3333C18.5 13.6428 18.3815 13.9395 18.1705 14.1583C17.9595 14.3771 17.6734 14.5 17.375 14.5H11.75C11.4516 14.5 11.1655 14.3771 10.9545 14.1583C10.7435 13.9395 10.625 13.6428 10.625 13.3333C10.625 13.0239 10.7435 12.7272 10.9545 12.5084C11.1655 12.2896 11.4516 12.1667 11.75 12.1667ZM19.625 21.5H25.25C25.5484 21.5 25.8345 21.6229 26.0455 21.8417C26.2565 22.0605 26.375 22.3572 26.375 22.6667C26.375 22.9761 26.2565 23.2728 26.0455 23.4916C25.8345 23.7104 25.5484 23.8333 25.25 23.8333H19.625C19.3266 23.8333 19.0405 23.7104 18.8295 23.4916C18.6185 23.2728 18.5 22.9761 18.5 22.6667C18.5 22.3572 18.6185 22.0605 18.8295 21.8417C19.0405 21.6229 19.3266 21.5 19.625 21.5ZM11.75 16.8333H25.25C25.5484 16.8333 25.8345 16.9562 26.0455 17.175C26.2565 17.3938 26.375 17.6906 26.375 18C26.375 18.3094 26.2565 18.6062 26.0455 18.825C25.8345 19.0437 25.5484 19.1667 25.25 19.1667H11.75C11.4516 19.1667 11.1655 19.0437 10.9545 18.825C10.7435 18.6062 10.625 18.3094 10.625 18C10.625 17.6906 10.7435 17.3938 10.9545 17.175C11.1655 16.9562 11.4516 16.8333 11.75 16.8333Z" fill="url(#paint0_linear_5026_4605)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_4605" x1="18.5" y1="12.1667" x2="18.5" y2="23.8333" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#102D29" />
                                    <stop offset="1" stop-color="#B4A186" />
                                </linearGradient>
                            </defs>
                        </svg>


                    </span>
                </a>

                <!-- Mobile Toggle -->
                <button
                    @click="open = !open"
                    class="lg:hidden w-10 h-10 rounded-full border flex items-center justify-center">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Language Dropdown -->
                <div class="relative group hidden lg:block">
                    <button
                        class="flex items-center gap-2 text-sm font-medium
                        px-3 py-2 rounded-full hover:bg-gray-100 transition">
                        <img src="/images/flag.png" alt="English">
                        <span>EN</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        class="absolute right-0 mt-2 w-36 bg-white border rounded-xl shadow-lg
                        opacity-0 invisible group-hover:opacity-100 group-hover:visible
                        transition-all duration-200 z-50">
                        <a href="/lang/en" class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100">
                            English
                        </a>
                        <a href="/lang/ar" class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100">
                            العربية
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div
        x-show="open"
        x-transition
        @click.away="open = false"
        class="lg:hidden bg-white border-t">
        <nav class="flex flex-col px-6 py-6 gap-6 font-medium">
            <a href="/about" class="hover:text-primary">About us</a>
            <a href="/portfolio" class="hover:text-primary">Portfolio</a>
            <a href="/careers" class="hover:text-primary">Careers</a>
            <a href="/contact" class="hover:text-primary">Contact us</a>

            <div class="pt-4 border-t">
                <a href="/lang/en" class="block py-2">English</a>
                <a href="/lang/ar" class="block py-2">العربية</a>
            </div>
        </nav>
    </div>

</header>