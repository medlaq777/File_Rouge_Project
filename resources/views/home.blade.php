
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioSpace - Premium Music Studio Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#E50000',
                        primaryHover: '#C20000',
                        darkBg: '#0b0b0a',
                        darkAccent: '#141414',
                        darkUI: '#1a1a1a',
                        light: '#f8fafc',
                        inputBg: '#0d0d0d',
                        border: '#2a2a2a',
                        textMuted: '#999999'
                    },
                    boxShadow: {
                        'custom': '0 8px 20px -4px rgba(0, 0, 0, 0.7)',
                        'navbar': '0 4px 6px -1px rgba(0, 0, 0, 0.2)'
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
        .animate-slide-in-left {
            animation: slideInLeft 0.6s ease forwards;
        }
        .animate-slide-in-right {
            animation: slideInRight 0.6s ease forwards;
        }
        .animate-pulse-slow {
            animation: pulse 3s infinite ease-in-out;
        }
        body {
            background-image:
                linear-gradient(to bottom, rgba(11, 11, 10, 0.98), rgba(11, 11, 10, 0.95)),
                url("data:image/svg+xml,%3Csvg width='600' height='600' viewBox='0 0 800 800' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23222222' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
        }
        .studio-card:hover .studio-img {
            transform: scale(1.05);
        }
        .studio-img {
            transition: transform 0.5s ease;
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #E50000;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-darkBg text-light font-sans antialiased min-h-screen flex flex-col">

    <nav class="bg-darkAccent border-b border-border shadow-navbar sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">

                    <a href="#" class="flex-shrink-0 flex items-center">
                        <i class="fas fa-music text-primary text-2xl"></i>
                        <span class="ml-2 text-xl font-bold text-light">StudioSpace</span>
                    </a>

                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                        <a href="#" class="nav-link active px-3 py-2 text-light font-medium">Home</a>
                        <a href="#" class="nav-link px-3 py-2 text-textMuted hover:text-light font-medium">Explore Studios</a>
                    </div>
                </div>

                <div class="flex items-center">

                    <button class="p-2 rounded-full text-textMuted hover:text-light focus:outline-none">
                        <i class="fas fa-search h-5 w-5"></i>
                    </button>

                    <div class="ml-4 relative flex items-center space-x-3">
                        <a href="{{ route("auth") }}" class="text-sm text-textMuted hover:text-light">Sign In</a>
                        <a href="{{ route("auth") }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primaryHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                            Sign Up
                        </a>
                    </div>

                    <div class="flex md:hidden ml-4">
                        <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-textMuted hover:text-light focus:outline-none">
                            <i class="fas fa-bars h-6 w-6"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div id="mobile-menu" class="md:hidden hidden bg-darkAccent border-b border-border">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-light bg-darkUI">Home</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Explore Studios</a>
            </div>
        </div>
    </nav>


    <main class="flex-grow">

        <section class="relative py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-6 animate-slide-in-left" style="animation-delay: 0.1s">
                        <h1 class="text-4xl tracking-tight font-extrabold text-light sm:text-5xl md:text-6xl">
                            <span class="block">Find Your Perfect</span>
                            <span class="block text-primary">Recording Studio</span>
                        </h1>
                        <p class="mt-6 text-lg text-textMuted sm:max-w-xl">
                            Book professional recording studios, mix rooms, and production spaces. Connect with top engineers and producers in your area.
                        </p>
                        <div class="mt-8 sm:flex">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primaryHover md:py-4 md:text-lg md:px-10">
                                    Find Studios
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-border text-base font-medium rounded-md text-light bg-darkUI hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 relative sm:max-w-lg lg:mt-0 lg:col-span-6 lg:flex lg:items-center animate-slide-in-right" style="animation-delay: 0.3s">
                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                            <div class="relative block w-full bg-darkAccent rounded-lg overflow-hidden">
                                <img src="/api/placeholder/600/400" alt="Recording studio" class="w-full">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <button type="button" class="flex items-center justify-center h-16 w-16 rounded-full bg-primary bg-opacity-75 transition-colors duration-300 hover:bg-opacity-100 focus:outline-none">
                                        <i class="fas fa-play text-white text-2xl"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-12 bg-darkUI bg-opacity-60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center animate-fade-in">
                    <h2 class="text-base text-primary font-semibold tracking-wide uppercase">How It Works</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-light sm:text-4xl">
                        Book a studio in three simple steps
                    </p>
                </div>

                <div class="mt-10">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                        <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in" style="animation-delay: 0.1s">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                                <i class="fas fa-search h-6 w-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-light">Search Studios</h3>
                            <p class="mt-2 text-base text-textMuted">
                                Browse studios by location, equipment, price, and reviews to find the perfect match for your project.
                            </p>
                        </div>

                        <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in" style="animation-delay: 0.2s">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                                <i class="fas fa-calendar-alt h-6 w-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-light">Book Your Session</h3>
                            <p class="mt-2 text-base text-textMuted">
                                Select your date and time, and book instantly. Secure payment ensures your booking is confirmed.
                            </p>
                        </div>

                        <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in" style="animation-delay: 0.3s">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                                <i class="fas fa-music h-6 w-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-light">Create Your Music</h3>
                            <p class="mt-2 text-base text-textMuted">
                                Arrive at the studio and start recording. Experienced engineers are available to help bring your vision to life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-light">Featured Studios</h2>
                    <a href="#" class="text-primary hover:text-primaryHover font-medium flex items-center">
                        View All
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                    <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card animate-fade-in" style="animation-delay: 0.1s">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/api/placeholder/600/400" alt="Studio 1" class="w-full h-full object-cover studio-img">
                            <div class="absolute top-0 right-0 p-2">
                                <span class="bg-primary text-white text-xs font-medium px-2.5 py-0.5 rounded">Popular</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-light">Harmony Studios</h3>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <span class="ml-1 text-sm text-textMuted">4.9</span>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-textMuted">Los Angeles, CA</p>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">SSL Console</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Pro Tools</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Isolation Booth</span>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-light font-bold">$85<span class="text-textMuted font-normal text-sm">/hr</span></span>
                                <button class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card animate-fade-in" style="animation-delay: 0.2s">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/api/placeholder/600/400" alt="Studio 2" class="w-full h-full object-cover studio-img">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-light">Echo Chamber</h3>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <span class="ml-1 text-sm text-textMuted">4.7</span>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-textMuted">Nashville, TN</p>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Neve Console</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Grand Piano</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Vintage Mics</span>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-light font-bold">$95<span class="text-textMuted font-normal text-sm">/hr</span></span>
                                <button class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card animate-fade-in" style="animation-delay: 0.3s">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/api/placeholder/600/400" alt="Studio 3" class="w-full h-full object-cover studio-img">
                            <div class="absolute top-0 right-0 p-2">
                                <span class="bg-green-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">New</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-light">Bassline Studios</h3>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <span class="ml-1 text-sm text-textMuted">4.8</span>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-textMuted">Atlanta, GA</p>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">API Console</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Ableton Live</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">808 Collection</span>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-light font-bold">$75<span class="text-textMuted font-normal text-sm">/hr</span></span>
                                <button class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card animate-fade-in" style="animation-delay: 0.3s">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/api/placeholder/600/400" alt="Studio 4" class="w-full h-full object-cover studio-img">
                            <div class="absolute top-0 right-0 p-2">
                                <span class="bg-green-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">New</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-light">Bassline Studios</h3>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <span class="ml-1 text-sm text-textMuted">4.8</span>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-textMuted">Atlanta, GA</p>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">API Console</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">Ableton Live</span>
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">808 Collection</span>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-light font-bold">$75<span class="text-textMuted font-normal text-sm">/hr</span></span>
                                <button class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<footer class="bg-darkAccent border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="md:col-span-1">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18V5l12-2v13"></path>
                        <circle cx="6" cy="18" r="3"></circle>
                        <circle cx="18" cy="16" r="3"></circle>
                    </svg>
                    <span class="ml-2 text-xl font-bold text-light">StudioSpace</span>
                </div>
                <p class="text-textMuted text-sm">
                    StudioSpace connects musicians with professional recording studios. Find, book, and record at top studios around the world.
                </p>
                <div class="mt-5 flex space-x-4">
                    <a href="#" class="text-textMuted hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-textMuted hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-textMuted hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>


            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Find Studios</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">List Your Studio</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Our Engineers</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Blog</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Pricing</a></li>
                </ul>
            </div>


            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">Support</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Help Center</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">FAQ</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Contact Us</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Terms of Service</a></li>
                    <li><a href="#" class="text-textMuted hover:text-light text-sm">Privacy Policy</a></li>
                </ul>
            </div>


            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">Newsletter</h3>
                <p class="text-textMuted text-sm mb-4">Stay updated with the latest studios and industry news.</p>
                <form class="space-y-3">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" class="w-full px-3 py-2 bg-inputBg border border-border rounded-md text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Your email address">
                    </div>
                    <button type="submit" class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-2 px-4 rounded-md">Subscribe</button>
                </form>
            </div>
        </div>


        <div class="border-t border-border mt-12 pt-6">
            <p class="text-center text-textMuted text-sm">
                © 2025 StudioSpace. All rights reserved.
            </p>
        </div>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', function() {

            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');

                mobileMenu.style.animation = 'fadeIn 0.3s ease forwards';
            } else {

                mobileMenu.style.animation = 'fadeIn 0.3s ease backwards reverse';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        });


        const studioCards = document.querySelectorAll('.studio-card');
        studioCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.studio-img').style.transform = 'scale(1.05)';
            });

            card.addEventListener('mouseleave', function() {
                this.querySelector('.studio-img').style.transform = 'scale(1)';
            });
        });


        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);


        document.querySelectorAll('.animate-fade-in, .animate-slide-in-left, .animate-slide-in-right').forEach(el => {

            el.style.opacity = '0';

            if (el.classList.contains('animate-slide-in-left')) {
                el.style.transform = 'translateX(-20px)';
            } else if (el.classList.contains('animate-slide-in-right')) {
                el.style.transform = 'translateX(20px)';
            } else {
                el.style.transform = 'translateY(10px)';
            }
            observer.observe(el);
        });
    });
</script>
</body>
</html>
