<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-light">Featured Studios</h2>
            <a href="{{ route('explore') }}"
                class="text-primary hover:text-primaryHover font-medium flex items-center">
                View All
                <i class="fas fa-chevron-right ml-1"></i>
            </a>
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
                        <div class="mt-2 flex flex-wrap gap-1">
                            {{-- @foreach ($studio['features'] as $feature)
                                <span class="bg-darkUI text-textMuted text-xs px-2 py-1 rounded">{{ $feature }}</span>
                            @endforeach --}}
                        </div>
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
    </div>
</section>
