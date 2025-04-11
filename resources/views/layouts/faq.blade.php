<section class="relative py-16 sm:py-24 bg-darkBg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- FAQ Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Left Sidebar - Popular Questions -->
            <div class="lg:col-span-1">
                <div class="bg-darkUI rounded-xl p-6 shadow-lg sticky top-24">
                    <h3 class="text-xl font-bold text-light mb-4 border-b border-border pb-3">Popular Questions</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#faq1" class="text-primary hover:text-primaryHover">How do I upload my music?</a>
                        </li>
                        <li>
                            <a href="#faq4" class="text-primary hover:text-primaryHover">How are royalties calculated?</a>
                        </li>
                        <li>
                            <a href="#faq7" class="text-primary hover:text-primaryHover">Can I change my subscription?</a>
                        </li>
                        <li>
                            <a href="#faq12" class="text-primary hover:text-primaryHover">What audio formats are supported?</a>
                        </li>
                        <li>
                            <a href="#faq15" class="text-primary hover:text-primaryHover">How to delete my account?</a>
                        </li>
                    </ul>

                    <h3 class="text-xl font-bold text-light mt-8 mb-4 border-b border-border pb-3">Need More Help?</h3>
                    <a href="/help#contact-form" class="flex items-center text-primary hover:text-primaryHover">
                        <i class="fas fa-headset mr-2"></i> Contact Support
                    </a>
                </div>
            </div>

            <!-- Right Content - FAQ Groups -->
            <div class="lg:col-span-3">
                <!-- Getting Started FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Getting Started</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div id="faq1" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I create an account on BeatRecords?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    Creating an account is easy! Click on the "Sign Up" button in the top right corner of our website.
                                    You can register using your email address or sign up with your Google or Apple account.
                                    Follow the prompts to complete your profile information, and you're ready to go!
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div id="faq2" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                What subscription plans does BeatRecords offer?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    BeatRecords offers three subscription tiers:
                                </p>
                                <ul class="list-disc pl-6 text-textMuted mb-3">
                                    <li><strong class="text-light">Free Plan:</strong> Basic access with limited uploads and standard analytics</li>
                                    <li><strong class="text-light">Pro Plan ($9.99/month):</strong> Unlimited uploads, advanced analytics, and priority distribution</li>
                                    <li><strong class="text-light">Premium Plan ($19.99/month):</strong> Everything in Pro, plus exclusive promotional opportunities, 1-on-1 support, and custom profile features</li>
                                </ul>
                                <p class="text-textMuted">
                                    All paid plans come with a 7-day free trial. You can upgrade or downgrade your plan at any time from your account settings.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div id="faq3" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                Is BeatRecords available in my country?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    BeatRecords is currently available in over 180 countries worldwide. However, some features may be limited in certain regions due to licensing restrictions.
                                    To check if our service is fully available in your country, please visit our regional availability page or contact our support team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Management FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Account Management</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 4 -->
                        <div id="faq4" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I reset my password?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    To reset your password, click on "Sign In" and then select "Forgot Password." Enter the email address associated with your account,
                                    and we'll send you instructions to reset your password. For security reasons, the reset link is only valid for 24 hours.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div id="faq5" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I update my profile information?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    To update your profile, go to your account settings by clicking on your profile picture in the top-right corner and selecting "Profile Settings."
                                    Here you can edit your name, bio, profile picture, social media links, and other information. Don't forget to click "Save Changes" when you're done.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div id="faq6" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I enable two-factor authentication?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    To enable two-factor authentication:
                                </p>
                                <ol class="list-decimal pl-6 text-textMuted">
                                    <li>Go to Account Settings</li>
                                    <li>Select "Security"</li>
                                    <li>Click "Enable" next to Two-Factor Authentication</li>
                                    <li>Choose your preferred method (SMS or authenticator app)</li>
                                    <li>Follow the on-screen instructions to complete setup</li>
                                </ol>
                                <p class="text-textMuted mt-3">
                                    We strongly recommend enabling two-factor authentication for enhanced account security.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription & Billing FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Subscription & Billing</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 7 -->
                        <div id="faq7" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                Can I change my subscription plan?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    Yes, you can upgrade or downgrade your subscription at any time from your account settings. Changes will take effect at the start of your next billing cycle.
                                    Upgrades give you immediate access to new features, while downgrades will be applied when your current billing period ends.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div id="faq8" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I update my payment method?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    To update your payment method, go to Account Settings > Billing > Payment Methods. Here you can add a new payment method or edit existing ones.
                                    We accept major credit cards, PayPal, and in some regions, direct bank transfers. For security, you may need to verify your identity when changing payment methods.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div id="faq9" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I cancel my subscription?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    To cancel your subscription, go to Account Settings > Billing > Subscription Management and click "Cancel Subscription."
                                    You'll continue to have access to your subscription benefits until the end of your current billing period.
                                    Please note that we don't offer refunds for partial billing periods.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Uploading & Managing Music FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Uploading & Managing Music</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 10 -->
                        <div id="faq10" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I upload my beats?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    To upload your beats:
                                </p>
                                <ol class="list-decimal pl-6 text-textMuted">
                                    <li>Go to your Dashboard</li>
                                    <li>Click the "Upload" button</li>
                                    <li>Drag and drop your files or click to browse</li>
                                    <li>Add track details, artwork, and metadata</li>
                                    <li>Choose your licensing options</li>
                                    <li>Click "Publish" or save as draft</li>
                                </ol>
                            </div>
                        </div>

                        <!-- FAQ Item 11 -->
                        <div id="faq11" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How many tracks can I upload?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted">
                                    The number of tracks you can upload depends on your subscription plan:
                                </p>
                                <ul class="list-disc pl-6 text-textMuted mt-3">
                                    <li><strong class="text-light">Free Plan:</strong> Up to 5 tracks per month, 25 tracks total</li>
                                    <li><strong class="text-light">Pro Plan:</strong> 100 tracks per month, unlimited total</li>
                                    <li><strong class="text-light">Premium Plan:</strong> Unlimited uploads</li>
                                </ul>
                            </div>
                        </div>

                        <!-- FAQ Item 12 -->
                        <div id="faq12" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                What audio formats do you support?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    We support the following audio formats:
                                </p>
                                <ul class="list-disc pl-6 text-textMuted">
                                    <li>WAV (recommended for best quality)</li>
                                    <li>AIFF</li>
                                    <li>FLAC</li>
                                    <li>MP3 (minimum 320kbps)</li>
                                </ul>
                                <p class="text-textMuted mt-3">
                                    For the best quality, we recommend uploading WAV files at 44.1kHz, 24-bit depth. Maximum file size per track is 2GB.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Distribution & Royalties FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Distribution & Royalties</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 13 -->
                        <div id="faq13" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How are royalties calculated?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    Royalties are calculated based on:
                                </p>
                                <ul class="list-disc pl-6 text-textMuted">
                                    <li>Stream counts across all platforms</li>
                                    <li>Downloads and direct purchases</li>
                                    <li>Licensing agreements</li>
                                    <li>Regional rates (which vary by country)</li>
                                </ul>
                                <p class="text-textMuted mt-3">
                                    We pay out 85% of all revenue generated by your music directly to you. Royalties are calculated monthly and paid out when you reach the minimum threshold of $50.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 14 -->
                        <div id="faq14" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                When and how do I get paid?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    Payments are processed on the 15th of each month for the previous month's earnings, provided you've reached the minimum payout threshold of $50.
                                </p>
                                <p class="text-textMuted mb-3">
                                    We offer the following payment methods:
                                </p>
                                <ul class="list-disc pl-6 text-textMuted">
                                    <li>PayPal</li>
                                    <li>Direct bank transfer (ACH in US, SEPA in Europe)</li>
                                    <li>Payoneer</li>
                                    <li>Check (US only, additional fees apply)</li>
                                </ul>
                                <p class="text-textMuted mt-3">
                                    You can set up and manage your payment preferences in your Account Settings > Payments section.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 15 -->
                        <div id="faq15" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                Which streaming platforms do you distribute to?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    We distribute to over 150 streaming platforms worldwide, including:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-2 text-textMuted">
                                    <div>• Spotify</div>
                                    <div>• Apple Music</div>
                                    <div>• Amazon Music</div>
                                    <div>• YouTube Music</div>
                                    <div>• Tidal</div>
                                    <div>• Deezer</div>
                                    <div>• Pandora</div>
                                    <div>• TikTok</div>
                                    <div>• Instagram</div>
                                </div>
                                <p class="text-textMuted mt-3">
                                    Distribution times vary by platform, but typically take 1-3 business days for our platform and 3-14 days for external platforms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Technical Issues FAQs -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-light mb-6 border-b border-border pb-3">Technical Issues</h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 16 -->
                        <div id="faq16" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                My upload is stuck at processing. What should I do?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    If your upload is stuck at processing, try these steps:
                                </p>
                                <ol class="list-decimal pl-6 text-textMuted">
                                    <li>Wait a few minutes as large files can take time to process</li>
                                    <li>Refresh your browser</li>
                                    <li>Check your internet connection</li>
                                    <li>Try uploading again in smaller batches</li>
                                    <li>Make sure your files meet our format requirements</li>
                                </ol>
                                <p class="text-textMuted mt-3">
                                    If the issue persists, please contact our support team with your upload ID (found in the upload progress window).
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 17 -->
                        <div id="faq17" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                The audio player isn't working. How can I fix it?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    If you're experiencing issues with the audio player:
                                </p>
                                <ol class="list-decimal pl-6 text-textMuted">
                                    <li>Make sure your browser is updated to the latest version</li>
                                    <li>Clear your browser cache and cookies</li>
                                    <li>Disable any ad-blockers or browser extensions that might be interfering</li>
                                    <li>Try a different browser (we recommend Chrome, Firefox, or Safari)</li>
                                    <li>Check if your internet connection is stable</li>
                                </ol>
                            </div>
                        </div>

                        <!-- FAQ Item 18 -->
                        <div id="faq18" class="bg-darkUI rounded-lg overflow-hidden animate-fade-in scroll-mt-24">
                            <button class="w-full px-6 py-4 text-left text-light font-medium flex justify-between items-center"
                                    onclick="toggleFaq(this)">
                                How do I delete my account?
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div class="px-6 pb-4 hidden">
                                <p class="text-textMuted mb-3">
                                    To delete your account:
                                </p>
                                <ol class="list-decimal pl-6 text-textMuted">
                                    <li>Go to Account Settings > Privacy</li>
                                    <li>Scroll to the bottom and click "Delete Account"</li>
                                    <li>Follow the verification steps</li>
                                    <li>Confirm your decision</li>
                                </ol>
                                <p class="text-textMuted mt-3">
                                    <strong class="text-light">Important:</strong> Account deletion is permanent and cannot be undone. All your uploaded content, statistics, and earnings history will be permanently deleted. Any pending payouts will still be processed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Still Need Help Section -->
                <div class="bg-darkUI rounded-xl p-8 shadow-lg animate-fade-in">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-light mb-4">Still Can't Find What You're Looking For?</h2>
                        <p class="text-textMuted mb-6">
                            Our support team is ready to assist you with any questions or issues you may have.
                        </p>
                        <a href="/help#contact-form" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primaryHover">
                            Contact Support
                        </a>
                    </div>
                </div>
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

    // Category buttons
    const categoryButtons = document.querySelectorAll('.category-btn');
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
            categoryButtons.forEach(btn => btn.classList.add('bg-darkAccent', 'text-textMuted'));

            // Add active class to clicked button
            button.classList.add('active', 'bg-primary', 'text-white');
            button.classList.remove('bg-darkAccent', 'text-textMuted');

            // Here you would normally filter the FAQs by category
            // This would be implemented with additional JavaScript
        });
    });

    // Search functionality
    const searchInput = document.getElementById('faq-search');
    searchInput.addEventListener('input', () => {
        const searchTerm = searchInput.value.toLowerCase();
        const faqItems = document.querySelectorAll('[id^="faq"]');

        faqItems.forEach(item => {
            const question = item.querySelector('button').textContent.toLowerCase();
            const answer = item.querySelector('div').textContent.toLowerCase();

            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
