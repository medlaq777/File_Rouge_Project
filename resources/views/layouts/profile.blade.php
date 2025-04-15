<div class="max-w-4xl mx-auto p-6 border-b">
    <h2 class="text-2xl font-semibold flex items-center justify-center mb-6 text-primary">
        <i class="fas fa-user-circle mr-3 text-primary"></i>
        Profile Settings
    </h2>
    <p class="text-light text-center mb-8">
        Update your personal information and preferences
    </p>
    <form id="profile-form" class="space-y-8" action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Profile Image Section -->
        <div class="rounded-xl p-8 border transition-all duration-300 hover:shadow-lg">
            <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                <i class="fas fa-image mr-2 text-primary"></i>
                Profile Image
            </h3>
            <div class="space-y-2">
                <label for="profile_image" class="block text-sm font-medium text-gray-300 mb-4">
                    Upload Profile Image
                </label>
                <div class="flex flex-col items-center gap-6">
                    <div class="relative group w-32 h-32 rounded-full overflow-hidden border-2 border-primary cursor-pointer" onclick="document.getElementById('profile_image').click()">
                        <img
                            id="image-preview"
                            src="{{ $profile->profile_image ? $profile->profile_image : asset('images/default-profile.png') }}"
                            alt="Profile Image"
                            class="w-full h-full object-cover"
                        >
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <i class="fas fa-camera text-white text-2xl"></i>
                        </div>
                        <input
                            type="file"
                            id="profile_image"
                            name="profile_image"
                            class="hidden"
                            onchange="previewImage(this)"
                        />
                    </div>
                    <div class="flex-1">
                        <p class="text-xs text-textMuted mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            Click on the image to upload a new profile photo. Maximum size: 10MB
                        </p>
                    </div>
                </div>
                <script>
                    function previewImage(input) {
                        if (input.files && input.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('image-preview').src = e.target.result;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
            </div>
        </div>

        <!-- Personal Information Section -->
        <div class="rounded-xl p-8 border transition-all duration-300 hover:shadow-lg">
            <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                <i class="fas fa-id-card mr-2 text-primary"></i>
                Personal Information
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach (['full_name' => 'Full Name', 'username' => 'Username', 'email' => 'Email', 'phone' => 'Phone Number', 'address' => 'Address', 'city' => 'City', 'country' => 'Country'] as $field => $label)
                    <div class="space-y-2">
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-300">
                            {{ $label }}
                        </label>
                        <div class="relative">
                            <i class="fas fa-{{ $field === 'email' ? 'envelope' : ($field === 'phone' ? 'phone-alt' : ($field === 'address' ? 'map-marker-alt' : ($field === 'city' ? 'city' : ($field === 'country' ? 'globe-americas' : 'user')))) }} absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                            <input type="{{ $field === 'email' ? 'email' : 'text' }}" id="{{ $field }}" value="{{ $profile->$field ?? $user->$field }}" name="{{ $field }}"
                                class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bio & Social Media Section -->
        <div class="bg-darkUI rounded-xl p-8 border border-border transition-all duration-300 hover:shadow-lg">
            <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                <i class="fas fa-hashtag mr-2 text-primary"></i>Bio & Social Media
            </h3>
            <div class="space-y-2">
                <label for="bio" class="block text-sm font-medium text-gray-300">
                    Bio
                </label>
                <div class="relative">
                    <textarea id="bio" rows="4" name="bio"
                        class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 resize-none">{{ $profile->bio }}</textarea>
                    <p class="text-xs text-textMuted mt-2 flex items-center">
                        <i class="fas fa-info-circle mr-1"></i>
                        Brief description about yourself that will appear on your profile
                    </p>
                </div>
            </div>
        </div>

        <!-- Security Section -->
        <div class="bg-darkUI rounded-xl p-8 border border-border transition-all duration-300 hover:shadow-lg">
            <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                <i class="fas fa-lock mr-2 text-primary"></i>Security
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                @foreach (['password' => 'New Password', 'password_confirmation' => 'Confirm New Password'] as $field => $label)
                    <div class="space-y-2">
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-300">
                            {{ $label }}
                        </label>
                        <div class="relative">
                            <i class="fas fa-{{ $field === 'password_confirmation' ? 'check-circle' : 'lock-open' }} absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                            <input type="password" id="{{ $field }}" name="{{ $field }}" placeholder="••••••••"
                                class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
            <button type="submit"
                class="px-8 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent flex items-center justify-center shadow-md">
                <i class="fas fa-save mr-2"></i>Save Changes
            </button>
        </div>
    </form>
</div>
