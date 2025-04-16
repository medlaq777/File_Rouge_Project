<!-- Main Content with Sidebar -->
<div class="pt-16 flex flex-col md:flex-row min-h-screen">
    <!-- Sidebar (Desktop) -->
    <aside class="hidden md:block w-64 bg-darkAccent border-r border-border min-h-screen">
      <div class="p-4">
        <nav class="mt-8">
          <ul class="space-y-2">
            <li>
              <a href="#" onclick="showTab('dashboard')" id="dashboard-link" class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200 sidebar-active">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="7" height="7"></rect>
                  <rect x="14" y="3" width="7" height="7"></rect>
                  <rect x="14" y="14" width="7" height="7"></rect>
                  <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" onclick="showTab('my-studios')" id="my-studios-link" class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                My Studios
              </a>
            </li>
            <li>
              <a href="#" onclick="showTab('payments')" id="payments-link" class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                  <line x1="1" y1="10" x2="23" y2="10"></line>
                </svg>
                Payments
              </a>
            </li>
            <li>
              <a href="#" onclick="showTab('reviews')" id="reviews-link" class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                Reviews
              </a>
            </li>
            <li class="mt-8">
              <a href="#" class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                Log Out
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Dashboard Section -->
      <section id="dashboard" class="animate-fade-in">
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-white">Dashboard</h1>
          <p class="text-textMuted mt-2">Welcome back, John! Here's an overview of your studio activity.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-lg font-semibold text-light">Total Studios</h3>
              <div class="bg-primary bg-opacity-20 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </div>
            </div>
            <p class="text-3xl font-bold text-white">3</p>
            <p class="text-sm text-textMuted mt-2">All your registered studios</p>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-lg font-semibold text-light">Monthly Bookings</h3>
              <div class="bg-info bg-opacity-20 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-info" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
              </div>
            </div>
            <p class="text-3xl font-bold text-white">24</p>
            <p class="text-sm text-textMuted mt-2">+8% from last month</p>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-lg font-semibold text-light">Monthly Revenue</h3>
              <div class="bg-success bg-opacity-20 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-success" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="12" y1="1" x2="12" y2="23"></line>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
              </div>
            </div>
            <p class="text-3xl font-bold text-white">$3,240</p>
            <p class="text-sm text-textMuted mt-2">+12% from last month</p>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-lg font-semibold text-light">Average Rating</h3>
              <div class="bg-warning bg-opacity-20 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-warning" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
              </div>
            </div>
            <p class="text-3xl font-bold text-white">4.8</p>
            <p class="text-sm text-textMuted mt-2">Based on 42 reviews</p>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-darkUI rounded-lg border border-border p-6 mb-8">
          <h2 class="text-xl font-semibold text-white mb-4">Recent Activity</h2>
          <div class="overflow-x-auto">
            <table class="w-full min-w-full">
              <thead>
                <tr class="border-b border-border">
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Event</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Studio</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Date</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-border">
                  <td class="py-3 px-2">
                    <div class="flex items-center">
                      <div class="bg-info bg-opacity-20 p-1 rounded-md mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-info" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                          <line x1="16" y1="2" x2="16" y2="6"></line>
                          <line x1="8" y1="2" x2="8" y2="6"></line>
                          <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                      </div>
                      <span class="text-light">New Booking</span>
                    </div>
                  </td>
                  <td class="py-3 px-2 text-light">Soundwave Studios</td>
                  <td class="py-3 px-2 text-textMuted">Apr 14, 2025</td>
                  <td class="py-3 px-2">
                    <span class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full">Upcoming</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2">
                    <div class="flex items-center">
                      <div class="bg-warning bg-opacity-20 p-1 rounded-md mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-warning" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                      </div>
                      <span class="text-light">New Review</span>
                    </div>
                  </td>
                  <td class="py-3 px-2 text-light">Rhythm Room</td>
                  <td class="py-3 px-2 text-textMuted">Apr 13, 2025</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">5 Stars</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2">
                    <div class="flex items-center">
                      <div class="bg-success bg-opacity-20 p-1 rounded-md mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-success" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="12" y1="1" x2="12" y2="23"></line>
                          <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                      </div>
                      <span class="text-light">Payment Received</span>
                    </div>
                  </td>
                  <td class="py-3 px-2 text-light">Beat Box Studio</td>
                  <td class="py-3 px-2 text-textMuted">Apr 10, 2025</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">$320</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2">
                    <div class="flex items-center">
                      <div class="bg-info bg-opacity-20 p-1 rounded-md mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-info" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                          <line x1="16" y1="2" x2="16" y2="6"></line>
                          <line x1="8" y1="2" x2="8" y2="6"></line>
                          <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                      </div>
                      <span class="text-light">Completed Session</span>
                    </div>
                  </td>
                  <td class="py-3 px-2 text-light">Soundwave Studios</td>
                  <td class="py-3 px-2 text-textMuted">Apr 5, 2025</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-darkUI rounded-lg border border-border p-6">
            <h3 class="text-lg font-semibold text-white mb-4">Quick Actions</h3>
            <div class="space-y-4">
              <a href="#" onclick="showTab('my-studios'); showAddStudioModal()" class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200">
                <span class="text-light font-medium">Add New Studio</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" y1="8" x2="12" y2="16"></line>
                  <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
              </a>
              <a href="#" onclick="showTab('payments')" class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200">
                <span class="text-light font-medium">View Payments</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                  <line x1="1" y1="10" x2="23" y2="10"></line>
                </svg>
              </a>
                              <a href="#" onclick="showTab('reviews')" class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200">
                <span class="text-light font-medium">View Reviews</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
              </a>
            </div>
          </div>

          <div class="bg-darkUI rounded-lg border border-border p-6">
            <h3 class="text-lg font-semibold text-white mb-4">Upcoming Bookings</h3>
            <div class="space-y-4">
              <div class="p-3 bg-darkAccent rounded-md">
                <div class="flex justify-between items-start mb-2">
                  <div>
                    <h4 class="text-light font-medium">Soundwave Studios</h4>
                    <p class="text-textMuted text-sm">April 18, 2025 • 2:00-6:00 PM</p>
                  </div>
                  <span class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full">Confirmed</span>
                </div>
                <p class="text-textMuted text-sm">Alex Johnson • Music Production</p>
              </div>
              <div class="p-3 bg-darkAccent rounded-md">
                <div class="flex justify-between items-start mb-2">
                  <div>
                    <h4 class="text-light font-medium">Rhythm Room</h4>
                    <p class="text-textMuted text-sm">April 20, 2025 • 10:00 AM-1:00 PM</p>
                  </div>
                  <span class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full">Confirmed</span>
                </div>
                <p class="text-textMuted text-sm">Sarah Williams • Podcast Recording</p>
              </div>
            </div>
          </div>

          <div class="bg-darkUI rounded-lg border border-border p-6">
            <h3 class="text-lg font-semibold text-white mb-4">Latest Reviews</h3>
            <div class="space-y-4">
              <div class="p-3 bg-darkAccent rounded-md">
                <div class="flex items-center mb-2">
                  <div class="flex text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                  </div>
                  <span class="text-light ml-2">Rhythm Room</span>
                </div>
                <p class="text-textMuted text-sm">"Amazing studio with top notch equipment. The acoustics are perfect for my podcast recordings."</p>
                <p class="text-textMuted text-xs mt-1">- Sarah Williams, 2 days ago</p>
              </div>
              <div class="p-3 bg-darkAccent rounded-md">
                <div class="flex items-center mb-2">
                  <div class="flex text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                  </div>
                  <span class="text-light ml-2">Beat Box Studio</span>
                </div>
                <p class="text-textMuted text-sm">"Great location and professional setup. The staff was very helpful and accommodating."</p>
                <p class="text-textMuted text-xs mt-1">- Mike Thomas, 4 days ago</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- My Studios Section -->
      <section id="my-studios" class="hidden animate-fade-in">
        <div class="mb-8 flex justify-between items-center">
          <div>
            <h1 class="text-3xl font-bold text-white">My Studios</h1>
            <p class="text-textMuted mt-2">Manage your registered studios</p>
          </div>
          <button onclick="showAddStudioModal()" class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="8" x2="12" y2="16"></line>
              <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            Add New Studio
          </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Studio Card 1 -->
          <div class="bg-darkUI rounded-lg border border-border overflow-hidden studio-card">
            <div class="relative h-48 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2000&q=80" alt="Studio" class="w-full h-full object-cover transition-transform duration-500 studio-image">
              <div class="absolute top-0 right-0 m-3">
                <span class="bg-success bg-opacity-90 text-white text-xs px-2 py-1 rounded-full">Active</span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-white mb-2">Soundwave Studios</h3>
              <p class="text-textMuted mb-4">Professional recording studio with state-of-the-art equipment.</p>
              <div class="flex justify-between items-center text-sm mb-4">
                <span class="text-textMuted">$80/hour</span>
                <span class="flex items-center text-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  4.9 (28 reviews)
                </span>
              </div>
              <div class="grid grid-cols-2 gap-3">
                <button class="bg-darkAccent hover:bg-dark text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">Edit Studio</button>
                <button class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">View Bookings</button>
              </div>
            </div>
          </div>

          <!-- Studio Card 2 -->
          <div class="bg-darkUI rounded-lg border border-border overflow-hidden studio-card">
            <div class="relative h-48 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1610041321420-a596dd14ebc9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2000&q=80" alt="Studio" class="w-full h-full object-cover transition-transform duration-500 studio-image">
              <div class="absolute top-0 right-0 m-3">
                <span class="bg-success bg-opacity-90 text-white text-xs px-2 py-1 rounded-full">Active</span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-white mb-2">Rhythm Room</h3>
              <p class="text-textMuted mb-4">Cozy recording space perfect for podcasts and vocal sessions.</p>
              <div class="flex justify-between items-center text-sm mb-4">
                <span class="text-textMuted">$65/hour</span>
                <span class="flex items-center text-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  4.8 (14 reviews)
                </span>
              </div>
              <div class="grid grid-cols-2 gap-3">
                <button class="bg-darkAccent hover:bg-dark text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">Edit Studio</button>
                <button class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">View Bookings</button>
              </div>
            </div>
          </div>

          <!-- Studio Card 3 -->
          <div class="bg-darkUI rounded-lg border border-border overflow-hidden studio-card">
            <div class="relative h-48 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2000&q=80" alt="Studio" class="w-full h-full object-cover transition-transform duration-500 studio-image">
              <div class="absolute top-0 right-0 m-3">
                <span class="bg-success bg-opacity-90 text-white text-xs px-2 py-1 rounded-full">Active</span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-white mb-2">Beat Box Studio</h3>
              <p class="text-textMuted mb-4">Modern production suite with live room and mixing capabilities.</p>
              <div class="flex justify-between items-center text-sm mb-4">
                <span class="text-textMuted">$95/hour</span>
                <span class="flex items-center text-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  4.7 (9 reviews)
                </span>
              </div>
              <div class="grid grid-cols-2 gap-3">
                <button class="bg-darkAccent hover:bg-dark text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">Edit Studio</button>
                <button class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-4 rounded-md transition-all duration-200 text-sm">View Bookings</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Payments Section -->
      <section id="payments" class="hidden animate-fade-in">
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-white">Payments</h1>
          <p class="text-textMuted mt-2">Track your earnings and payment history</p>
        </div>

        <!-- Payment Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <h3 class="text-lg font-semibold text-light mb-4">Total Earnings</h3>
            <p class="text-3xl font-bold text-white">$12,480</p>
            <p class="text-sm text-textMuted mt-2">Lifetime earnings from all studios</p>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <h3 class="text-lg font-semibold text-light mb-4">This Month</h3>
            <p class="text-3xl font-bold text-white">$3,240</p>
            <p class="text-sm text-success mt-2">+12% from last month</p>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <h3 class="text-lg font-semibold text-light mb-4">Pending</h3>
            <p class="text-3xl font-bold text-white">$640</p>
            <p class="text-sm text-textMuted mt-2">From 4 upcoming bookings</p>
          </div>
        </div>

        <!-- Payment History -->
        <div class="bg-darkUI rounded-lg border border-border p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-white">Payment History</h2>
            <div class="flex space-x-2">
              <select class="bg-inputBg text-textMuted border border-border rounded-md p-2 text-sm">
                <option>All Studios</option>
                <option>Soundwave Studios</option>
                <option>Rhythm Room</option>
                <option>Beat Box Studio</option>
              </select>
              <select class="bg-inputBg text-textMuted border border-border rounded-md p-2 text-sm">
                <option>Last 30 Days</option>
                <option>Last 3 Months</option>
                <option>Last 6 Months</option>
                <option>This Year</option>
              </select>
            </div>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full min-w-full">
              <thead>
                <tr class="border-b border-border">
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Date</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Description</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Studio</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Amount</th>
                  <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-border">
                  <td class="py-3 px-2 text-light">Apr 10, 2025</td>
                  <td class="py-3 px-2 text-light">Mike Thomas Booking</td>
                  <td class="py-3 px-2 text-light">Beat Box Studio</td>
                  <td class="py-3 px-2 text-light">$320</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2 text-light">Apr 8, 2025</td>
                  <td class="py-3 px-2 text-light">Sarah Williams Booking</td>
                  <td class="py-3 px-2 text-light">Rhythm Room</td>
                  <td class="py-3 px-2 text-light">$195</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2 text-light">Apr 5, 2025</td>
                  <td class="py-3 px-2 text-light">Alex Johnson Booking</td>
                  <td class="py-3 px-2 text-light">Soundwave Studios</td>
                  <td class="py-3 px-2 text-light">$320</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2 text-light">Apr 2, 2025</td>
                  <td class="py-3 px-2 text-light">James Wilson Booking</td>
                  <td class="py-3 px-2 text-light">Beat Box Studio</td>
                  <td class="py-3 px-2 text-light">$285</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
                <tr class="border-b border-border">
                  <td class="py-3 px-2 text-light">Mar 30, 2025</td>
                  <td class="py-3 px-2 text-light">Emma Davis Booking</td>
                  <td class="py-3 px-2 text-light">Rhythm Room</td>
                  <td class="py-3 px-2 text-light">$195</td>
                  <td class="py-3 px-2">
                    <span class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full">Completed</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- Reviews Section -->
      <section id="reviews" class="hidden animate-fade-in">
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-white">Reviews</h1>
          <p class="text-textMuted mt-2">See what clients are saying about your studios</p>
        </div>

        <!-- Review Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
          <div class="bg-darkUI rounded-lg p-6 border border-border flex items-center">
            <div class="mr-6">
              <h3 class="text-lg font-semibold text-light mb-2">Overall Rating</h3>
              <div class="flex items-center mb-1">
                <div class="flex text-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" opacity="0.5">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                </div>
                <span class="text-2xl font-bold text-white ml-3">4.8</span>
              </div>
              <p class="text-sm text-textMuted">Based on 42 reviews</p>
            </div>
            <div class="flex-1 space-y-2">
              <div class="flex items-center">
                <span class="text-xs text-textMuted w-6">5★</span>
                <div class="flex-1 h-2 mx-2 rounded-full bg-darkBg overflow-hidden">
                  <div class="bg-warning h-full rounded-full" style="width: 80%"></div>
                </div>
                <span class="text-xs text-textMuted w-6">80%</span>
              </div>
              <div class="flex items-center">
                <span class="text-xs text-textMuted w-6">4★</span>
                <div class="flex-1 h-2 mx-2 rounded-full bg-darkBg overflow-hidden">
                  <div class="bg-warning h-full rounded-full" style="width: 15%"></div>
                </div>
                <span class="text-xs text-textMuted w-6">15%</span>
              </div>
              <div class="flex items-center">
                <span class="text-xs text-textMuted w-6">3★</span>
                <div class="flex-1 h-2 mx-2 rounded-full bg-darkBg overflow-hidden">
                  <div class="bg-warning h-full rounded-full" style="width: 5%"></div>
                </div>
                <span class="text-xs text-textMuted w-6">5%</span>
              </div>
              <div class="flex items-center">
                <span class="text-xs text-textMuted w-6">2★</span>
                <div class="flex-1 h-2 mx-2 rounded-full bg-darkBg overflow-hidden">
                  <div class="bg-warning h-full rounded-full" style="width: 0%"></div>
                </div>
                <span class="text-xs text-textMuted w-6">0%</span>
              </div>
              <div class="flex items-center">
                <span class="text-xs text-textMuted w-6">1★</span>
                <div class="flex-1 h-2 mx-2 rounded-full bg-darkBg overflow-hidden">
                  <div class="bg-warning h-full rounded-full" style="width: 0%"></div>
                </div>
                <span class="text-xs text-textMuted w-6">0%</span>
              </div>
            </div>
          </div>

          <div class="bg-darkUI rounded-lg p-6 border border-border">
            <h3 class="text-lg font-semibold text-light mb-4">Studio Ratings</h3>
            <div class="space-y-4">
              <div class="flex items-center justify-between">
                <span class="text-light">Soundwave Studios</span>
                <div class="flex items-center">
                  <div class="flex text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                  </div>
                  <span class="text-textMuted ml-2">4.9 (28 reviews)</span>
                </div>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-light">Rhythm Room</span>
                <div class="flex items-center">
                  <div class="flex text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" opacity="0.5">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                  </div>
                  <span class="text-textMuted ml-2">4.8 (14 reviews)</span>
                </div>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-light">Beat Box Studio</span>
                <div class="flex items-center">
                  <div class="flex text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" opacity="0.5">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                  </div>
                  <span class="text-textMuted ml-2">4.7 (9 reviews)</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review List -->
        <div class="bg-darkUI rounded-lg border border-border p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-white">Recent Reviews</h2>
            <select class="bg-inputBg text-textMuted border border-border rounded-md p-2 text-sm">
              <option>All Studios</option>
              <option>Soundwave Studios</option>
              <option>Rhythm Room</option>
              <option>Beat Box Studio</option>
            </select>
          </div>
          <div class="space-y-6">
            <!-- Review 1 -->
            <div class="p-4 bg-darkAccent rounded-lg">
              <div class="flex justify-between items-start mb-3">
                <div>
                  <div class="flex items-center">
                    <div class="flex text-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                    </div>
                    <span class="text-white ml-2 font-medium">Sarah Williams</span>
                  </div>
                  <div class="flex items-center mt-1 text-sm text-textMuted">
                    <span>Rhythm Room</span>
                    <span class="mx-2">•</span>
                    <span>Apr 13, 2025</span>
                  </div>
                </div>
              </div>
              <p class="text-light">"Amazing studio with top notch equipment. The acoustics are perfect for my podcast recordings. The staff was incredibly helpful in getting me set up and showing me how to use the equipment."</p>
            </div>

            <!-- Review 2 -->
            <div class="p-4 bg-darkAccent rounded-lg">
              <div class="flex justify-between items-start mb-3">
                <div>
                  <div class="flex items-center">
                    <div class="flex text-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                    </div>
                    <span class="text-white ml-2 font-medium">Mike Thomas</span>
                  </div>
                  <div class="flex items-center mt-1 text-sm text-textMuted">
                    <span>Beat Box Studio</span>
                    <span class="mx-2">•</span>
                    <span>Apr 10, 2025</span>
                  </div>
                </div>
              </div>
              <p class="text-light">"Great location and professional setup. The staff was very helpful and accommodating. The mixing equipment was top of the line and allowed me to get the exact sound I was looking for. Will definitely be back!"</p>
            </div>

            <!-- Review 3 -->
            <div class="p-4 bg-darkAccent rounded-lg">
              <div class="flex justify-between items-start mb-3">
                <div>
                  <div class="flex items-center">
                    <div class="flex text-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" opacity="0.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                    </div>
                    <span class="text-white ml-2 font-medium">Alex Johnson</span>
                  </div>
                  <div class="flex items-center mt-1 text-sm text-textMuted">
                    <span>Soundwave Studios</span>
                    <span class="mx-2">•</span>
                    <span>Apr 8, 2025</span>
                  </div>
                </div>
              </div>
              <p class="text-light">"The studio had everything I needed for my recording session. The sound isolation was excellent and the monitoring system was crystal clear. I particularly appreciated the comfortable lounge area for breaks."</p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
