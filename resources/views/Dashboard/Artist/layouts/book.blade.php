<!-- Main Content -->
<main class="flex-1 p-4 md:p-6">
    <div class="flex flex-col min-h-screen bg-darkBg text-light">
        <!-- Studio Hub Header -->
        <header class="mb-8">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h1 class="text-3xl font-bold text-white">Borrow Studios</h1>
                    <p class="text-textMuted mt-1">Discover and access premium music spaces</p>
                </div>
            </div>
        </header>

        <!-- Booking Flow -->
        <section class="booking-flow">
            <!-- Progress Tracker -->
            <div class="relative mb-10" id="progress-tracker">
                <div class="absolute top-1/2 h-1 transform -translate-y-1/2 bg-border w-full -z-10 rounded-full"></div>
                <div id="progress-bar"
                    class="absolute top-1/2 h-1 transform -translate-y-1/2 bg-primary w-1/4 -z-5 rounded-full transition-all duration-500">
                </div>

                <div class="flex justify-between">
                    <div class="flex flex-col items-center relative" data-step="1">
                        <div
                            class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center mb-2 progress-step border-4 border-darkBg transition-all duration-300">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <span class="text-xs md:text-sm text-primary font-medium whitespace-nowrap">Select Time</span>
                    </div>

                    <div class="flex flex-col items-center relative" data-step="2">
                        <div
                            class="w-12 h-12 rounded-full bg-darkAccent text-textMuted flex items-center justify-center mb-2 progress-step border-4 border-darkBg transition-all duration-300">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <span class="text-xs md:text-sm text-textMuted font-medium whitespace-nowrap">Pay</span>
                    </div>

                    <div class="flex flex-col items-center relative" data-step="3">
                        <div
                            class="w-12 h-12 rounded-full bg-darkAccent text-textMuted flex items-center justify-center mb-2 progress-step border-4 border-darkBg transition-all duration-300">
                            <i class="fas fa-download"></i>
                        </div>
                        <span class="text-xs md:text-sm text-textMuted font-medium whitespace-nowrap">Download
                            Invoice</span>
                    </div>

                    <div class="flex flex-col items-center relative" data-step="4">
                        <div
                            class="w-12 h-12 rounded-full bg-darkAccent text-textMuted flex items-center justify-center mb-2 progress-step border-4 border-darkBg transition-all duration-300">
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-xs md:text-sm text-textMuted font-medium whitespace-nowrap">Review</span>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let currentStep = 1;
                    const totalSteps = 4;
                    const progressBar = document.getElementById('progress-bar');
                    const steps = document.querySelectorAll('[data-step]');

                    function updateProgress(step) {
                        // Update progress bar width
                        const progress = (step - 1) / (totalSteps - 1) * 100;
                        progressBar.style.width = `${progress}%`;

                        // Update step styles
                        steps.forEach((stepElement, index) => {
                            const stepNum = index + 1;
                            const stepIcon = stepElement.querySelector('.progress-step');
                            const stepText = stepElement.querySelector('span');

                            if (stepNum <= step) {
                                stepIcon.classList.remove('bg-darkAccent', 'text-textMuted');
                                stepIcon.classList.add('bg-primary', 'text-white');
                                stepText.classList.remove('text-textMuted');
                                stepText.classList.add('text-primary');
                            } else {
                                stepIcon.classList.add('bg-darkAccent', 'text-textMuted');
                                stepIcon.classList.remove('bg-primary', 'text-white');
                                stepText.classList.add('text-textMuted');
                                stepText.classList.remove('text-primary');
                            }
                        });
                    }

                    // Initialize first step
                    updateProgress(currentStep);

                    // Example: Update progress when clicking continue button
                    document.querySelector('button').addEventListener('click', function() {
                        if (currentStep < totalSteps) {
                            currentStep++;
                            updateProgress(currentStep);
                        }
                    });
                });
            </script>

            <!-- Content Container -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Booking Column -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Studio Card -->
                    <div
                        class="bg-darkUI rounded-xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300">
                        <!-- Studio Images Carousel -->
                        <div class="relative h-64 w-full bg-darkAccent overflow-hidden">
                            <img src="/api/placeholder/800/400" alt="Studio Main View"
                                class="w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-dark/80 rounded-full flex items-center justify-center backdrop-blur-sm hover:bg-primary transition-all">
                                    <i class="fas fa-chevron-left text-white"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-dark/80 rounded-full flex items-center justify-center backdrop-blur-sm hover:bg-primary transition-all">
                                    <i class="fas fa-chevron-right text-white"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Studio Content -->
                        <div class="p-6">
                            <!-- Studio Header -->
                            <div class="flex flex-col md:flex-row justify-between mb-6">
                                <div>
                                    <h2 class="text-2xl font-bold text-white mb-2">{{ $borrow['studio']->name }}</h2>
                                    <div class="flex items-center">
                                        <div class="flex items-center mr-4">
                                            <i class="fas fa-map-marker-alt text-primary mr-1.5"></i>
                                            <span
                                                class="text-sm text-textMuted">{{ $borrow['studio']->location }}</span>
                                        </div>
                                        <div class="flex items-center text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span
                                                class="ml-1 text-textMuted text-sm">({{ $borrow['studio']->rating }})</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0 flex flex-col items-end">
                                    <div class="text-2xl font-bold text-white">{{ $borrow['studio']->price }}<span
                                            class="text-textMuted text-sm">/hour</span></div>
                                </div>
                            </div>

                            <!-- Studio Features -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                                <div class="flex flex-col items-center bg-darkAccent/50 p-3 rounded-lg">
                                    <i class="fas fa-ruler-combined text-primary mb-1"></i>
                                    <span class="text-xs text-textMuted">800 sq ft</span>
                                </div>
                                <div class="flex flex-col items-center bg-darkAccent/50 p-3 rounded-lg">
                                    <i class="fas fa-users text-primary mb-1"></i>
                                    <span class="text-xs text-textMuted">Up to 8 people</span>
                                </div>
                                <div class="flex flex-col items-center bg-darkAccent/50 p-3 rounded-lg">
                                    <i class="fas fa-volume-up text-primary mb-1"></i>
                                    <span class="text-xs text-textMuted">Soundproofed</span>
                                </div>
                                <div class="flex flex-col items-center bg-darkAccent/50 p-3 rounded-lg">
                                    <i class="fas fa-parking text-primary mb-1"></i>
                                    <span class="text-xs text-textMuted">Free Parking</span>
                                </div>
                            </div>

                            <!-- Studio Description -->
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-white mb-3">About this studio</h3>
                                <p class="text-textMuted text-sm leading-relaxed">
                                    {{ $borrow['studio']->description }}
                                </p>
                            </div>

                            <!-- Equipment & Amenities Tabs -->
                            <div class="mb-6">
                                <div class="flex border-b border-border mb-4">
                                    <button class="px-4 py-2 border-b-2 border-primary text-primary font-medium mr-4">
                                        Equipment
                                    </button>
                                    <button class="px-4 py-2 text-textMuted hover:text-light">
                                        Amenities
                                    </button>
                                    <button class="px-4 py-2 text-textMuted hover:text-light">
                                        Rules
                                    </button>
                                </div>

                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center bg-darkAccent/30 rounded-lg p-3">
                                        <i class="fas fa-check text-success mr-3"></i>
                                        <div>
                                            <h4 class="text-sm font-medium text-light">Pro Tools & Logic Pro</h4>
                                            <p class="text-xs text-textMuted">Latest versions installed</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center bg-darkAccent/30 rounded-lg p-3">
                                        <i class="fas fa-check text-success mr-3"></i>
                                        <div>
                                            <h4 class="text-sm font-medium text-light">Neumann & Shure Mics</h4>
                                            <p class="text-xs text-textMuted">Professional recording quality</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center bg-darkAccent/30 rounded-lg p-3">
                                        <i class="fas fa-check text-success mr-3"></i>
                                        <div>
                                            <h4 class="text-sm font-medium text-light">MIDI Controllers</h4>
                                            <p class="text-xs text-textMuted">Keyboard and drum pads</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center bg-darkAccent/30 rounded-lg p-3">
                                        <i class="fas fa-check text-success mr-3"></i>
                                        <div>
                                            <h4 class="text-sm font-medium text-light">Monitoring System</h4>
                                            <p class="text-xs text-textMuted">Yamaha HS8 & headphones</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Studio Host -->
                            <div class="flex items-center p-4 bg-darkAccent/30 rounded-lg">
                                <div
                                    class="w-12 h-12 rounded-full bg-darkAccent flex items-center justify-center mr-4 border-2 border-primary">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-light font-medium">{{ $borrow['studio']->owner->profile->full_name }}</h4>
                                        <span class="text-xs text-textMuted">Host since {{ $borrow['studio']->owner->created_at}}</span>
                                    </div>
                                    <p class="text-xs text-textMuted">Professional audio engineer with 10+ years of
                                        recording experience</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Date and Time Selection -->
                    <div
                        class="bg-darkUI rounded-xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-semibold text-white mb-6">
                            <i class="fas fa-calendar-alt text-primary mr-2"></i>
                            Available Time Slots
                        </h3>

                        <form class="space-y-6" method="POST" action="">
                            @csrf
                            {{-- <input type="hidden" name="studio_id" value="{{ $studio->id }}"> --}}

                            <!-- Date Selection -->
                            <div class="space-y-4">
                                <label class="text-light block font-medium">Select Date</label>
                                <div class="grid grid-cols-7 gap-2">
                                    {{-- @foreach ($availabilities as $date => $slots)
                                        <button type="button"
                                                class="date-selector p-3 text-center rounded-lg border border-border hover:border-primary transition-all
                                                       @if ($loop->first) bg-primary text-white @else bg-darkAccent text-textMuted @endif"
                                                data-date="{{ $date }}">
                                            <span class="block text-xs">{{ \Carbon\Carbon::parse($date)->format('D') }}</span>
                                            <span class="block text-lg font-bold">{{ \Carbon\Carbon::parse($date)->format('d') }}</span>
                                        </button>
                                    @endforeach --}}
                                </div>
                            </div>

                            <!-- Time Slots -->
                            <div class="space-y-4">
                                <label class="text-light block font-medium">Select Time Slot</label>
                                <div class="grid grid-cols-3 gap-3" id="timeSlots">
                                    {{-- @foreach ($availabilities[array_key_first($availabilities)] as $slot) --}}
                                    {{-- <button type="button" --}}
                                    {{-- class="time-slot p-3 text-center rounded-lg border border-border hover:border-primary transition-all --}}
                                    {{-- @if ($slot->status === 'available') bg-darkAccent text-textMuted hover:bg-primary hover:text-white --}}
                                    {{-- @else bg-darkAccent/50 text-textMuted/50 cursor-not-allowed @endif" --}}
                                    {{-- @if ($slot->status === 'available') --}}
                                    {{-- data-slot-id="{{ $slot->id }}" --}}
                                    {{-- onclick="selectTimeSlot(this)" --}}
                                    {{-- @endif --}}
                                    {{-- disabled="{{ $slot->status !== 'available' }}"> --}}
                                    {{-- <span class="block text-sm"> --}}
                                    {{-- {{ \Carbon\Carbon::parse($slot->start_time)->format('H:i') }} - --}}
                                    {{-- {{ \Carbon\Carbon::parse($slot->end_time)->format('H:i') }} --}}
                                    {{-- </span> --}}
                                    {{-- </button> --}}
                                    {{-- @endforeach --}}
                                </div>
                            </div>

                            <input type="hidden" name="availability_id" id="selected_slot">

                            <button type="submit"
                                class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-4 rounded-lg transition-all flex items-center justify-center">
                                <i class="fas fa-check-circle mr-2"></i>
                                Confirm Booking
                            </button>
                        </form>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const dateButtons = document.querySelectorAll('.date-selector');

                            dateButtons.forEach(button => {
                                button.addEventListener('click', async function() {
                                    // Reset all buttons
                                    dateButtons.forEach(btn => {
                                        btn.classList.remove('bg-primary', 'text-white');
                                        btn.classList.add('bg-darkAccent', 'text-textMuted');
                                    });

                                    // Highlight selected button
                                    this.classList.add('bg-primary', 'text-white');
                                    this.classList.remove('bg-darkAccent', 'text-textMuted');

                                    // Fetch time slots for selected date
                                    const date = this.dataset.date;
                                    try {
                                        const response = await fetch(`/api/timeslots/${date}`);
                                        const slots = await response.json();
                                        updateTimeSlots(slots);
                                    } catch (error) {
                                        console.error('Error fetching time slots:', error);
                                    }
                                });
                            });
                        });

                        function selectTimeSlot(element) {
                            // Remove selection from all slots
                            document.querySelectorAll('.time-slot').forEach(slot => {
                                slot.classList.remove('bg-primary', 'text-white');
                            });

                            // Highlight selected slot
                            element.classList.add('bg-primary', 'text-white');

                            // Update hidden input
                            document.getElementById('selected_slot').value = element.dataset.slotId;
                        }

                        function updateTimeSlots(slots) {
                            const container = document.getElementById('timeSlots');
                            container.innerHTML = slots.map(slot => `
                            <button type="button"
                                    class="time-slot p-3 text-center rounded-lg border border-border hover:border-primary transition-all
                                           ${slot.status === 'available' ? 'bg-darkAccent text-textMuted hover:bg-primary hover:text-white' : 'bg-darkAccent/50 text-textMuted/50 cursor-not-allowed'}"
                                    ${slot.status === 'available' ? `data-slot-id="${slot.id}" onclick="selectTimeSlot(this)"` : 'disabled'}">
                                <span class="block text-sm">
                                    ${formatTime(slot.start_time)} - ${formatTime(slot.end_time)}
                                </span>
                            </button>
                        `).join('');
                        }

                        function formatTime(time) {
                            return new Date('1970-01-01T' + time).toLocaleTimeString('en-US', {
                                hour: '2-digit',
                                minute: '2-digit',
                                hour12: false
                            });
                        }
                    </script>
                </div>

                <!-- Booking Summary Column -->
                <div class="lg:col-span-1">
                    <div
                        class="bg-darkUI rounded-xl border border-border p-6 sticky top-6 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-semibold text-white mb-6 flex items-center">
                            <i class="fas fa-receipt text-primary mr-2"></i>
                            Booking Summary
                        </h3>

                        <!-- Booking Details -->
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-darkAccent flex items-center justify-center mr-3">
                                    <i class="fas fa-music text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="text-light font-medium">Soundwave Studios</h4>
                                    <p class="text-xs text-textMuted">Professional Recording Studio</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-darkAccent flex items-center justify-center mr-3">
                                    <i class="fas fa-calendar text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="text-light font-medium">Thursday, May 15, 2025</h4>
                                    <p class="text-xs text-textMuted">10:00 AM - 11:00 AM (1 hour)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing Breakdown -->
                        <div class="border-t border-b border-border py-4 mb-6">
                            <h4 class="text-light font-medium mb-3">Price Details</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-textMuted">Studio rate (1 hour)</span>
                                    <span class="text-light">$50.00</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-textMuted">Service fee</span>
                                    <span class="text-light">$5.00</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-textMuted">Tax</span>
                                    <span class="text-light">$4.50</span>
                                </div>
                                <div class="flex justify-between font-medium mt-4">
                                    <span class="text-light">Total</span>
                                    <span class="text-primary text-lg">$59.50</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <button
                                class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-3 rounded-lg transition-all flex items-center justify-center">
                                <i class="fas fa-arrow-right mr-2"></i>
                                Continue to Review
                            </button>

                            <button
                                class="w-full bg-transparent border border-border hover:border-primary text-textMuted font-medium py-3 rounded-lg transition-all flex items-center justify-center">
                                <i class="fas fa-times-circle mr-2"></i>
                                Cancel Booking
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- End of Main Content -->
<script>
    // Initialize calendar functionality
    function initializeCalendar() {
        const calendarDays = document.querySelectorAll('.calendar-day');
        calendarDays.forEach(day => {
            day.addEventListener('click', function() {
                calendarDays.forEach(d => d.classList.remove('bg-primary', 'text-white'));
                this.classList.add('bg-primary', 'text-white');
                updateTimeSlots(this.dataset.date);
            });
        });
    }

    // Initialize time slots functionality
    function initializeTimeSlots() {
        const timeSlots = document.querySelectorAll('.time-slot');
        timeSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                timeSlots.forEach(s => s.classList.remove('bg-primary', 'text-white'));
                this.classList.add('bg-primary', 'text-white');
                updateBookingSummary(this.dataset.time);
            });
        });
    }

    // Function to hide all tabs and show the selected one
    function showTab(tabId) {
        // Hide all sections
        document.querySelectorAll('main > section').forEach(section => {
            section.classList.add('hidden');
        });

        // Show the selected section
        document.getElementById(tabId).classList.remove('hidden');

        // Update sidebar active state
        document.querySelectorAll('.sidebar-active').forEach(link => {
            link.classList.remove('sidebar-active');
            link.classList.remove('border-primary');
            link.classList.add('border-transparent');
        });

        // Add active state to clicked link
        const activeLink = document.getElementById(tabId + '-link');
        if (activeLink) {
            activeLink.classList.add('sidebar-active');
            activeLink.classList.remove('border-transparent');
            activeLink.classList.add('border-primary');
        }
    }

    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize main functionalities
        initializeCalendar();
        initializeTimeSlots();

        // Add Borrow Studios link to sidebar
        const borrowStudiosLink = document.createElement('li');
        borrowStudiosLink.innerHTML = `
            <a href="#" onclick="showTab('borrow-studios')" id="borrow-studios-link"
                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <i class="fas fa-handshake mr-3"></i>
                Borrow Studios
            </a>
        `;

        // Add Book Studio link to sidebar
        const bookStudioLink = document.createElement('li');
        bookStudioLink.innerHTML = `
            <a href="#" onclick="showTab('book-studio')" id="book-studio-link"
                class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                <i class="fas fa-calendar-plus mr-3"></i>
                Book Studio
            </a>
        `;

        // Insert at appropriate position in sidebar
        const sidebar = document.querySelector('nav ul');
        const findStudiosLink = document.getElementById('find-studios-link').parentNode;
        if (sidebar && findStudiosLink) {
            sidebar.insertBefore(borrowStudiosLink, findStudiosLink.nextSibling);
            sidebar.insertBefore(bookStudioLink, borrowStudiosLink.nextSibling);
        }

        // Add animation styles
        document.head.insertAdjacentHTML('beforeend', `
            <style>
                .animate-fade-in {
                    animation: fadeIn 0.3s ease-in-out;
                }
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
            </style>
        `);
    });
</script>
