<!-- Main content -->
<div class="flex flex-col min-h-screen bg-darkBg text-light">
    <!-- Studio Booking Hub: Combined Booking & Borrowing Sections -->
    <section id="studio-hub" class="container mx-auto px-4 py-8 animate-fade-in">
        <!-- Section Header with Tabs -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">Music Studio Access</h1>
            <p class="text-textMuted mt-2">Find the perfect space for your creative projects</p>

            <!-- Tab Navigation -->
            <div class="flex mt-6 border-b border-border overflow-x-auto hide-scrollbar">
                <button class="px-6 py-3 border-b-2 border-primary text-primary font-medium flex items-center">
                    <i class="fas fa-calendar-plus mr-2"></i>
                    Book Studios
                </button>
                <button class="px-6 py-3 text-textMuted hover:text-light flex items-center">
                    <i class="fas fa-handshake mr-2"></i>
                    Borrow Studios
                </button>
            </div>
        </div>

        <!-- Booking Flow Section -->
        <div class="space-y-8">
            <!-- Booking Steps Indicator -->
            <div class="flex justify-between relative step-progress overflow-x-auto pb-4 responsive-steps">
                <div class="absolute top-1/2 h-1 bg-border w-full -z-10"></div>

                <div class="flex flex-col items-center step-item step-active mx-2">
                    <div
                        class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mb-2 step-number">
                        1</div>
                    <span class="text-sm text-primary font-medium step-title whitespace-nowrap">Select Studio</span>
                </div>

                <div class="flex flex-col items-center step-item step-active mx-2">
                    <div
                        class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mb-2 step-number">
                        2</div>
                    <span class="text-sm text-primary font-medium step-title whitespace-nowrap">Choose Date &
                        Time</span>
                </div>

                <div class="flex flex-col items-center step-item mx-2">
                    <div
                        class="w-10 h-10 rounded-full bg-darkAccent text-light flex items-center justify-center mb-2 step-number">
                        3</div>
                    <span class="text-sm text-textMuted font-medium step-title whitespace-nowrap">Review
                        Details</span>
                </div>

                <div class="flex flex-col items-center step-item mx-2">
                    <div
                        class="w-10 h-10 rounded-full bg-darkAccent text-light flex items-center justify-center mb-2 step-number">
                        4</div>
                    <span class="text-sm text-textMuted font-medium step-title whitespace-nowrap">Confirm &
                        Pay</span>
                </div>
            </div>

            <!-- Selected Studio Card -->
            <div
                class="bg-darkUI rounded-lg border border-border p-6 shadow-lg transform hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-white mb-6 flex items-center">
                    <i class="fas fa-music text-primary mr-2"></i>
                    Selected Studio
                </h3>

                <div class="flex flex-col md:flex-row items-center md:items-start responsive-card">
                    <!-- Studio Image with Badge -->
                    <div
                        class="w-full md:w-64 h-48 md:h-auto flex-shrink-0 mb-4 md:mb-0 md:mr-6 relative overflow-hidden rounded-lg responsive-card-image">
                        <img src="/api/placeholder/300/300" alt="Soundwave Studios"
                            class="w-full h-full object-cover rounded-lg studio-image hover:scale-105 transition-all duration-500">
                        <div class="absolute top-3 right-3">
                            <span
                                class="bg-dark/80 text-white text-xs font-medium px-3 py-1 rounded-full backdrop-blur-sm">Pro
                                Studio</span>
                        </div>
                    </div>

                    <!-- Studio Details -->
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

                        <!-- Studio Features -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <div>
                                <div
                                    class="flex items-center text-sm text-textMuted mb-2 hover:text-light transition-colors">
                                    <i class="fas fa-map-marker-alt w-5 text-primary"></i>
                                    <span>Downtown Music District</span>
                                </div>
                                <div
                                    class="flex items-center text-sm text-textMuted mb-2 hover:text-light transition-colors">
                                    <i class="fas fa-music w-5 text-primary"></i>
                                    <span>Pro Recording Studio</span>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="flex items-center text-sm text-textMuted mb-2 hover:text-light transition-colors">
                                    <i class="fas fa-users w-5 text-primary"></i>
                                    <span>Capacity: Up to 8 people</span>
                                </div>
                                <div
                                    class="flex items-center text-sm text-textMuted mb-2 hover:text-light transition-colors">
                                    <i class="fas fa-check-circle w-5 text-primary"></i>
                                    <span>Engineer included</span>
                                </div>
                            </div>
                        </div>

                        <!-- Equipment & Amenities Card -->
                        <div class="p-4 bg-darkAccent rounded-md mb-6 hover:shadow-md transition-all feature-card">
                            <h4 class="font-medium text-light mb-2 flex items-center">
                                <i class="fas fa-tools text-primary mr-2"></i>
                                Equipment & Amenities
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <div
                                    class="flex items-center text-xs text-textMuted hover:text-light transition-colors">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Pro Tools & Logic Pro</span>
                                </div>
                                <div
                                    class="flex items-center text-xs text-textMuted hover:text-light transition-colors">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>High-End Microphones</span>
                                </div>
                                <div
                                    class="flex items-center text-xs text-textMuted hover:text-light transition-colors">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Comfortable Lounge Area</span>
                                </div>
                                <div
                                    class="flex items-center text-xs text-textMuted hover:text-light transition-colors">
                                    <i class="fas fa-check text-success mr-2"></i>
                                    <span>Wi-Fi & Refreshments</span>
                                </div>
                            </div>
                        </div>
                        <!-- Booking Button -->
                        <button
                            class="bg-primary hover:bg-primaryHover text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
            <!-- Calendar & Time Slots -->
            <div
                class="bg-darkUI rounded-lg border border-border p-6 shadow-lg transform hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-white mb-6 flex items-center">
                    <i class="fas fa-calendar-alt text-primary mr-2"></i>
                    Select Date & Time
                </h3>

                <!-- Calendar -->
                <div class="grid grid-cols-7 gap-4 mb-6 calendar-grid">
                    @for ($i = 1; $i <= 30; $i++)
                        <div
                            class="calendar-day flex items-center justify-center rounded-lg cursor-pointer hover:bg-primary hover:text-white transition-all duration-300 {{ $i == 15 ? 'bg-primary text-white' : 'bg-darkAccent text-textMuted' }}">
                            {{ $i }}
                        </div>
                    @endfor
                </div>

                <!-- Time Slots -->
                <div class="grid grid-cols-2 gap-4">
                    @foreach (['10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM'] as $time)
                        <div
                            class="time-slot flex items-center justify-between p-4 bg-darkAccent border border-border rounded-lg cursor-pointer hover:border-primary transition-all duration-300 {{ $loop->first ? 'bg-primary text-white' : '' }}">
                            <span>{{ $time }}</span>
                            <input type="checkbox" class="ml-auto" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</div>
<script>
    // JavaScript for handling the calendar and time slots
    document.addEventListener('DOMContentLoaded', function() {
        const calendarDays = document.querySelectorAll('.calendar-day');
        const timeSlots = document.querySelectorAll('.time-slot');

        calendarDays.forEach(day => {
            day.addEventListener('click', function() {
                calendarDays.forEach(d => d.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

        timeSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                timeSlots.forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
    });
</script>
