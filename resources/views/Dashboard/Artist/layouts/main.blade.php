<!-- Main Content with Sidebar -->
<div class="flex flex-col md:flex-row min-h-screen bg-darkBg text-light">
    <!-- Sidebar (Desktop) -->
    <aside class="hidden md:block w-64 bg-darkAccent border-r border-border min-h-screen">
        <div class="p-4">
            <div class="flex items-center justify-center mb-6 mt-4">
                <h1 class="text-xl font-bold text-light">Artist Dashboard</h1>
            </div>
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
                        <a href="#" onclick="showTab('my-bookings')" id="my-bookings-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                            <i class="fas fa-calendar-alt mr-3"></i>
                            My Bookings
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showTab('my-reviews')" id="my-reviews-link"
                            class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                            <i class="fas fa-star mr-3"></i>
                            My Reviews
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
                <p class="text-textMuted mt-2">Welcome back, {{ Auth::user()->profile->full_name }}. Here's an overview
                    of your studio activities.</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Total Bookings</h3>
                        <div class="p-2 rounded-md">
                            <i class="fas fa-calendar-check text-primary text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $MytotalBookings }}</p>
                    <p class="text-sm text-textMuted mt-2">All your studio bookings</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Upcoming</h3>
                        <div class="p-2 rounded-md">
                            <i class="fas fa-hourglass-half text-info text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $upcomingBookings->count() }}</p>
                    <p class="text-sm text-textMuted mt-2">Sessions in the next 30 days</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Reviews Given</h3>
                        <div class="p-2 rounded-md">
                            <i class="fas fa-comment-alt text-success text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">8</p>
                    <p class="text-sm text-textMuted mt-2">Your reviews on studios</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Favorite Studios</h3>
                        <div class="p-2 rounded-md">
                            <i class="fas fa-heart text-danger text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $favoriteStudios->count() }}</p>
                    <p class="text-sm text-textMuted mt-2">Studios you've saved</p>
                </div>
            </div>

            <!-- Recent Bookings -->
            <div
                class="bg-darkUI rounded-lg border border-border p-6 mb-8 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white flex items-center">
                        <i class="fas fa-calendar text-primary mr-3"></i>
                        Upcoming Sessions
                    </h2>
                    <a href="#" onclick="showTab('my-bookings')"
                        class="text-primary hover:text-primaryHover text-sm transition-colors flex items-center">
                        <span>View All Bookings</span>
                        <i class="fas fa-chevron-right ml-1 text-xs"></i>
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-full">
                        <thead>
                            <tr class="border-b border-border">
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Studio</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Date & Time</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Description</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($upcomingBookings as $studio)
                                <tr class="border-b border-border hover:bg-darkAccent/30 transition-colors">
                                    <td class="py-4 px-4 text-light flex items-center">
                                        <i class="fas fa-music text-primary mr-3"></i>
                                        {{ $studio->studio->name }}
                                    </td>
                                    <td class="py-4 px-4 text-light">
                                        <span class="flex items-center">
                                            <i class="far fa-calendar text-textMuted mr-2"></i>
                                            {{ $studio->studio->created_at }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-light">
                                        <span class="flex items-center">
                                            <i class="fas fa-align-left text-textMuted mr-2"></i>
                                            {{ $studio->studio->description }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="text-info text-s flex items-center">
                                            <i class="fas fa-circle-check mr-2"></i>
                                            {{ $studio->status }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions & Recent Activity -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-darkUI rounded-lg border border-border p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Quick Actions</h3>
                    <div class="space-y-4">
                        <a href="#" onclick="showTab('find-studios')"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:text-white rounded-md transition-all duration-200">
                            <span class="text-light font-medium">Find a Studio</span>
                            <i class="fas fa-search text-primary"></i>
                        </a>
                        <a href="#" onclick="showTab('my-bookings')"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:text-white rounded-md transition-all duration-200">
                            <span class="text-light font-medium">Check My Bookings</span>
                            <i class="fas fa-calendar-alt text-primary"></i>
                        </a>
                        <a href="#" onclick="showTab('my-reviews')"
                            class="flex items-center justify-between p-3 bg-darkAccent hover:bg-primary hover:text-white rounded-md transition-all duration-200">
                            <span class="text-light font-medium">Write a Review</span>
                            <i class="fas fa-star text-primary"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-darkUI rounded-lg border border-border p-6 md:col-span-2">
                    <h3 class="text-lg font-semibold text-white mb-4">Recently Viewed Studios</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($recentlyViewedStudios as $studio)
                            <div class="p-3 bg-darkAccent rounded-md flex">
                                <div class="w-16 h-16 rounded-md overflow-hidden mr-3 flex-shrink-0">
                                    <img src="/api/placeholder/64/64" alt="Studio"
                                        class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-light font-medium">{{ $studio->studio->name }}</h4>
                                    <div class="flex text-warning text-xs my-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="text-textMuted ml-1">{{ $studio->studio->rating }}</span>
                                    </div>
                                    <p class="text-textMuted text-xs">{{ $studio->studio->description }} •
                                        ${{ $studio->studio->price }}/hr</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- My Bookings Section -->
        <section id="my-bookings" class="hidden animate-fade-in">

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">My Bookings History</h1>
                <p class="text-textMuted mt-2">View all your studio booking history</p>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div onclick="window.location.href='{{ route('explore') }}'"
                    class="bg-darkUI p-6 rounded-lg border border-border hover:border-primary transition-all duration-200 cursor-pointer">
                    <i class="fas fa-search text-primary text-2xl mb-4"></i>
                    <h4 class="text-light font-medium mb-2">Find Studios</h4>
                    <p class="text-textMuted text-sm">Browse our curated list of professional recording spaces</p>
                </div>
                <div
                    class="bg-darkUI p-6 rounded-lg border border-border hover:border-primary transition-all duration-200 cursor-pointer">
                    <i class="fas fa-star text-warning text-2xl mb-4"></i>
                    <h4 class="text-light font-medium mb-2">Top Rated</h4>
                    <p class="text-textMuted text-sm">Discover highly rated studios in your area</p>
                </div>
            </div>

            <!-- Bookings Table -->
            <div class="bg-darkUI rounded-lg border border-border p-6 mt-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white">Recent Bookings</h2>
                    <div class="flex gap-2">
                        <button class="text-textMuted hover:text-light px-3 py-1 rounded-md bg-darkAccent">
                            <i class="fas fa-filter mr-2"></i>Filter
                        </button>
                        <button class="text-textMuted hover:text-light px-3 py-1 rounded-md bg-darkAccent">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-full">
                        <thead>
                            <tr class="border-b border-border">
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Studio Name</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Booking Date</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Time Slot</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Price</th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-textMuted">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($myBookings as $booking)
                                <tr class="border-b border-border hover:bg-darkAccent/30 transition-colors">
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 h-8 rounded bg-primary/10 flex items-center justify-center mr-3">
                                                <i class="fas fa-music text-primary"></i>
                                            </div>
                                            <div>
                                                <p class="text-light font-medium">{{ $booking->studio->name }}</p>
                                                <p class="text-xs text-textMuted">{{ $booking->studio->location }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center text-light">
                                            <i class="far fa-calendar text-primary mr-2"></i>
                                            {{ $booking->start_date }}
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center text-light">
                                            <i class="far fa-clock text-primary mr-2"></i>
                                            {{ $booking->end_date }}
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="text-light font-medium">${{ $booking->total_price }}</div>
                                    </td>
                                    <td class="py-4 px-4">
                                        @if ($booking->status === 'confirmed')
                                            <span
                                                class="px-2 py-1 bg-success/20 text-success text-xs rounded-full">Confirmed</span>
                                        @elseif($booking->status === 'cancelled')
                                            <span
                                                class="px-2 py-1 bg-danger/20 text-danger text-xs rounded-full">Cancelled</span>
                                        @elseif($booking->status === 'pending')
                                            <span
                                                class="px-2 py-1 bg-warning/20 text-warning text-xs rounded-full">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="text-center py-8">
                                            <i class="fas fa-calendar-times text-textMuted text-4xl mb-4"></i>
                                            <h3 class="text-xl font-semibold text-light mb-2">No Bookings Found</h3>
                                            <p class="text-textMuted mb-4">Start your musical journey by booking your
                                                first studio session</p>
                                            <button onclick="showTab('find-studios')"
                                                class="bg-primary hover:bg-primaryHover text-white px-6 py-2 rounded-md transition-all duration-200">
                                                Find Studios
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- My Reviews Section -->
        <section id="my-reviews" class="hidden animate-fade-in">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">My Reviews</h1>
                <p class="text-textMuted mt-2">View and manage reviews for studios you've used</p>
            </div>

            <!-- Review Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Total Reviews</h3>
                        <div class="p-2 rounded-md bg-primary/10">
                            <i class="fas fa-comment-dots text-primary text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ $myReviews->count() }}</p>
                    <p class="text-sm text-textMuted mt-2">Reviews you've written</p>
                </div>

                <div class="bg-darkUI rounded-lg p-6 border border-border">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-light">Average Rating</h3>
                        <div class="p-2 rounded-md bg-warning/10">
                            <i class="fas fa-star text-warning text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-white">{{ number_format($myReviews->avg('rating'), 1) }}</p>
                    <p class="text-sm text-textMuted mt-2">Your average studio rating</p>
                </div>
            </div>


            <!-- My Past Reviews -->
            <div class="bg-darkUI rounded-lg border border-border p-6">
                <h3 class="text-xl font-semibold text-white mb-6">My Past Reviews</h3>

                <div class="space-y-8">
                    @forelse($myReviews as $review)
                        <div class="border-b border-border pb-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 rounded-md overflow-hidden mr-4">
                                        @if ($review->studio->photos->isNotEmpty())
                                            <img src="{{ asset('storage/' . $review->studio->photos->first()->image_path) }}"
                                                alt="{{ $studio->name }}" class="w-full h-48 object-cover">
                                        @else
                                            <img src="{{ 'no image' }}" alt="Default Studio Image"
                                                class="w-full h-48 object-cover">
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-medium text-white">{{ $review->studio->name }}</h4>
                                        <div id="review-display-{{ $review->id }}">
                                            <p class="text-md font-medium text-white">{{ $review->comment }}</p>
                                            <div class="flex items-center text-warning text-sm mt-1">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <i class="fas fa-star"></i>
                                                    @elseif($i - 0.5 <= $review->rating)
                                                        <i class="fas fa-star-half-alt"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                                <span
                                                    class="text-light ml-2">({{ number_format($review->rating, 1) }})</span>
                                            </div>
                                        </div>

                                        <div id="review-edit-{{ $review->id }}" class="hidden">
                                            <form action="{{ route('editMyReview', $review->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <textarea name="comment" class="w-full bg-darkAccent text-white rounded-md p-2 mb-2">{{ $review->comment }}</textarea>
                                                <div class="flex items-center mb-2">
                                                    <select name="rating"
                                                        class="bg-darkAccent text-white rounded-md p-2">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <option value="{{ $i }}"
                                                                {{ $review->rating == $i ? 'selected' : '' }}>
                                                                {{ $i }} stars</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="submit"
                                                        class="bg-primary text-white px-3 py-1 rounded-md">Save</button>
                                                    <button type="button"
                                                        onclick="toggleEdit('{{ $review->id }}')"
                                                        class="bg-darkAccent text-textMuted px-3 py-1 rounded-md">Cancel</button>
                                                </div>
                                            </form>
                                        </div>

                                        <p class="text-textMuted text-sm mt-1">Reviewed on
                                            {{ $review->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 mt-4 md:mt-0">
                                    <button onclick="toggleEdit('{{ $review->id }}')"
                                        class="text-textMuted hover:text-light py-2 px-3 rounded-md bg-darkAccent hover:bg-border transition-all duration-200">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>

                                    <script>
                                        function toggleEdit(reviewId) {
                                            const displayElement = document.getElementById(`review-display-${reviewId}`);
                                            const editElement = document.getElementById(`review-edit-${reviewId}`);

                                            if (displayElement.classList.contains('hidden')) {
                                                displayElement.classList.remove('hidden');
                                                editElement.classList.add('hidden');
                                            } else {
                                                displayElement.classList.add('hidden');
                                                editElement.classList.remove('hidden');
                                            }
                                        }
                                    </script>

                                    <form action="{{ route('deleteMyReview', $review->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this review?')"
                                            class="text-textMuted hover:text-danger py-2 px-3 rounded-md bg-darkAccent hover:bg-border transition-all duration-200">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <p class="text-light">{{ $review->content }}</p>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <i class="fas fa-comments text-textMuted text-4xl mb-4"></i>
                            <p class="text-textMuted">You haven't written any reviews yet</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
</div>
