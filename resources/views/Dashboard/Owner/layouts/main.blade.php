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
                    <p class="text-3xl font-bold text-white">{{ $count }}</p>
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
                    <p class="text-3xl font-bold text-white">${{ $thisMonthIncome }}</p>
                    <p class="text-sm text-textMuted mt-2">+12% from last month</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Average Rating</h3>
                        <div class=" p-2 rounded-md">
                            <i class="fas fa-star text-warning text-2xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $averageRating }}</p>
                    <p class="text-sm text-textMuted mt-2">Based on 42 reviews</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-darkUI rounded-lg border border-border p-6 mb-8 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white flex items-center">
                        <i class="fas fa-history text-primary mr-3"></i>
                        Recent Activity
                    </h2>
                    <a href="#" class="text-primary hover:text-primaryHover text-sm transition-colors flex items-center">
                        <span>View All</span>
                        <i class="fas fa-chevron-right ml-1 text-xs"></i>
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-full">
                        <thead>
                            <tr class="border-b border-border">
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Studio</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentActivity as $activity)
                                <tr class="border-b border-border hover:bg-darkAccent/30 transition-colors">
                                    <td class="py-4 px-4 text-light flex items-center">
                                        <i class="fas fa-studio-microphone text-danger mr-3"></i>
                                        {{ $activity['studio_name'] }}
                                    </td>

                                    <td class="py-4 px-4 text-light">
                                        <span class="flex items-center">
                                            <i class="far fa-clock text-textMuted mr-2"></i>
                                            {{ $activity['created_at'] }}
                                        </span>
                                    </td>

                                </tr>
                            @endforeach
                            @if(count($recentActivity) === 0)
                                <tr>
                                    <td colspan="4" class="py-6 text-center text-textMuted">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        No recent activity found
                                    </td>
                                </tr>
                            @endif
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
                    class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200 flex items-center cursor-pointer">
                    <i class="fas fa-plus-circle h-5 w-5 mr-2"></i>
                    Add New Studio
                </button>
            </div>

            <!-- Studio Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($myStudios as $studio)
                    <div
                        class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="relative">
                            @if (!empty($studio->photos->first()->image_path))
                                <img src="{{ asset('storage/' . $studio->photos->first()->image_path) }}"
                                    alt="{{ $studio->name }}" class="w-full h-48 object-cover">
                            @else
                                <img src="{{ 'no image' }}" alt="Default Studio Image"
                                    class="w-full h-48 object-cover">
                            @endif
                            <div class="absolute top-3 right-3">
                                @php
                                    $isAvailable =
                                        isset($studio->availabilities->first()->status) &&
                                        strtolower($studio->availabilities->first()->status) === 'available';
                                    $statusColor = $isAvailable ? 'text-success' : 'text-danger';
                                    $icon = $isAvailable ? 'fa-circle-check' : 'fa-circle-xmark';
                                    $labelText = isset($studio->availabilities->first()->status)
                                        ? $studio->availabilities->first()->status
                                        : 'Unavailable';
                                @endphp
                                <span
                                    class="shadow-md text-xs font-medium px-3 py-1.5 rounded-full flex items-center {{ $statusColor }} pulse-led">
                                    <i class="fas {{ $icon }} text-sm mr-1.5"></i>
                                    {{ $labelText }}
                                </span>
                            </div>

                            <style>
                            </style>
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
                                    <span>{{ $studioAvailability }}</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-2 mt-4">
                                {{-- <button type="button"
                                    onclick="showEditStudioModal(
                                        '{{ $studio->id }}',
                                        '{{ $studio->name }}',
                                        '{{ $studio->description }}',
                                        '{{ $studio->price }}',
                                        '{{ $studio->location }}',
                                        '{{ $studio->category->name }}',
                                        '{{ $studio->Availabilities->first()->status }}',
                                        '{{ $studio->features->pluck('id')->implode(',') }}',
                                        '{{ $studio->rating }}',
                                        '{{ $studio->photos->first()->image_path }}'
                                    )"
                                    class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                    <i class="fas fa-edit mr-2"></i>
                                    Edit
                                </button> --}}
                                <form action="{{ route('delete.studio', $id = $studio->id) }}" method="POST"
                                    class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full bg-darkAccent hover:bg-danger text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                        <i class="fas fa-trash mr-2"></i>
                                        Delete
                                    </button>
                                </form>
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
                    <p class="text-3xl font-bold text-white">${{ $myTotalIncome }}</p>
                    <p class="text-sm text-textMuted mt-2">Lifetime earnings from all studios</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <h3 class="text-lg font-semibold text-light mb-4">This Month</h3>
                    <p class="text-3xl font-bold text-white">${{ $thisMonthIncome }}</p>
                    <p class="text-sm text-success mt-2">+12% from last month</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <h3 class="text-lg font-semibold text-light mb-4">Pending</h3>
                    <p class="text-3xl font-bold text-white">${{ $pendingPayment }}</p>
                    <p class="text-sm text-textMuted mt-2">From 4 upcoming bookings</p>
                </div>
            </div>

            <!-- Payment History -->
            <div class="bg-darkUI rounded-lg border border-border p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white">Payment History</h2>
                    <div class="flex space-x-2">
                        <select id="studio-filter" name="studio-filter"
                            class="bg-inputBg text-textMuted border border-border rounded-md p-2 text-sm">
                            <option>All Studios</option>
                            @foreach ($myStudios as $studio)
                                <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                            @endforeach
                        </select>
                        <select id="date-range-filter" name="date-range-filter"
                            class="bg-inputBg text-textMuted border border-border rounded-md p-2 text-sm">
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
                                <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Full Name</th>
                                <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Date</th>
                                <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Studio</th>
                                <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Amount</th>
                                <th class="py-3 px-2 text-left text-sm font-medium text-textMuted">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paymentHistories as $payment)
                                <tr class="border-b border-border">
                                    <td class="py-3 px-2 text-light">
                                        {{ $payment->booking->artist->profile->full_name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-2 text-light">
                                        {{ $payment->payment_date->format('M d, Y') }}
                                    </td>
                                    <td class="py-3 px-2 text-light">
                                        {{ $payment->booking->studio->name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-2 text-light">
                                        ${{ number_format($payment->total_price, 2) }}
                                    </td>
                                    <td class="py-3 px-2">
                                        <span class="text-success text-xs px-2 py-1 rounded-full">
                                            <i class="fas fa-check-circle"></i> {{ ucfirst($payment->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
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
                <div class="mr-6 relative">
                <div class="absolute -top-3 -right-3 bg-danger/20 w-20 h-20 rounded-full blur-xl z-0"></div>
                <h3 class="text-lg font-semibold text-light mb-4 flex items-center">
                    <i class="fas fa-chart-line text-danger mr-2"></i>
                    Overall Rating
                </h3>
                <div class="flex items-center mb-3">
                    <div class="relative">
                    <div class="w-16 h-16 rounded-full bg-darkBg border-2 border-warning flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">{{ number_format($averageRating, 1) }}</span>
                    </div>
                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-warning rounded-full flex items-center justify-center">
                        <i class="fas fa-star text-xs text-black"></i>
                    </div>
                    </div>
                    <div class="ml-4">
                    <div class="flex text-warning mb-1">
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= floor($averageRating))
                            <i class="fas fa-star"></i>
                        @elseif ($i - 0.5 <= $averageRating)
                            <i class="fas fa-star-half-alt"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                        @endfor
                    </div>
                    <p class="text-sm text-textMuted flex items-center">
                        <i class="fas fa-check-circle text-success mr-1"></i>
                        From <span class="mx-1 font-semibold text-light">{{ count($studiosReviews) }}</span> verified reviews
                    </p>
                    </div>
                </div>
                </div>
                <div class="flex-1 space-y-3">
                @php
                    $totalReviews = count($studiosReviews);
                    $ratingCounts = [0, 0, 0, 0, 0, 0]; // Index 1-5 for star ratings

                    foreach ($studiosReviews as $review) {
                    $rating = round($review->rating);
                    if ($rating >= 1 && $rating <= 5) {
                        $ratingCounts[$rating]++;
                    }
                    }

                    // Calculate percentages
                    $percentages = [0, 0, 0, 0, 0, 0];
                    for ($i = 1; $i <= 5; $i++) {
                    $percentages[$i] = $totalReviews > 0 ? round(($ratingCounts[$i] / $totalReviews) * 100) : 0;
                    }
                @endphp

                @for ($rating = 5; $rating >= 1; $rating--)
                    <div class="flex items-center group">
                    <span class="text-xs font-medium text-light w-6">{{ $rating }}★</span>
                    <div class="flex-1 h-3 mx-2 rounded-full bg-darkBg overflow-hidden shadow-inner">
                        <div class="bg-warning h-full rounded-full transition-all duration-500 ease-out"
                         style="width: {{ $percentages[$rating] }}%"></div>
                    </div>
                    <span class="text-xs font-medium text-light w-10 text-right">
                        {{ $percentages[$rating] }}%
                        <span class="text-xs text-textMuted">({{ $ratingCounts[$rating] }})</span>
                    </span>
                    </div>
                @endfor
                </div>
            </div>

            <div class="bg-darkUI rounded-lg p-6 border border-border">
                <h3 class="text-lg font-semibold text-light mb-4">Studio Ratings</h3>
                @foreach($myStudios as $studio)
                <div class="flex items-center justify-between mb-4">
                    <span class="text-light">{{ $studio->name }}</span>
                    <div class="flex items-center">
                    <div class="flex text-warning">
                        @for ($i = 0; $i < round($studio->rating); $i++)
                        <i class="fas fa-star"></i>
                        @endfor
                        @if (round($studio->rating) < 5)
                        <i class="fas fa-star-half-alt"></i>
                        @endif
                    </div>
                    <span class="text-textMuted ml-2">{{ round($studio->rating, 1) }} ({{ $studio->reviews_count }} reviews)</span>
                    </div>
                </div>
                @endforeach
            </div>
            </div>

            <!-- Refactored Review List Section -->
            <div class="bg-darkUI rounded-lg border border-border p-6 overflow-hidden">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-white relative inline-block">
                Recent Reviews
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-warning opacity-70"></span>
                </h2>
                <div class="relative">
                <select id="review-filter" name="review-filter"
                    class="bg-inputBg text-textMuted border border-border rounded-md pl-3 pr-8 py-2 text-sm appearance-none cursor-pointer hover:bg-opacity-80 transition-all focus:outline-none focus:ring-1 focus:ring-warning">
                    <option>All Reviews</option>
                    @foreach($myStudios as $studio)
                    <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                    @endforeach
                </select>
                <div
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none text-textMuted">
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
                </div>
            </div>
            <div class="space-y-6">
                @foreach ($recentReviews as $review)
                <div class="bg-darkAccent rounded-lg p-4 flex items-start">
                    <div class="flex text-warning mr-3">
                    @for ($i = 0; $i < round($review['rating']); $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                    @if (round($review['rating']) < 5)
                        <i class="fas fa-star-half-alt"></i>
                    @endif
                    </div>
                    <div>
                    <h4 class="text-light font-semibold">{{ $review['studio_name'] }}</h4>
                    <p class="text-textMuted text-sm">{{ $review['comment'] }}</p>
                    <p class="text-textMuted text-xs mt-1">
                        {{ $review['created_at'] }}
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filter = document.getElementById('review-filter');
                const reviewItems = document.querySelectorAll('.bg-darkAccent.rounded-lg.overflow-hidden');

                filter.addEventListener('change', function() {
                const selected = this.value;

                reviewItems.forEach(item => {
                    const studioName = item.querySelector('.fas.fa-music').nextSibling.textContent
                    .trim();

                    if (selected === 'All Studios' || studioName === selected) {
                    item.style.display = 'block';
                    } else {
                    item.style.display = 'none';
                    }
                });
                });
            });
            </script>
