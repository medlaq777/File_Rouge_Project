<main class="flex justify-center items-center flex-col py-12">
    <div class="p-6 custom-scrollbar">
        <h2 class="text-2xl font-semibold text-light mb-6 text-center">Create Account</h2>
        <form id="register-form-element" action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <div class="space-y-1">
                <label for="full-name" class="block text-sm font-medium text-gray-300">Full Name</label>
                <input type="text" id="full-name" name="full-name"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="John Doe" required />
            </div>
            <div class="space-y-1">
                <label for="username" class="block text-sm font-medium text-gray-300">Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">@</span>
                    <input type="text" id="username" name="username"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="Username" required />
                </div>
            </div>
            <div class="space-y-1">
                <label for="register-email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="register-email" name="email"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="your@email.com" required />
            </div>
            <div class="space-y-1">
                <label for="register-password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" id="register-password" name="password"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="••••••••" required />
            </div>
            <div class="space-y-1">
                <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirm Password</label>
                <input type="password" id="confirm-password" name="password_confirmation"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="••••••••" required />
            </div>

            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-300">I am a:</label>
                <div class="grid grid-cols-2 gap-3 mt-1">
                    <div
                        class="flex items-center bg-darkUI border border-border rounded-lg px-4 py-3 cursor-pointer hover:border-primary transition-all">
                        <input type="radio" name="role" id="artist" name="artist" value="artist"
                            class="h-4 w-4 text-primary border-border focus:ring-primary focus:ring-offset-darkBg"
                            checked />
                        <label for="artist" class="ml-3 block text-sm font-medium text-light">Artist</label>
                    </div>
                    <div
                        class="flex items-center bg-darkUI border border-border rounded-lg px-4 py-3 cursor-pointer hover:border-primary transition-all">
                        <input type="radio" name="role" id="studio-owner" name="owner" value="owner"
                            class="h-4 w-4 text-primary border-border focus:ring-primary focus:ring-offset-darkBg" />
                        <label for="studio-owner" class="ml-3 block text-sm font-medium text-light">Studio Owner</label>
                    </div>
                </div>
            </div>

            <div class="flex items-center">
                <input id="terms" name="terms" type="checkbox"
                    class="h-4 w-4 text-primary focus:ring-primary border-border rounded" required />
                <label for="terms" class="ml-2 block text-sm text-gray-300">
                    I agree to the
                    <a href="#" class="text-primary hover:underline">Terms of Service</a>
                    and
                    <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                </label>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex justify-center items-center gap-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkBg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Create Account
                </button>
            </div>

            <div class="text-center mt-6">
                <p class="text-textMuted">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary hover:underline">Log in</a>
                </p>
            </div>
        </form>
        <div id="register-message" class="mt-4 text-center hidden"></div>
    </div>
</main>
