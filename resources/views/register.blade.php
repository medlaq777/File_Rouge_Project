<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudioSpace - Register</title>
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
          <h2 class="text-2xl font-semibold text-light mb-6 text-center">Create Account</h2>
          <form id="register-form-element" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="space-y-1">
                <label
                  for="first-name"
                  class="block text-sm font-medium text-gray-300"
                  >First Name</label
                >
                <input
                  type="text"
                  id="first-name"
                  class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                  placeholder="John"
                  required
                />
              </div>
              <div class="space-y-1">
                <label
                  for="last-name"
                  class="block text-sm font-medium text-gray-300"
                  >Last Name</label
                >
                <input
                  type="text"
                  id="last-name"
                  class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                  placeholder="Doe"
                  required
                />
              </div>
            </div>
            <div class="space-y-1">
              <label
                for="username"
                class="block text-sm font-medium text-gray-300"
                >Artist/Producer Name</label
              >
              <div class="relative">
                <span
                  class="absolute inset-y-0 left-0 flex items-center pl-3 text-textMuted"
                  >@</span
                >
                <input
                  type="text"
                  id="username"
                  class="w-full pl-8 pr-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                  placeholder="producer_name"
                  required
                />
              </div>
            </div>
            <div class="space-y-1">
              <label
                for="register-email"
                class="block text-sm font-medium text-gray-300"
                >Email</label
              >
              <input
                type="email"
                id="register-email"
                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                placeholder="your@email.com"
                required
              />
            </div>
            <div class="space-y-1">
              <label
                for="register-password"
                class="block text-sm font-medium text-gray-300"
                >Password</label
              >
              <input
                type="password"
                id="register-password"
                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                placeholder="••••••••"
                required
              />
            </div>
            <div class="space-y-1">
              <label
                for="confirm-password"
                class="block text-sm font-medium text-gray-300"
                >Confirm Password</label
              >
              <input
                type="password"
                id="confirm-password"
                class="w-full px-4 py-3 rounded-lg bg-inputBg border border-border text-light placeholder-textMuted focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary shadow-input transition duration-200"
                placeholder="••••••••"
                required
              />
            </div>

            <div class="space-y-1">
              <label class="block text-sm font-medium text-gray-300"
                >I am a:</label
              >
              <div class="grid grid-cols-2 gap-3 mt-1">
                <div
                  class="flex items-center bg-darkUI border border-border rounded-lg px-4 py-3 cursor-pointer hover:border-primary transition-all"
                >
                  <input
                    type="radio"
                    name="user-type"
                    id="artist"
                    class="h-4 w-4 text-primary border-border focus:ring-primary focus:ring-offset-darkBg"
                    checked
                  />
                  <label
                    for="artist"
                    class="ml-3 block text-sm font-medium text-light"
                    >Artist/Producer</label
                  >
                </div>
                <div
                  class="flex items-center bg-darkUI border border-border rounded-lg px-4 py-3 cursor-pointer hover:border-primary transition-all"
                >
                  <input
                    type="radio"
                    name="user-type"
                    id="studio-owner"
                    class="h-4 w-4 text-primary border-border focus:ring-primary focus:ring-offset-darkBg"
                  />
                  <label
                    for="studio-owner"
                    class="ml-3 block text-sm font-medium text-light"
                    >Studio Owner</label
                  >
                </div>
              </div>
            </div>

            <div class="flex items-center">
              <input
                id="terms"
                name="terms"
                type="checkbox"
                class="h-4 w-4 text-primary focus:ring-primary border-border rounded"
                required
              />
              <label for="terms" class="ml-2 block text-sm text-gray-300">
                I agree to the
                <a href="#" class="text-primary hover:underline">Terms of Service</a>
                and
                <a href="#" class="text-primary hover:underline">Privacy Policy</a>
              </label>
            </div>

            <div>
              <button
                type="submit"
                class="w-full bg-primary hover:bg-primaryHover text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex justify-center items-center gap-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-darkBg"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
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
      </div>

      <div class="text-center mt-8 text-sm text-textMuted">
        <p>&copy; 2025 StudioSpace. All rights reserved.</p>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const registerForm = document.getElementById('register-form-element');
        const messageDiv = document.getElementById('register-message');

        registerForm.addEventListener('submit', function(e) {
          e.preventDefault();

          // Get form values
          const firstName = document.getElementById('first-name').value;
          const lastName = document.getElementById('last-name').value;
          const username = document.getElementById('username').value;
          const email = document.getElementById('register-email').value;
          const password = document.getElementById('register-password').value;
          const confirmPassword = document.getElementById('confirm-password').value;
          const userType = document.querySelector('input[name="user-type"]:checked').id;

          // Basic validation
          if (password !== confirmPassword) {
            showMessage('Passwords do not match', 'error');
            return;
          }

          // Here you would typically send an AJAX request to your backend
          // For now, we'll just simulate a successful registration

          // Show loading state
          const submitButton = registerForm.querySelector('button[type="submit"]');
          const originalButtonText = submitButton.innerHTML;
          submitButton.disabled = true;
          submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Creating account...';

          // Simulate API request
          setTimeout(() => {
            showMessage('Account created successfully! Redirecting to login...', 'success');

            // Reset form
            registerForm.reset();

            // Redirect after a delay
            setTimeout(() => {
              window.location.href = '/login';
            }, 2000);

            // Reset button
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
          }, 1500);
        });

        function showMessage(message, type) {
          messageDiv.classList.remove('hidden');
          messageDiv.textContent = message;

          if (type === 'error') {
            messageDiv.className = 'mt-4 text-center text-red-500 bg-red-100 p-2 rounded animate-fade-in';
          } else {
            messageDiv.className = 'mt-4 text-center text-green-500 bg-green-100 p-2 rounded animate-fade-in';
          }
        }
      });
    </script>
  </body>
</html>
