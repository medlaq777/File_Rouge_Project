<script src="//unpkg.com/alpinejs" defer></script>
<nav class="bg-darkAccent border-b border-border shadow-navbar sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">

                <a href="{{ '/' }}" class="flex-shrink-0 flex items-center">
                    <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="StudioSpace Logo" class="w-24">
                </a>

                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <a href="{{ '#' }}" class="nav-link active px-3 py-2 text-light font-medium">Home</a>
                    <a href="{{ '#' }}"
                        class="nav-link px-3 py-2 text-textMuted hover:text-light font-medium">Explore Studios</a>
                </div>
            </div>

            <div class="flex items-center">

                <button class="p-2 rounded-full text-textMuted hover:text-light focus:outline-none">
                    <i class="fas fa-search"></i>
                </button>

                <div class="ml-4 relative flex items-center space-x-3">
                    @guest
                        <a href="{{ route('login') }}" class="text-sm text-textMuted hover:text-light">Sign In</a>
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primaryHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                            Sign Up
                        </a>
                    @else
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center text-sm text-light focus:outline-none" id="user-menu-button">
                                <span class="mr-2">{{ Auth::user()->name }}</span>
                                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" alt="{{ Auth::user()->name }}">
                            </button>

                            <div x-show="open"
                                 @click.away="open = false"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-darkUI ring-1 ring-black ring-opacity-5 focus:outline-none"
                                 role="menu"
                                 aria-orientation="vertical"
                                 aria-labelledby="user-menu-button">
                                <a href="#" class="block px-4 py-2 text-sm text-light hover:bg-gray-800" role="menuitem">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-light hover:bg-gray-800" role="menuitem">Settings</a>
                                <form method="POST" action="">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-light hover:bg-gray-800" role="menuitem">Sign out</button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>

                <div class="flex md:hidden ml-4">
                    <button type="button" id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-textMuted hover:text-light focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-darkAccent border-b border-border">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ '/' }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-light bg-darkUI">Home</a>
            <a href="{{ '#' }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Explore
                Studios</a>
            @auth
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Your Profile</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Settings</a>
                <form method="POST" action="">
                    @csrf
                    <button type="submit" class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Sign out</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
