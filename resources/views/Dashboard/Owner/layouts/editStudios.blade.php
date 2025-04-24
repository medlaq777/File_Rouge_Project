<!-- Edit Studio Modal -->
<div id="edit-studio-modal" class="modal">
    <div class="modal-content p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-white">Edit Studio</h2>
            <button onclick="closeEditStudioModal()" class="text-textMuted hover:text-white">
                <i class="fas fa-times h-6 w-6"></i>
            </button>
        </div>
        <form class="space-y-6" action="{{ route('update.studio') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="studio_id" id="edit-studio-id">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <!-- Basic Info -->
            <div>
                <label for="edit-studio-name" class="block text-light mb-2">Studio Name</label>
                <input type="text" id="edit-studio-name" name="name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name" required>
            </div>

            <div>
                <label for="edit-studio-description" class="block text-light mb-2">Description</label>
                <textarea id="edit-studio-description" name="description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio" required></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="edit-studio-location" class="block text-light mb-2">Location</label>
                    <input type="text" id="edit-studio-location" name="location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State" required>
                </div>
                <div>
                    <label for="edit-studio-price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
                    <input type="number" id="edit-studio-price" name="price" min="1" max="200" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75" required>
                </div>
            </div>

            <!-- Category Selection -->
            <div>
                <label for="edit-category-id" class="block text-light mb-2">Studio Category</label>
                <select id="edit-category-id" name="category_id" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
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
                    <span id="edit-quick-setup-label" class="block text-light mb-2">Quick Setup</span>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3" aria-labelledby="edit-quick-setup-label">
                        <button type="button" onclick="setEditAvailability('24/7')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-infinity mr-2"></i> 24/7
                        </button>
                        <button type="button" onclick="setEditAvailability('weekdays')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-briefcase mr-2"></i> Weekdays
                        </button>
                        <button type="button" onclick="setEditAvailability('weekends')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-umbrella-beach mr-2"></i> Weekends
                        </button>
                        <button type="button" onclick="setEditAvailability('current-month')" class="bg-inputBg border border-border text-light py-2 px-4 rounded-md hover:bg-darkAccent transition-colors flex items-center justify-center">
                            <i class="fas fa-calendar-alt mr-2"></i> This Month
                        </button>
                    </div>
                </div>

                <!-- Custom Availability Selection -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <select id="edit-availability-type" name="availability_type" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" onchange="toggleEditCustomAvailability()">
                            <option value="custom">Custom Time Slots</option>
                            <option value="always">Always Available</option>
                            <option value="recurring">Recurring Schedule</option>
                        </select>
                    </div>

                    <!-- Custom Time Slots -->
                    <div id="edit-custom-availability-section" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="edit-availability-date" class="block text-light mb-2">Date</label>
                                <input type="date" id="edit-availability-date" name="availability_dates[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="edit-start-time" class="block text-light mb-2">Start Time</label>
                                <input type="time" id="edit-start-time" name="start_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div class="relative">
                                <label for="edit-end-time" class="block text-light mb-2">End Time</label>
                                <input type="time" id="edit-end-time" name="end_times[]" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        <div id="edit-additional-availability-slots"></div>
                        <button type="button" onclick="addEditAvailabilitySlot()" class="mt-2 text-primary hover:text-primaryHover flex items-center">
                            <i class="fas fa-plus-circle mr-2"></i> Add More Time Slots
                        </button>
                    </div>

                    <!-- Recurring Schedule -->
                    <div id="edit-recurring-availability-section" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <span id="edit-recurring-days-label" class="block text-light mb-2">Select Days</span>
                                <div class="flex flex-wrap gap-2" aria-labelledby="edit-recurring-days-label">
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
                                        <label for="edit-recurring-start-time" class="block text-light mb-2">Start Time</label>
                                        <input type="time" id="edit-recurring-start-time" name="recurring_start_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                    <div>
                                        <label for="edit-recurring-end-time" class="block text-light mb-2">End Time</label>
                                        <input type="time" id="edit-recurring-end-time" name="recurring_end_time" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="block text-light mb-2">Validity Period</span>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="edit-recurring-start-date" class="block text-light mb-2">From Date</label>
                                    <input type="date" id="edit-recurring-start-date" name="recurring_start_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                                <div>
                                    <label for="edit-recurring-end-date" class="block text-light mb-2">To Date</label>
                                    <input type="date" id="edit-recurring-end-date" name="recurring_end_date" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
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
                    <label for="edit-custom-features" class="block text-light mb-2">Other Features (comma-separated)</label>
                    <input type="text" id="edit-custom-features" name="custom_features" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., Green Room, Lounge Area, Kitchen">
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-light mb-2" for="edit-studio-photos">Studio Images</label>
                <input type="file" id="edit-studio-photos" name="photos[]" class="hidden" multiple accept="image/*" />
                <div class="border-2 border-dashed border-border rounded-md p-8 text-center" id="edit-drop-area">
                    <i class="fas fa-image mx-auto h-12 w-12 text-textMuted" style="font-size:3rem;"></i>
                    <p class="mt-2 text-sm text-textMuted">Drag and drop images here, or click to browse</p>
                    <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors" onclick="document.getElementById('edit-studio-photos').click();">Select Files</button>
                    <div id="edit-preview-container" class="mt-4 flex flex-wrap gap-2"></div>
                </div>
            </div>

            <div class="flex justify-end space-x-4 pt-4 border-t border-border">
                <button type="button" onclick="closeEditStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
                <button type="submit" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200 cursor-pointer">Update Studio</button>
            </div>
        </form>
    </div>
</div>

