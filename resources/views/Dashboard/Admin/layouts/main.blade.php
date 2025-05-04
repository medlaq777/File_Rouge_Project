    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar (Desktop) -->
        <aside class="w-64 bg-darkAccent border-r border-border min-h-screen">
            <div class="p-4">
                <nav class="mt-8">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" onclick="showTab('dashboard')" id="dashboard-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200 sidebar-active">
                                <i class="fas fa-th-large mr-3"></i>
                                Overview
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="showTab('users')" id="users-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                                <i class="fas fa-users mr-3"></i>
                                Users
                                <span class="sidebar-badge">24</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="showTab('studios')" id="studios-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                                <i class="fas fa-building mr-3"></i>
                                Studios
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="showTab('categories')" id="categories-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                                <i class="fas fa-tags mr-3"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="showTab('features')" id="features-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                                <i class="fas fa-list-check mr-3"></i>
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="showTab('bookings')" id="bookings-link"
                                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                                <i class="fas fa-calendar-alt mr-3"></i>
                                Bookings
                                <span class="sidebar-badge">8</span>
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
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Admin Dashboard</h1>
                    </div>
                    <div class="flex space-x-3">
                        <div class="bg-darkUI border border-border rounded-md px-4 py-2 flex items-center">
                            <i class="fas fa-calendar-alt text-textMuted mr-2"></i>
                            <span class="text-light">{{ now() }}</span>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-light">Total Users</h3>
                            <div class="p-2 rounded-md">
                                <i class="fas fa-users text-primary text-xl"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-white">{{ $user['getAllUsers']->count() }}</p>
                    </div>

                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-light">Total Studios</h3>
                            <div class="p-2 rounded-md">
                                <i class="fas fa-building text-danger text-xl"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-white">{{ $user['getAllStudios']->count() }}</p>
                    </div>

                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-light">Monthly Bookings</h3>
                            <div class="p-2 rounded-md">
                                <i class="fas fa-calendar-check text-info text-xl"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-white">{{ $user['mounthlyBooking'] }}</p>
                    </div>

                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-light">Monthly Revenue</h3>
                            <div class="p-2 rounded-md">
                                <i class="fas fa-dollar-sign text-success text-xl"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-white">{{ $user['mounthlyRevenue'] }}</p>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Revenue Chart -->
                    <div class="bg-darkUI rounded-lg border border-border p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-white">Revenue Overview</h2>
                            <div class="flex space-x-2">
                                <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Last 30 Days
                                </button>
                                <button
                                    class="bg-darkAccent text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Last 7 Days
                                </button>
                                <button
                                    class="bg-darkAccent text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Today
                                </button>
                            </div>
                        </div>
                        <canvas id="revenueChart" class="h-64"></canvas>
                    </div>
                    <!-- Bookings Chart -->
                    <div class="bg-darkUI rounded-lg border border-border p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-white">Bookings Overview</h2>
                            <div class="flex space-x-2">
                                <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Last 30 Days
                                </button>
                                <button
                                    class="bg-darkAccent text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Last 7 Days
                                </button>
                                <button
                                    class="bg-darkAccent text-white py-2 px-4 rounded-md transition-all duration-200">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Today
                                </button>
                            </div>
                        </div>
                        <canvas id="bookingsChart" class="h-64"></canvas>
                    </div>
                </div>
                <!-- Recent Activity -->
                <div class="bg-darkUI rounded-lg border border-border p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Recent Activity</h2>
                    @if ($user['allActivity']->isNotEmpty())
                        @foreach ($user['allActivity'] as $activity)
                            <div class="flex items-start mb-4 bg-opacity-50 bg-gray-800 rounded-lg p-4">
                                <div class="flex-shrink-0">
                                    @if ($activity['type'] === 'Payment')
                                        <div class="bg-success rounded-full p-3">
                                            <i class="fas fa-dollar-sign text-white"></i>
                                        </div>
                                    @else
                                        <div class="bg-primary rounded-full p-3">
                                            <i class="fas fa-clock text-white"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="ml-4 flex-grow">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="text-white font-medium">
                                                {{ $activity['type'] }}
                                                <span
                                                    class="text-success ml-2">${{ number_format(json_decode($activity['data'], true)['total_price'] ?? 0, 2) }}</span>
                                            </p>
                                            <div class="mt-1 text-sm">
                                                <span class="text-textMuted">Transaction ID: </span>
                                                <span
                                                    class="text-white">{{ data_get($activity['data'], 'transaction_id') }}</span>
                                            </div>
                                            <div class="text-sm">
                                                <span class="text-textMuted">Payment Method: </span>
                                                <span
                                                    class="text-white capitalize">{{ data_get($activity['data'], 'method') }}</span>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span
                                                class="px-2 py-1 text-xs font-medium rounded-full {{ json_decode($activity['data'], true)['status'] === 'Success' ? 'bg-success' : 'bg-danger' }} text-white">
                                                {{ json_decode($activity['data'], true)['status'] }}
                                            </span>
                                            <div class="text-sm text-textMuted mt-1">
                                                {{ date('F j, Y, g:i a', strtotime(json_decode($activity['data'], true)['created_at'])) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-6">
                            <i class="fas fa-inbox text-4xl text-textMuted mb-2"></i>
                            <p class="text-textMuted">No recent activity to display.</p>
                        </div>
                    @endif
                </div>
            </section>
            <!-- Users Section -->
            <section id="users" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Users</h1>
                        <p class="text-textMuted mt-2">Manage users and their permissions</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        Add User
                    </button>
                </div>

                <!-- Users Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-10 w-10 rounded-full mr-4" src="https://via.placeholder.com/40"
                                            alt="User Avatar">
                                        <div>
                                            <div class="text-sm font-medium text-white">John Doe</div>
                                            <div class="text-sm text-textMuted">Joined on Jan 1, 2025</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">john.doe@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-primary text-white">Admin</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-10 w-10 rounded-full mr-4" src="https://via.placeholder.com/40"
                                            alt="User Avatar">
                                        <div>
                                            <div class="text-sm font-medium text-white">Jane Smith</div>
                                            <div class="text-sm text-textMuted">Joined on Feb 15, 2025</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">jane.smith@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-info text-white">User</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-10 w-10 rounded-full mr-4" src="https://via.placeholder.com/40"
                                            alt="User Avatar">
                                        <div>
                                            <div class="text-sm font-medium text-white">Mike Johnson</div>
                                            <div class="text-sm text-textMuted">Joined on Mar 10, 2025</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">mike.johnson@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-warning text-white">Moderator</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-danger text-white">Inactive</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 3 of 24 users
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            1
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            2
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            3
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
            <!-- Studios Section -->
            <section id="studios" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Studios</h1>
                        <p class="text-textMuted mt-2">Manage studios and their details</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        Add Studio
                    </button>
                </div>

                <!-- Studios Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Studio Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Location
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Owner
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio A</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">123 Main St, City</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">John Doe</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-primary text-white">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio B</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">456 Elm St, City</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Jane Smith</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-info text-white">Pending</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio C</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">789 Oak St, City</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Mike Johnson</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-danger text-white">Inactive</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 3 of 12 studios
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            1
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            2
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            3
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
            <!-- Category Section -->
            <section id="categories" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Categories</h1>
                        <p class="text-textMuted mt-2">Manage categories and their details</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        Add Category
                    </button>
                </div>

                <!-- Categories Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Category Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Category A</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Description for Category A</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Category B</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Description for Category B</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Category C</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Description for Category C</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 3 of 6 categories
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            1
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            2
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            3
                        </button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
            <!-- Features Section -->
            <section id="features" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Features</h1>
                        <p class="text-textMuted mt-2">Manage studio features and amenities</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        Add Feature
                    </button>
                </div>

                <!-- Features Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Feature Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Icon
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Recording Equipment</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-white">Professional recording equipment including
                                        microphones and mixers</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <i class="fas fa-microphone text-primary"></i>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Sound Treatment</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-white">Acoustic panels and soundproofing materials</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <i class="fas fa-wave-square text-primary"></i>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Instruments</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-white">Various musical instruments available for use</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <i class="fas fa-guitar text-primary"></i>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-danger text-white">Inactive</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 3 of 9 features
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">1</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">2</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">3</button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
            <!-- Bookings Section -->
            <section id="bookings" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Bookings</h1>
                        <p class="text-textMuted mt-2">Manage studio bookings and reservations</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-4 rounded-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        New Booking
                    </button>
                </div>

                <!-- Bookings Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Booking ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Studio
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Customer
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Date & Time
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Booking entries -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">#12345</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio A</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">John Doe</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">May 15, 2025 14:00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Confirmed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Edit</button>
                                    <button class="text-danger hover:text-red-400">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 10 of 50 bookings
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">1</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">2</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">3</button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>

            <!-- Payments Section -->
            <section id="payments" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Payments</h1>
                        <p class="text-textMuted mt-2">Track and manage payment transactions</p>
                    </div>
                    <div class="flex space-x-3">
                        <button
                            class="bg-success hover:bg-green-600 text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-download mr-2"></i>
                            Export Report
                        </button>
                    </div>
                </div>

                <!-- Payment Statistics -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <h3 class="text-lg font-semibold text-white mb-4">Total Revenue</h3>
                        <p class="text-3xl font-bold text-success">$245,689.00</p>
                        <p class="text-sm text-textMuted mt-2">Last 30 days</p>
                    </div>
                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <h3 class="text-lg font-semibold text-white mb-4">Pending Payments</h3>
                        <p class="text-3xl font-bold text-warning">$12,450.00</p>
                        <p class="text-sm text-textMuted mt-2">8 transactions</p>
                    </div>
                    <div class="bg-darkUI rounded-lg p-6 border border-border">
                        <h3 class="text-lg font-semibold text-white mb-4">Failed Payments</h3>
                        <p class="text-3xl font-bold text-danger">$1,240.00</p>
                        <p class="text-sm text-textMuted mt-2">3 transactions</p>
                    </div>
                </div>

                <!-- Payments Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Transaction ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Customer
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Amount
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">#TX12345</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">John Doe</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-success">$150.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">May 15, 2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-medium rounded-full bg-success text-white">Completed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover">View Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 10 of 100 payments
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">1</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">2</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">3</button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
            <!-- Reviews Section -->
            <section id="reviews" class="hidden animate-fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Reviews</h1>
                        <p class="text-textMuted mt-2">Manage and monitor studio reviews</p>
                    </div>
                    <div class="flex space-x-3">
                        <select class="bg-darkUI border border-border text-white rounded-md px-4 py-2">
                            <option>All Studios</option>
                            <option>Studio A</option>
                            <option>Studio B</option>
                            <option>Studio C</option>
                        </select>
                    </div>
                </div>

                <!-- Reviews Table -->
                <div class="overflow-x-auto bg-darkUI rounded-lg border border-border p-6">
                    <table class="min-w-full divide-y divide-border">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Studio
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Customer
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Rating
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Review
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-textMuted uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-darkUI divide-y divide-border">
                            <!-- Review Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio A</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">John Doe</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-white">Great experience, professional equipment and staff!
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">May 15, 2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Reply</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>

                            <!-- Review Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-white">Studio B</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">Jane Smith</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-white">Decent studio but could use better soundproofing.
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">May 14, 2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primaryHover mr-3">Reply</button>
                                    <button class="text-danger hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-sm text-textMuted">
                        Showing 1 to 10 of 50 reviews
                    </div>
                    <nav class="flex space-x-2">
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">1</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">2</button>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">3</button>
                        <button class="bg-primary text-white py-2 px-4 rounded-md transition-all duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Revenue Chart
        const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctxRevenue, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Revenue',
                    data: [1200, 1900, 3000, 5000, 2000, 3000, 4000],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: '#444'
                        }
                    },
                    y: {
                        grid: {
                            color: '#444'
                        }
                    }
                }
            }
        });

        // Bookings Chart
        const ctxBookings = document.getElementById('bookingsChart').getContext('2d');
        const bookingsChart = new Chart(ctxBookings, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Bookings',
                    data: [50, 100, 150, 200, 250, 300, 350],
                    backgroundColor: '#4BC0C0',
                    borderColor: '#4BC0C0',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: '#444'
                        }
                    },
                    y: {
                        grid: {
                            color: '#444'
                        }
                    }
                }
            }
        });
    </script>
