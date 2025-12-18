@extends('layouts.app')

@section('content')






















<section class="relative h-screen min-h-[700px] overflow-hidden">

    <!-- BACKGROUND VIDEO -->
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 w-full h-full object-cover">
        <source src="/videos/hero-bg.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-[#062623]/70"></div>

    <!-- CONTENT -->
    <div class="relative z-10 container mx-auto px-6 h-full flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 w-full">

            <!-- LEFT CONTENT -->
            <div>
                <h1 class="text-white text-5xl md:text-6xl xl:text-8xl font-regular leading-none mb-7">
                    MANAGING<br />
                    <span class="font-bold text-[#fff9f1]"><i>SPACES,</i></span><br />
                    ELEVATING<br />
                    STANDARDS
                </h1>

                <!-- CTA -->
                <x-buttons.primary href="/portfolio/">
                    Contact Us
                </x-buttons.primary>

                <!-- SEARCH -->
                <div class="mt-12 max-w-lg">
                    <div class="flex items-center gap-3 border-b border-white/40 pb-3">
                        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="M21 21l-4.3-4.3"></path>
                        </svg>
                        <input
                            type="text"
                            placeholder="Search Communities, Publications, Events, And Announcements."
                            class="w-full bg-transparent text-white placeholder-white/70 focus:outline-none" />
                    </div>
                </div>
            </div>

            <!-- RIGHT FLOATING CARD -->
            <div class="hidden lg:flex items-center justify-end">
                <div class="bg-white/20 backdrop-blur-md rounded-2xl p-6 max-w-sm text-white">

                    <p class="text-base text-white/80 mb-4">
                        A trusted partner in real estate stewardship—building resilience,
                        consistency, and long-term value across Abu Dhabi’s growing portfolio.
                    </p>

                    <div class="relative rounded-xl overflow-hidden">
                        <img
                            src="/images/hero-card.png"
                            alt="Portfolio"
                            class="w-full h-48 object-cover" />

                        <!-- Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full flex items-center justify-center text-[#062623] text-xl cursor-pointer">
                                <img src="/images/play-icon.png" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- SCROLL INDICATOR -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/80">
        <img src="/images/bottom.svg" class="cursor-pointer" />
    </div>

</section>














<!--Who We Are Section-->
<section class="bg-[#FBF6EE] py-16 lg:py-24 who-we-are">
    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <!-- Small label -->
                <div class="flex items-center gap-4 text-base text-[#838f8a] mb-4">
                    <img src="/images/build-icon.png" alt="Who we are" />
                    <span>Who We Are</span>
                </div>

                <!-- Heading -->
                <h2 class="text-3xl lg:text-5xl font-medium text-[#062623] leading-none mb-10">
                    Prime Space Properties manages ICT's properties<br class="hidden sm:block">
                    in the UAE.
                </h2>

                <!-- Vision & Mission -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-160">

                    <!-- Vision -->
                    <div>
                        <h4 class="text-2xl font-regular  text-[#062623] mb-2">
                            Vision
                        </h4>
                        <p class="text-base text-[#000000CC] leading-relaxed font-regular w-[90%]">
                            Reshape UAE real estate management by creating sustainable
                            environments where businesses thrive, communities grow,
                            and property values rise.
                        </p>
                    </div>

                    <!-- Mission -->
                    <div>
                        <h4 class="text-2xl font-regular text-[#062623] mb-2">
                            Mission
                        </h4>
                        <p class="text-base text-[#000000CC] leading-relaxed font-regular w-[90%] ">
                            Boost property value and satisfaction with ethical management
                            and service excellence. We ensure owners' confidence and
                            tenants' reliability.
                        </p>
                    </div>

                </div>

                <!-- Button -->

                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>Read our story</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>


            </div>
            <!-- RIGHT IMAGE -->
            <div class="relative flex justify-end">
                <img
                    src="/images/building.png" alt="Prime Space Building" class="w-[70%] h-[600px] lg:h-[620px]
object-cover rounded-xl shadow-lg">
            </div>

        </div>
    </div>
</section>
<!--Who We Are Section-->

<!--Stats Section-->
<section class="relative overflow-hidden">

    <!-- Pattern Background -->
    <div class="absolute inset-0 bg-[url('http://127.0.0.1:8000/images/bg2.png')] bg-repeat opacity-80"></div>

    <div class="relative container mx-auto px-6 py-20 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-[55%_45%] items-center gap-14">

            <!-- LEFT CONTENT -->
            <div>
                <h2 class="text-4xl sm:text-5xl lg:text-[80px] font-regular leading-none text-[#0E3B34] mb-10">
                    Explore the <br class="hidden sm:block">
                    Number Behind <br class="hidden sm:block">
                    Our Business <br class="hidden sm:block">
                    Success
                </h2>

                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>Get in touch</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>
            </div>

            <!-- RIGHT STATS CARD -->
            <div class="relative max-w-xl mx-auto lg:mx-0">

                <div class="relative space-y-[-14px]">

                    <!-- Card 1 -->
                    <div class="relative z-40 rounded-2xl bg-[#C8B291] px-8 py-6 shadow-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-regular text-white">150+</span>
                            <span class="text-white text-lg">Properties Managed</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative z-50 rounded-2xl bg-[#0B2E28] px-8 py-6 shadow-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-regular text-white">50K+</span>
                            <span class="text-white text-lg">Satisfied Tenants</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative z-60 rounded-2xl bg-[#C8B291] px-8 py-6 shadow-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-regular text-white">1K+</span>
                            <span class="text-white text-lg">Assets Under Management</span>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative z-70 rounded-2xl bg-[#0B2E28] px-8 py-6 shadow-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-regular text-white">20+</span>
                            <span class="text-white text-lg">Years of Experience</span>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="relative z-80 rounded-2xl bg-[#C8B291] px-8 py-6 shadow-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-regular text-white">98%</span>
                            <span class="text-white text-lg">Client Retention Rate</span>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </div>
</section>
<!--Stats Section-->

<!--Properties Tab -->
<section class="bg-[#3A7266] py-24 relative overflow-hidden property-tab">
    <div class="container mx-auto px-6" x-data="portfolioTabs()">

        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 mb-14">
            <h2 class="text-white text-4xl lg:text-[50px] leading-none font-medium">
                Discover Our <br> Featured Portfolio
            </h2>

            <!-- Tabs -->
            <div class="flex flex-wrap gap-4">
                <template x-for="tab in tabs">
                    <button
                        @click="activeTab = tab"
                        :class="activeTab === tab
                            ? 'bg-[#D6C2A2] text-[#062623]'
                            : 'bg-white/10 text-white'"
                        class="px-5 py-2 rounded-lg text-lg transition cursor-pointer">
                        <span x-text="tab"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- SLIDER -->
        <div class="relative">


            <!-- SLIDER -->
            <div class="relative overflow-hidden">

                <!-- Animated Tab Content -->
                <div
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-6"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-6"
                    :key="activeTab">

                    <!-- Slides Track -->
                    <a href="#"
                        class="flex transition-transform duration-700 ease-in-out will-change-transform"
                        :style="`transform: translateX(-${currentIndex * slideWidth}%)`">

                        <template x-for="item in filteredItems()" :key="item.image">
                            <div class="min-w-full lg:min-w-[33.333%] px-4">
                                <div class="relative overflow-hidden group">

                                    <img
                                        :src="item.image"
                                        class="w-full h-[520px] object-cover transition-transform duration-700 group-hover:scale-105">

                                    <!-- Bottom Info -->
                                    <div
                                        class="absolute bottom-4 left-4 right-4
               bg-white/70 backdrop-blur
               rounded-xl px-4 py-3
               overflow-hidden
               transition-all duration-500
               max-h-[56px]
               group-hover:max-h-[120px]">

                                        <!-- Title -->
                                        <h4 class="text-[#062623] font-medium mb-2" x-text="item.title"></h4>

                                        <!-- Hidden Details -->
                                        <div
                                            class="text-sm text-[#062623]/80
                   transition-all duration-500
                   opacity-0 translate-y-2
                   group-hover:opacity-100 group-hover:translate-y-0">
                                            <div class="flex justify-between">
                                                <span x-text="item.location"></span>
                                                <span x-text="item.units + ' Units'"></span>
                                            </div>
                                            <div class="mt-1">
                                                <span x-text="item.sqft + ' Sqft'"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </template>

                    </a>
                </div>

                <!-- Arrows -->
                <button @click="prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 text-white text-4xl cursor-pointer">

                    <img
                        src="/images/arrow-left.svg"
                        alt="Previous"
                        class="w-6 h-6 object-contain">
                </button>

                <button @click="next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 text-white text-4xl cursor-pointer">
                    <img
                        src="/images/arrow-right.svg"
                        alt="Next"
                        class="w-6 h-6 object-contain">
                </button>

            </div>






            <!-- CTA -->
            <div class="text-center mt-16">
                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>View all</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>
            </div>
        </div>

</section>
<!--Properties Tab -->



<section class="bg-white">
    <div class="container mx-auto px-6 py-20">

        <p class="text-[#062623] text-2xl md:text-3xl lg:text-5xl font-medium leading-none max-w-4xl">
            End-to-end property and<br class="hidden sm:block" />
            community management designed<br class="hidden sm:block" />
            for operational excellence.
        </p>

    </div>
</section>

<section
    x-data="{ activeImage: '/images/img-1.png' }">
    <div class="grid grid-cols-1 lg:grid-cols-[40%_60%]">

        <!-- LEFT IMAGE (REDUCED HEIGHT) -->
        <div class="relative min-h-[320px] lg:min-h-[380px]">
            <img
                :src="activeImage"
                alt="Service Image"
                class="absolute inset-0 w-full h-full object-cover transition-all duration-500" />
        </div>

        <!-- RIGHT CONTENT -->
        <div class="px-6 lg:px-16 py-20">

            <!-- ITEM 01 -->
            <div
                @mouseenter="activeImage = '/images/img-1.png'"
                class="group cursor-pointer pb-10 border-b"
                style="border-color: #06262380">
                <div class="grid grid-cols-[60px_1fr_2fr] gap-12 items-start">
                    <span class="text-sm text-[#062623B2]">01</span>

                    <h3
                        class="text-xl font-medium text-[#062623B2] group-hover:text-[#062623] transition">
                        Property & Community Management
                    </h3>

                    <p class="text-[#062623B2]">
                        We oversee daily operations to maintain safe, well-managed,
                        and responsive communities.
                    </p>
                </div>
            </div>

            <!-- ITEM 02 -->
            <div
                @mouseenter="activeImage = '/images/img-1.png'"
                class="group cursor-pointer py-10 border-b"
                style="border-color: #06262380">
                <div class="grid grid-cols-[60px_1fr_2fr] gap-12 items-start">
                    <span class="text-sm text-[#062623B2]">02</span>

                    <h3
                        class="text-xl font-medium text-[#062623B2] group-hover:text-[#062623] transition">
                        Leasing & Tenant Support
                    </h3>

                    <p class="text-[#062623B2]">
                        A streamlined leasing experience with dedicated assistance
                        from enquiry to occupancy.
                    </p>
                </div>
            </div>

            <!-- ITEM 03 -->
            <div
                @mouseenter="activeImage = '/images/img-1.png'"
                class="group cursor-pointer py-10 border-b"
                style="border-color: #06262380">
                <div class="grid grid-cols-[60px_1fr_2fr] gap-12 items-start">
                    <span class="text-sm text-[#062623B2]">03</span>

                    <h3
                        class="text-xl font-medium text-[#062623B2] group-hover:text-[#062623] transition">
                        Asset Operations & Maintenance
                    </h3>

                    <p class="text-[#062623B2]">
                        Proactive care and structured maintenance to preserve
                        asset quality and performance.
                    </p>
                </div>
            </div>

            <!-- ITEM 04 -->
            <div
                @mouseenter="activeImage = '/images/img-1.png'"
                class="group cursor-pointer pt-10">
                <div class="grid grid-cols-[60px_1fr_2fr] gap-12 items-start">
                    <span class="text-sm text-[#062623B2]">04</span>

                    <h3
                        class="text-xl font-medium text-[#062623B2] group-hover:text-[#062623] transition">
                        Governance, Compliance & ESG
                    </h3>

                    <p class="text-[#062623B2]">
                        Transparent management grounded in regulatory standards,
                        ethical practices, and sustainability values.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section
    x-data="processScroll()"
    x-init="init()"
    class="text-white pt-32 pb-0 scroll-section">
    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-[7fr_3fr] gap-20">

        <!-- LEFT CONTENT (STICKY) -->
        <div class="lg:sticky lg:top-32 h-fit">
            <div class="flex items-center gap-4 text-base text-[#838f8a] mb-4">
                <img src="/images/build-icon.png" alt="Who we are" />
                <span>Our Process</span>
            </div>

            <h2 class="mt-4 text-4xl lg:text-5xl font-medium text-[#062623] mb-10">
                How We Simplify<br />
                Property Management
            </h2>

            <p class="text-[#000000CC] w-[60%] mb-10">
                Prime Space Properties delivers a seamless, confident journey for owners, tenants, and partners from first enquiry to final agreement and beyond
            </p>


            <img src="/images/bg-5.png" />

        </div>

        <!-- RIGHT STACK -->
        <div class="relative h-[300vh]">

            <!-- STICKY CARD WRAPPER -->
            <div class="sticky top-32 h-[460px]">

                <!-- CARD 01 -->
                <div
                    x-show="active === 0"
                    x-transition.opacity.duration.500ms
                    class="absolute inset-0 rounded-2xl bg-[linear-gradient(180deg,_#347366_0%,_#BCA78A_100%)] p-10">
                    <div class="flex justify-between items-start">
                        <span class="text-4xl font-semibold">01</span>
                        <img src="/images/bulb.png" class="h-25" />
                    </div>

                    <h3 class="mt-32 text-2xl font-medium">
                        Explore Prime Space
                    </h3>

                    <div class="h-px bg-white/40 w-24 my-4"></div>

                    <p class="text-white/80 max-w-sm">
                        Explore our portfolio of commercial and residential properties.
                        Contact our team to express interest or submit an enquiry.
                    </p>
                </div>

                <!-- CARD 02 -->
                <div
                    x-show="active === 1"
                    x-transition.opacity.duration.500ms
                    class="absolute inset-0 rounded-2xl bg-[linear-gradient(180deg,_#347366_0%,_#BCA78A_100%)] p-10">
                    <div class="flex justify-between items-start">
                        <span class="text-4xl font-semibold">02</span>
                        <img src="/images/bulb.png" class="h-25" />
                    </div>
                    <h3 class="mt-32 text-2xl font-medium">
                        Leasing & Onboarding
                    </h3>

                    <div class="h-px bg-white/40 w-24 my-4"></div>

                    <p class="text-white/80 max-w-sm">
                        We manage tenant screening, documentation, onboarding,
                        and smooth handover processes.
                    </p>
                </div>

                <!-- CARD 03 -->
                <div
                    x-show="active === 2"
                    x-transition.opacity.duration.500ms
                    class="absolute inset-0 rounded-2xl bg-[linear-gradient(180deg,_#347366_0%,_#BCA78A_100%)] p-10">
                    <div class="flex justify-between items-start">
                        <span class="text-4xl font-semibold">03</span>
                        <img src="/images/bulb.png" class="h-25" />
                    </div>
                    <h3 class="mt-32 text-2xl font-medium">
                        Operations & Maintenance
                    </h3>

                    <div class="h-px bg-white/40 w-24 my-4"></div>

                    <p class="text-white/80 max-w-sm">
                        Proactive maintenance, issue resolution,
                        and day-to-day operational management.
                    </p>
                </div>

                <!-- CARD 04 -->
                <div
                    x-show="active === 3"
                    x-transition.opacity.duration.500ms
                    class="absolute inset-0 rounded-2xl bg-[linear-gradient(180deg,_#347366_0%,_#BCA78A_100%)] p-10">
                    <div class="flex justify-between items-start">
                        <span class="text-4xl font-semibold">04</span>
                        <img src="/images/bulb.png" class="h-25" />
                    </div>
                    <h3 class="mt-32 text-2xl font-medium">
                        Reporting & Growth
                    </h3>

                    <div class="h-px bg-white/40 w-24 my-4"></div>

                    <p class="text-white/80 max-w-sm">
                        Transparent reporting, compliance,
                        and long-term value optimization.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
<!--CTA Section-->
<section class="bg-[#FBF6EE] overflow-hidden cta-section">
    <div class="container mx-auto px-6 py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">

            <!-- LEFT CONTENT -->
            <div>
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-semibold leading-none text-black mb-[90px]">
                    Ready to Shape<br />
                    the Future With<br />
                    Us?
                    <span class="italic font-normal"> join Prime<br class="hidden lg:block" />
                        Space Properties</span>
                </h2>

                <p class="mt-8 max-w-md text-[#000000CC] leading-relaxed mb-8">
                    Join a team dedicated to innovation, community impact, and excellence
                    in property management. At Prime Space, we believe our people are the
                    foundation of long-term success
                </p>

                <!-- CTA BUTTON -->
                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>Explore careers</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>
            </div>



        </div>
    </div>
</section>
<!--CTA Section-->

<!--Event Section -->
<!-- EVENT SECTION -->
<section class="py-24 bg-[#2F6F60]">
    <div class="container mx-auto px-6">

        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row justify-between items-start gap-8 mb-16">
            <h2 class="text-white text-4xl lg:text-5xl font-medium">
                Events & Community<br />Highlights
            </h2>

            <div class="max-w-md">
                <p class="text-white/80 mb-6 font-regular">
                    Stay connected with the latest events, community initiatives, and
                    industry highlights from Prime Space Properties.
                </p>
                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>View all Events</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>
            </div>
        </div>

        <!-- EVENTS GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- EVENT CARD 1 -->
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative rounded-2xl overflow-hidden bg-cover bg-center transition-all duration-500"
                :style="hover 
                    ? 'background-image: url(/images/event-1.png)' 
                    : 'background-color: #FBF6EE'">
                <!-- Overlay -->
                <div
                    class="absolute inset-0 transition duration-300"
                    :class="hover ? 'bg-black/50' : 'bg-transparent'"></div>

                <!-- Content -->
                <div class="relative p-8">
                    <span class="text-sm" :class="hover ? 'text-white' : 'text-gray-500'">
                        December 15, 2025
                    </span>

                    <h3 class="mt-3 text-2xl font-medium"
                        :class="hover ? 'text-white' : 'text-black'">
                        Winter Festival at<br />Nation Towers Mall
                    </h3>

                    <div class="h-px mt-6 mb-30"
                        :class="hover ? 'bg-white/40' : 'bg-gray-300'"></div>

                    <p class="leading-relaxed"
                        :class="hover ? 'text-white/90' : 'text-gray-600'">
                        Join our annual winter celebration with live music, kids’ activities, artisan food stalls, and a spectacular tree-lighting, bringing together tenants and the broader community.
                    </p>

                    <a class="mt-6 inline-flex items-center gap-3 font-medium"
                        :class="hover ? 'text-white' : 'text-[#2F6F60]'" href="#">
                        Read more
                        <span class="w-7 h-7 bg-[#0C2F28] text-white rounded-full flex items-center justify-center">
                            →
                        </span>
                    </a>
                </div>
            </div>

            <!-- EVENT CARD 2 -->
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative rounded-2xl overflow-hidden bg-cover bg-center transition-all duration-500"
                :style="hover 
                    ? 'background-image: url(/images/event-1.png)' 
                    : 'background-color: #FBF6EE'">
                <div class="absolute inset-0 transition"
                    :class="hover ? 'bg-black/50' : 'bg-transparent'"></div>

                <div class="relative p-8">
                    <span class="text-sm" :class="hover ? 'text-white' : 'text-gray-500'">
                        January 08, 2026
                    </span>

                    <h3 class="mt-3 text-2xl font-medium"
                        :class="hover ? 'text-white' : 'text-black'">
                        Grand Opening:<br />Al Manara Residences
                    </h3>

                    <div class="h-px mt-6 mb-30"
                        :class="hover ? 'bg-white/40' : 'bg-gray-300'"></div>

                    <p class="leading-relaxed"
                        :class="hover ? 'text-white/90' : 'text-gray-600'">
                        Join our annual winter celebration with live music, kids’ activities, artisan food stalls, and a spectacular tree-lighting, bringing together tenants and the broader community. </p>

                    <a class="mt-6 inline-flex items-center gap-3 font-medium"
                        :class="hover ? 'text-white' : 'text-[#2F6F60]'" href="#">
                        Read more
                        <span class="w-7 h-7 bg-[#0C2F28] text-white rounded-full flex items-center justify-center">
                            →
                        </span>
                    </a>
                </div>
            </div>

            <!-- EVENT CARD 3 -->
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative rounded-2xl overflow-hidden bg-cover bg-center transition-all duration-500"
                :style="hover 
                    ? 'background-image: url(/images/event-1.png)' 
                    : 'background-color: #FBF6EE'">
                <div class="absolute inset-0 transition"
                    :class="hover ? 'bg-black/50' : 'bg-transparent'"></div>

                <div class="relative p-8">
                    <span class="text-sm" :class="hover ? 'text-white' : 'text-gray-500'">
                        November 27, 2025
                    </span>

                    <h3 class="mt-3 text-2xl font-medium"
                        :class="hover ? 'text-white' : 'text-black'">
                        Sustainability Seminar:<br />Greener UAE Living
                    </h3>

                    <div class="h-px mt-6 mb-30"
                        :class="hover ? 'bg-white/40' : 'bg-gray-300'"></div>

                    <p class="leading-relaxed"
                        :class="hover ? 'text-white/90' : 'text-gray-600'">
                        Join our annual winter celebration with live music, kids’ activities, artisan food stalls, and a spectacular tree-lighting, bringing together tenants and the broader community. </p>

                    <a class="mt-6 inline-flex items-center gap-3 font-medium"
                        :class="hover ? 'text-white' : 'text-[#2F6F60]'" href="#">
                        Read more
                        <span class="w-7 h-7 bg-[#0C2F28] text-white rounded-full flex items-center justify-center">
                            →
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Event Section -->

<!--News-->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">

        <!-- 50 / 50 GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- LEFT COLUMN (50%) -->
            <div class="space-y-10">

                <!-- TITLE -->
                <h2 class="text-4xl lg:text-5xl font-medium text-[#0C2F28] leading-none">
                    News & Innovations<br />
                    From Across Our<br />
                    Portfolio
                </h2>

                <!-- NEWS CARD 1 -->
                <div class="relative rounded-2xl overflow-hidden">

                    <img
                        src="/images/news-1.png"
                        alt="News"
                        class="w-full h-[520px] object-cover" />

                    <!-- Floating Content -->
                    <div class="absolute bottom-6 left-6 right-6 bg-white rounded-xl p-5 flex items-center justify-between shadow-md">
                        <div>
                            <span class="text-xs text-gray-500">December 15, 2025</span>
                            <h3 class="mt-1 text-2xl font-medium text-black leading-none">
                                Prime Space Unveils Smart<br />
                                Community Amenity in Dubai
                            </h3>
                        </div>

                        <span class="w-9 h-9 bg-[#0C2F28] text-white rounded-full flex items-center justify-center">
                            →
                        </span>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN (50%) -->
            <div class="space-y-10 lg:pl-16">

                <!-- NEWS CARD 2 -->
                <div class="relative rounded-2xl overflow-hidden">

                    <img
                        src="/images/news-2.png"
                        alt="News"
                        class="w-full h-[520px] object-cover" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#F6A7A1]/90 to-transparent"></div>

                    <!-- Floating Content -->
                    <div class="absolute bottom-6 left-6 right-6 bg-white rounded-xl p-5 flex items-center justify-between shadow-md">
                        <div>
                            <span class="text-xs text-gray-500">December 15, 2025</span>
                            <h3 class="mt-1 text-2xl font-medium text-black leading-none">
                                Community Wellness Series: First<br />
                                Event Attracts Local Families
                            </h3>
                        </div>

                        <span class="w-9 h-9 bg-[#0C2F28] text-white rounded-full flex items-center justify-center">
                            →
                        </span>
                    </div>

                </div>

                <!-- DESCRIPTION + CTA -->
                <div class="max-w-md">
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Insights, trends, and updates from across our portfolio—explore how
                        innovation, service excellence, and community building come together
                        at Prime Space Properties.
                    </p>

                    <a href="#"
                        class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                        <span>View all News</span>

                        <span
                            class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                                <defs>
                                    <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#062623" />
                                        <stop offset="1" stop-color="#BCA78A" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
<!--News-->


<!--Footer Top -->
<section class="relative bg-[#072B27] overflow-hidden">
    <div class="container mx-auto px-6  pt-16 pb-32">

        <!-- TOP CONTENT -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- LEFT HEADING -->
            <h2 class="text-white text-4xl lg:text-5xl xl:text-5xl font-medium leading-none">
                Contact Our Team for<br />
                Property & Community<br />
                Engagement
            </h2>

            <!-- RIGHT CONTENT -->
            <div class="max-w-md lg:ml-auto">
                <p class="text-white/80 mb-8 leading-relaxed">
                    For property inquiries, partnerships, or community engagement,
                    reach out—our team is here to help
                </p>

                <!-- CTA BUTTON -->
                <a href="#"
                    class="group inline-flex items-center gap-4
px-7 py-2 rounded-full
bg-[linear-gradient(90deg,_#347366_0%,_#BCA78A_100%)]

text-white font-regular text-base
transition-all duration-300 ease-out
hover:from-[#062623] hover:to-[#7F8F7C]">

                    <span>Enquire now</span>

                    <span
                        class="flex items-center justify-center
w-9 h-9 rounded-full
bg-white text-[#0E3B34]
transition-transform duration-300 ease-out
group-hover:translate-x-1">
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6351 9.78278L6.61327 19.5641L1.24963e-05 19.5641L1.53881 16.666L2.59869 14.673L5.19364 9.77829L2.59869 4.89176L1.33514e-05 -5.52299e-07L6.61327 -2.63224e-07L12.6351 9.78278Z" fill="url(#paint0_linear_5026_1319)" />
                            <defs>
                                <linearGradient id="paint0_linear_5026_1319" x1="6.31757" y1="-2.76149e-07" x2="6.31757" y2="19.5641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#062623" />
                                    <stop offset="1" stop-color="#BCA78A" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </span>
                </a>
            </div>

        </div>
    </div>

    <img src="/images/cta-bg.png" class="w-full" />

</section>
<!--Footer Top -->









@endsection