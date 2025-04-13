<div class="bg-darkAccent rounded-xl shadow-custom overflow-hidden backdrop-blur-sm border border-border">
    <div class="p-6 border-b border-border">
        <h2 class="text-2xl font-semibold">Profile Settings</h2>
        <p class="text-textMuted mt-1">
            Update your personal information and preferences
        </p>
    </div>

    <div class="p-6 custom-scrollbar">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-darkUI rounded-xl p-6 border border-border">
                    <h3 class="text-lg font-medium mb-4">Profile Image</h3>
                    <div class="profile-image-container">
                        <img id="profile-image" src="https://via.placeholder.com/120" alt="Profile"
                            class="rounded-full w-full h-full object-cover border-2 border-border" />
                        <div class="profile-image-overlay" id="change-image-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <input type="file" id="image-upload" accept="image/*" class="hidden" />
                    <p class="text-center text-textMuted text-sm mt-4">
                        Click on the image to change your profile picture
                    </p>
                    <div class="mt-6">
                        <h4 class="text-md font-medium mb-3">Profile Status</h4>
                        <div class="flex items-center justify-between p-3 bg-darkBg rounded-lg border border-border">
                            <div class="flex items-center">
                                <div class="h-3 w-3 bg-green-500 rounded-full"></div>
                                <span class="ml-2 text-sm">Active</span>
                            </div>
                            <button class="text-xs text-primary hover:text-primaryHover">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-md font-medium mb-3">Account Type</h4>
                        <div class="p-3 bg-darkBg rounded-lg border border-border">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 text-sm">Artist/Producer</span>
                                </div>
                                <span class="text-xs px-2 py-1 bg-primary bg-opacity-20 text-primary rounded-full">
                                    Pro
                                </span>
                            </div>
                            <div class="mt-2 text-xs text-textMuted">
                                Member since: April 2025
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <form id="profile-form" class="space-y-6">
                    <div class="bg-darkUI rounded-xl p-6 border border-border">
                        <h3 class="text-lg font-medium mb-4">Personal Information</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label for="first-name" class="block text-sm font-medium text-gray-300">
                                    First Name
                                </label>
                                <input type="text" id="first-name" value="John"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                            <div class="space-y-1">
                                <label for="last-name" class="block text-sm font-medium text-gray-300">
                                    Last Name
                                </label>
                                <input type="text" id="last-name" value="Doe"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                        </div>
                        <div class="mt-4 space-y-1">
                            <label for="artist-name" class="block text-sm font-medium text-gray-300">
                                Artist/Producer Name
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                                    @
                                </span>
                                <input type="text" id="artist-name" value="producer_john"
                                    class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                        </div>
                        <div class="mt-4 space-y-1">
                            <label for="email" class="block text-sm font-medium text-gray-300">
                                Email
                            </label>
                            <input type="email" id="email" value="john.doe@example.com"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                        <div class="mt-4 space-y-1">
                            <label for="phone" class="block text-sm font-medium text-gray-300">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" value="+1 (555) 123-4567"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>
                    </div>

                    <div class="bg-darkUI rounded-xl p-6 border border-border">
                        <h3 class="text-lg font-medium mb-4">Bio & Social Media</h3>
                        <div class="space-y-1">
                            <label for="bio" class="block text-sm font-medium text-gray-300">
                                Bio
                            </label>
                            <textarea id="bio" rows="4"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 resize-none">
Music producer with over 5 years of experience. Specializing in hip-hop and R&B production.</textarea>
                            <p class="text-xs text-textMuted mt-1">
                                Brief description about yourself that will appear on your
                                profile
                            </p>
                        </div>

                        <div class="mt-4 space-y-4">
                            <div class="space-y-1">
                                <label for="website" class="block text-sm font-medium text-gray-300">
                                    Website
                                </label>
                                <input type="url" id="website" value="https://johndoe-music.com"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label for="instagram" class="block text-sm font-medium text-gray-300">
                                        Instagram
                                    </label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                                            @
                                        </span>
                                        <input type="text" id="instagram" value="producer_john"
                                            class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label for="twitter" class="block text-sm font-medium text-gray-300">
                                        Twitter
                                    </label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                                            @
                                        </span>
                                        <input type="text" id="twitter" value="producer_john"
                                            class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label for="soundcloud" class="block text-sm font-medium text-gray-300">
                                    SoundCloud
                                </label>
                                <input type="url" id="soundcloud" value="https://soundcloud.com/producer_john"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkUI rounded-xl p-6 border border-border">
                        <h3 class="text-lg font-medium mb-4">Preferences</h3>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium">Email Notifications</h4>
                                    <p class="text-sm text-textMuted">
                                        Receive emails about bookings and updates
                                    </p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer" id="email-notifications" />
                                    <div
                                        class="w-11 h-6 bg-darkBg peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium">SMS Notifications</h4>
                                    <p class="text-sm text-textMuted">
                                        Receive text messages for booking confirmations
                                    </p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" id="sms-notifications" />
                                    <div
                                        class="w-11 h-6 bg-darkBg peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium">Profile Visibility</h4>
                                    <p class="text-sm text-textMuted">
                                        Make your profile visible to other users
                                    </p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer" id="profile-visibility" />
                                    <div
                                        class="w-11 h-6 bg-darkBg peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mt-6 space-y-1">
                            <label for="language" class="block text-sm font-medium text-gray-300">
                                Language
                            </label>
                            <select id="language"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 appearance-none">
                                <option value="en">English</option>
                                <option value="es">Spanish</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                            </select>
                        </div>

                        <div class="mt-4 space-y-1">
                            <label for="timezone" class="block text-sm font-medium text-gray-300">
                                Timezone
                            </label>
                            <select id="timezone"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200 appearance-none">
                                <option value="utc-8">Pacific Time (UTC-8)</option>
                                <option value="utc-5">Eastern Time (UTC-5)</option>
                                <option value="utc+0">Greenwich Mean Time (UTC+0)</option>
                                <option value="utc+1">
                                    Central European Time (UTC+1)
                                </option>
                                <option value="utc+9">Japan Standard Time (UTC+9)</option>
                            </select>
                        </div>
                    </div>

                    <div class="bg-darkUI rounded-xl p-6 border border-border">
                        <h3 class="text-lg font-medium mb-4">Security</h3>

                        <div class="space-y-1">
                            <label for="current-password" class="block text-sm font-medium text-gray-300">
                                Current Password
                            </label>
                            <input type="password" id="current-password" placeholder="••••••••"
                                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                            <div class="space-y-1">
                                <label for="new-password" class="block text-sm font-medium text-gray-300">
                                    New Password
                                </label>
                                <input type="password" id="new-password" placeholder="••••••••"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                            <div class="space-y-1">
                                <label for="confirm-password" class="block text-sm font-medium text-gray-300">
                                    Confirm New Password
                                </label>
                                <input type="password" id="confirm-password" placeholder="••••••••"
                                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200" />
                            </div>
                        </div>

                        <p class="text-xs text-textMuted mt-2">
                            Leave password fields empty if you don't want to change it
                        </p>

                        <div class="mt-6">
                            <button type="button"
                                class="text-primary hover:text-primaryHover text-sm font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Enable Two-Factor Authentication
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 justify-end">
                        <button type="button"
                            class="px-6 py-3 bg-darkUI border border-border text-light rounded-lg hover:bg-opacity-80 transition-all duration-200">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-6 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-8 text-center text-xs text-textMuted">
    <p>&copy; 2025 StudioSpace. All rights reserved.</p>
</div>

<script>
    const changeImageBtn = document.getElementById("change-image-btn");
    const imageUpload = document.getElementById("image-upload");
    const profileImage = document.getElementById("profile-image");

    changeImageBtn.addEventListener("click", function() {
        imageUpload.click();
    });

    imageUpload.addEventListener("change", function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    const profileForm = document.getElementById("profile-form");

    profileForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = {
            firstName: document.getElementById("first-name").value,
            lastName: document.getElementById("last-name").value,
            artistName: document.getElementById("artist-name").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            bio: document.getElementById("bio").value,
            website: document.getElementById("website").value,
            instagram: document.getElementById("instagram").value,
            twitter: document.getElementById("twitter").value,
            soundcloud: document.getElementById("soundcloud").value,
            emailNotifications: document.getElementById("email-notifications")
                .checked,
            smsNotifications: document.getElementById("sms-notifications").checked,
            profileVisibility: document.getElementById("profile-visibility").checked,
            language: document.getElementById("language").value,
            timezone: document.getElementById("timezone").value,
        };

        const currentPassword =
            document.getElementById("current-password").value;
        if (currentPassword) {
            const newPassword = document.getElementById("new-password").value;
            const confirmPassword =
                document.getElementById("confirm-password").value;

            if (newPassword !== confirmPassword) {
                showFeedback("New passwords do not match", true);
                return;
            }

            formData.currentPassword = currentPassword;
            formData.newPassword = newPassword;
        }

        console.log("Profile update:", formData);
        showFeedback("Profile updated successfully!");
    });

    function showFeedback(message, isError = false) {
        const feedbackDiv = document.createElement("div");
        feedbackDiv.className = isError ?
            "fixed top-4 left-1/2 transform -translate-x-1/2 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in" :
            "fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in";
        feedbackDiv.textContent = message;
        document.body.appendChild(feedbackDiv);

        setTimeout(() => {
            feedbackDiv.style.opacity = "0";
            feedbackDiv.style.transform = "translate(-50%, -20px)";
            feedbackDiv.style.transition = "opacity 0.5s, transform 0.5s";
            setTimeout(() => {
                document.body.removeChild(feedbackDiv);
            }, 500);
        }, 3000);
    }
</script>
</body>

</html>
