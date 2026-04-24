<x-layouts.app subTitle="Home">

    {{-- HERO --}}
    <section id="hero"
        class="min-h-screen max-w-7xl mx-auto px-6 pt-20 flex flex-col md:flex-row items-center justify-center md:justify-between gap-10">

        <div class="flex-1 space-y-6 md:space-y-8 text-center md:text-left">
            <div class="inline-block bg-amber-100 text-amber-600 text-sm font-semibold px-4 py-1.5 rounded-full">
                🚀 Software House Agency
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                Build a Website <br>
                That <span class="text-[#fd9a00]">Grows</span> Your <br>
                Business
            </h1>

            <p class="text-gray-500 text-base md:text-lg max-w-md leading-relaxed mx-auto md:mx-0">
                We help SMEs and startups build modern, fast,
                and reliable websites that boost credibility and
                drive growth.
            </p>

            <div class="flex items-center justify-center md:justify-start gap-4">
                <button type="button"
                    class="text-white px-6 py-3 bg-[#fd9a00] hover:bg-amber-600 rounded-lg font-semibold text-base transition">
                    Getting Started
                </button>
                <a href="#aboutUs"
                    class="text-gray-600 hover:text-gray-900 font-medium flex items-center gap-2 transition">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>

            <div class="flex items-center justify-center md:justify-start gap-6 md:gap-8 pt-4 border-t border-gray-100">
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900">50+</p>
                    <p class="text-xs md:text-sm text-gray-500">Projects Done</p>
                </div>
                <div class="w-px h-10 bg-gray-200"></div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900">98%</p>
                    <p class="text-xs md:text-sm text-gray-500">Client Satisfaction</p>
                </div>
                <div class="w-px h-10 bg-gray-200"></div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900">5+</p>
                    <p class="text-xs md:text-sm text-gray-500">Years Experience</p>
                </div>
            </div>
        </div>

        <div class="flex-1 w-full hidden md:block">
            <img src="{{ asset('laptop.webp') }}" alt="Hero Image" class="rounded-2xl w-full object-cover shadow-lg">
        </div>

    </section>

    <div class="border-t border-gray-200"></div>

    {{-- ABOUT US --}}
    <section id="aboutUs" class="min-h-screen bg-gray-50 w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16">About Us</h2>
        <div class="space-y-4">
            <p class="text-gray-500 text-sm md:text-base max-w-3xl mx-auto text-center leading-relaxed">
                We are a digital team dedicated to helping small and medium-sized businesses grow
                through modern and high-performing websites. In today's fast-moving digital landscape,
                having a strong online presence is no longer optional — it's essential. That's why we focus
                on building websites that are not only visually appealing, but also fast, responsive,
                and designed to convert visitors into customers.
            </p>
            <p class="text-gray-500 text-sm md:text-base max-w-3xl mx-auto text-center leading-relaxed">
                Our approach combines clean design, reliable technology, and a deep understanding of user
                behavior. We believe that every business deserves a website that reflects its true value,
                builds credibility, and supports long-term growth. Whether you are a startup looking to
                establish your presence or a growing company aiming to scale, we are here to help you move forward.
            </p>
            <p class="text-gray-500 text-sm md:text-base max-w-3xl mx-auto text-center leading-relaxed">
                We don't just build websites — we build digital foundations for your business success.
            </p>
        </div>
    </section>

    <div class="border-t border-gray-200"></div>

    {{-- SERVICES --}}
    <section id="services" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16">Services</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl">

            <x-service-card link="/">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-4 text-[#fd9a00]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>
                    Web Development
                </x-slot:title>
                <x-slot:content>
                    We build fast, modern, and reliable websites tailored to your business needs and goals.
                </x-slot:content>
            </x-service-card>

            <x-service-card link="/">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-4 text-[#fd9a00]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>
                    Mobile Friendly Design
                </x-slot:title>
                <x-slot:content>
                    Every website we build is fully responsive and optimized for all screen sizes and devices.
                </x-slot:content>
            </x-service-card>

            <x-service-card link="/">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 mb-4 text-[#fd9a00]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </x-slot:icon>
                <x-slot:title>
                    IOT (Internet Of Things)
                </x-slot:title>
                <x-slot:content>
                    Create IoT devices tailored to your personal or business needs.
                </x-slot:content>
            </x-service-card>

            <x-service-card link="/">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 mb-4 text-[#fd9a00]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>
                    Embedded System
                </x-slot:title>
                <x-slot:content>
                    We design and develop reliable embedded systems tailored for your hardware needs, from firmware to
                    microcontroller integration.
                </x-slot:content>
            </x-service-card>


        </div>

        <div class="mt-10">
            <a href="/"
                class="inline-flex items-center gap-2 text-[#fd9a00] border border-[#fd9a00] hover:bg-[#fd9a00] hover:text-white font-semibold px-6 py-3 rounded-lg transition">
                More Services
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

</x-layouts.app>
