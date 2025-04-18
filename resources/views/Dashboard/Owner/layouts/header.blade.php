<!-- Header -->
<header class="fixed w-full bg-darkBg bg-opacity-95 backdrop-blur-md z-50 border-b border-border shadow-lg">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <!-- Logo - Desktop -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ '/' }}" class="flex-shrink-0 flex items-center transition-transform hover:scale-105">
                <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="StudioSpace Logo" class="w-16">
            </a>
        </div>

        <!-- User Menu - Desktop -->
        <div class="flex items-center space-x-4">
            <div class="hidden md:flex items-center">
                <div class="group relative">
                    <button class="flex items-center space-x-3 bg-darkAccent hover:bg-opacity-80 px-4 py-2 rounded-lg transition-all duration-200">
                        <i class="fas fa-user-circle text-primary text-lg"></i>
                        <span class="text-light font-medium">{{ Auth::user()->profile->full_name }}</span>
                        <i class="fas fa-chevron-down text-sm text-textMuted group-hover:text-light transition-colors"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-darkAccent border border-border rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="{{ route('showProfile') }}" class="flex items-center px-4 py-3 text-light hover:bg-opacity-50 hover:bg-darkBg rounded-t-lg">
                            <i class="fas fa-user-edit mr-3 text-primary"></i>
                            <span>Edit Profile</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left flex items-center px-4 py-3 text-light hover:bg-opacity-50 hover:bg-darkBg rounded-b-lg">
                                <i class="fas fa-sign-out-alt mr-3 text-primary"></i>
                                <span>Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-white focus:outline-none bg-darkAccent p-2 rounded-lg">
                <i class="fas fa-bars h-5 w-5"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-darkAccent border-b border-border">
        <div class="px-4 py-5 space-y-3">
            <!-- Mobile User Info -->
            <div class="flex items-center space-x-3 mb-6 p-3 bg-darkBg rounded-lg">
                <i class="fas fa-user-circle text-primary text-xl"></i>
                <span class="text-light font-medium">{{ Auth::user()->profile->full_name }}</span>
            </div>

            <!-- Navigation Links -->
            <a href="#" onclick="showTab('dashboard')" class="flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                <i class="fas fa-tachometer-alt w-6 text-center mr-3"></i>Dashboard
            </a>
            <a href="#" onclick="showTab('my-studios')" class="flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                <i class="fas fa-building w-6 text-center mr-3"></i>My Studios
            </a>
            <a href="#" onclick="showTab('payments')" class="flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                <i class="fas fa-credit-card w-6 text-center mr-3"></i>Payments
            </a>
            <a href="#" onclick="showTab('reviews')" class="flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                <i class="fas fa-star w-6 text-center mr-3"></i>Reviews
            </a>
            <a href="#" onclick="showTab('edit-profile')" class="flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                <i class="fas fa-user-edit w-6 text-center mr-3"></i>Edit Profile
            </a>
            <form method="POST" action="{{ route('logout') }}" class="mb-0">
                @csrf
                <button type="submit" class="w-full text-left flex items-center text-textMuted hover:text-light font-medium py-3 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
                    <i class="fas fa-sign-out-alt w-6 text-center mr-3"></i>Log Out
                </button>
            </form>
        </div>
    </div>
</header>

<!-- Mobile menu toggle script -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
