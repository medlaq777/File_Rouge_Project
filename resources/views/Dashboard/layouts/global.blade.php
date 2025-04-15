<!-- Main Content -->
<main class="flex-1 p-6">

<!-- Dashboard Section -->
<section id="dashboard" class="animate-fade-in">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Dashboard</h1>
        <p class="text-textMuted mt-2">
      Welcome back, John! Here's an overview of your studio activity.
    </p>
  </div>

  <!-- Stats Cards -->
  <div
    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8"
  >
    <div class="bg-darkUI rounded-lg p-6 border border-border">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-light">Total Studios</h3>
        <div class="bg-primary bg-opacity-20 p-2 rounded-md">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-primary"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path
              d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
            ></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
        </div>
      </div>
      <p class="text-3xl font-bold text-white">3</p>
      <p class="text-sm text-textMuted mt-2">
        All your registered studios
      </p>
    </div>

    <div class="bg-darkUI rounded-lg p-6 border border-border">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-light">
          Monthly Bookings
        </h3>
        <div class="bg-info bg-opacity-20 p-2 rounded-md">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-info"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <rect
              x="3"
              y="4"
              width="18"
              height="18"
              rx="2"
              ry="2"
            ></rect>
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
        <h3 class="text-lg font-semibold text-light">
          Monthly Revenue
        </h3>
        <div class="bg-success bg-opacity-20 p-2 rounded-md">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-success"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <line x1="12" y1="1" x2="12" y2="23"></line>
            <path
              d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
            ></path>
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
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-warning"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
            ></polygon>
          </svg>
        </div>
      </div>
      <p class="text-3xl font-bold text-white">4.8</p>
      <p class="text-sm text-textMuted mt-2">Based on 42 reviews</p>
    </div>
  </div>

  <!-- Recent Activity -->
  <div class="bg-darkUI rounded-lg border border-border p-6 mb-8">
    <h2 class="text-xl font-semibold text-white mb-4">
      Recent Activity
    </h2>
    <div class="overflow-x-auto">
      <table class="w-full min-w-full">
        <thead>
          <tr class="border-b border-border">
            <th
              class="py-3 px-2 text-left text-sm font-medium text-textMuted"
            >
              Event
            </th>
            <th
              class="py-3 px-2 text-left text-sm font-medium text-textMuted"
            >
              Studio
            </th>
            <th
              class="py-3 px-2 text-left text-sm font-medium text-textMuted"
            >
              Date
            </th>
            <th
              class="py-3 px-2 text-left text-sm font-medium text-textMuted"
            >
              Status
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-border">
            <td class="py-3 px-2">
              <div class="flex items-center">
                <div class="bg-info bg-opacity-20 p-1 rounded-md mr-3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-info"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect
                      x="3"
                      y="4"
                      width="18"
                      height="18"
                      rx="2"
                      ry="2"
                    ></rect>
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
              <span
                class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full"
                >Upcoming</span
              >
            </td>
          </tr>
          <tr class="border-b border-border">
            <td class="py-3 px-2">
              <div class="flex items-center">
                <div
                  class="bg-warning bg-opacity-20 p-1 rounded-md mr-3"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-warning"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                    ></polygon>
                  </svg>
                </div>
                <span class="text-light">New Review</span>
              </div>
            </td>
            <td class="py-3 px-2 text-light">Rhythm Room</td>
            <td class="py-3 px-2 text-textMuted">Apr 13, 2025</td>
            <td class="py-3 px-2">
              <span
                class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full"
                >5 Stars</span
              >
            </td>
          </tr>
          <tr class="border-b border-border">
            <td class="py-3 px-2">
              <div class="flex items-center">
                <div
                  class="bg-success bg-opacity-20 p-1 rounded-md mr-3"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-success"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <line x1="12" y1="1" x2="12" y2="23"></line>
                    <path
                      d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                    ></path>
                  </svg>
                </div>
                <span class="text-light">Payment Received</span>
              </div>
            </td>
            <td class="py-3 px-2 text-light">Beat Box Studio</td>
            <td class="py-3 px-2 text-textMuted">Apr 10, 2025</td>
            <td class="py-3 px-2">
              <span
                class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full"
                >$320</span
              >
            </td>
          </tr>
          <tr class="border-b border-border">
            <td class="py-3 px-2">
              <div class="flex items-center">
                <div class="bg-info bg-opacity-20 p-1 rounded-md mr-3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-info"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect
                      x="3"
                      y="4"
                      width="18"
                      height="18"
                      rx="2"
                      ry="2"
                    ></rect>
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
              <span
                class="bg-success bg-opacity-20 text-success text-xs px-2 py-1 rounded-full"
                >Completed</span
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Quick Actions -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-darkUI rounded-lg border border-border p-6">
      <h3 class="text-lg font-semibold text-white mb-4">
        Quick Actions
      </h3>
      <div class="space-y-4">
        <a
          href="#"
          onclick="showTab('my-studios'); showAddStudioModal()"
          class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200"
        >
          <span class="text-light font-medium">Add New Studio</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-primary"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
          </svg>
        </a>
        <a
          href="#"
          onclick="showTab('payments')"
          class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200"
        >
          <span class="text-light font-medium">View Payments</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-primary"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <rect
              x="1"
              y="4"
              width="22"
              height="16"
              rx="2"
              ry="2"
            ></rect>
            <line x1="1" y1="10" x2="23" y2="10"></line>
          </svg>
        </a>
        <a
          href="#"
          onclick="showTab('reviews')"
          class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:bg-opacity-20 rounded-md transition-all duration-200"
        >
          <span class="text-light font-medium">View Reviews</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-primary"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
            ></polygon>
          </svg>
        </a>
      </div>
    </div>

    <div class="bg-darkUI rounded-lg border border-border p-6">
      <h3 class="text-lg font-semibold text-white mb-4">
        Upcoming Bookings
      </h3>
      <div class="space-y-4">
        <div class="p-3 bg-darkAccent rounded-md">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h4 class="text-light font-medium">Soundwave Studios</h4>
              <p class="text-textMuted text-sm">
                April 18, 2025 • 2:00-6:00 PM
              </p>
            </div>
            <span
              class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full"
              >Confirmed</span
            >
          </div>
          <p class="text-textMuted text-sm">
            Alex Johnson • Music Production
          </p>
        </div>
        <div class="p-3 bg-darkAccent rounded-md">
          <div class="flex justify-between items-start mb-2">
            <div>
              <h4 class="text-light font-medium">Rhythm Room</h4>
              <p class="text-textMuted text-sm">
                April 20, 2025 • 10:00 AM-1:00 PM
              </p>
            </div>
            <span
              class="bg-info bg-opacity-20 text-info text-xs px-2 py-1 rounded-full"
              >Confirmed</span
            >
          </div>
          <p class="text-textMuted text-sm">
            Sarah Williams • Podcast Recording
          </p>
        </div>
      </div>
    </div>

    <div class="bg-darkUI rounded-lg border border-border p-6">
      <h3 class="text-lg font-semibold text-white mb-4">
        Latest Reviews
      </h3>
      <div class="space-y-4">
        <div class="p-3 bg-darkAccent rounded-md">
          <div class="flex items-center mb-2">
            <div class="flex text-warning">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
            </div>
            <span class="text-light ml-2">Rhythm Room</span>
          </div>
          <p class="text-textMuted text-sm">
            "Amazing studio with top notch equipment. The acoustics are
            perfect for my podcast recordings."
          </p>
          <p class="text-textMuted text-xs mt-1">
            - Sarah Williams, 2 days ago
          </p>
        </div>
        <div class="p-3 bg-darkAccent rounded-md">
          <div class="flex items-center mb-2">
            <div class="flex text-warning">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                ></polygon>
              </svg>
            </div>
            <span class="text-light ml-2">Beat Box Studio</span>
          </div>
          <p class="text-textMuted text-sm">
            "Great location and professional setup. The staff was very
            helpful and accommodating."
          </p>
          <p class="text-textMuted text-xs mt-1">
            - Mike Thomas, 4 days ago
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
