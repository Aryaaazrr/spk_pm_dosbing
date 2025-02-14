<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">SPK PM</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#about" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                    <a href="#testimonials" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Testimonials</a>
                    <a href="#profile-matching" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Profile Matching</a>
                    <a href="#research-methods" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Research Methods</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                            x-show="!showMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden mobile-menu">
            <ul>
                <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">About</a></li>
                <li><a href="#testimonials" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Testimonials</a></li>
                <li><a href="#profile-matching" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Profile Matching</a></li>
                <li><a href="#research-methods" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Research Methods</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700">
        <div class="max-w-screen-xl mx-auto px-4 py-24 lg:flex lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-white sm:text-6xl leading-tight">
                    Build Better Websites <br>
                    <span class="font-light">With Modern Tools</span>
                </h1>
                <p class="mt-6 text-xl text-blue-100">
                    Create beautiful, modern, and responsive web applications with Tailwind CSS and Flowbite.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#" class="px-8 py-4 text-blue-900 bg-white rounded-lg hover:bg-blue-50 transition duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl font-semibold">
                        Get Started
                    </a>
                    <a href="#"
                        class="px-8 py-4 text-white border-2 border-white rounded-lg hover:bg-white/10 transition duration-300 transform hover:-translate-y-1 font-semibold">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 lg:w-1/2">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="Mockup"
                    class="w-full rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Why Choose Us?</h2>
            <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto">Explore the benefits of using our platform to build modern, responsive web applications.</p>
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Feature 1 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-blue-50 rounded-xl">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Fast & Responsive</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Optimized for speed and mobile responsiveness, ensuring smooth performance across all devices.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-green-50 rounded-xl">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Easy to Use</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Simple UI and intuitive design for seamless experience, reducing the learning curve.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-purple-50 rounded-xl">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v16h16"></path>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Customizable</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Easily customize styles with Tailwind CSS to match your brand identity.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    {{-- <section class="bg-gray-50 py-20">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">What Our Users Say</h2>
            <div class="testimonials-slider swiper-container relative">
                <!-- Slider controls -->
                <div class="swiper-button-next hidden md:flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-colors duration-200"></div>
                <div class="swiper-button-prev hidden md:flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-colors duration-200"></div>

                <!-- Slider wrapper -->
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "This platform has completely transformed how I build websites. The tools are intuitive and the results are stunning!"
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer for modern web design."
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "The combination of Tailwind CSS and this platform has significantly boosted my productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "This platform has completely transformed how I build websites. The tools are intuitive and the results are stunning!"
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer for modern web design."
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "The combination of Tailwind CSS and this platform has significantly boosted my productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "This platform has completely transformed how I build websites. The tools are intuitive and the results are stunning!"
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer for modern web design."
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "The combination of Tailwind CSS and this platform has significantly boosted my productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </section> --}}

    <section class="section-our-work" id="our-work">
        <div class="flex justify-center">
            <div class="grid grid-cols-12 w-full text-white">
                <div class="col-span-6">
                    <h6 class="text-2xl font-normal">- Our Work</h6>
                    <h1 class="text-3xl lg:text-7xl font-extralight">Shaping Spaces, Defining Excellence</h1>
                </div>
                <div class="col-span-6 flex items-end self-end">
                    <p class="text-xl font-thin">
                        Explore our portfolio of diverse and inspiring architectural projects that combine
                        innovative
                        design, sustainability, and attention to detail.
                    </p>
                </div>
            </div>
        </div>
        <div class="my-8 mx-auto w-full h-full">
            <div class="swiper-container w-[1444px] h-full mt-16 sliderOurWork bg-neutral-950 relative duration-500">
                <div class="swiper-wrapper w-full h-full" id="portfolio-swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "This platform has completely transformed how I build websites. The tools are intuitive and the results are stunning!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer for modern web design."
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "The combination of Tailwind CSS and this platform has significantly boosted my productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "This platform has completely transformed how I build websites. The tools are intuitive and the results are stunning!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer for modern web design."
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative flex items-center justify-start ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-full">
                            <div class="flex items-center gap-4 mb-6">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                "The combination of Tailwind CSS and this platform has significantly boosted my productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="relative mt-40 w-full">
                    <div class="absolute h-10 bottom-6 left-0 right-4 flex items-center justify-end space-x-2">
                        <div class="swiper-pagination flex-grow h-[2px] bg-gray-500/50 rounded-full "></div>
                        <div id="button-prev-our-work"
                            class="bg-transparent p-3 hover:scale-150 rounded-full bg-neutral-50 cursor-pointer transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-left text-white">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </div>
                        <div id="button-next-our-work"
                            class="bg-transparent p-3 hover:scale-150 rounded-full bg-neutral-50 cursor-pointer transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-right text-white">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-screen-xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">SPK PDP-PM</h3>
                    <p class="text-sm text-gray-400">Decision Support System using Profile Matching Method</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimonials</a></li>
                        <li><a href="#profile-matching" class="text-gray-400 hover:text-white">Profile Matching</a></li>
                        <li><a href="#research-methods" class="text-gray-400 hover:text-white">Research Methods</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <p class="text-gray-400">Email: info@spkpm.com</p>
                    <p class="text-gray-400">Phone: +62 123 4567</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                &copy; 2025 SPK PDP-PM. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
