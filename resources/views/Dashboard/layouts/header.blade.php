    <!-- Header -->
    <header
        class="fixed w-full bg-darkBg bg-opacity-95 backdrop-blur-sm z-50 border-b border-border"
    >
        <nav
            class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center"
        >
            <a href="#" class="flex items-center gap-2">
                <i class="fas fa-music text-primary text-2xl"></i>
                <span class="text-2xl font-bold tracking-tight">StudioSpace</span>
            </a>

            <div class="hidden md:flex items-center space-x-6">
                <span class="text-primary font-medium">Studio Owner Dashboard</span>
            </div>

            <div class="flex items-center space-x-4">
                <div class="hidden md:block">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-user-circle text-primary text-lg"></i>
                        <span class="text-light">John Doe</span>
                    </div>
                </div>

                <button
                    type="button"
                    id="mobile-menu-button"
                    class="md:hidden text-gray-300 hover:text-white focus:outline-none"
                >
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </nav>

        <div
            id="mobile-menu"
            class="md:hidden hidden bg-darkAccent border-b border-border"
        >
            <div class="px-4 py-3 space-y-3">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-user-circle text-primary text-lg"></i>
                    <span class="text-light">John Doe</span>
                </div>
                <a
                    href="#"
                    onclick="showTab('dashboard')"
                    class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200"
                    ><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a
                >
                <a
                    href="#"
                    onclick="showTab('my-studios')"
                    class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200"
                    ><i class="fas fa-microphone-alt mr-2"></i>My Studios</a
                >
                <a
                    href="#"
                    onclick="showTab('payments')"
                    class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200"
                    ><i class="fas fa-dollar-sign mr-2"></i>Payments</a
                >
                <a
                    href="#"
                    onclick="showTab('reviews')"
                    class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200"
                    ><i class="fas fa-star mr-2"></i>Reviews</a
                >
                <a
                    href="#"
                    class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200"
                    ><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a
                >
            </div>
        </div>
    </header>
