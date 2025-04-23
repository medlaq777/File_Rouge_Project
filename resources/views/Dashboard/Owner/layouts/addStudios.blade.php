<!-- Add Studio Modal -->
<div id="add-studio-modal" class="modal">
    <div class="modal-content p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-white">Add New Studio</h2>
            <button onclick="closeAddStudioModal()" class="text-textMuted hover:text-white">
                <i class="fas fa-times h-6 w-6"></i>
            </button>
        </div>
        <form class="space-y-6" action="{{ route('store.studio') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <!-- Basic Info -->
            <div>
                <label for="name" class="block text-light mb-2">Studio Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name" required>
            </div>

            <div>
                <label for="description" class="block text-light mb-2">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio" required></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="location" class="block text-light mb-2">Location</label>
                    <input type="text" id="location" name="location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State" required>
                </div>
                <div>
                    <label for="price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
                    <input type="number" id="price" name="price" min="1" max="200" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75" required>
                </div>
            </div>

            <!-- Category Selection -->
            <div>
                <label for="category_id" class="block text-light mb-2">Studio Category</label>
                <select id="category_id" name="category_id" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    <option value="">Select a category</option>
                    @foreach($categories ?? [] as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Enhanced Availability Section with Quick Options -->
            <div class="border-t border-border pt-6">
                <h3 class="text-lg font-semibold text-white mb-4">Studio Availability</h3>

                <!-- Quick Availability Options -->
                <div class="mb-6">
                    <span id="add-quick-setup-label" class="block text-light mb-2">Quick Setup</span>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3" aria-labelledby="quick-setup-label">
                        <button type="button" onclick="setAddAvailability('24/7')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-infinity mr-2"></i> 24/7
                        </button>
                        <button type="button" onclick="setAddAvailability('weekdays')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-briefcase mr-2"></i> Weekdays
                        </button>
                        <button type="button" onclick="setAddAvailability('weekends')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-umbrella-beach mr-2"></i> Weekends
                        </button>
                        <button type="button" onclick="setAddAvailability('current-month')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-calendar-alt mr-2"></i> This Month
                        </button>
                    </div>
                </div>

                <!-- Custom Availability Selection -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <select id="availability-type" name="availability_type" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" onchange="toggleCustomAvailability()">
                            <option value="custom">Custom Time Slots</option>
                            <option value="always">Always Available</option>
                            <option value="recurring">Recurring Schedule</option>
                        </select>
                    </div>

                    <!-- Custom Time Slots -->
                    <div id="custom-availability-section" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="availability-date" class="block text-light mb-2">Date</label>
                                <input type="date" id="availability-date" name="availability_dates[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="start-time" class="block text-light mb-2">Start Time</label>
                                <input type="time" id="start-time" name="start_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="end-time" class="block text-light mb-2">End Time</label>
                                <input type="time" id="end-time" name="end_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        <div id="additional-availability-slots"></div>
                        <button type="button" onclick="addAvailabilitySlot()" class="mt-2 text-primary hover:text-primaryHover flex items-center">
                            <i class="fas fa-plus-circle mr-2"></i> Add More Time Slots
                        </button>
                    </div>

                    <!-- Recurring Schedule -->
                    <div id="recurring-availability-section" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <span id="recurring-days-label" class="block text-light mb-2">Select Days</span>
                                <div class="flex flex-wrap gap-2" aria-labelledby="recurring-days-label">
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="monday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Mon</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="tuesday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Tue</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="wednesday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Wed</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="thursday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Thu</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="friday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Fri</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="saturday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Sat</span>
                                    </label>
                                    <label class="flex items-center space-x-2 bg-inputBg p-2 rounded-md border border-border cursor-pointer hover:bg-darkAccent">
                                        <input type="checkbox" name="recurring_days[]" value="sunday" class="form-checkbox h-4 w-4 text-primary border-border bg-inputBg rounded focus:ring-primary">
                                        <span class="text-light">Sun</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <span class="block text-light mb-2">Time Range</span>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="recurring-start-time" class="block text-light mb-2">Start Time</label>
                                        <input type="time" id="recurring-start-time" name="recurring_start_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                    <div>
                                        <label for="recurring-end-time" class="block text-light mb-2">End Time</label>
                                        <input type="time" id="recurring-end-time" name="recurring_end_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="block text-light mb-2">Validity Period</span>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="recurring-start-date" class="block text-light mb-2">From Date</label>
                                    <input type="date" id="recurring-start-date" name="recurring_start_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                                <div>
                                    <label for="recurring-end-date" class="block text-light mb-2">To Date</label>
                                    <input type="date" id="recurring-end-date" name="recurring_end_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="border-t border-border pt-6">
                <h3 class="text-lg font-semibold text-white mb-4">Studio Features</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($features ?? [] as $feature)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="features[]" value="{{ $feature->id }}" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                            <span class="text-light">{{ $feature->name }}</span>
                        </label>
                    @endforeach
                </div>
                <div class="mt-4">
                    <label for="custom_features" class="block text-light mb-2">Other Features (comma-separated)</label>
                    <input type="text" id="custom_features" name="custom_features" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., Green Room, Lounge Area, Kitchen">
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-light mb-2" for="studio_photos">Studio Images</label>
                <input type="file" id="studio_photos" name="photos[]" class="hidden" multiple accept="image/*" />
                <div class="border-2 border-dashed border-border rounded-md p-8 text-center" id="drop-area">
                    <i class="fas fa-image mx-auto h-12 w-12 text-textMuted" style="font-size:3rem;"></i>
                    <p class="mt-2 text-sm text-textMuted">Drag and drop images here, or click to browse</p>
                    <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors" onclick="document.getElementById('studio_photos').click();">Select Files</button>
                    <div id="preview-container" class="mt-4 flex flex-wrap gap-2"></div>
                </div>
            </div>

            <div class="flex justify-end space-x-4 pt-4 border-t border-border">
                <button type="button" onclick="closeAddStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
                <button type="submit" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200 cursor-pointer">Add Studio</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript for the form functionality -->
<script>
    // Toggle visibility of availability sections based on selection
    function toggleCustomAvailability() {
        const type = document.getElementById('availability-type').value;
        const customSection = document.getElementById('custom-availability-section');
        const recurringSection = document.getElementById('recurring-availability-section');

        if (type === 'custom') {
            customSection.classList.remove('hidden');
            recurringSection.classList.add('hidden');
        } else if (type === 'recurring') {
            customSection.classList.add('hidden');
            recurringSection.classList.remove('hidden');
        } else {
            customSection.classList.add('hidden');
            recurringSection.classList.add('hidden');
        }
    }

    // Add a new time slot for custom availability
    function addAvailabilitySlot() {
        const container = document.getElementById('additional-availability-slots');
        const slotCount = container.children.length + 1;

        const slotDiv = document.createElement('div');
        slotDiv.className = 'grid grid-cols-1 md:grid-cols-3 gap-4 mt-3';
        slotDiv.innerHTML = `
            <div>
                <label for="availability-date-${slotCount}" class="block text-light mb-2">Date</label>
                <input type="date" id="availability-date-${slotCount}" name="availability_dates[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>
            <div>
                <label for="start-time-${slotCount}" class="block text-light mb-2">Start Time</label>
                <input type="time" id="start-time-${slotCount}" name="start_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>
            <div class="relative">
                <label for="end-time-${slotCount}" class="block text-light mb-2">End Time</label>
                <input type="time" id="end-time-${slotCount}" name="end_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <button type="button" onclick="this.parentElement.parentElement.remove()" class="absolute top-9 right-2 text-textMuted hover:text-red-500">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
        `;

        container.appendChild(slotDiv);
    }

    // Set up quick availability options
    function setAddAvailability(option) {
        const today = new Date();
        const availabilityType = document.getElementById('availability-type');

        switch(option) {
            case '24/7':
                availabilityType.value = 'always';
                break;

            case 'weekdays':
                availabilityType.value = 'recurring';
                document.querySelectorAll('input[name="recurring_days[]"]').forEach(checkbox => {
                    if(['monday', 'tuesday', 'wednesday', 'thursday', 'friday'].includes(checkbox.value)) {
                        checkbox.checked = true;
                    } else {
                        checkbox.checked = false;
                    }
                });
                document.getElementById('recurring-start-time').value = '09:00';
                document.getElementById('recurring-end-time').value = '17:00';
                break;

            case 'weekends':
                availabilityType.value = 'recurring';
                document.querySelectorAll('input[name="recurring_days[]"]').forEach(checkbox => {
                    if(['saturday', 'sunday'].includes(checkbox.value)) {
                        checkbox.checked = true;
                    } else {
                        checkbox.checked = false;
                    }
                });
                document.getElementById('recurring-start-time').value = '10:00';
                document.getElementById('recurring-end-time').value = '22:00';
                break;

            case 'current-month':
                availabilityType.value = 'recurring';
                document.querySelectorAll('input[name="recurring_days[]"]').forEach(checkbox => {
                    checkbox.checked = true;
                });

                // Set current month's date range
                const lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
                const startDate = today.toISOString().split('T')[0];
                const endDate = lastDay.toISOString().split('T')[0];

                document.getElementById('recurring-start-date').value = startDate;
                document.getElementById('recurring-end-date').value = endDate;
                document.getElementById('recurring-start-time').value = '09:00';
                document.getElementById('recurring-end-time').value = '21:00';
                break;
        }

        toggleCustomAvailability();
    }

    // Handle file uploads with preview
    document.getElementById('studio_photos').addEventListener('change', handleFileSelect);
    const dropArea = document.getElementById('drop-area');

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight drop area when dragging over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        dropArea.classList.add('border-primary');
    }

    function unhighlight() {
        dropArea.classList.remove('border-primary');
    }

    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        const fileInput = document.getElementById('studio_photos');

        fileInput.files = files;
        handleFileSelect(e);
    }

    function handleFileSelect(e) {
        const files = e.target.files || e.dataTransfer.files;
        const previewContainer = document.getElementById('preview-container');
        previewContainer.innerHTML = '';

        for (let i = 0; i < files.length; i++) {
            if (!files[i].type.match('image.*')) continue;

            const reader = new FileReader();
            reader.onload = (function(file) {
                return function(e) {
                    const div = document.createElement('div');
                    div.className = 'relative';
                    div.innerHTML = `
                        <img src="${e.target.result}" alt="${file.name}" class="h-20 w-20 object-cover rounded-md">
                        <button type="button" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center hover:bg-red-600"
                            onclick="removePreview(this)">×</button>
                    `;
                    previewContainer.appendChild(div);
                };
            })(files[i]);

            reader.readAsDataURL(files[i]);
        }
    }

    function removePreview(button) {
        button.parentElement.remove();
    }
</script>
