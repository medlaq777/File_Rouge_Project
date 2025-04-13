<main class="flex justify-center items-center flex-col py-12">
    <div class="p-6 custom-scrollbar">
        <h2 class="text-2xl font-semibold text-light mb-6 text-center">Sign In</h2>
        <form id="login-form-element" class="space-y-5">
            <div class="space-y-1">
                <label for="login-email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="login-email"
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
                <input type="password" id="login-password"
                    class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                    placeholder="••••••••" required />
            </div>
            <div class="flex items-center">
                <input id="remember-me" type="checkbox"
                    class="h-4 w-4 text-primary focus:ring-primary focus:ring-offset-darkBg border-border rounded bg-inputBg" />
                <label for="remember-me" class="ml-2 block text-sm text-textMuted">Remember me</label>
            </div>
            <button type="submit"
                class="w-full bg-primary hover:bg-primaryHover text-white py-3 px-4 rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                Sign In
            </button>

            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-border"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-darkAccent text-textMuted">Or continue with</span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <button type="button"
                    class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                            fill="#4285F4" />
                        <path
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                            fill="#34A853" />
                        <path
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                            fill="#FBBC05" />
                        <path
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                            fill="#EA4335" />
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </button>
            </div>
        </form>
        <div class="mt-6 text-center text-sm text-textMuted">
            Don't have an account?
            <a href="{{ route('register') }}"
                class="text-primary hover:text-primaryHover font-medium transition duration-200">
                Register now
            </a>
        </div>
    </div>
</main>
