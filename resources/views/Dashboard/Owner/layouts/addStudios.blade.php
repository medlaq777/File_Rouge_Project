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
            <input type="hidden" name="studio_id" value="{{ $studio->id ?? '' }}">
            <div>
                <label for="add-studio-name" class="block text-light mb-2">Studio Name</label>
                <input type="text" id="add-studio-name" name="studio-name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name">
            </div>

            <div>
                <label for="add-studio-description" class="block text-light mb-2">Description</label>
                <textarea id="add-studio-description" name="studio-description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="add-studio-price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
                    <input type="number" id="add-studio-price" name="studio-price" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75">
                </div>
                <div>
                    <label for="add-studio-location" class="block text-light mb-2">Location</label>
                    <input type="text" id="add-studio-location" name="studio-location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State">
                </div>
            </div>

            <div>
                <label for="add-studio-address" class="block text-light mb-2">Full Address</label>
                <input type="text" id="add-studio-address" name="studio-address" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter street address">
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
                        <select id="add-availability-type" name="availability_type" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" onchange="toggleAddCustomAvailability()">
                            <option value="custom">Custom Time Slots</option>
                            <option value="always">Always Available</option>
                            <option value="recurring">Recurring Schedule</option>
                        </select>
                    </div>

                    <!-- Custom Time Slots -->
                    <div id="add-custom-availability-section" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="add-availability-date" class="block text-light mb-2">Date</label>
                                <input type="date" id="add-availability-date" name="availability_date[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="add-start-time" class="block text-light mb-2">Start Time</label>
                                <input type="time" id="add-start-time" name="start_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="add-end-time" class="block text-light mb-2">End Time</label>
                                <input type="time" id="add-end-time" name="end_time[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        <div id="add-additional-availability-slots"></div>
                        <button type="button" onclick="addAddAvailabilitySlot()" class="mt-2 text-primary hover:text-primaryHover flex items-center">
                            <i class="fas fa-plus-circle mr-2"></i> Add More Time Slots
                        </button>
                    </div>

                    <!-- Recurring Schedule -->
                    <div id="add-recurring-availability-section" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <span id="add-recurring-days-label" class="block text-light mb-2">Select Days</span>
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
                                        <label for="add-recurring-start-time" class="block text-light mb-2">Start Time</label>
                                        <input type="time" id="add-recurring-start-time" name="recurring_start_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                    <div>
                                        <label for="add-recurring-end-time" class="block text-light mb-2">End Time</label>
                                        <input type="time" id="add-recurring-end-time" name="recurring_end_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="block text-light mb-2">Validity Period</span>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="add-recurring-start-date" class="block text-light mb-2">From Date</label>
                                    <input type="date" id="add-recurring-start-date" name="recurring_start_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                                <div>
                                    <label for="add-recurring-end-date" class="block text-light mb-2">To Date</label>
                                    <input type="date" id="add-recurring-end-date" name="recurring_end_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
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
                    <label for="add-custom-features" class="block text-light mb-2">Other Features (comma-separated)</label>
                    <input type="text" id="add-custom-features" name="custom_features" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., Green Room, Lounge Area, Kitchen">
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-light mb-2" for="add-studio-image">Studio Image</label>
                <input type="file" id="add-studio-image" name="studio-image" class="hidden" />
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
