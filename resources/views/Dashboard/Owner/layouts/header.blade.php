<!-- Header -->
<header class="fixed w-full bg-darkBg bg-opacity-95 backdrop-blur-sm z-50 border-b border-border">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <div class="hidden md:flex items-center space-x-6">
        <a href="{{ '/' }}" class="flex-shrink-0 flex items-center">
            <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="StudioSpace Logo" class="w-16">
        </a>
      </div>

      <div class="flex items-center space-x-4">
        <div class="hidden md:block">
          <div class="flex items-center space-x-3">
            <i class="fas fa-user-circle text-primary h-5 w-5"></i>
            <span class="text-light">{{ Auth::user()->profile->full_name}}</span>
          </div>
        </div>

        <button type="button" id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-white focus:outline-none">
          <i class="fas fa-bars h-6 w-6"></i>
        </button>
      </div>
    </nav>

    <div id="mobile-menu" class="md:hidden hidden bg-darkAccent border-b border-border">
      <div class="px-4 py-3 space-y-3">
        <div class="flex items-center space-x-3 mb-4">
          <i class="fas fa-user-circle text-primary h-5 w-5"></i>
          <span class="text-light">{{ Auth::user()->profile->full_name }}</span>
        </div>
        <a href="#" onclick="showTab('dashboard')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
          <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
        </a>
        <a href="#" onclick="showTab('my-studios')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
          <i class="fas fa-building mr-2"></i>My Studios
        </a>
        <a href="#" onclick="showTab('payments')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
          <i class="fas fa-credit-card mr-2"></i>Payments
        </a>
        <a href="#" onclick="showTab('reviews')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
          <i class="fas fa-star mr-2"></i>Reviews
        </a>
        <a href="{{ route('logout') }}" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">
          <i class="fas fa-sign-out-alt mr-2"></i>Log Out
        </a>
      </div>
    </div>
  </header>
