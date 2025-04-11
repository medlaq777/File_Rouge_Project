<nav class="bg-darkAccent border-b border-border shadow-navbar sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">

                <a href="{{ '#' }}" class="flex-shrink-0 flex items-center">
                    <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="StudioSpace Logo" class="w-18"> ">
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
                    <a href="{{ '#' }}" class="text-sm text-textMuted hover:text-light">Sign In</a>
                    <a href="{{ '#' }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primaryHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                        Sign Up
                    </a>
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
            <a href="{{ '#' }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-light bg-darkUI">Home</a>
            <a href="{{ '#' }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Explore
                Studios</a>
        </div>
    </div>
</nav>
