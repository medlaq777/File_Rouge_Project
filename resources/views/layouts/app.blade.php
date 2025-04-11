<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('BEATRECORD', 'BEATRECORD') - Premium Music Studio Rental</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/logo.svg')}}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
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

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease forwards;
    }

    .animate-slide-in-left {
        animation: slideInLeft 0.6s ease forwards;
    }

    .animate-slide-in-right {
        animation: slideInRight 0.6s ease forwards;
    }

    .animate-pulse-slow {
        animation: pulse 3s infinite ease-in-out;
    }

    body {
        background-image:
            linear-gradient(to bottom, rgba(11, 11, 10, 0.98), rgba(11, 11, 10, 0.95)),
            url("data:image/svg+xml,%3Csvg width='600' height='600' viewBox='0 0 800 800' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23222222' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
    }

    .studio-card:hover .studio-img {
        transform: scale(1.05);
    }

    .studio-img {
        transition: transform 0.5s ease;
    }

    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #E50000;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }
</style>
<body>

    <body>

        <main>
            @yield('navbar')
            @yield('hero')
            @yield('hiw')
            @yield('studios')
            @yield('help')
            @yield('terms')
            @yield('contact')
            @yield('faq')
            @yield('footer')
        </main>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const menuButton = document.getElementById("mobile-menu-button");
                const mobileMenu = document.getElementById("mobile-menu");

                menuButton.addEventListener("click", function() {
                    if (mobileMenu.classList.contains("hidden")) {
                        mobileMenu.classList.remove("hidden");

                        mobileMenu.style.animation = "fadeIn 0.3s ease forwards";
                    } else {
                        mobileMenu.style.animation = "fadeIn 0.3s ease backwards reverse";
                        setTimeout(() => {
                            mobileMenu.classList.add("hidden");
                        }, 300);
                    }
                });

                const studioCards = document.querySelectorAll(".studio-card");
                studioCards.forEach((card) => {
                    card.addEventListener("mouseenter", function() {
                        this.querySelector(".studio-img").style.transform = "scale(1.05)";
                    });

                    card.addEventListener("mouseleave", function() {
                        this.querySelector(".studio-img").style.transform = "scale(1)";
                    });
                });

                const observerOptions = {
                    root: null,
                    rootMargin: "0px",
                    threshold: 0.1,
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = "1";
                            entry.target.style.transform = "translateY(0)";
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);

                document
                    .querySelectorAll(
                        ".animate-fade-in, .animate-slide-in-left, .animate-slide-in-right"
                    )
                    .forEach((el) => {
                        el.style.opacity = "0";

                        if (el.classList.contains("animate-slide-in-left")) {
                            el.style.transform = "translateX(-20px)";
                        } else if (el.classList.contains("animate-slide-in-right")) {
                            el.style.transform = "translateX(20px)";
                        } else {
                            el.style.transform = "translateY(10px)";
                        }
                        observer.observe(el);
                    });
            });
        </script>
    </body>
</html>
