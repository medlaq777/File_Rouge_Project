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
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="BEATRECORDS - Premium Music Studio Rental">
    <meta name="keywords" content="music, studio, rental, premium, beatrecords">
    <meta name="author" content="BEATRECORDS">
    <style>
        @keyframes pulse {
            0% {
                opacity: 0.7;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.7;
            }
        }

        .pulse-led {
            animation: pulse 2s infinite;
            text-shadow: 0 0 5px currentColor;
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
            background-image: linear-gradient(to bottom,
                    rgba(11, 11, 10, 0.95),
                    rgba(11, 11, 10, 0.9)),
                url("data:image/svg+xml,%3Csvg width='600' height='600' viewBox='0 0 800 800' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23222222' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
        }

        .studio-card:hover .studio-image {
            transform: scale(1.05);
        }

        .sidebar-active {
            color: white;
            border-left-color: #e50000;
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
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #1a1a1a;
            margin: 10% auto;
            border: 1px solid #2a2a2a;
            width: 90%;
            max-width: 700px;
            border-radius: 8px;
            animation: fadeIn 0.3s;
        }
    </style>
</head>

<body class="bg-darkBg text-light min-h-screen font-sans antialiased custom-scrollbar">
    @yield('nav')
    @yield('main')
    @yield('addStudios')
    @yield('editStudios')
    <!-- JavaScript -->
    <script>
        // Tab switching functionality
        function showTab(tabId) {
            // Hide all sections
            document.querySelectorAll('main > section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            document.getElementById(tabId).classList.remove('hidden');

            // Update sidebar active state
            document.querySelectorAll('nav a').forEach(link => {
                link.classList.remove('sidebar-active');
            });
            document.getElementById(tabId + '-link')?.classList.add('sidebar-active');
        }

        // Modal functions
        function showAddStudioModal() {
            document.getElementById('add-studio-modal').style.display = 'block';
        }

        function closeAddStudioModal() {
            document.getElementById('add-studio-modal').style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('add-studio-modal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Function to open the edit studio modal and populate it with data
        function showEditStudioModal(studioId, studioName, studioDescription, studioPrice, studioLocation, studioAddress,
            studioImage) {
            // Set the modal to visible
            document.getElementById('edit-studio-modal').style.display = 'block';


            // Set the form values
            document.getElementById('edit-studio-id').value = studioId;
            document.getElementById('edit-studio-name').value = studioName;
            document.getElementById('edit-studio-description').value = studioDescription;
            document.getElementById('edit-studio-price').value = studioPrice;
            document.getElementById('edit-studio-location').value = studioLocation;
            document.getElementById('edit-studio-address').value = studioAddress;

            // Handle the image preview if one exists
            if (studioImage) {
                document.getElementById('current-image-preview').classList.remove('hidden');
                document.getElementById('studio-current-image').src = studioImage;
            } else {
                document.getElementById('current-image-preview').classList.add('hidden');
            }
        }

        // Function to close the edit studio modal
        function closeEditStudioModal() {
            document.getElementById('edit-studio-modal').style.display = 'none';
        }
    </script>
</body>

</html>
