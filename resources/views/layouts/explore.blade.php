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
                                <input type="text" placeholder="City, or Studio Name"
                                    class="w-full bg-inputBg border border-border rounded-lg py-3 px-10 text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary">
                            </div>
                        </div>
                        <div class="sm:w-40">
                            <button
                                class="w-full bg-primary hover:bg-primaryHover text-white py-3 px-4 rounded-lg font-medium transition-all duration-200">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const searchInput = document.querySelector('input[type="text"]');
        const searchButton = document.querySelector('button[type="submit"]');

        searchButton.addEventListener('click', (event) => {
            event.preventDefault();
            const query = searchInput.value.trim();
            if (query) {
                fetch(`/search?query=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        // Handle the search results here
                        console.log(data);
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                    });
            }
        });
        searchInput.addEventListener('keypress', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault();
                const query = searchInput.value.trim();
                if (query) {
                    fetch(`/search?query=${encodeURIComponent(query)}`)
                        .then(response => response.json())
                        .then(data => {
                            // Handle the search results here
                            console.log(data);
                        })
                        .catch(error => {
                            console.error('Error fetching search results:', error);
                        });
            }
        });
    </script>
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
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="proTools"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="proTools" class="ml-2 text-sm text-textMuted">Pro Tools</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="logicPro"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="logicPro" class="ml-2 text-sm text-textMuted">Logic Pro</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="ableton"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="ableton" class="ml-2 text-sm text-textMuted">Ableton Live</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="flStudio"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="flStudio" class="ml-2 text-sm text-textMuted">FL Studio</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="drumKit"
                                    class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="drumKit" class="ml-2 text-sm text-textMuted">Drum Kit</label>
                            </div>
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3 text-primary">Availability</h3>
                        <div class="relative">
                            <input type="date"
                                class="w-full bg-inputBg border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary">
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3 text-primary">Minimum Rating</h3>
                        <div class="flex items-center space-x-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white">
                                <i class="fas fa-star"></i>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <i class="fas fa-star"></i>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <i class="fas fa-star"></i>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <i class="fas fa-star"></i>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>


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
                        <h2 class="text-2xl font-bold text-primary">{{ count($studios) }} Studios Found</h2>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-textMuted">Sort by:</span>
                        <select
                            class="bg-darkUI border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary">
                            <option>Recommended</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Highest Rated</option>
                            <option>Most Popular</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
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
                <div class="flex justify-center mt-10">
                    <nav class="flex items-center gap-1">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white">1</a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">2</a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">3</a>
                        <span class="w-10 h-10 flex items-center justify-center text-textMuted">...</span>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">8</a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
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
