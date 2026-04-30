<x-layouts.app>

    <section id="hero"
        class="min-h-screen max-w-7xl mx-auto px-6 pt-20 flex flex-col md:flex-row items-center justify-center md:justify-between gap-10">

        <div class="flex-1 space-y-6 md:space-y-8 text-center md:text-left">
            <div class="inline-block bg-amber-100 text-amber-600 text-sm font-semibold px-4 py-1.5 rounded-full">
                🚀 Software House Agency
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 dark:text-gray-50 leading-tight">
                Build a Website <br>
                That <span class="text-[#fd9a00]">Grows</span> Your <br>
                Business
            </h1>

            <p class="text-gray-500 dark:text-gray-300 text-base md:text-lg max-w-md leading-relaxed mx-auto md:mx-0">
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
                    class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-50 font-medium flex items-center gap-2 transition">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>

            <div
                class="flex items-center justify-center md:justify-start gap-6 md:gap-8 pt-4 border-t border-gray-100 dark:border-neutral-800">
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-gray-50">50+</p>
                    <p class="text-xs md:text-sm text-gray-500 dark:text-gray-300">Projects Done</p>
                </div>
                <div class="w-px h-10 bg-gray-200 dark:bg-neutral-800"></div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-gray-50">98%</p>
                    <p class="text-xs md:text-sm text-gray-500 dark:text-gray-300">Client Satisfaction</p>
                </div>
                <div class="w-px h-10 bg-gray-200 dark:bg-neutral-800"></div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-gray-50">5+</p>
                    <p class="text-xs md:text-sm text-gray-500 dark:text-gray-300">Years Experience</p>
                </div>
            </div>
        </div>

        <div class="flex-1 w-full hidden md:block">
            <img src="{{ asset('laptop.webp') }}" alt="Hero cover" class="rounded-2xl w-full object-cover shadow-lg">
        </div>

    </section>

    <div class="border-t border-gray-200 dark:border-neutral-800"></div>

    <section id="aboutUs"
        class="min-h-screen bg-gray-50 dark:bg-neutral-950 w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10  text-gray-900 dark:text-gray-50">About Us
        </h2>
        <div class="max-w-4xl">
            <p
                class="text-gray-500 dark:text-gray-300 text-sm md:text-base text-center leading-relaxed whitespace-pre-line">
                {{ $aboutUs->about }}
            </p>
            <div class="mt-10 flex items-center justify-center">
                <a href="/"
                    class="inline-flex items-center gap-2 text-[#fd9a00] border border-[#fd9a00] hover:bg-[#fd9a00] hover:text-white font-semibold px-6 py-3 rounded-lg transition">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="border-t border-gray-200 dark:border-neutral-800"></div>

    <section id="services" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16 text-gray-900 dark:text-gray-50">Services
        </h2>

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
            <a href="/services"
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

    <div class="border-t border-gray-200 dark:border-neutral-800"></div>

    <section id="projects" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16 text-gray-900 dark:text-gray-50">Projects
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="Company Website" />
                </x-slot:cover>

                <x-slot:title>
                    Corporate Website
                </x-slot:title>

                <x-slot:content>
                    A modern and responsive corporate website designed to strengthen brand identity and online presence.
                </x-slot:content>
            </x-project-card>

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="E-Commerce Platform" />
                </x-slot:cover>

                <x-slot:title>
                    E-Commerce Platform
                </x-slot:title>

                <x-slot:content>
                    A full-featured online store with seamless shopping experience, payment integration, and admin
                    dashboard.
                </x-slot:content>
            </x-project-card>

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="Portfolio Website" />
                </x-slot:cover>

                <x-slot:title>
                    Portfolio Website
                </x-slot:title>

                <x-slot:content>
                    A personal portfolio website to showcase projects, skills, and professional experience.
                </x-slot:content>
            </x-project-card>

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="Landing Page" />
                </x-slot:cover>

                <x-slot:title>
                    Product Landing Page
                </x-slot:title>

                <x-slot:content>
                    A high-converting landing page focused on promoting digital products with engaging design.
                </x-slot:content>
            </x-project-card>

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="Blog Platform" />
                </x-slot:cover>

                <x-slot:title>
                    Blog Platform
                </x-slot:title>

                <x-slot:content>
                    A content management system for publishing articles with categories, comments, and easy navigation.
                </x-slot:content>
            </x-project-card>

            <x-project-card>
                <x-slot:cover>
                    <img class="rounded-base" src="{{ asset('projects/1.webp') }}" alt="Admin Dashboard" />
                </x-slot:cover>

                <x-slot:title>
                    Admin Dashboard
                </x-slot:title>

                <x-slot:content>
                    An interactive dashboard for managing data, users, and analytics in a clean interface.
                </x-slot:content>
            </x-project-card>


        </div>

        <div class="mt-10">
            <a href="/"
                class="inline-flex items-center gap-2 text-[#fd9a00] border border-[#fd9a00] hover:bg-[#fd9a00] hover:text-white font-semibold px-6 py-3 rounded-lg transition">
                More Projects
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

    <div class="border-t border-gray-200 dark:border-neutral-800"></div>

    <section id="member" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16 text-gray-900 dark:text-gray-50">Member
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Ethan Carter
                </x-slot:name>
                <x-slot:roles>
                    Backend Engineer
                </x-slot:roles>
                <x-slot:content>
                    Builds scalable APIs and robust backend systems using modern frameworks and clean architecture
                    principles.
                </x-slot:content>
            </x-member-card>

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Olivia Bennett
                </x-slot:name>
                <x-slot:roles>
                    UI/UX Designer
                </x-slot:roles>
                <x-slot:content>
                    Designs intuitive and engaging user experiences with a strong focus on usability and modern
                    aesthetics.
                </x-slot:content>
            </x-member-card>

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Liam Anderson
                </x-slot:name>
                <x-slot:roles>
                    Frontend Developer
                </x-slot:roles>
                <x-slot:content>
                    Creates responsive and interactive interfaces using React, Tailwind CSS, and modern web
                    technologies.
                </x-slot:content>
            </x-member-card>

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Sophia Turner
                </x-slot:name>
                <x-slot:roles>
                    Digital Marketing Specialist
                </x-slot:roles>
                <x-slot:content>
                    Drives growth through data-driven marketing strategies, SEO optimization, and social media
                    campaigns.
                </x-slot:content>
            </x-member-card>

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Noah Mitchell
                </x-slot:name>
                <x-slot:roles>
                    DevOps Engineer
                </x-slot:roles>
                <x-slot:content>
                    Ensures reliable deployments and infrastructure with CI/CD pipelines, Docker, and cloud services.
                </x-slot:content>
            </x-member-card>

            <x-member-card>
                <x-slot:profile>
                    <img class="rounded-base" src="https://i.pravatar.cc/300?img=7" alt="" />
                </x-slot:profile>
                <x-slot:name>
                    Ava Richardson
                </x-slot:name>
                <x-slot:roles>
                    Project Manager
                </x-slot:roles>
                <x-slot:content>
                    Leads cross-functional teams using Agile methodologies to deliver high-quality products on time.
                </x-slot:content>
            </x-member-card>

        </div>
    </section>

    <div class="border-t border-gray-200 dark:border-neutral-800"></div>

    <section id="contactUs" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16 text-gray-900 dark:text-gray-50">Contact
            Us</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
            <div class="md:col-span-1 md:col-start-2">
                <label for="name" class="font-semibold text-gray-900 dark:text-gray-100">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500 dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500 ring-amber-500">
            </div>
            <div class="md:col-span-1 md:col-start-2">
                <label for="email" class="font-semibold text-gray-900 dark:text-gray-100">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500 dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500 ring-amber-500">
            </div>
            <div class="md:col-span-1 md:col-start-2">
                <label for="phone" class="font-semibold text-gray-900 dark:text-gray-100">Phone</label>
                <input type="text" name="phone" id="phone"
                    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500 dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500 ring-amber-500">
            </div>
            <div class="md:col-span-1 md:col-start-2">
                <label for="address" class="font-semibold text-gray-900 dark:text-gray-100">Address</label>
                <textarea name="address" id="address" cols="30" rows="10"
                    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500 dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500 ring-amber-500"></textarea>
            </div>
            <div class="md:col-span-1 md:col-start-2">
                <label for="description" class="font-semibold text-gray-900 dark:text-gray-100">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500  dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500"></textarea>
            </div>
            <div class="md:col-span-1 md:col-start-2">
                <button type="button"
                    class="text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">Submit</button>
            </div>
    </section>

</x-layouts.app>
