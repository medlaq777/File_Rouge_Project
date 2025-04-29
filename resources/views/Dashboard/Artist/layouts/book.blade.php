<!-- Find Studios Section -->
<section id="find-studios" class="hidden animate-fade-in">
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-white">Find Studios</h1>
                    <p class="text-textMuted mt-2">Search and book the perfect studio for your needs</p>
                </div>
            </div>

            <!-- Search & Filter Bar -->
            <div class="bg-darkUI rounded-lg border border-border p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Search studios..."
                            class="w-full bg-inputBg text-light border border-border rounded-md p-3 pl-10 focus:outline-none focus:ring-1 focus:ring-primary">
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-textMuted">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <select
                            class="w-full bg-inputBg text-light border border-border rounded-md p-3 appearance-none focus:outline-none focus:ring-1 focus:ring-primary">
                            <option>All Types</option>
                            <option>Recording Studio</option>
                            <option>Mixing Studio</option>
                            <option>Podcast Studio</option>
                            <option>Rehearsal Space</option>
                        </select>
                        <div
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-textMuted pointer-events-none">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <select
                            class="w-full bg-inputBg text-light border border-border rounded-md p-3 appearance-none focus:outline-none focus:ring-1 focus:ring-primary">
                            <option>Price Range</option>
                            <option>Under $30/hr</option>
                            <option>$30-50/hr</option>
                            <option>$50-100/hr</option>
                            <option>$100+/hr</option>
                        </select>
                        <div
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-textMuted pointer-events-none">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <input type="date"
                            class="w-full bg-inputBg text-light border border-border rounded-md p-3 focus:outline-none focus:ring-1 focus:ring-primary">
                    </div>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white font-medium py-3 px-6 rounded-md transition-all duration-200">
                        <i class="fas fa-search mr-2"></i>
                        Search
                    </button>
                </div>
            </div>

            <!-- Studios Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Studio Card 1 -->
                <div
                    class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Soundwave Studios" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3">
                            <span
                                class="shadow-md text-xs font-medium px-3 py-1.5 rounded-full flex items-center text-success">
                                <i class="fas fa-circle-check text-sm mr-1.5"></i>
                                Available
                            </span>
                        </div>
                        <button
                            class="absolute top-3 left-3 text-white opacity-70 hover:opacity-100 transition-opacity">
                            <i class="far fa-heart text-xl"></i>
                        </button>
                    </div>

                    <!-- Studio Details -->
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-white">Soundwave Studios</h3>
                            <div class="flex text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-light ml-1">4.5</span>
                            </div>
                        </div>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>Downtown Music District</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-music w-5"></i>
                                <span>Pro Recording Studio</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$50/hour</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-4">
                            <button type="button"
                                class="flex-1 bg-darkAccent hover:bg-dark text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Details
                            </button>
                            <button type="button"
                                class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Studio Card 2 -->
                <div
                    class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Beat Box Studio" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3">
                            <span
                                class="shadow-md text-xs font-medium px-3 py-1.5 rounded-full flex items-center text-success">
                                <i class="fas fa-circle-check text-sm mr-1.5"></i>
                                Available
                            </span>
                        </div>
                        <button
                            class="absolute top-3 left-3 text-white opacity-70 hover:opacity-100 transition-opacity">
                            <i class="far fa-heart text-xl"></i>
                        </button>
                    </div>

                    <!-- Studio Details -->
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-white">Beat Box Studio</h3>
                            <div class="flex text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-light ml-1">4.0</span>
                            </div>
                        </div>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>Westside Creative Hub</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-music w-5"></i>
                                <span>Mixing Studio</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$40/hour</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-4">
                            <button type="button"
                                class="flex-1 bg-darkAccent hover:bg-dark text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Details
                            </button>
                            <button type="button"
                                class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Studio Card 3 -->
                <div
                    class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Rhythm Room" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3">
                            <span
                                class="shadow-md text-xs font-medium px-3 py-1.5 rounded-full flex items-center text-success">
                                <i class="fas fa-circle-check text-sm mr-1.5"></i>
                                Available
                            </span>
                        </div>
                        <button
                            class="absolute top-3 left-3 text-danger opacity-90 hover:opacity-100 transition-opacity">
                            <i class="fas fa-heart text-xl"></i>
                        </button>
                    </div>

                    <!-- Studio Details -->
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-white">Rhythm Room</h3>
                            <div class="flex text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-light ml-1">5.0</span>
                            </div>
                        </div>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>East Side Arts District</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-music w-5"></i>
                                <span>Podcast Studio</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$35/hour</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-4">
                            <button type="button"
                                class="flex-1 bg-darkAccent hover:bg-dark text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Details
                            </button>
                            <button type="button"
                                class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Studio Card 4 -->
                <div
                    class="bg-darkUI rounded-lg border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Melody Makers" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3">
                            <span
                                class="shadow-md text-xs font-medium px-3 py-1.5 rounded-full flex items-center text-success">
                                <i class="fas fa-circle-check text-sm mr-1.5"></i>
                                Available
                            </span>
                        </div>
                        <!-- Completing the last Studio Card 4 that was cut off -->
                        <button
                            class="absolute top-3 left-3 text-white opacity-70 hover:opacity-100 transition-opacity">
                            <i class="far fa-heart text-xl"></i>
                        </button>
                    </div>

                    <!-- Studio Details -->
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-white">Melody Makers</h3>
                            <div class="flex text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span class="text-light ml-1">3.5</span>
                            </div>
                        </div>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>North Music Quarter</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-music w-5"></i>
                                <span>Recording Studio</span>
                            </div>
                            <div class="flex items-center text-sm text-textMuted">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$45/hour</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-4">
                            <button type="button"
                                class="flex-1 bg-darkAccent hover:bg-dark text-textMuted hover:text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Details
                            </button>
                            <button type="button"
                                class="flex-1 bg-primary hover:bg-primaryHover text-white py-2 px-3 rounded-md transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Add more studio cards as needed -->
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex space-x-2">
                    <a href="#"
                        class="px-3 py-1 bg-darkAccent text-textMuted rounded-md hover:bg-primaryHover hover:text-white transition-colors">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-3 py-1 bg-primary text-white rounded-md">1</a>
                    <a href="#"
                        class="px-3 py-1 bg-darkAccent text-textMuted rounded-md hover:bg-primaryHover hover:text-white transition-colors">2</a>
                    <a href="#"
                        class="px-3 py-1 bg-darkAccent text-textMuted rounded-md hover:bg-primaryHover hover:text-white transition-colors">3</a>
                    <a href="#"
                        class="px-3 py-1 bg-darkAccent text-textMuted rounded-md hover:bg-primaryHover hover:text-white transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
</section>
<!-- Add new sections for Borrow Studios -->
<section id="borrow-studios" class="hidden animate-fade-in">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">Borrow Studios</h1>
                <p class="text-textMuted mt-2">Find studios willing to lend their space for your projects</p>
            </div>

            <!-- Available Studios for Borrowing -->
            <div class="bg-darkUI rounded-lg border border-border p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white">Available Studios for Borrowing</h2>
                    <div class="flex space-x-2">
                        <select
                            class="bg-inputBg text-light border border-border rounded-md p-2 text-sm focus:outline-none focus:ring-1 focus:ring-primary">
                            <option>Sort by: Newest First</option>
                            <option>Sort by: Price Low to High</option>
                            <option>Sort by: Rating High to Low</option>
                            <option>Sort by: Distance</option>
                        </select>
                    </div>
                </div>

                <!-- Borrowable Studios Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Borrowable Studio 1 -->
                    <div
                        class="bg-darkAccent rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="relative">
                            <img src="/api/placeholder/400/200" alt="Community Studio"
                                class="w-full h-40 object-cover">
                            <div class="absolute top-3 right-3">
                                <span
                                    class="bg-success/20 text-success text-xs font-medium px-2 py-1 rounded-full">Free</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-white">Community Music Hub</h3>
                            <p class="text-sm text-textMuted mb-3">Available 2 days/week for local artists</p>

                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-map-marker-alt w-4"></i>
                                    <span>Downtown Arts District</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-calendar-check w-4"></i>
                                    <span>Available: Tuesdays & Thursdays</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-user-friends w-4"></i>
                                    <span>Max 4 people</span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-md transition-all duration-200">
                                Apply for Access
                            </button>
                        </div>
                    </div>

                    <!-- Borrowable Studio 2 -->
                    <div
                        class="bg-darkAccent rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="relative">
                            <img src="/api/placeholder/400/200" alt="Student Studio"
                                class="w-full h-40 object-cover">
                            <div class="absolute top-3 right-3">
                                <span
                                    class="bg-success/20 text-success text-xs font-medium px-2 py-1 rounded-full">Free</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-white">Student Recording Space</h3>
                            <p class="text-sm text-textMuted mb-3">University studio open for indie artists</p>

                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-map-marker-alt w-4"></i>
                                    <span>University District</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-calendar-check w-4"></i>
                                    <span>Available: Weekends only</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-user-friends w-4"></i>
                                    <span>Max 3 people</span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-md transition-all duration-200">
                                Apply for Access
                            </button>
                        </div>
                    </div>

                    <!-- Borrowable Studio 3 -->
                    <div
                        class="bg-darkAccent rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="relative">
                            <img src="/api/placeholder/400/200" alt="Non-profit Studio"
                                class="w-full h-40 object-cover">
                            <div class="absolute top-3 right-3">
                                <span
                                    class="bg-info/20 text-info text-xs font-medium px-2 py-1 rounded-full">$10/hr</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-white">Arts Foundation Space</h3>
                            <p class="text-sm text-textMuted mb-3">Subsidized rates for emerging artists</p>

                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-map-marker-alt w-4"></i>
                                    <span>Cultural Center</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-calendar-check w-4"></i>
                                    <span>Available: Mon-Wed, 12-8pm</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-user-friends w-4"></i>
                                    <span>Max 5 people</span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-md transition-all duration-200">
                                Apply for Access
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Requirements and Application Process -->
            <div class="bg-darkUI rounded-lg border border-border p-6">
                <h3 class="text-xl font-semibold text-white mb-4">Application Process</h3>
                <div class="space-y-6">
                    <div @yield('addStudios') @yield('editStudios')class="flex items-start">
                        <div class="bg-primary/20 text-primary rounded-full p-2 mr-4">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-white">Submit Application</h4>
                            <p class="text-textMuted mt-1">Complete a brief application form explaining your project
                                and why you would like to use the space.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-info/20 text-info rounded-full p-2 mr-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-white">Schedule Interview</h4>
                            <p class="text-textMuted mt-1">If your application meets the basic requirements, you'll be
                                invited for a brief interview or orientation session.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-success/20 text-success rounded-full p-2 mr-4">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-white">Receive Approval</h4>
                            <p class="text-textMuted mt-1">Once approved, you'll receive access to the booking system
                                to reserve available time slots.</p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Book Studio Section -->
<section id="book-studio" class="hidden animate-fade-in">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">Book a Studio</h1>
                <p class="text-textMuted mt-2">Complete your studio booking process</p>
            </div>

            <!-- Booking Steps -->
            <div class="flex justify-between mb-8 relative">
                <div class="absolute top-1/2 h-1 bg-border w-full -z-10"></div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mb-2">1
                    </div>
                    <span class="text-sm text-primary font-medium">Select Studio</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mb-2">2
                    </div>
                    <span class="text-sm text-primary font-medium">Choose Date & Time</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-darkAccent text-light flex items-center justify-center mb-2">
                        3</div>
                    <span class="text-sm text-textMuted font-medium">Review Details</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-darkAccent text-light flex items-center justify-center mb-2">
                        4</div>
                    <span class="text-sm text-textMuted font-medium">Confirm & Pay</span>
                </div>
            </div>

            <!-- Studio Selection -->
            <div class="bg-darkUI rounded-lg border border-border p-6 mb-8">
                <h3 class="text-xl font-semibold text-white mb-6">Selected Studio</h3>

                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-64 h-48 md:h-auto flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <img src="/api/placeholder/300/300" alt="Soundwave Studios"
                            class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white">Soundwave Studios</h3>
                                <div class="flex text-warning text-sm mt-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-textMuted ml-1">(4.5)</span>
                                </div>
                            </div>
                            <div class="mt-2 md:mt-0">
                                <span class="text-light font-semibold text-lg">$50<span
                                        class="text-textMuted text-sm">/hour</span></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <div>
                                <div class="flex items-center text-sm text-textMuted mb-2">
                                    <i class="fas fa-map-marker-alt w-5"></i>
                                    <span>Downtown Music District</span>
                                </div>
                                <div class="flex items-center text-sm text-textMuted mb-2">
                                    <i class="fas fa-music w-5"></i>
                                    <span>Pro Recording Studio</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center text-sm text-textMuted mb-2">
                                    <i class="fas fa-users w-5"></i>
                                    <span>Capacity: Up to 8 people</span>
                                </div>
                                <div class="flex items-center text-sm text-textMuted mb-2">
                                    <i class="fas fa-check-circle w-5"></i>
                                    <span>Engineer included</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-darkAccent rounded-md mb-6">
                            <h4 class="font-medium text-light mb-2">Equipment & Amenities</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Pro Tools & Logic Pro</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Neumann Microphones</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>SSL Mixing Console</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Free Parking</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Lounge Area</span>
                                </div>
                                <div class="flex items-center text-xs text-textMuted">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Wi-Fi Access</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <button
                                class="bg-darkAccent hover:bg-border text-light py-2 px-6 rounded-md transition-all duration-200">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Choose Different Studio
                            </button>
                            <button
                                class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200">
                                Continue
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Date & Time Selection -->
            <div class="bg-darkUI rounded-lg border border-border p-6">
                <h3 class="text-xl font-semibold text-white mb-6">Select Date & Time</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Calendar -->
                    <div class="md:col-span-2 bg-darkAccent p-4 rounded-lg">
                        <!-- Calendar header - just for visualization -->
                        <div class="flex justify-between items-center mb-4">
                            <button class="text-textMuted hover:text-light">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <h4 class="text-light font-medium">April 2025</h4>
                            <button class="text-textMuted hover:text-light">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Calendar - simplified for demonstration -->
                        <div class="grid grid-cols-7 gap-1 text-center mb-2">
                            <div class="text-textMuted text-xs font-medium">SUN</div>
                            <div class="text-textMuted text-xs font-medium">MON</div>
                            <div class="text-textMuted text-xs font-medium">TUE</div>
                            <div class="text-textMuted text-xs font-medium">WED</div>
                            <div class="text-textMuted text-xs font-medium">THU</div>
                            <div class="text-textMuted text-xs font-medium">FRI</div>
                            <div class="text-textMuted text-xs font-medium">SAT</div>
                        </div>

                        <div class="grid grid-cols-7 gap-1">
                            <!-- First row with empty spaces -->
                            <div class="h-10"></div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                1</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                2</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                3</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                4</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                5</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                6</div>

                            <!-- Other days -->
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                7</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                8</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                9</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                10</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                11</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                12</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                13</div>

                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                14</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                15</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                16</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                17</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                18</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                19</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                20</div>

                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                21</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                22</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                23</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                24</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                25</div>
                            <div
                                class="text-textMuted border border-transparent rounded-md flex items-center justify-center h-10">
                                26</div>
                            <div
                                class="text-white bg-primary border border-primary rounded-md flex items-center justify-center h-10 font-medium">
                                27</div>

                            <div
                                class="text-light border border-transparent hover:border-primary hover:text-primary rounded-md flex items-center justify-center h-10 cursor-pointer">
                                28</div>
                            <div
                                class="text-light border border-transparent hover:border-primary hover:text-primary rounded-md flex items-center justify-center h-10 cursor-pointer">
                                29</div>
                            <div
                                class="text-light border border-transparent hover:border-primary hover:text-primary rounded-md flex items-center justify-center h-10 cursor-pointer">
                                30</div>
                        </div>
                    </div>

                    <!-- Time Slots -->
                    <div class="bg-darkAccent p-4 rounded-lg">
                        <h4 class="text-light font-medium mb-4">Available Times for April 27</h4>
                        <div class="space-y-2">
                            <div
                                class="bg-dark border border-border px-3 py-2 rounded flex items-center justify-between cursor-pointer hover:border-primary transition-all">
                                <span class="text-light">10:00 AM - 12:00 PM</span>
                                <span class="text-textMuted text-sm">2 hrs</span>
                            </div>
                            <div
                                class="bg-primary/10 border border-primary px-3 py-2 rounded flex items-center justify-between cursor-pointer">
                                <span class="text-primary font-medium">1:00 PM - 5:00 PM</span>
                                <span class="text-primary text-sm">4 hrs</span>
                            </div>
                            <div
                                class="bg-dark border border-border px-3 py-2 rounded flex items-center justify-between cursor-pointer hover:border-primary transition-all">
                                <span class="text-light">6:00 PM - 8:00 PM</span>
                                <span class="text-textMuted text-sm">2 hrs</span>
                            </div>
                            <div
                                class="bg-dark border border-border px-3 py-2 rounded flex items-center justify-between cursor-pointer hover:border-primary transition-all">
                                <span class="text-light">8:00 PM - 12:00 AM</span>
                                <span class="text-textMuted text-sm">4 hrs</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-light font-medium mb-3">Duration & Extras</h4>
                            <div class="mb-3">
                                <label class="text-textMuted text-sm mb-1 block">Number of Hours</label>
                                <div class="flex items-center">
                                    <button
                                        class="bg-darkBg text-light w-10 h-10 rounded-l-md flex items-center justify-center border border-border">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" value="4" min="1" max="8"
                                        class="bg-darkBg text-light border-y border-border h-10 w-16 text-center focus:outline-none">
                                    <button
                                        class="bg-darkBg text-light w-10 h-10 rounded-r-md flex items-center justify-center border border-border">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="flex items-center">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-light text-sm">Add sound engineer ($25/hr)</span>
                                </label>
                            </div>

                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" class="w-4 h-4 mr-2">
                                    <span class="text-light text-sm">Reserve extra equipment ($40)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <button
                        class="bg-darkAccent hover:bg-border text-light py-2 px-6 rounded-md transition-all duration-200">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back
                    </button>
                    <button
                        class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200">
                        Continue to Review
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
</section>
