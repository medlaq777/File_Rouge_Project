<!-- Main Content with Sidebar -->
<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Sidebar (Desktop) -->
    <aside class="hidden md:block w-64 bg-darkAccent border-r border-border min-h-screen">
        <div class="p-4">
            <nav class="mt-8">
                <ul class="space-y-2">
                    <li>
                        <a href="#" onclick="showTab('dashboard')" id="dashboard-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200 sidebar-active">
                            <i class="fas fa-th-large mr-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showTab('my-studios')" id="my-studios-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                            <i class="fas fa-home mr-3"></i>
                            My Studios
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showTab('payments')" id="payments-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                            <i class="fas fa-credit-card mr-3"></i>
                            Payments
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showTab('reviews')" id="reviews-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                            <i class="fas fa-star mr-3"></i>
                            Reviews
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
                <p class="text-textMuted mt-2">Welcome back, {{ Auth::user()->profile->full_name }} Here's an overview
                    of your studio activity.</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Total Studios</h3>
                        <div class=" p-2 rounded-md">
                            <i class="fas fa-building text-danger text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $studios->count() }}</p>
                    <p class="text-sm text-textMuted mt-2">All your registered studios</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Monthly Bookings</h3>
                        <div class=" p-2 rounded-md">
                            <i class="fas fa-calendar-alt text-info text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">24</p>
                    <p class="text-sm text-textMuted mt-2">+8% from last month</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Monthly Revenue</h3>
                        <div class=" p-2 rounded-md">
                            <i class="fas fa-dollar-sign text-success text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">$3,240</p>
                    <p class="text-sm text-textMuted mt-2">+12% from last month</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Average Rating</h3>
                        <div class=" p-2 rounded-md">
                            <i class="fas fa-star text-warning text-2xl"></i>
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
                                        <div class="p-1 rounded-md mr-3">
                                            <i class="fas fa-calendar-alt text-info"></i>
                                        </div>
                                        <span class="text-light">New Booking</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2 text-light">Soundwave Studios</td>
                                <td class="py-3 px-2 text-textMuted">Apr 14, 2025</td>
                                <td class="py-3 px-2">
                                    <span class="text-warning text-xs px-2 py-1 rounded-full">Upcoming</span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2">
                                    <div class="flex items-center">
                                        <div class="p-1 rounded-md mr-3">
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <span class="text-light">New Review</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2 text-light">Rhythm Room</td>
                                <td class="py-3 px-2 text-textMuted">Apr 13, 2025</td>
                                <td class="py-3 px-2">
                                    <span class="text-warning text-xs px-2 py-1 rounded-full">5 Stars</span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2">
                                    <div class="flex items-center">
                                        <div class="p-1 rounded-md mr-3">
                                            <i class="fas fa-dollar-sign text-success"></i>
                                        </div>
                                        <span class="text-light">Payment Received</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2 text-light">Beat Box Studio</td>
                                <td class="py-3 px-2 text-textMuted">Apr 10, 2025</td>
                                <td class="py-3 px-2">
                                    <span class="text-warning text-xs px-2 py-1 rounded-full">$320</span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2">
                                    <div class="flex items-center">
                                        <div class="p-1 rounded-md mr-3">
                                            <i class="fas fa-check-circle text-danger"></i>
                                        </div>
                                        <span class="text-light">Completed Session</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2 text-light">Soundwave Studios</td>
                                <td class="py-3 px-2 text-textMuted">Apr 5, 2025</td>
                                <td class="py-3 px-2">
                                    <span class="text-warning text-xs px-2 py-1 rounded-full">Completed</span>
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
                        <a href="#" onclick="showTab('my-studios'); showAddStudioModal()"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover: rounded-md transition-all duration-200">
                            <span class="text-light font-medium">Add New Studio</span>
                            <i class="fas fa-plus-circle text-danger"></i>
                        </a>
                        <a href="#" onclick="showTab('payments')"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover: rounded-md transition-all duration-200">
                            <span class="text-light font-medium">View Payments</span>
                            <i class="fas fa-credit-card text-danger"></i>
                        </a>
                        <a href="#" onclick="showTab('reviews')"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover: rounded-md transition-all duration-200">
                            <span class="text-light font-medium">View Reviews</span>
                            <i class="fas fa-star text-danger"></i>
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
                                <span class="text-info text-xs px-2 py-1 rounded-full">Confirmed</span>
                            </div>
                            <p class="text-textMuted text-sm">Alex Johnson • Music Production</p>
                        </div>
                        <div class="p-3 bg-darkAccent rounded-md">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <h4 class="text-light font-medium">Rhythm Room</h4>
                                    <p class="text-textMuted text-sm">April 20, 2025 • 10:00 AM-1:00 PM</p>
                                </div>
                                <span class="text-info text-xs px-2 py-1 rounded-full">Confirmed</span>
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
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-light ml-2">Rhythm Room</span>
                            </div>
                            <p class="text-textMuted text-sm">"Amazing studio with top notch equipment. The acoustics
                                are perfect for my podcast recordings."</p>
                            <p class="text-textMuted text-xs mt-1">- Sarah Williams, 2 days ago</p>
                        </div>
                        <div class="p-3 bg-darkAccent rounded-md">
                            <div class="flex items-center mb-2">
                                <div class="flex text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-light ml-2">Beat Box Studio</span>
                            </div>
                            <p class="text-textMuted text-sm">"Great location and professional setup. The staff was
                                very helpful and accommodating."</p>
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
                <button onclick="showAddStudioModal()"
                    class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200 flex items-center">
                    <i class="fas fa-plus-circle h-5 w-5 mr-2"></i>
                    Add New Studio
                </button>
            </div>

            <!-- Studio Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($studios as $studio)
                    <div
                        class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                        <!-- Studio Image with Overlay -->
                        <div class="relative">
                            <img src="{{ asset('storage/' . $studio->images->first()->image_path) }}"
                                alt="{{ $studio->name }}" class="w-full h-48 object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-darkAccent bg-opacity-80 text-light text-xs px-2 py-1 rounded-full">
                                    {{ $studio->available ? 'Available' : 'Unavailable' }}
                                </span>
                            </div>
                        </div>

                        <!-- Studio Details -->
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-white">{{ $studio->name }}</h3>
                                <div class="text-danger">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div>

                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-textMuted">
                                    <i class="fas fa-map-marker-alt w-5"></i>
                                    <span>{{ $studio->location ?? 'No location set' }}</span>
                                </div>
                                <div class="flex items-center text-sm text-textMuted">
                                    <i class="fas fa-music w-5"></i>
                                    <span>{{ $studio->type ?? 'No type specified' }}</span>
                                </div>
                                <div class="flex items-center text-sm text-textMuted">
                                    <i class="fas fa-info-circle w-5"></i>
                                    <span>{{ $studio->status ?? ($studio->available ? 'Available' : 'Unavailable') }}</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-2 mt-4">
                                <button type="button"
                                    onclick="showEditStudioModal(
                                    {{ $studio->id }},
                                     '{{ $studio->name }}',
                                     '{{ $studio->description }}',
                                     '{{ $studio->price }}',
                                     '{{ $studio->location }}',
                                     '{{ $studio->address }}',
                                     '{{ $studio->images->first()->image_path ?? '' }}'
                                     )"
                                    class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                    <i class="fas fa-edit mr-2"></i>
                                    Edit
                                </button>
                                <button onclick="deleteStudio({{ $studio->id }})"
                                    class="flex-1 bg-darkAccent hover:bg-danger text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                    <i class="fas fa-trash mr-2"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                    <span class="text-success text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle"></i> Completed
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2 text-light">Apr 8, 2025</td>
                                <td class="py-3 px-2 text-light">Sarah Williams Booking</td>
                                <td class="py-3 px-2 text-light">Rhythm Room</td>
                                <td class="py-3 px-2 text-light">$195</td>
                                <td class="py-3 px-2">
                                    <span class="text-success text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle"></i> Completed
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2 text-light">Apr 5, 2025</td>
                                <td class="py-3 px-2 text-light">Alex Johnson Booking</td>
                                <td class="py-3 px-2 text-light">Soundwave Studios</td>
                                <td class="py-3 px-2 text-light">$320</td>
                                <td class="py-3 px-2">
                                    <span class="text-success text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle"></i> Completed
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2 text-light">Apr 2, 2025</td>
                                <td class="py-3 px-2 text-light">James Wilson Booking</td>
                                <td class="py-3 px-2 text-light">Beat Box Studio</td>
                                <td class="py-3 px-2 text-light">$285</td>
                                <td class="py-3 px-2">
                                    <span class="text-success text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle"></i> Completed
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-b border-border">
                                <td class="py-3 px-2 text-light">Mar 30, 2025</td>
                                <td class="py-3 px-2 text-light">Emma Davis Booking</td>
                                <td class="py-3 px-2 text-light">Rhythm Room</td>
                                <td class="py-3 px-2 text-light">$195</td>
                                <td class="py-3 px-2">
                                    <span class="text-success text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle"></i> Completed
                                    </span>
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
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
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
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-textMuted ml-2">4.9 (28 reviews)</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-light">Rhythm Room</span>
                            <div class="flex items-center">
                                <div class="flex text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-textMuted ml-2">4.8 (14 reviews)</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-light">Beat Box Studio</span>
                            <div class="flex items-center">
                                <div class="flex text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
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
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
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
                        <p class="text-light">"Amazing studio with top notch equipment. The acoustics are perfect for
                            my podcast recordings. The staff was incredibly helpful in getting me set up and showing me
                            how to use the equipment."</p>
                    </div>

                    <!-- Review 2 -->
                    <div class="p-4 bg-darkAccent rounded-lg">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <div class="flex items-center">
                                    <div class="flex text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
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
                        <p class="text-light">"Great location and professional setup. The staff was very helpful and
                            accommodating. The mixing equipment was top of the line and allowed me to get the exact
                            sound I was looking for. Will definitely be back!"</p>
                    </div>

                    <!-- Review 3 -->
                    <div class="p-4 bg-darkAccent rounded-lg">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <div class="flex items-center">
                                    <div class="flex text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
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
                        <p class="text-light">"The studio had everything I needed for my recording session. The sound
                            isolation was excellent and the monitoring system was crystal clear. I particularly
                            appreciated the comfortable lounge area for breaks."</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
