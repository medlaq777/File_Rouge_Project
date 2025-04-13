<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudioSpace - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#E50000",
              primaryHover: "#C20000",
              darkBg: "#0b0b0a",
              darkAccent: "#141414",
              darkUI: "#1a1a1a",
              light: "#f8fafc",
              inputBg: "#0d0d0d",
              border: "#2a2a2a",
              textMuted: "#999999",
            },
            boxShadow: {
              custom: "0 8px 20px -4px rgba(0, 0, 0, 0.7)",
              input: "0 2px 4px rgba(0, 0, 0, 0.2) inset",
            },
            fontFamily: {
              sans: ["Montserrat", "system-ui", "sans-serif"],
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      @keyframes pulse {
        0%,
        100% {
          opacity: 1;
        }
        50% {
          opacity: 0.8;
        }
      }
      .animate-fade-in {
        animation: fadeIn 0.5s ease forwards;
      }
      .animate-pulse-slow {
        animation: pulse 3s infinite ease-in-out;
      }
      .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
      }
      .custom-scrollbar::-webkit-scrollbar-track {
        background: #0d0d0d;
      }
      .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e50000;
        border-radius: 2px;
      }
      body {
        background-image: linear-gradient(
            to bottom,
            rgba(11, 11, 10, 0.95),
            rgba(11, 11, 10, 0.9)
          ),
          url("data:image/svg+xml,%3Csvg width='600' height='600' viewBox='0 0 800 800' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23222222' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
      }
    </style>
  </head>
  <body
    class="bg-darkBg text-light min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8 font-sans antialiased"
  >
    <div class="w-full max-w-md animate-fade-in">
      <div class="text-center mb-8">
        <h1
          class="text-4xl font-bold text-primary tracking-tight flex justify-center items-center gap-2"
        >
        <a href="{{ '/' }}" class="flex-shrink-0 flex items-center">
            <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="BEATRECORDS Logo" class="w-24">
        </a>
        </h1>
        <p class="text-textMuted mt-2 text-sm sm:text-base">
          Premium Music Studio Rental Platform
        </p>
      </div>

      <div
        class="bg-darkAccent rounded-xl shadow-custom overflow-hidden backdrop-blur-sm border border-border"
      >
        <div class="p-6 custom-scrollbar">
          <h2 class="text-2xl font-semibold text-light mb-6 text-center">Sign In</h2>
          <form id="login-form-element" class="space-y-5">
            <div class="space-y-1">
              <label
                for="login-email"
                class="block text-sm font-medium text-gray-300"
                >Email</label
              >
              <input
                type="email"
                id="login-email"
                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                placeholder="your@email.com"
                required
              />
            </div>
            <div class="space-y-1">
              <div class="flex justify-between items-center">
                <label
                  for="login-password"
                  class="block text-sm font-medium text-gray-300"
                  >Password</label
                >
                <a
                  href="#"
                  class="text-xs text-primary hover:text-primaryHover transition duration-200"
                  >Forgot password?</a
                >
              </div>
              <input
                type="password"
                id="login-password"
                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                placeholder="••••••••"
                required
              />
            </div>
            <div class="flex items-center">
              <input
                id="remember-me"
                type="checkbox"
                class="h-4 w-4 text-primary focus:ring-primary focus:ring-offset-darkBg border-border rounded bg-inputBg"
              />
              <label for="remember-me" class="ml-2 block text-sm text-textMuted"
                >Remember me</label
              >
            </div>
            <button
              type="submit"
              class="w-full bg-primary hover:bg-primaryHover text-white py-3 px-4 rounded-lg font-medium transition-all duration-200 transform hover:translate-y-[-1px] active:translate-y-[1px] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent"
            >
              Sign In
            </button>

            <div class="relative my-6">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-border"></div>
              </div>
              <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-darkAccent text-textMuted"
                  >Or continue with</span
                >
              </div>
            </div>

            <div class="grid grid-cols-3 gap-3">
              <button
                type="button"
                class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent"
              >
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                    fill="#4285F4"
                  />
                  <path
                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                    fill="#34A853"
                  />
                  <path
                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                    fill="#FBBC05"
                  />
                  <path
                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                    fill="#EA4335"
                  />
                </svg>
              </button>
              <button
                type="button"
                class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent"
              >
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>
              <button
                type="button"
                class="inline-flex justify-center items-center py-2.5 px-4 border border-border rounded-lg shadow-sm bg-darkUI text-sm font-medium text-light hover:bg-darkBg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkAccent"
              >
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                  />
                </svg>
              </button>
            </div>
          </form>
          <div class="mt-6 text-center text-sm text-textMuted">
            Don't have an account?
            <a
              href="{{ route('register') }}"
              class="text-primary hover:text-primaryHover font-medium transition duration-200"
            >
              Register now
            </a>
          </div>
        </div>
      </div>

      <div class="mt-10 text-center">
        <p class="text-textMuted text-xs">
          Trusted by over 5,000+ artists and producers worldwide
        </p>
        <div
          class="mt-4 grid grid-cols-4 gap-2 justify-items-center items-center"
        >
          <div
            class="h-6 w-16 bg-darkAccent rounded-md animate-pulse-slow"
          ></div>
          <div
            class="h-6 w-16 bg-darkAccent rounded-md animate-pulse-slow"
            style="animation-delay: 0.3s"
          ></div>
          <div
            class="h-6 w-16 bg-darkAccent rounded-md animate-pulse-slow"
            style="animation-delay: 0.6s"
          ></div>
          <div
            class="h-6 w-16 bg-darkAccent rounded-md animate-pulse-slow"
            style="animation-delay: 0.9s"
          ></div>
        </div>
      </div>

      <div class="mt-8 text-center text-xs text-textMuted">
        <p>&copy; 2025 StudioSpace. All rights reserved.</p>
      </div>
    </div>

    <script>
      function showFeedback(message, isError = false) {
        const feedbackDiv = document.createElement("div");
        feedbackDiv.className = isError
          ? "fixed top-4 left-1/2 transform -translate-x-1/2 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in"
          : "fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in";
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

      const loginFormElement = document.getElementById("login-form-element");

      loginFormElement.addEventListener("submit", function (e) {
        e.preventDefault();
        const email = document.getElementById("login-email").value;
        const password = document.getElementById("login-password").value;

        if (!email || !password) {
          showFeedback("Please fill in all fields", true);
          return;
        }
        console.log("Login attempt:", { email });
        showFeedback("Login successful! Redirecting to dashboard...");
      });
    </script>
  </body>
</html>
