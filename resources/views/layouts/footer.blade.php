<footer class="bg-darkAccent border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="md:col-span-1">
                <div class="flex items-center mb-4">
                    <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="BEATSRECORD Logo" class="w-24 bg-contain">
                </div>
                <p class="text-textMuted text-sm">
                    BeatsRecord helps musicians find and book recording studios around the world.
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
                <h3 class="text-lg font-medium text-light mb-4">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="#"
                            class="text-textMuted hover:text-light text-sm">Find Studios</a></li>
                    <li><a href="{{ route('explore') }}"
                            class="text-textMuted hover:text-light text-sm">List Your Studio</a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">Support</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('helpCenter') }}"
                            class="text-textMuted hover:text-light text-sm">Help Center</a></li>
                    <li><a href="{{ route('faq') }}"
                            class="text-textMuted hover:text-light text-sm">FAQ</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-textMuted hover:text-light text-sm">Contact Us</a></li>
                    <li><a href="{{ route('terms') }}"
                            class="text-textMuted hover:text-light text-sm">Terms of Service</a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="text-lg font-medium text-light mb-4">Newsletter</h3>
                <p class="text-textMuted text-sm mb-4">
                    Stay updated with the latest studios and news.
                </p>
                <form class="space-y-3">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email"
                            class="w-full px-3 py-2 bg-inputBg border border-border rounded-md text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary"
                            placeholder="Your email address">
                    </div>
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-2 px-4 rounded-md">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="border-t border-border mt-12 pt-6">
            <p class="text-center text-textMuted text-sm">
                © {{ now()->year }} {{ config('app.name', 'BEATSRECORD') }}.
                All rights reserved.
            </p>
        </div>
    </div>
</footer>
