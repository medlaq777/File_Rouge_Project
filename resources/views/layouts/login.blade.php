<main class="flex justify-center items-center flex-col py-12">
    <div class="p-6 custom-scrollbar">
        <h2 class="text-2xl font-semibold text-light mb-6 text-center">Sign In</h2>
        <form id="login-form-element" action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div class="space-y-1">
                <label for="login-email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="login-email" name="email"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="your@email.com" required />
            </div>
            <div class="space-y-1">
                <div class="flex justify-between items-center">
                    <label for="login-password" class="block text-sm font-medium text-gray-300">Password</label>
                    <a href="#"
                        class="text-xs text-primary hover:text-primaryHover transition duration-200">Forgot
                        password?</a>
                </div>
                <input type="password" id="login-password" name="password"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="••••••••" required />
            </div>
            <div class="flex items-center">
                <input id="remember-me" type="checkbox"
                    class="h-4 w-4 text-primary focus:ring-primary focus:ring-offset-darkBg border-border rounded bg-inputBg" />
                <label for="remember-me" class="ml-2 block text-sm text-textMuted">Remember me</label>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex justify-center items-center gap-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkBg">
                    <i class="fas fa-lock"></i>
                    Sign In
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
        </form>
        <div class="text-center mt-6">
            <p class="text-textMuted">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-primary hover:underline">Register now</a>
            </p>
        </div>
        <div id="login-message" class="mt-4 text-center hidden"></div>
    </div>
</main>
