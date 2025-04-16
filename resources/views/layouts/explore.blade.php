<main class="pt-16">

    <section class="relative search-gradient py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Find Your Perfect Studio Space</h1>


                <div class="bg-darkUI bg-opacity-80 p-4 rounded-lg border border-border shadow-custom mb-6">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="flex-1">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-textMuted" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="text" placeholder="City, neighborhood, or address" class="w-full bg-inputBg border border-border rounded-lg py-3 px-10 text-light placeholder-textMuted focus:outline-none focus:ring-1 focus:ring-primary">
                            </div>
                        </div>
                        <div class="sm:w-40">
                            <button class="w-full bg-primary hover:bg-primaryHover text-white py-3 px-4 rounded-lg font-medium transition-all duration-200">
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
                    <h2 class="text-xl font-bold mb-4">Filters</h2>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3">Studio Type</h3>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <input type="checkbox" id="recording" class="filter-checkbox hidden">
                                <label for="recording" class="block text-center py-2 px-3 border border-border rounded-md text-sm cursor-pointer transition-colors duration-200 hover:border-primary">
                                    Recording
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="production" class="filter-checkbox hidden">
                                <label for="production" class="block text-center py-2 px-3 border border-border rounded-md text-sm cursor-pointer transition-colors duration-200 hover:border-primary">
                                    Production
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="mixing" class="filter-checkbox hidden">
                                <label for="mixing" class="block text-center py-2 px-3 border border-border rounded-md text-sm cursor-pointer transition-colors duration-200 hover:border-primary">
                                    Mixing
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="rehearsal" class="filter-checkbox hidden">
                                <label for="rehearsal" class="block text-center py-2 px-3 border border-border rounded-md text-sm cursor-pointer transition-colors duration-200 hover:border-primary">
                                    Rehearsal
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3">Price Range (per hour)</h3>
                        <div class="px-1">
                            <input type="range" min="20" max="200" value="100" class="w-full h-2 bg-darkUI rounded-lg appearance-none cursor-pointer" id="priceRange">
                            <div class="flex justify-between mt-2">
                                <span class="text-sm text-textMuted">$20</span>
                                <span class="text-sm font-medium" id="priceValue">$100</span>
                                <span class="text-sm text-textMuted">$200</span>
                            </div>
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3">Equipment</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="proTools" class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="proTools" class="ml-2 text-sm">Pro Tools</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="logicPro" class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="logicPro" class="ml-2 text-sm">Logic Pro</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="ableton" class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="ableton" class="ml-2 text-sm">Ableton Live</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="flStudio" class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="flStudio" class="ml-2 text-sm">FL Studio</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="drumKit" class="w-4 h-4 rounded border-border bg-inputBg text-primary focus:ring-primary">
                                <label for="drumKit" class="ml-2 text-sm">Drum Kit</label>
                            </div>
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3">Availability</h3>
                        <div class="relative">
                            <input type="date" class="w-full bg-inputBg border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary">
                        </div>
                    </div>


                    <div class="mb-6">
                        <h3 class="font-medium mb-3">Minimum Rating</h3>
                        <div class="flex items-center space-x-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-darkUI text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>


                    <button class="w-full bg-primary hover:bg-primaryHover text-white py-3 rounded-lg font-medium transition-all duration-200">
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
                        <h2 class="text-2xl font-bold">24 Studios Found</h2>
                        <p class="text-textMuted">in New York, NY</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-textMuted">Sort by:</span>
                        <select class="bg-darkUI border border-border rounded-lg py-2 px-3 text-light focus:outline-none focus:ring-1 focus:ring-primary">
                            <option>Recommended</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Highest Rated</option>
                            <option>Most Popular</option>
                        </select>
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.05s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/300" alt="Studio One" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-xs font-medium">
                                Popular
                            </div>
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.9
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Harmony Studios</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">Downtown, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$65</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Recording</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Mixing</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>


                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.1s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/301" alt="Studio Two" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.7
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Beat Factory</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">Midtown, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$75</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Production</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Recording</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>


                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.15s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/302" alt="Studio Three" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-xs font-medium">
                                New
                            </div>
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.8
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Soundwave Studios</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">Brooklyn, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$55</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Rehearsal</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Recording</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>


                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.2s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/303" alt="Studio Four" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.6
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Rhythm Room</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">SoHo, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$80</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Mixing</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Production</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>


                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.25s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/304" alt="Studio Five" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.5
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Echo Chamber</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">East Village, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$60</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Recording</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Rehearsal</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>


                    <div class="studio-card bg-darkUI rounded-xl overflow-hidden border border-border hover:shadow-custom transition-all duration-300 animate-fade-in" style="animation-delay: 0.3s">
                        <div class="relative overflow-hidden h-48">
                            <img src="/api/placeholder/600/305" alt="Studio Six" class="studio-image w-full h-full object-cover transition-transform duration-300">
                            <div class="absolute top-3 left-3 bg-primary text-white px-2 py-1 rounded text-xs font-medium">
                                Featured
                            </div>
                            <div class="absolute top-3 right-3 bg-darkUI bg-opacity-80 text-white px-2 py-1 rounded text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                4.9
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2">Groove Lab</h3>
                            <div class="flex items-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-textMuted mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-sm text-textMuted">Chelsea, New York</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <span class="text-primary font-bold">$90</span>
                                    <span class="text-sm text-textMuted">/hour</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Production</span>
                                    <span class="bg-darkAccent px-2 py-1 rounded-md text-xs">Mixing</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full bg-darkAccent hover:bg-opacity-70 text-center py-2 rounded-lg text-sm font-medium transition-all duration-200 border border-transparent hover:border-border">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>


                <div class="flex justify-center mt-10">
                    <nav class="flex items-center gap-1">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white">1</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">2</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">3</a>
                        <span class="w-10 h-10 flex items-center justify-center text-textMuted">...</span>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">8</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-border text-textMuted hover:text-light hover:border-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
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


    const logo = document.querySelector('header a svg');
    logo.classList.add('animate-pulse-slow');
  </script>
