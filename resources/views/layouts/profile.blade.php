<div class="p-6 border-b border-border">
    <h2 class="text-2xl font-semibold flex items-center">
        <i class="fas fa-user-circle mr-3 text-primary"></i>Profile Settings
    </h2>
    <p class="text-textMuted mt-1">
        Update your personal information and preferences
    </p>
</div>

<div class="lg:col-span-2">
    <form id="profile-form" class="space-y-6">
        <!-- Personal Information Section -->
        <div class="bg-darkUI rounded-xl p-6 border border-border transition-all duration-300 hover:shadow-md">
            <h3 class="text-lg font-medium mb-4 flex items-center">
                <i class="fas fa-id-card mr-2 text-primary"></i>Personal Information
            </h3>
            <div class="space-y-1">
                <label for="fullName" class="block text-sm font-medium text-gray-300">
                    Full Name
                </label>
                <div class="relative">
                    <i class="fas fa-user absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                    <input type="text" id="fullName" value="{{ $profile->full_name }}"
                        class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
            </div>
            <div class="mt-4 space-y-1">
                <label for="artist-name" class="block text-sm font-medium text-gray-300">
                    Artist/Producer Name
                </label>
                <div class="relative">
                    <i class="fas fa-music absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                    <input type="text" id="artist-name" value="{{ $profile->username }}"
                        class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
            </div>
            <div class="mt-4 space-y-1">
                <label for="email" class="block text-sm font-medium text-gray-300">
                    Email
                </label>
                <div class="relative">
                    <i class="fas fa-envelope absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                    <input type="email" id="email" value="{{ $user->email }}"
                        class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
            </div>
            <div class="mt-4 space-y-1">
                <label for="phone" class="block text-sm font-medium text-gray-300">
                    Phone Number
                </label>
                <div class="relative">
                    <i class="fas fa-phone-alt absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                    <input type="tel" id="phone" value="{{ $profile->phone }}"
                        class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
            </div>
        </div>

        <!-- Bio & Social Media Section -->
        <div class="bg-darkUI rounded-xl p-6 border border-border transition-all duration-300 hover:shadow-md">
            <h3 class="text-lg font-medium mb-4 flex items-center">
                <i class="fas fa-hashtag mr-2 text-primary"></i>Bio & Social Media
            </h3>
            <div class="space-y-1">
                <label for="bio" class="block text-sm font-medium text-gray-300">
                    Bio
                </label>
                <div class="relative">
                    <textarea id="bio" rows="4"
                        class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 resize-none">{{ $user->bio }}</textarea>
                    <p class="text-xs text-textMuted mt-1 flex items-center">
                        <i class="fas fa-info-circle mr-1"></i>
                        Brief description about yourself that will appear on your profile
                    </p>
                </div>
            </div>

            <div class="mt-4 space-y-4">
                <div class="space-y-1">
                    <label for="website" class="block text-sm font-medium text-gray-300">
                        Website
                    </label>
                    <div class="relative">
                        <i class="fas fa-globe absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="url" id="website" value="https://johndoe-music.com"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label for="instagram" class="block text-sm font-medium text-gray-300">
                            Instagram
                        </label>
                        <div class="relative">
                            <i class="fab fa-instagram absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                            <input type="text" id="instagram" value="producer_john"
                                class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label for="twitter" class="block text-sm font-medium text-gray-300">
                            Twitter
                        </label>
                        <div class="relative">
                            <i class="fab fa-twitter absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                            <input type="text" id="twitter" value="producer_john"
                                class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                    </div>
                </div>

                <div class="space-y-1">
                    <label for="soundcloud" class="block text-sm font-medium text-gray-300">
                        SoundCloud
                    </label>
                    <div class="relative">
                        <i class="fab fa-soundcloud absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="url" id="soundcloud" value="https://soundcloud.com/producer_john"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Section -->
        <div class="bg-darkUI rounded-xl p-6 border border-border transition-all duration-300 hover:shadow-md">
            <h3 class="text-lg font-medium mb-4 flex items-center">
                <i class="fas fa-lock mr-2 text-primary"></i>Security
            </h3>

            <div class="space-y-1">
                <label for="current-password" class="block text-sm font-medium text-gray-300">
                    Current Password
                </label>
                <div class="relative">
                    <i class="fas fa-key absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                    <input type="password" id="current-password" placeholder="••••••••"
                        class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                <div class="space-y-1">
                    <label for="new-password" class="block text-sm font-medium text-gray-300">
                        New Password
                    </label>
                    <div class="relative">
                        <i class="fas fa-lock-open absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="password" id="new-password" placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
                <div class="space-y-1">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-300">
                        Confirm New Password
                    </label>
                    <div class="relative">
                        <i class="fas fa-check-circle absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="password" id="confirm-password" placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
            </div>

            <p class="text-xs text-textMuted mt-2 flex items-center">
                <i class="fas fa-info-circle mr-1"></i>
                Leave password fields empty if you don't want to change it
            </p>

            <div class="mt-6">
                <button type="button"
                    class="text-primary hover:text-primaryHover text-sm font-medium flex items-center group transition-all duration-200">
                    <i class="fas fa-shield-alt h-4 w-4 mr-2 group-hover:scale-110 transition-transform"></i>
                    Enable Two-Factor Authentication
                </button>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-end">
            <button type="button"
                class="px-6 py-3 bg-darkUI border border-border text-light rounded-lg hover:bg-opacity-80 transition-all duration-200 flex items-center justify-center">
                <i class="fas fa-times mr-2"></i>Cancel
            </button>
            <button type="submit"
                class="px-6 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent flex items-center justify-center">
                <i class="fas fa-save mr-2"></i>Save Changes
            </button>
        </div>
    </form>
</div>
