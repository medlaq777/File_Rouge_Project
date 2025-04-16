<nav class="bg-darkAccent border-b border-border shadow-navbar sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ '/' }}" class="flex-shrink-0 flex items-center">
                    <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="StudioSpace Logo" class="w-16">
                </a>

                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <a href="{{ '/' }}"
                        class="nav-link {{ request()->is('/') ? 'active text-light' : 'text-textMuted hover:text-light' }} px-3 py-2 font-medium">Home</a>
                    <a href="{{ route('explore') }}"
                        class="nav-link {{ request()->routeIs('explore') ? 'active text-light' : 'text-textMuted hover:text-light' }} px-3 py-2 font-medium">Explore
                        Studios</a>
                </div>
            </div>

            <div class="flex items-center">
                <button class="p-2 rounded-full text-textMuted hover:text-light focus:outline-none" id="search-toggle">
                    <i class="fas fa-search"></i>
                </button>

                <div class="ml-4 relative flex items-center space-x-3">
                    @auth
                        <div class="relative user-menu">
                            <button
                                class="user-menu-button flex items-center space-x-2 text-textMuted hover:text-light focus:outline-none"
                                aria-expanded="false">
                                <span>{{ Auth::user()->profile->full_name }}</span>
                                <img src="{{ Auth::user()->profile->profile_image == 'https://placehold.co/200x200/EEE/31343C' ? Auth::user()->profile->profile_image : asset('storage/' . Auth::user()->profile->profile_image) }}"
                                    alt="{{ Auth::user()->profile->full_name }}" class="h-8 w-8 rounded-full">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                            </button>
                            <div
                                class="user-menu-dropdown hidden absolute right-0 mt-2 w-48 bg-darkAccent rounded-md shadow-lg py-1 z-50">
                                <a href="{{ route('showProfile') }}"
                                    class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">Profile</a>
                                @if (Auth::user()->isOwner())
                                    <a href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">Dashboard</a>
                                @elseif (Auth::user()->isArtist())
                                    <a href=""
                                        class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">My
                                        Reservations</a>
                                @elseif (Auth::user()->isAdmin())
                                    <a href=""
                                        class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">Dashboard</a>
                                @endif
                                <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-textMuted hover:text-light">Sign In</a>
                        <a href="{{ route('register') }}"
                            class="ml-4 px-3 py-2 rounded-md bg-primary text-light hover:bg-primaryHover text-sm font-medium">Sign
                            Up</a>
                    @endauth
                </div>

                <div class="flex md:hidden ml-4">
                    <button type="button" id="mobile-menu-button" aria-expanded="false"
                        class="inline-flex items-center justify-center p-2 rounded-md text-textMuted hover:text-light focus:outline-none">
                        <i class="fas fa-bars mobile-icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu"
        class="md:hidden hidden bg-darkAccent border-b border-border transition-all duration-300 max-h-0 overflow-hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ '/' }}" class="block px-3 py-2 rounded-md text-base font-medium ">Home</a>
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium">Explore
                Studios</a>

            @guest
                <a href="{{ route('login') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Sign
                    In</a>
                <a href="{{ route('register') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Sign
                    Up</a>
            @endguest

            @auth
                <a href=""
                    class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Profile</a>
                @if (Auth::user()->isOwner() || Auth::user()->isArtist() || Auth::user()->isAdmin())
                    <a href=""
                        class="block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Dashboard</a>
                @endif
                <form method="POST" action="">
                    @csrf
                    <button type="submit"
                        class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-textMuted hover:text-light hover:bg-darkUI">Sign
                        Out</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<div id="search-overlay"
    class="fixed inset-0 bg-dark bg-opacity-90 z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="container mx-auto px-4 h-full flex items-center justify-center">
        <div class="w-full max-w-2xl">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl text-light font-bold">Search</h2>
                <button id="search-close" class="text-light hover:text-primary">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="" method="GET">
                <div class="relative">
                    <input type="text" name="q" placeholder="Search for studios, artists, tracks..."
                        class="w-full bg-darkAccent border border-border rounded-lg py-4 px-5 text-light placeholder-textMuted focus:outline-none focus:ring-2 focus:ring-primary">
                    <button type="submit"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-textMuted hover:text-light">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileIcon = mobileMenuButton.querySelector('.mobile-icon');

        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);

            if (isExpanded) {
                mobileMenu.style.maxHeight = '0';
                mobileIcon.classList.remove('fa-times');
                mobileIcon.classList.add('fa-bars');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.offsetHeight;
                mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                mobileIcon.classList.remove('fa-bars');
                mobileIcon.classList.add('fa-times');
            }
        });
        const userMenuButtons = document.querySelectorAll('.user-menu-button');
        userMenuButtons.forEach(button => {
            button.addEventListener('click', function() {
                const dropdown = this.nextElementSibling;
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                const chevron = button.querySelector('.fa-chevron-down');
                button.setAttribute('aria-expanded', !isExpanded);
                dropdown.classList.toggle('hidden');
                if (chevron) {
                    chevron.style.transform = isExpanded ? 'rotate(0)' : 'rotate(180deg)';
                }
                userMenuButtons.forEach(otherButton => {
                    if (otherButton !== button) {
                        const otherDropdown = otherButton.nextElementSibling;
                        const otherChevron = otherButton.querySelector(
                            '.fa-chevron-down');

                        otherButton.setAttribute('aria-expanded', 'false');
                        otherDropdown.classList.add('hidden');

                        if (otherChevron) {
                            otherChevron.style.transform = 'rotate(0)';
                        }
                    }
                });
            });
        });


        document.addEventListener('click', function(event) {
            userMenuButtons.forEach(button => {
                const dropdown = button.nextElementSibling;
                const chevron = button.querySelector('.fa-chevron-down');

                if (!button.contains(event.target) && !dropdown.contains(event.target) && !
                    dropdown.classList.contains('hidden')) {
                    button.setAttribute('aria-expanded', 'false');
                    dropdown.classList.add('hidden');

                    if (chevron) {
                        chevron.style.transform = 'rotate(0)';
                    }
                }
            });
        });


        const searchToggle = document.getElementById('search-toggle');
        const searchOverlay = document.getElementById('search-overlay');
        const searchClose = document.getElementById('search-close');

        searchToggle.addEventListener('click', function() {
            searchOverlay.classList.remove('hidden');

            searchOverlay.offsetHeight;
            searchOverlay.classList.add('opacity-100');
            document.body.classList.add('overflow-hidden');


            const searchInput = searchOverlay.querySelector('input');
            if (searchInput) {
                searchInput.focus();
            }
        });

        searchClose.addEventListener('click', function() {
            closeSearchOverlay();
        });


        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !searchOverlay.classList.contains('hidden')) {
                closeSearchOverlay();
            }
        });

        function closeSearchOverlay() {
            searchOverlay.classList.remove('opacity-100');
            document.body.classList.remove('overflow-hidden');


            setTimeout(() => {
                searchOverlay.classList.add('hidden');
            }, 300);
        }
    });
</script>
