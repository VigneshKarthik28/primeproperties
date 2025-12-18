<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prime Properties</title>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Site Icon -->

    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-white text-gray-800">

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        function portfolioTabs() {
            return {
                tabs: ['All', 'Residential', 'Villa', 'Commercial', 'Waterfront'],
                activeTab: 'All',
                currentIndex: 0,

                slideWidth: 100, // mobile default

                items: [{
                        title: 'Al Aryam Tower-7',
                        tag: 'Commercial',
                        category: 'Commercial',
                        image: '/images/1.png',
                        location: 'UAE',
                        units: 2,
                        sqft: 2890
                    },
                    {
                        title: 'Al Aryam Tower-7',
                        tag: 'Commercial',
                        category: 'Commercial',
                        image: '/images/2.png',
                        location: 'UAE',
                        units: 3,
                        sqft: 2080
                    },
                    {
                        title: 'Al Aryam Tower-7',
                        tag: 'Residential',
                        category: 'Residential',
                        image: '/images/3.png',
                        location: 'UAE',
                        units: 2,
                        sqft: 2000
                    },


                ],

                init() {
                    this.updateSlideWidth()
                    window.addEventListener('resize', () => this.updateSlideWidth())
                },

                updateSlideWidth() {
                    if (window.innerWidth >= 1024) this.slideWidth = 33.333
                    else if (window.innerWidth >= 768) this.slideWidth = 50
                    else this.slideWidth = 100
                },

                filteredItems() {
                    this.currentIndex = 0
                    return this.activeTab === 'All' ?
                        this.items :
                        this.items.filter(i => i.category === this.activeTab)
                },

                next() {
                    if (this.currentIndex < this.filteredItems().length - 1)
                        this.currentIndex++
                },

                prev() {
                    if (this.currentIndex > 0)
                        this.currentIndex--
                }
            }
        }
    </script>
    <script>
        function processScroll() {
            return {
                active: 0,
                init() {
                    window.addEventListener('scroll', () => {
                        const section = this.$el
                        const rect = section.getBoundingClientRect()
                        const scrollProgress = Math.abs(rect.top) / rect.height

                        if (scrollProgress < 0.25) this.active = 0
                        else if (scrollProgress < 0.5) this.active = 1
                        else if (scrollProgress < 0.75) this.active = 2
                        else this.active = 3
                    })
                }
            }
        }
    </script>

    <div
        x-data="scrollTopProgress()"
        x-init="init()"
        x-show="visible"
        x-transition
        class="fixed bottom-8 right-8 z-50">
        <button
            @click="scrollToTop"
            class="relative w-14 h-14 rounded-full bg-white shadow-lg flex items-center justify-center cursor-pointer"
            aria-label="Scroll to top">

            <!-- Progress Ring -->
            <svg class="absolute inset-0 w-full h-full -rotate-90">
                <circle
                    cx="28"
                    cy="28"
                    r="24"
                    stroke="#E5E7EB"
                    stroke-width="4"
                    fill="none" />
                <circle
                    cx="28"
                    cy="28"
                    r="24"
                    stroke="#062623"
                    stroke-width="4"
                    fill="none"
                    stroke-linecap="round"
                    :stroke-dasharray="circumference"
                    :stroke-dashoffset="dashOffset" />
            </svg>

            <!-- Arrow -->
            <svg
                class="w-5 h-5 text-[#062623] relative"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>

        </button>
    </div>
    <script>
        function scrollTopProgress() {
            return {
                visible: false,
                progress: 0,
                circumference: 2 * Math.PI * 24,

                get dashOffset() {
                    return this.circumference * (1 - this.progress)
                },

                init() {
                    window.addEventListener('scroll', () => {
                        const scrollTop = window.scrollY
                        const docHeight =
                            document.documentElement.scrollHeight - window.innerHeight

                        this.progress = docHeight > 0 ? scrollTop / docHeight : 0
                        this.visible = scrollTop > 200
                    })
                },

                scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    })
                }
            }
        }
    </script>

    <script>
        AOS.init({
            duration: 900,
            easing: 'ease-out-cubic',
            once: true
        });
    </script>
</body>

</html>