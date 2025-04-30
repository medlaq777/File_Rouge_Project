<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('BEATRECORDS', 'BEATRECORDS') - Premium Music Studio Rental</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/logo.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
        <meta name="description" content="BEATRECORDS - Premium Music Studio Rental">
        <meta name="keywords" content="music, studio, rental, premium, beatrecords">
        <meta name="author" content="BEATRECORDS">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Enhanced Base Styles */
        :root {
            --primary: #e50000;
            --primary-hover: #c70000;
            --dark-bg: #0b0b0a;
            --dark-accent: #131313;
            --dark-ui: #1a1a1a;
            --border: #2a2a2a;
            --text-muted: #8a8a8a;
            --text-light: #e0e0e0;
            --success: #1db954;
            --warning: #ffb800;
            --info: #3291ff;
        }

        * {
            transition: all 0.2s ease-in-out;
        }

        @keyframes pulse {
            0% { opacity: 0.7; }
            50% { opacity: 1; }
            100% { opacity: 0.7; }
        }

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

        @keyframes glow {
            0%, 100% {
                box-shadow: 0 0 5px rgba(229, 0, 0, 0.2);
            }
            50% {
                box-shadow: 0 0 15px rgba(229, 0, 0, 0.4);
            }
        }

        .pulse-led {
            animation: pulse 2s infinite;
            text-shadow: 0 0 5px currentColor;
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
            background: var(--primary);
            border-radius: 2px;
        }

        body {
            background-image: linear-gradient(to bottom,
                    rgba(11, 11, 10, 0.97),
                    rgba(11, 11, 10, 0.95)),
                url("data:image/svg+xml,%3Csvg width='600' height='600' viewBox='0 0 800 800' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23222222' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            font-family: 'Montserrat', sans-serif;
            color: var(--text-light);
            line-height: 1.6;
            letter-spacing: 0.2px;
        }

        .studio-card:hover .studio-image {
            transform: scale(1.05);
        }

        .sidebar-active {
            color: white;
            border-left-color: var(--primary);
            background-color: rgba(229, 0, 0, 0.1);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: #1a1a1a;
            margin: 5% auto;
            border: 1px solid #2a2a2a;
            width: 90%;
            max-width: 700px;
            border-radius: 12px;
            box-shadow: 0 20px 50px -20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease-out;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-darkBg text-light min-h-screen font-sans antialiased custom-scrollbar">
    @yield('nav') <!-- Navbar -->
    @yield('main') <!-- Main content -->
    @yield('book') <!-- Book section -->
    <!-- JavaScript for Tab Navigation -->
    <script>
        // Function to hide all tabs and show the selected one
        function showTab(tabId) {
            // Hide all sections
            document.querySelectorAll('main > section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            document.getElementById(tabId).classList.remove('hidden');

            // Update sidebar active state
            document.querySelectorAll('.sidebar-active').forEach(link => {
                link.classList.remove('sidebar-active');
                link.classList.remove('border-primary');
                link.classList.add('border-transparent');
            });

            // Add active state to clicked link
            const activeLink = document.getElementById(tabId + '-link');
            if (activeLink) {
                activeLink.classList.add('sidebar-active');
                activeLink.classList.remove('border-transparent');
                activeLink.classList.add('border-primary');
            }
        }

        // Add new menu items for Borrow Studios, Book Studio
        document.addEventListener('DOMContentLoaded', function() {
            // Add Borrow Studios link to sidebar
            const borrowStudiosLink = document.createElement('li');
            borrowStudiosLink.innerHTML = `
                <a href="#" onclick="showTab('borrow-studios')" id="borrow-studios-link"
                    class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                    <i class="fas fa-handshake mr-3"></i>
                    Borrow Studios
                </a>
            `;

            // Add Book Studio link to sidebar
            const bookStudioLink = document.createElement('li');
            bookStudioLink.innerHTML = `
                <a href="#" onclick="showTab('book-studio')" id="book-studio-link"
                    class="flex items-center py-3 px-4 text-textMuted hover:text-light border-l-2 border-transparent hover:border-primary transition-all duration-200">
                    <i class="fas fa-calendar-plus mr-3"></i>
                    Book Studio
                </a>
            `;

            // Insert at appropriate position in sidebar
            const sidebar = document.querySelector('nav ul');
            const findStudiosLink = document.getElementById('find-studios-link').parentNode;
            sidebar.insertBefore(borrowStudiosLink, findStudiosLink.nextSibling);
            sidebar.insertBefore(bookStudioLink, borrowStudiosLink.nextSibling);

            // Animation for page transitions
            document.head.insertAdjacentHTML('beforeend', `
                <style>
                    .animate-fade-in {
                        animation: fadeIn 0.3s ease-in-out;
                    }
                    @keyframes fadeIn {
                        from { opacity: 0; transform: translateY(10px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                </style>
            `);
        });
    </script>
</body>

</html>
