<footer class="bg-darkAccent border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="md:col-span-1">
                <div class="flex items-center mb-4">
                    <i class="fas fa-music text-primary text-2xl"></i>
                    <span
                        class="ml-2 text-xl font-bold text-light">{{ config('app.name', 'StudioSpace') }}</span>
                </div>
                <p class="text-textMuted text-sm">
                    {{ __('StudioSpace connects musicians with professional recording studios. Find, book, and record at top studios around the world.') }}
                </p>
                <div class="mt-5 flex space-x-4">
                    <a href="#" class="text-textMuted hover:text-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-textMuted hover:text-light">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-textMuted hover:text-light">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">{{ __('Quick Links') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('Find Studios') }}</a></li>
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('List Your Studio') }}</a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">{{ __('Support') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('Help Center') }}</a></li>
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('FAQ') }}</a></li>
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('Contact Us') }}</a></li>
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('Terms of Service') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">{{ __('Privacy Policy') }}</a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">{{ __('Newsletter') }}</h3>
                <p class="text-textMuted text-sm mb-4">
                    {{ __('Stay updated with the latest studios and industry news.') }}</p>
                <form class="space-y-3">
                    <div>
                        <label for="email" class="sr-only">{{ __('Email address') }}</label>
                        <input id="email" name="email" type="email"
                            class="w-full px-3 py-2 bg-inputBg border border-border rounded-md text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary"
                            placeholder="{{ __('Your email address') }}">
                    </div>
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-2 px-4 rounded-md">{{ __('Subscribe') }}</button>
                </form>
            </div>
        </div>

        <div class="border-t border-border mt-12 pt-6">
            <p class="text-center text-textMuted text-sm">
                © {{ now()->year }} {{ config('app.name', 'StudioSpace') }}.
                {{ __('All rights reserved.') }}
            </p>
        </div>
    </div>
</footer>
