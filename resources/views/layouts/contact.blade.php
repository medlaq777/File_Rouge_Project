<section class="relative py-16 sm:py-24 bg-darkBg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
