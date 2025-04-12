<section class="relative py-16 sm:py-24 bg-darkBg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 mb-16">
            <div class="lg:col-span-6 animate-slide-in-left" style="animation-delay: 0.1s">
                <h1 class="text-4xl tracking-tight font-extrabold text-light sm:text-5xl md:text-6xl">
                    <span class="block">Welcome to our</span>
                    <span class="block text-primary">Help Center</span>
                </h1>
                <p class="mt-6 text-lg text-textMuted sm:max-w-xl">
                    Find answers to common questions, browse tutorials, and get the support you need.
                    Our team is here to help you succeed with our platform.
                </p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="#faq-section"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primaryHover md:py-4 md:text-lg md:px-10">
                            Browse FAQs
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#contact-form"
                            class="w-full flex items-center justify-center px-8 py-3 border border-border text-base font-medium rounded-md text-light bg-darkUI hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 relative sm:max-w-lg lg:mt-0 lg:col-span-6 lg:flex lg:items-center animate-slide-in-right"
                style="animation-delay: 0.3s">
                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <div class="relative block w-full bg-darkAccent rounded-lg overflow-hidden">
                        <img src="{{ asset('images/help-center.jpg') }}" alt="Help center support" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button type="button"
                                class="flex items-center justify-center h-16 w-16 rounded-full bg-primary bg-opacity-75 transition-colors duration-300 hover:bg-opacity-100 focus:outline-none">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Box -->
        <div class="max-w-3xl mx-auto mb-16 animate-fade-in" style="animation-delay: 0.5s">
            <div class="bg-darkUI rounded-xl p-6 shadow-lg">
                <h2 class="text-2xl font-bold text-light text-center mb-4">How can we help you today?</h2>
                <div class="relative">
                    <input type="text" placeholder="Search for tutorials, FAQs, and more..."
                        class="w-full px-6 py-4 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    <button class="absolute right-3 top-3 p-1 bg-primary text-white rounded-lg p-2">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
