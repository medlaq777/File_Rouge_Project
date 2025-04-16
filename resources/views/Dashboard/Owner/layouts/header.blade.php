<!-- Header -->
<header class="fixed w-full bg-darkBg bg-opacity-95 backdrop-blur-sm z-50 border-b border-border">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center gap-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-8 w-8 text-primary"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path d="M9 18V5l12-2v13"></path>
          <circle cx="6" cy="18" r="3"></circle>
          <circle cx="18" cy="16" r="3"></circle>
        </svg>
        <span class="text-2xl font-bold tracking-tight">StudioSpace</span>
      </a>

      <div class="hidden md:flex items-center space-x-6">
        <span class="text-primary font-medium">Studio Owner Dashboard</span>
      </div>

      <div class="flex items-center space-x-4">
        <div class="hidden md:block">
          <div class="flex items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span class="text-light">John Doe</span>
          </div>
        </div>

        <button type="button" id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-white focus:outline-none">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </nav>

    <div id="mobile-menu" class="md:hidden hidden bg-darkAccent border-b border-border">
      <div class="px-4 py-3 space-y-3">
        <div class="flex items-center space-x-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          <span class="text-light">John Doe</span>
        </div>
        <a href="#" onclick="showTab('dashboard')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">Dashboard</a>
        <a href="#" onclick="showTab('my-studios')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">My Studios</a>
        <a href="#" onclick="showTab('payments')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">Payments</a>
        <a href="#" onclick="showTab('reviews')" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">Reviews</a>
        <a href="#" class="block text-textMuted hover:text-light font-medium py-2 border-l-2 border-transparent hover:border-primary pl-3 transition-all duration-200">Log Out</a>
      </div>
    </div>
  </header>
