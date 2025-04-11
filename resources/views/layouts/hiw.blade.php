<section class="py-12 bg-darkUI bg-opacity-60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center animate-fade-in">
            <h2 class="text-base text-primary font-semibold tracking-wide uppercase">{{ __('How It Works') }}
            </h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-light sm:text-4xl">
                {{ __('Book a studio in three simple steps') }}
            </p>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in"
                    style="animation-delay: 0.1s">
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                        <i class="fas fa-search text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-light">{{ __('Search Studios') }}</h3>
                    <p class="mt-2 text-base text-textMuted">
                        {{ __('Browse studios by location, equipment, price, and reviews to find the perfect match for your project.') }}
                    </p>
                </div>

                <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in"
                    style="animation-delay: 0.2s">
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                        <i class="fas fa-calendar-alt text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-light">{{ __('Book Your Session') }}</h3>
                    <p class="mt-2 text-base text-textMuted">
                        {{ __('Select your date and time, and book instantly. Secure payment ensures your booking is confirmed.') }}
                    </p>
                </div>

                <div class="bg-darkAccent rounded-lg p-6 border border-border animate-fade-in"
                    style="animation-delay: 0.3s">
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mb-4">
                        <i class="fas fa-music text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-light">{{ __('Create Your Music') }}</h3>
                    <p class="mt-2 text-base text-textMuted">
                        {{ __('Arrive at the studio and start recording. Experienced engineers are available to help bring your vision to life.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
