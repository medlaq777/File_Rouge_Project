<main class="pt-16">
    <section class="relative search-gradient py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl sm:text-4xl font-bold mb-6 text-center text-primary">Find Your Perfect Studio Space
                </h1>

                <div class="bg-darkUI bg-opacity-80 p-4 rounded-lg border border-border shadow-custom mb-6">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="flex-1">
                            <div class="relative">
                                <i
                                    class="fas fa-map-marker-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-textMuted"></i>
                                <input type="text" placeholder="City, or Studio Name" id="searchInput"
                                    class="w-full bg-inputBg border border-border rounded-lg py-3 px-10 text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary">
                            </div>
                        </div>
                        <div class="sm:w-40">
                            <button type="button" id="searchButton"
                                class="w-full bg-primary hover:bg-primaryHover text-white py-3 px-4 rounded-lg font-medium transition-all duration-200">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">

            <div class="lg:w-1/4">
                <div class="bg-darkAccent rounded-lg border border-border p-5 sticky top-20">
                    <h2 class="text-primary text-xl font-bold mb-4">Filters</h2>
                    <div class="mb-6">
                        <h3 class="font-medium mb-3 text-primary">Price Range (per hour)</h3>
                        <div class="px-1">
                            <input type="range" min="0" max="100" value="50"
                                class="w-full h-2 bg-darkUI rounded-lg appearance-none cursor-pointer" id="priceRange">
                            <div class="flex justify-between mt-2">
                                <span class="text-sm text-textMuted">$0</span>
                                <span class="text-sm font-medium text-textMuted" id="priceValue">$50</span>
                                <span class="text-sm text-textMuted">$100</span>
                            </div>
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3 text-primary">Equipment</h3>
                        @foreach ($stud as $equipment)
                            <div class="flex items-center mb-2">
                                <input type="checkbox" id="{{ $equipment['name'] }}"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary filter-checkbox">
                                <label for="{{ $equipment['name'] }}"
                                    class="ml-2 text-sm text-textMuted">{{ $equipment['name'] }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-6">
                        <h3 class="font-medium mb-3 text-primary">Availability</h3>
                        <div class="relative">
                            <input type="text" id="availabilityCalendar"
                                class="w-full bg-inputBg border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary"
                                placeholder="Select a date">
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const calendarInput = document.getElementById('availabilityCalendar');
                            flatpickr(calendarInput, {
                                dateFormat: "Y-m-d",
                                minDate: "today",
                            });
                        });
                    </script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                    <button
                        class="w-full bg-primary hover:bg-primaryHover text-white py-3 rounded-lg font-medium transition-all duration-200">
                        Apply Filters
                    </button>


                    <button class="w-full text-center text-textMuted hover:text-light text-sm mt-3">
                        Reset Filters
                    </button>
                </div>
            </div>

            <div class="lg:w-3/4">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-primary">{{ $count }} Studios Found</h2>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-textMuted">Sort by:</span>
                        <select
                            class="bg-darkUI border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary"
                            onchange="handleSortChange(this.value, event)">
                            <option value="lowest">Price: Low to High</option>
                            <option value="highest">Price: High to Low</option>
                            <option value="mostRated">Highest Rated</option>
                        </select>
                    </div>
                    <script>
                        function handleSortChange(value, event) {
                            event.preventDefault();
                            fetch(`/explore/sort?sort=${value}`)
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Failed to fetch sorted data');
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    const studiosContainer = document.getElementById('studiosContainer');
                                    studiosContainer.innerHTML = '';

                                    if (data.length === 0) {
                                        studiosContainer.innerHTML = '<p class="text-center text-textMuted">No studios found.</p>';
                                        return;
                                    }

                                    data.forEach(studio => {
                                        const studioCard = `
                                        <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card">
                                            <div class="relative h-48 overflow-hidden">
                                                <img src="${studio.image || 'https://placehold.co/600x400'}" alt="${studio.name}"
                                                    class="w-full h-full object-cover studio-img">
                                            </div>
                                            <div class="p-4">
                                                <div class="flex items-center justify-between">
                                                    <h3 class="text-lg font-medium text-light">${studio.name}</h3>
                                                    <div class="flex items-center">
                                                        <i class="fas fa-star text-yellow-400 text-sm"></i>
                                                        <span class="ml-1 text-sm text-textMuted">${studio.rating}</span>
                                                    </div>
                                                </div>
                                                <p class="mt-1 text-sm text-textMuted">${studio.location}</p>
                                                <div class="mt-4 flex items-center justify-between">
                                                    <span class="text-light font-bold">$${studio.price}<span class="text-textMuted font-normal text-sm">/hr</span></span>
                                                    <button class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">
                                                        Book Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        `;
                                        studiosContainer.innerHTML += studioCard;
                                    });
                                })
                                .catch(error => console.error('Error:', error));
                        }
                    </script>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4" id="studiosContainer">
                    @foreach ($studios as $studio)
                        <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card animate-fade-in"
                            style="animation-delay: {{ $loop->iteration * 0.1 }}s">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://placehold.co/600x400" alt="{{ $studio['name'] }}"
                                    class="w-full h-full object-cover studio-img">
                                @if (isset($studio['badge']))
                                    <div class="absolute top-0 right-0 p-2">
                                        <span
                                            class="bg-{{ $studio['badge']['color'] }} text-white text-xs font-medium px-2.5 py-0.5 rounded">
                                            {{ $studio['badge']['text'] }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-light">{{ $studio['name'] }}</h3>
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-400 text-sm"></i>
                                        <span class="ml-1 text-sm text-textMuted">{{ $studio['rating'] }}</span>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-textMuted">{{ $studio['location'] }}</p>
                                <div class="mt-4 flex items-center justify-between">
                                    <span class="text-light font-bold">${{ $studio['price'] }}<span
                                            class="text-textMuted font-normal text-sm">/hr</span></span>
                                    <button
                                        class="px-3 py-1 bg-primary hover:bg-primaryHover text-white text-sm font-medium rounded">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <script>
                    const searchInput = document.getElementById('searchInput');
                    const studiosContainer = document.getElementById('studiosContainer');

                    const performSearch = () => {
                        const query = searchInput.value.trim();
                        const url = query ? `/explore/search?search=${encodeURIComponent(query)}` : '/explore/search';

                        fetch(url, {
                                method: 'GET',
                                headers: {
                                    'Content-Type': 'application/json',
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                studiosContainer.innerHTML = '';

                                if (data.length === 0) {
                                    studiosContainer.innerHTML = '<p class="text-center text-textMuted">No studios found.</p>';
                                    return;
                                }

                                data.forEach(studio => {
                                    const studioCard = `
                                        <div class="bg-darkAccent rounded-lg overflow-hidden border border-border studio-card">
                                            <div class="relative h-48 overflow-hidden">
                                                <img src="${studio.image || 'https://placehold.co/600x400'}" alt="${studio.name}"
                                                    class="w-full h-full object-cover studio-img">
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-lg font-medium text-light">${studio.name}</h3>
                                                <p class="mt-1 text-sm text-textMuted">${studio.location}</p>
                                                <span class="text-light font-bold">$${studio.price}<span
                                                    class="text-textMuted font-normal text-sm">/hr</span></span>
                                `;
                                    studiosContainer.innerHTML += studioCard;
                                });
                            })
                            .catch(error => console.error('Error:', error));
                    };
                    searchInput.addEventListener('input', performSearch);
                </script>
                <div class="flex justify-center mt-12">
                    <nav class="inline-flex items-center gap-3 p-4 bg-darkAccent rounded-2xl shadow-lg">
                        <!-- Previous page button -->
                        <a href="{{ $pagination['current_page'] > 1 ? $pagination['prev_page_url'] : '#' }}"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border {{ $pagination['current_page'] > 1 ? 'text-textMuted hover:bg-primary hover:text-white transition-all duration-200' : 'text-textMuted opacity-50 cursor-not-allowed' }}">
                            <i class="fas fa-chevron-left text-sm"></i>
                        </a>

                        <!-- Page numbers -->
                        @foreach ($pagination['links'] as $link)
                            @if (is_numeric(trim(strip_tags($link['label']))) && $link['url'])
                                <a href="{{ $link['url'] }}"
                                    class="w-10 h-10 flex items-center justify-center rounded-lg {{ $link['active'] ? 'bg-primary text-white font-medium' : 'border border-border text-light hover:bg-primary hover:text-white transition-all duration-200' }}">
                                    {{ trim(strip_tags($link['label'])) }}
                                </a>
                            @endif
                        @endforeach

                        <!-- Next page arrow -->
                        <a href="{{ $pagination['current_page'] < $pagination['last_page'] ? $pagination['next_page_url'] : '#' }}"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border {{ $pagination['current_page'] < $pagination['last_page'] ? 'text-textMuted hover:bg-primary hover:text-white transition-all duration-200' : 'text-textMuted opacity-50 cursor-not-allowed' }}">
                            <i class="fas fa-chevron-right text-sm"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', (event) => {
        event.stopPropagation();
        mobileMenu.classList.toggle('hidden');
    });


    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target) && !mobileMenu
            .classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });


    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });


    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');

    priceRange.addEventListener('input', () => {
        priceValue.textContent = `$${priceRange.value}`;
    });


    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const label = document.querySelector(`label[for="${checkbox.id}"]`);
            if (checkbox.checked) {
                label.classList.add('bg-primary', 'text-white', 'border-primary');
            } else {
                label.classList.remove('bg-primary', 'text-white', 'border-primary');
            }
        });
    });


    const ratingButtons = document.querySelectorAll('.mb-6:nth-of-type(5) button');
    ratingButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            ratingButtons.forEach((btn, i) => {
                if (i <= index) {
                    btn.classList.remove('bg-darkUI');
                    btn.classList.add('bg-primary');
                } else {
                    btn.classList.remove('bg-primary');
                    btn.classList.add('bg-darkUI');
                }
            });
        });
    });


    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
