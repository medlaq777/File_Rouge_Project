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

                <div class="ml-4 relative flex items-center space-x-3">
                    @auth
                        <div class="relative user-menu">
                            <button
                                class="user-menu-button flex items-center space-x-2 text-textMuted hover:text-light focus:outline-none"
                                aria-expanded="false">
                                <span>Welcome, {{ Auth::user()->profile->full_name }}</span>
                                <img src="{{ Auth::user()->profile->profile_image == 'https://placehold.co/200x200/EEE/31343C' ? Auth::user()->profile->profile_image : asset('storage/' . Auth::user()->profile->profile_image) }}"
                                    alt="{{ Auth::user()->profile->full_name }}" class="h-8 w-8 rounded-full">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                            </button>
                            <div
                                class="user-menu-dropdown hidden absolute right-0 mt-2 w-48 bg-darkAccent rounded-md shadow-lg py-1 z-50">
                                <a href="{{ route('showProfile', Auth::user()->id) }}"
                                    class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">Profile</a>
                                @if (Auth::user()->isOwner())
                                    <a href="{{ route('dashboard-Owner') }}"
                                        class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">Dashboard</a>
                                @elseif (Auth::user()->isArtist())
                                    <a href="{{ route('dashboard-Artist') }}"
                                        class="block px-4 py-2 text-sm text-textMuted hover:text-light hover:bg-darkUI">My
                                        Dashboard</a>
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

            </div>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>
