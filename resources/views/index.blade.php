<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased text-gray-700">
<header class="bg-deep-cerulean-500">
    <div class="h-28 w-full max-w-6xl mx-auto flex items-center justify-between">
        <a href="/" class="text-3xl text-white font-semibold tracking-wider">LOGO</a>
        <nav>
            <ul class="flex space-x-10 text-deep-cerulean-100">
                <li>
                    <a href="#" class="text-white">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section id="main" class="bg-deep-cerulean-500">
    <div class="flex pt-16 items-center w-full max-w-6xl mx-auto">
        <div class="w-128 space-y-8 mr-64">
            <h1 class="text-4xl tracking-wider uppercase text-white font-semibold">Forward Thinking Organization</h1>
            <p class="text-sm text-deep-cerulean-100">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut mi pharetra, gravida arcu at, varius
                tellus. Ut tincidunt tortor vel purus iaculis.
            </p>
            <a href="#" class="inline-block px-8 py-3 text-sm bg-deep-cerulean-600 text-white rounded">View More</a>
        </div>
        <div>
            <img src="{{ asset('images/ai.png') }}" alt="artificial intelligence image">
        </div>
    </div>
</section>
<section id="product-launch">
    <div class="flex py-16 items-center w-full max-w-6xl mx-auto">
        <div class="w-128 space-y-8">
            <h2 class="uppercase font-bold tracking-wider text-4xl">
                Latest product launched
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut mi pharetra, gravida arcu at, varius
                tellus. Ut tincidunt tortor vel purus iaculis.
            </p>
            <a href="#" class="inline-block px-8 py-3 text-sm bg-secondary text-white rounded">View More</a>
        </div>
        <div class="ml-64">
            <img src="{{ asset('images/product-launch.png') }}">
        </div>
    </div>
</section>
<hr class="w-64 mx-auto" style="height: 2px">
<section id="about-us">
    <div class="flex pt-16 items-center w-full max-w-6xl mx-auto">
        <div>
            <img src="{{ asset('images/working-woman.png') }}">
        </div>
        <div class="w-128 ml-64">
            <h2 class="uppercase font-bold tracking-wider text-4xl mb-8">About us</h2>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut mi pharetra, gravida arcu at, varius
                tellus. Ut tincidunt tortor vel purus
            </p>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut mi pharetra, gravida arcu at, varius
                tellus. Ut tincidunt tortor vel purus iaculis, nec congue dolor viverra. Mauris fringilla molestie
                nulla,
                non aliquam tortor facilisis accumsan. Ut tincidunt tortor vel purus iaculis, nec congue dolor viverra.
            </p>
            <p class="font-semibold italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </p>
        </div>
    </div>
</section>
<section id="rnd" class="bg-accent">
    <div class="py-16 w-full max-w-6xl mx-auto">
        <h2 class="uppercase font-bold tracking-wider text-4xl mb-8">R&D</h2>
        <div class="flex items-center space-x-32 w-full">
            <div class="w-1/2">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="testimonials">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="space-y-8">
                                    <div class="flex items-center space-x-8">
                                        <img src="{{ asset('images/avatar.png') }}" class="w-16 h-16 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg text-gray-700">John doe</p>
                                            <p class="text-gray-400 italic">Designation goes here</p>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam dolore
                                        dolorem
                                        ex
                                        hic laboriosam, maiores nisi officia optio porro quas quia quos sapiente velit.
                                    </p>
                                    <p class="font-semibold italic">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="space-y-8">
                                    <div class="flex items-center space-x-8">
                                        <img src="{{ asset('images/avatar.png') }}" class="w-16 h-16 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg text-gray-700">John doe</p>
                                            <p class="text-gray-400 italic">Designation goes here</p>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam dolore
                                        dolorem
                                        ex
                                        hic laboriosam, maiores nisi officia optio porro quas quia quos sapiente velit.
                                    </p>
                                    <p class="font-semibold italic">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="space-y-8">
                                    <div class="flex items-center space-x-8">
                                        <img src="{{ asset('images/avatar.png') }}" class="w-16 h-16 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg text-gray-700">John doe</p>
                                            <p class="text-gray-400 italic">Designation goes here</p>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam dolore
                                        dolorem
                                        ex
                                        hic laboriosam, maiores nisi officia optio porro quas quia quos sapiente velit.
                                    </p>
                                    <p class="font-semibold italic">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-x-1 mt-8">
                    <button id="left-arrow" class="bg-secondary p-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                    </button>
                    <button id="right-arrow" class="bg-secondary p-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-1/2">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('images/rnd_one.png') }}" alt="slide 1"
                                     class="w-full h-auto rounded shadow-lg">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('images/rnd_two.png') }}" alt="slide 2"
                                     class="w-full h-auto rounded shadow-lg">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('images/rnd_three.png') }}" alt="slide 3"
                                     class="w-full h-auto rounded shadow-lg">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('images/rnd_four.png') }}" alt="slide 3"
                                     class="w-full h-auto rounded shadow-lg">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary py-16">
    <div class="w-full max-w-5xl mx-auto flex items-center justify-between">
        <div class="space-y-8">
            <h2 class="uppercase text-4xl tracking-wide font-bold text-white">Sounds Interesting?</h2>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>
        <div>
            <button class="uppercase px-12 py-4 bg-white rounded">Join us</button>
        </div>
    </div>
</section>
<section class="py-16">
    <h2 class="text-center uppercase text-4xl tracking-wide font-bold">Directors</h2>
    <p class="text-center text-gray-400 italic my-8 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid at atque aut.
    </p>
    <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="directors">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <div class="flex border space-x-12 items-center w-full max-w-3xl mx-auto">
                        <img src="{{ asset('images/avatar.png') }}" class="w-64 h-64 object-cover">
                        <div>
                            <p class="font-bold">John doe</p>
                            <p>Director</p>
                            <p class="mt-8 w-96">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                ipsam ipsum maiores tempore ut! Assumenda, commodi dolore dolores expedita illo impedit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="splide__slide">
                    <div class="flex border space-x-12 items-center w-full max-w-3xl mx-auto">
                        <img src="{{ asset('images/avatar.png') }}" class="w-64 h-64 object-cover">
                        <div>
                            <p class="font-bold">John doe</p>
                            <p>Director</p>
                            <p class="mt-8 w-96">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                ipsam ipsum maiores tempore ut! Assumenda, commodi dolore dolores expedita illo impedit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="splide__slide">
                    <div class="flex border space-x-12 items-center w-full max-w-3xl mx-auto">
                        <img src="{{ asset('images/avatar.png') }}" class="w-64 h-64 object-cover">
                        <div>
                            <p class="font-bold">John doe</p>
                            <p>Director</p>
                            <p class="mt-8 w-96">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                ipsam ipsum maiores tempore ut! Assumenda, commodi dolore dolores expedita illo impedit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-16 relative">
    <div class="w-full">
        <h2 class="text-center uppercase text-3xl tracking-wide font-bold">
            How we see this world
        </h2>
        <p class="text-center text-gray-400 italic my-8 text-lg">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta, esse inventore itaque.
        </p>
        <div class="absolute right-0 z-10">
            <div class="space-x-1">
                <button id="left-arrow" class="bg-secondary p-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                </button>
                <button id="right-arrow" class="bg-secondary p-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="full-carousel">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="flex items-center h-96 w-screen">
                            <img src="{{ asset('images/child-counselling.png') }}" class="w-1/2 h-full object-cover">
                            <div class="w-1/2 bg-deep-cerulean-600 h-full">
                                <p class="text-white w-full max-w-xl px-16 py-32 text-xl tracking-wide">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                    ipsam ipsum maiores tempore ut!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="flex items-center h-96 w-screen">
                            <img src="{{ asset('images/child-counselling.png') }}" class="w-1/2 h-full object-cover">
                            <div class="w-1/2 bg-deep-cerulean-600 h-full">
                                <p class="text-white w-full max-w-xl px-16 py-32 text-xl tracking-wide">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                    ipsam ipsum maiores tempore ut!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="flex items-center h-96 w-screen">
                            <img src="{{ asset('images/child-counselling.png') }}" class="w-1/2 h-full object-cover">
                            <div class="w-1/2 bg-deep-cerulean-600 h-full">
                                <p class="text-white w-full max-w-xl px-16 py-32 text-xl tracking-wide">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dignissimos
                                    ipsam ipsum maiores tempore ut!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="py-4 space-y-8">
    <div class="flex justify-center items-center space-x-8 text-sm font-semibold">
        <p>Privacy Policy</p>
        <p>Terms</p>
    </div>
    <p class="text-gray-400 text-xs text-center">Copyright</p>
</footer>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
