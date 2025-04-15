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
                <label for="profile_image" class="block text-sm font-medium text-gray-300">
                    Upload Profile Image
                </label>
                <div class="relative">
                    <input type="file" id="profile_image" name="profile_image"
                        class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                </div>
                @if ($profile->image)
                    <div class="mt-4">
                        <div class="max-w-4xl mx-auto p-6 border-b">
                            <h2 class="text-2xl font-semibold flex items-center justify-center mb-6 text-primary">
                                <i class="fas fa-user-circle mr-3 text-primary"></i>
                                Profile Settings
                            </h2>
                            <p class="text-light text-center mb-8">
                                Update your personal information and preferences
                            </p>
                            <form id="profile-form" class="space-y-8" action="{{ route('updateProfile') }}"
                                method="POST">
                                @csrf
                                <!-- Personal Information Section -->
                                <div class="rounded-xl p-8 border transition-all duration-300 hover:shadow-lg">
                                    <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                                        <i class="fas fa-id-card mr-2 text-primary"></i>
                                        Personal Information
                                    </h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label for="full_name" class="block text-sm font-medium text-gray-300">
                                                Full Name
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-user absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="text" id="full_name" value="{{ $profile->full_name }}"
                                                    name="full_name"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="username" class="block text-sm font-medium text-gray-300">
                                                Username
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-music absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="text" id="username" value="{{ $profile->username }}"
                                                    name="username"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="email" class="block text-sm font-medium text-gray-300">
                                                Email
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-envelope absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="email" id="email" value="{{ $user->email }}"
                                                    name="email"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="phone" class="block text-sm font-medium text-gray-300">
                                                Phone Number
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-phone-alt absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="tel" id="phone" value="{{ $profile->phone }}"
                                                    name="phone"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="address" class="block text-sm font-medium text-gray-300">
                                                Address
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-map-marker-alt absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="text" id="address" value="{{ $profile->address }}"
                                                    name="address"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="city" class="block text-sm font-medium text-gray-300">
                                                City
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-city absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="text" id="city" value="{{ $profile->city }}"
                                                    name="city"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="country" class="block text-sm font-medium text-gray-300">
                                                Country
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-globe-americas absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="text" id="country" value="{{ $profile->country }}"
                                                    name="country"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bio & Social Media Section -->
                                <div
                                    class="bg-darkUI rounded-xl p-8 border border-border transition-all duration-300 hover:shadow-lg">
                                    <h3 class="text-lg font-medium mb-6 flex items-center">
                                        <i class="fas fa-hashtag mr-2 text-primary"></i>Bio & Social Media
                                    </h3>
                                    <div class="space-y-2">
                                        <label for="bio" class="block text-sm font-medium text-gray-300">
                                            Bio
                                        </label>
                                        <div class="relative">
                                            <textarea id="bio" rows="4"
                                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 resize-none">{{ $user->bio }}</textarea>
                                            <p class="text-xs text-textMuted mt-2 flex items-center">
                                                <i class="fas fa-info-circle mr-1"></i>
                                                Brief description about yourself that will appear on your profile
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Security Section -->
                                <div
                                    class="bg-darkUI rounded-xl p-8 border border-border transition-all duration-300 hover:shadow-lg">
                                    <h3 class="text-lg font-medium mb-6 flex items-center">
                                        <i class="fas fa-lock mr-2 text-primary"></i>Security
                                    </h3>

                                    <div class="space-y-2 mb-6">
                                        <label for="current-password" class="block text-sm font-medium text-gray-300">
                                            Current Password
                                        </label>
                                        <div class="relative">
                                            <i
                                                class="fas fa-key absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                            <input type="password" id="current-password" placeholder="••••••••"
                                                class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                        <div class="space-y-2">
                                            <label for="new-password" class="block text-sm font-medium text-gray-300">
                                                New Password
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-lock-open absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="password" id="new-password" placeholder="••••••••"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label for="confirm-password"
                                                class="block text-sm font-medium text-gray-300">
                                                Confirm New Password
                                            </label>
                                            <div class="relative">
                                                <i
                                                    class="fas fa-check-circle absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                                                <input type="password" id="confirm-password" placeholder="••••••••"
                                                    class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                                    <button type="button"
                                        class="px-8 py-3 bg-darkUI border border-border text-light rounded-lg hover:bg-opacity-80 transition-all duration-200 flex items-center justify-center">
                                        <i class="fas fa-times mr-2"></i>Cancel
                                    </button>
                                    <button type="submit"
                                        class="px-8 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent flex items-center justify-center shadow-md">
                                        <i class="fas fa-save mr-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>

                        <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Image"
                            class="rounded-lg w-32 h-32 object-cover">
                    </div>
                @endif
            </div>
        </div>

        <!-- Personal Information Section -->
        <div class="rounded-xl p-8 border transition-all duration-300 hover:shadow-lg">
            <h3 class="text-lg font-medium mb-6 flex items-center text-primary">
                <i class="fas fa-id-card mr-2 text-primary"></i>
                Personal Information
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="full_name" class="block text-sm font-medium text-gray-300">
                        Full Name
                    </label>
                    <div class="relative">
                        <i class="fas fa-user absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="text" id="full_name" value="{{ $profile->full_name }}" name="full_name"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="username" class="block text-sm font-medium text-gray-300">
                        Username
                    </label>
                    <div class="relative">
                        <i class="fas fa-music absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="text" id="username" value="{{ $profile->username }}" name="username"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-300">
                        Email
                    </label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="email" id="email" value="{{ $user->email }}" name="email"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-300">
                        Phone Number
                    </label>
                    <div class="relative">
                        <i class="fas fa-phone-alt absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="tel" id="phone" value="{{ $profile->phone }}" name="phone"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="address" class="block text-sm font-medium text-gray-300">
                        Address
                    </label>
                    <div class="relative">
                        <i class="fas fa-map-marker-alt absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="text" id="address" value="{{ $profile->address }}" name="address"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="city" class="block text-sm font-medium text-gray-300">
                        City
                    </label>
                    <div class="relative">
                        <i class="fas fa-city absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="text" id="city" value="{{ $profile->city }}" name="city"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="country" class="block text-sm font-medium text-gray-300">
                        Country
                    </label>
                    <div class="relative">
                        <i class="fas fa-globe-americas absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="text" id="country" value="{{ $profile->country }}" name="country"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
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
                        class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 resize-none">{{ $user->bio }}</textarea>
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
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-300">
                        New Password
                    </label>
                    <div class="relative">
                        <i class="fas fa-lock-open absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="password" id="password" placeholder="••••••••" name="password"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-300">
                        Confirm New Password
                    </label>
                    <div class="relative">
                        <i class="fas fa-check-circle absolute top-1/2 left-3 -translate-y-1/2 text-textMuted"></i>
                        <input type="password" id="confirm-password" placeholder="••••••••"
                            name="password_confirmation"
                            class="w-full pl-10 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
            <button type="button"
                class="px-8 py-3 bg-darkUI border border-border text-light rounded-lg hover:bg-opacity-80 transition-all duration-200 flex items-center justify-center">
                <i class="fas fa-times mr-2"></i>Cancel
            </button>
            <button type="submit"
                class="px-8 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent flex items-center justify-center shadow-md">
                <i class="fas fa-save mr-2"></i>Save Changes
            </button>
        </div>
    </form>
</div>
