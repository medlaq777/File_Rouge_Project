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

            <!-- Existing Fields -->
            <div>
                <label for="studio-name" class="block text-light mb-2">Studio Name</label>
                <input type="text" id="studio-name" name="studio-name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name">
            </div>

            <div>
                <label for="studio-description" class="block text-light mb-2">Description</label>
                <textarea id="studio-description" name="studio-description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="studio-price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
                    <input type="number" id="studio-price" name="studio-price" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75">
                </div>
                <div>
                    <label for="studio-location" class="block text-light mb-2">Location</label>
                    <input type="text" id="studio-location" name="studio-location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State">
                </div>
            </div>

            <div>
                <label for="studio-address" class="block text-light mb-2">Full Address</label>
                <input type="text" id="studio-address" name="studio-address" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter street address">
            </div>

            <!-- Enhanced Availability Section with Quick Options -->
            <div class="border-t border-border pt-6">
                <h3 class="text-lg font-semibold text-white mb-4">Studio Availability</h3>

                <!-- Quick Availability Options -->
                <div class="mb-6">
                    <label class="block text-light mb-2">Quick Setup</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <button type="button" onclick="setAvailability('24/7')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-infinity mr-2"></i> 24/7
                        </button>
                        <button type="button" onclick="setAvailability('weekdays')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-briefcase mr-2"></i> Weekdays
                        </button>
                        <button type="button" onclick="setAvailability('weekends')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-umbrella-beach mr-2"></i> Weekends
                        </button>
                        <button type="button" onclick="setAvailability('current-month')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
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
                                <input type="date" id="availability-date" name="availability_date[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="start-time" class="block text-light mb-2">Start Time</label>
                                <input type="time" id="start-time" name="start_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="end-time" class="block text-light mb-2">End Time</label>
                                <input type="time" id="end-time" name="end_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
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
                                <label class="block text-light mb-2">Select Days</label>
                                <div class="flex flex-wrap gap-2">
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
                                <label class="block text-light mb-2">Time Range</label>
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
                            <label class="block text-light mb-2">Validity Period</label>
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
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="soundproof" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Soundproof</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="sound_system" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Sound System</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="lighting_equipment" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Lighting Equipment</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="air_conditioning" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Air Conditioning</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="wifi" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">WiFi</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="parking" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Parking</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="instruments" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Instruments Available</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="recording_equipment" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">Recording Equipment</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="features[]" value="24_7_access" class="form-checkbox h-5 w-5 text-primary border-border bg-inputBg rounded focus:ring-primary">
                        <span class="text-light">24/7 Access</span>
                    </label>
                </div>
                <div class="mt-4">
                    <label for="custom-features" class="block text-light mb-2">Other Features (comma-separated)</label>
                    <input type="text" id="custom-features" name="custom_features" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., Green Room, Lounge Area, Kitchen">
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-light mb-2" for="studio-image">Studio Image</label>
                <input type="file" id="studio-image" name="studio-image" class="hidden" />
                <div class="border-2 border-dashed border-border rounded-md p-8 text-center">
                    <i class="fas fa-image mx-auto h-12 w-12 text-textMuted" style="font-size:3rem;"></i>
                    <p class="mt-2 text-sm text-textMuted">Drag and drop an image here, or click to browse</p>
                    <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors" onclick="document.getElementById('studio-image').click();">Select File</button>
                </div>
            </div>

            <div class="flex justify-end space-x-4 pt-4 border-t border-border">
                <button type="button" onclick="closeAddStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
                <button type="submit" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200 cursor-pointer">Add Studio</button>
            </div>
        </form>
    </div>
</div>

<script>
    function addAvailabilitySlot() {
        const additionalSlotsContainer = document.getElementById('additional-availability-slots');
        const slotCount = additionalSlotsContainer.querySelectorAll('.availability-slot').length + 1;

        const newSlot = document.createElement('div');
        newSlot.className = 'availability-slot grid grid-cols-1 md:grid-cols-3 gap-4 mt-4';
        newSlot.innerHTML = `
            <div>
                <label for="availability-date-${slotCount}" class="block text-light mb-2">Date</label>
                <input type="date" id="availability-date-${slotCount}" name="availability_date[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>
            <div>
                <label for="start-time-${slotCount}" class="block text-light mb-2">Start Time</label>
                <input type="time" id="start-time-${slotCount}" name="start_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>
            <div>
                <label for="end-time-${slotCount}" class="block text-light mb-2">End Time</label>
                <input type="time" id="end-time-${slotCount}" name="end_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>
        `;

        additionalSlotsContainer.appendChild(newSlot);
    }

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

    function setAvailability(type) {
        const availabilityType = document.getElementById('availability-type');
        const today = new Date();

        switch(type) {
            case '24/7':
                availabilityType.value = 'always';
                toggleCustomAvailability();
                break;

            case 'weekdays':
                availabilityType.value = 'recurring';
                toggleCustomAvailability();

                // Check all weekday checkboxes
                ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'].forEach(day => {
                    document.querySelector(`input[name="recurring_days[]"][value="${day}"]`).checked = true;
                });

                // Set typical business hours
                document.getElementById('recurring-start-time').value = '09:00';
                document.getElementById('recurring-end-time').value = '17:00';

                // Set from today to end of year
                document.getElementById('recurring-start-date').value = today.toISOString().split('T')[0];
                document.getElementById('recurring-end-date').value = `${today.getFullYear()}-12-31`;
                break;

            case 'weekends':
                availabilityType.value = 'recurring';
                toggleCustomAvailability();

                // Check weekend checkboxes
                ['saturday', 'sunday'].forEach(day => {
                    document.querySelector(`input[name="recurring_days[]"][value="${day}"]`).checked = true;
                });

                // Set typical weekend hours
                document.getElementById('recurring-start-time').value = '10:00';
                document.getElementById('recurring-end-time').value = '20:00';

                // Set from today to end of year
                document.getElementById('recurring-start-date').value = today.toISOString().split('T')[0];
                document.getElementById('recurring-end-date').value = `${today.getFullYear()}-12-31`;
                break;

            case 'current-month':
                availabilityType.value = 'recurring';
                toggleCustomAvailability();

                // Check all days
                document.querySelectorAll('input[name="recurring_days[]"]').forEach(checkbox => {
                    checkbox.checked = true;
                });

                // Set all day availability
                document.getElementById('recurring-start-time').value = '00:00';
                document.getElementById('recurring-end-time').value = '23:59';

                // Set for current month only
                const firstDay = new Date(today.getFullYear(), today.getMonth(), 1);
                const lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);

                document.getElementById('recurring-start-date').value = firstDay.toISOString().split('T')[0];
                document.getElementById('recurring-end-date').value = lastDay.toISOString().split('T')[0];
                break;
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleCustomAvailability();
    });
    </script>
{{-- <!-- Add Studio Modal -->
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
        <div>
          <label for="studio-name" class="block text-light mb-2">Studio Name</label>
          <input type="text" id="studio-name" name="studio-name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name">
        </div>

        <div>
          <label for="studio-description" class="block text-light mb-2">Description</label>
          <textarea id="studio-description" name="studio-description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="studio-price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
            <input type="number" id="studio-price" name="studio-price" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75">
          </div>

          <div>
            <label for="studio-location" class="block text-light mb-2">Location</label>
            <input type="text" id="studio-location" name="studio-location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State">
          </div>
        </div>

        <div>
          <label for="studio-address" class="block text-light mb-2">Full Address</label>
          <input type="text" id="studio-address" name="studio-address" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter street address">
        </div>

        <div>
          <label class="block text-light mb-2" for="studio-image">Studio Image</label>
          <input type="file" id="studio-image" name="studio-image" class="hidden" />
          <div class="border-2 border-dashed border-border rounded-md p-8 text-center">
            <i class="fas fa-image mx-auto h-12 w-12 text-textMuted" style="font-size:3rem;"></i>
            <p class="mt-2 text-sm text-textMuted">Drag and drop an image here, or click to browse</p>
            <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors" onclick="document.getElementById('studio-image').click();">Select File</button>
          </div>
        </div>

        <div class="flex justify-end space-x-4 pt-4 border-t border-border">
          <button type="button" onclick="closeAddStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
          <button type="submit" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200 cursor-pointer">Add Studio</button>
        </div>
      </form>
    </div>
  </div> --}}
