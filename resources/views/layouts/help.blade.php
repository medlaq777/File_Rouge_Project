<section class="relative py-16 sm:py-24 bg-darkBg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 mb-16">
            <div class="lg:col-span-6 animate-slide-in-left" style="animation-delay: 0.1s">
                <h1 class="text-4xl tracking-tight font-extrabold text-light sm:text-5xl md:text-6xl">
                    <span class="block">Welcome to our</span>
                    <span class="block text-primary">Help Center</span>
                </h1>
                <p class="mt-6 text-lg text-textMuted sm:max-w-xl">
                    Find answers to common questions, browse tutorials, and get the support you need.
                    Our team is here to help you succeed with our platform.
                </p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="#faq-section"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primaryHover md:py-4 md:text-lg md:px-10">
                            Browse FAQs
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#contact-form"
                            class="w-full flex items-center justify-center px-8 py-3 border border-border text-base font-medium rounded-md text-light bg-darkUI hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 relative sm:max-w-lg lg:mt-0 lg:col-span-6 lg:flex lg:items-center animate-slide-in-right"
                style="animation-delay: 0.3s">
                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <div class="relative block w-full bg-darkAccent rounded-lg overflow-hidden">
                        <img src="{{ asset('images/help-center.jpg') }}" alt="Help center support" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button type="button"
                                class="flex items-center justify-center h-16 w-16 rounded-full bg-primary bg-opacity-75 transition-colors duration-300 hover:bg-opacity-100 focus:outline-none">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Box -->
        <div class="max-w-3xl mx-auto mb-16 animate-fade-in" style="animation-delay: 0.5s">
            <div class="bg-darkUI rounded-xl p-6 shadow-lg">
                <h2 class="text-2xl font-bold text-light text-center mb-4">How can we help you today?</h2>
                <div class="relative">
                    <input type="text" placeholder="Search for tutorials, FAQs, and more..."
                        class="w-full px-6 py-4 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    <button class="absolute right-3 top-3 p-1 bg-primary text-white rounded-lg p-2">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Help Categories -->
        <h2 class="text-3xl font-bold text-light text-center mb-8">Popular Help Topics</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- Category 1 -->
            <div class="bg-darkUI rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.6s">
                <div class="text-primary text-3xl mb-4 flex justify-center">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-xl font-bold text-light text-center mb-2">Getting Started</h3>
                <p class="text-textMuted text-center mb-4">New to BeatRecords? Learn the basics here.</p>
                <div class="text-center">
                    <a href="#" class="text-primary hover:text-primaryHover font-medium">View Guides →</a>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="bg-darkUI rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.7s">
                <div class="text-primary text-3xl mb-4 flex justify-center">
                    <i class="fas fa-music"></i>
                </div>
                <h3 class="text-xl font-bold text-light text-center mb-2">Managing Your Music</h3>
                <p class="text-textMuted text-center mb-4">Tips for organizing and managing your tracks.</p>
                <div class="text-center">
                    <a href="#" class="text-primary hover:text-primaryHover font-medium">Learn More →</a>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="bg-darkUI rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.8s">
                <div class="text-primary text-3xl mb-4 flex justify-center">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h3 class="text-xl font-bold text-light text-center mb-2">Billing & Payments</h3>
                <p class="text-textMuted text-center mb-4">Subscription information and payment help.</p>
                <div class="text-center">
                    <a href="#" class="text-primary hover:text-primaryHover font-medium">View Details →</a>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="bg-darkUI rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.9s">
                <div class="text-primary text-3xl mb-4 flex justify-center">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-light text-center mb-2">Account Security</h3>
                <p class="text-textMuted text-center mb-4">Keep your account safe and secure.</p>
                <div class="text-center">
                    <a href="#" class="text-primary hover:text-primaryHover font-medium">Security Tips →</a>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div id="faq-section" class="max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-light text-center mb-8">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-darkUI rounded-lg overflow-hidden animate-fade-in" style="animation-delay: 1s">
                    <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                            onclick="toggleFaq(this)">
                        How do I upload my own beats?
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-textMuted">
                            To upload your beats, navigate to your dashboard and click on the "Upload" button.
                            You can drag and drop your audio files or use the file browser. Make sure your audio
                            meets our quality requirements for the best experience.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-darkUI rounded-lg overflow-hidden animate-fade-in" style="animation-delay: 1.1s">
                    <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                            onclick="toggleFaq(this)">
                        What file formats do you support?
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-textMuted">
                            We support WAV, MP3, AIFF, and FLAC formats. For the best quality, we recommend
                            uploading WAV files at 44.1kHz, 24-bit depth.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-darkUI rounded-lg overflow-hidden animate-fade-in" style="animation-delay: 1.2s">
                    <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                            onclick="toggleFaq(this)">
                        How do royalties and payments work?
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-textMuted">
                            Royalties are calculated based on stream counts and paid out monthly. You can view
                            your earnings in your dashboard and request a payout once you reach the minimum
                            threshold of $50. We support multiple payment methods including PayPal and direct deposit.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-darkUI rounded-lg overflow-hidden animate-fade-in" style="animation-delay: 1.3s">
                    <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                            onclick="toggleFaq(this)">
                        Can I change my subscription plan?
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-textMuted">
                            Yes, you can upgrade or downgrade your subscription at any time from your account
                            settings. Changes will take effect at the start of your next billing cycle.
                            Upgrades give you immediate access to new features.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="#" class="text-primary hover:text-primaryHover font-medium">
                    View all FAQs <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Contact Form -->
        <div id="contact-form" class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-light text-center mb-8">Still Need Help?</h2>
            <div class="bg-darkUI rounded-xl p-8 shadow-lg animate-fade-in" style="animation-delay: 1.4s">
                <form>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="block text-light font-medium mb-2">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="email" class="block text-light font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="md:col-span-2">
                            <label for="subject" class="block text-light font-medium mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-4 py-3 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="md:col-span-2">
                            <label for="message" class="block text-light font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 bg-darkBg text-light border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="w-full py-3 bg-primary hover:bg-primaryHover text-white font-medium rounded-lg transition-colors duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector('i');

        // Toggle content visibility
        content.classList.toggle('hidden');

        // Rotate icon
        if (content.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    }
</script>
