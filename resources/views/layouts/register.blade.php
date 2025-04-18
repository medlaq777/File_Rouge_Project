<main class="flex justify-center items-center flex-col py-12">
    <div class="p-6 custom-scrollbar">
        <h2 class="text-2xl font-semibold text-light mb-6 text-center">Create Account</h2>
        <form id="register-form-element" action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <div class="space-y-1">
                <label for="fullname" class="block text-sm font-medium text-gray-300">Full Name</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" id="fullname" name="fullname"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="Med Laq" required />
                </div>
            </div>
            <div class="space-y-1">
                <label for="username" class="block text-sm font-medium text-gray-300">Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                        <i class="fas fa-at"></i>
                    </span>
                    <input type="text" id="username" name="username"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="Username" required />
                </div>
            </div>
            <div class="space-y-1">
                <label for="register-email" class="block text-sm font-medium text-gray-300">Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="register-email" name="email"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="your@email.com" required />
                </div>
            </div>
            <div class="space-y-1">
                <label for="register-password" class="block text-sm font-medium text-gray-300">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="register-password" name="password"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="••••••••" required />
                </div>
            </div>
            <div class="space-y-1">
                <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirm Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted">
                        <i class="fas fa-check-double"></i>
                    </span>
                    <input type="password" id="confirm-password" name="password_confirmation"
                        class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                        placeholder="••••••••" required />
                </div>
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
                    <i class="fas fa-plus h-5 w-5"></i>
                    Create Account
                </button>
            </div>
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-border"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-darkAccent text-textMuted">Or continue with</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('auth.provider', 'google') }}"
                    class="flex justify-center items-center gap-3 py-3 px-4 w-full rounded-lg bg-white hover:bg-gray-50 text-gray-700 font-medium border border-gray-200 shadow-md transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                    <i class="fab fa-google text-xl bg-gradient-to-r from-blue-500 via-red-500 to-yellow-500 bg-clip-text text-transparent"></i>
                    <span>Google</span>
                </a>
                <a href="{{ route('auth.provider', 'facebook') }}"
                    class="flex justify-center items-center gap-3 py-3 px-4 w-full rounded-lg bg-[#1877F2] hover:bg-[#166FE5] text-white font-medium border border-[#0d65d9] shadow-md transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                    <i class="fab fa-facebook text-xl"></i>
                    <span>Facebook</span>
                </a>
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
