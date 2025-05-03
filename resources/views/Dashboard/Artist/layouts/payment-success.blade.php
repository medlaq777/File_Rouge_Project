<!-- Payment Success Section -->
<div class="payment-success-modal fixed inset-0 z-50 flex items-center justify-center" style="background-color: rgba(0, 0, 0, 0.7);">
    <div class="modal-content bg-bgDark border border-border rounded-lg shadow-lg w-full max-w-md mx-auto overflow-hidden">
        <!-- Success Header -->
        <div class="bg-success/10 p-6 flex flex-col items-center">
            <div class="h-20 w-20 rounded-full bg-success/20 flex items-center justify-center mb-4">
                <i class="fas fa-check-circle text-success text-4xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white">Payment Successful!</h2>
            <p class="text-textMuted mt-2 text-center">Your studio booking has been confirmed</p>
        </div>

        <!-- Payment Details -->
        <div class="p-6 space-y-4">
            <!-- Booking Details -->
            <div class="space-y-3">
                <h3 class="text-light font-semibold">Booking Details</h3>
                <div class="grid grid-cols-2 gap-2">
                    <div class="text-textMuted">Studio</div>
                    <div class="text-light font-medium">{{ dd($borrowing) }}</div>

                    <div class="text-textMuted">Date</div>
                    <div class="text-light font-medium">{{ date('F j, Y', strtotime($booking->date)) }}</div>

                    <div class="text-textMuted">Time</div>
                    <div class="text-light font-medium">{{ date('g:i A', strtotime($booking->start_time)) }} - {{ date('g:i A', strtotime($booking->end_time)) }}</div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-border"></div>

            <!-- Payment Info -->
            <div class="space-y-3">
                <h3 class="text-light font-semibold">Payment Info</h3>
                <div class="grid grid-cols-2 gap-2">
                    <div class="text-textMuted">Amount Paid</div>
                    <div class="text-light font-medium">${{ number_format($booking->total_amount, 2) }}</div>

                    <div class="text-textMuted">Transaction ID</div>
                    <div class="text-light font-medium">{{ $booking->transaction_id }}</div>

                    <div class="text-textMuted">Payment Method</div>
                    <div class="text-light font-medium flex items-center">
                        <i class="fab fa-cc-visa mr-2"></i> •••• {{ substr($booking->payment_details, -4) }}
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-border"></div>

            <!-- Studio Contact -->
            <div class="bg-primary/10 rounded-md p-3">
                <div class="flex items-start">
                    <div class="h-10 w-10 rounded-full bg-primary/20 flex items-center justify-center mr-3">
                        <i class="fas fa-info-circle text-primary"></i>
                    </div>
                    <div>
                        <p class="text-light text-sm">The studio owner has been notified of your booking. For any questions, contact:</p>
                        <p class="text-primary font-medium mt-1">{{ $booking->studio->user->email }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="p-6 space-y-3">
            <!-- Primary Action -->
            <a href="{{ route('bookings.details', $booking->id) }}" class="bg-primary hover:bg-primaryHover text-white py-3 rounded-md flex items-center justify-center transition-all duration-200 cursor-pointer w-full">
                <i class="fas fa-calendar-check mr-2"></i> View Booking Details
            </a>

            <!-- Secondary Actions -->
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('dashboard') }}" class="bg-darkAccent hover:bg-border text-light py-2 rounded-md flex items-center justify-center transition-all duration-200 cursor-pointer">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <button type="button" onclick="downloadReceipt()" class="bg-transparent hover:bg-darkAccent border border-border text-light py-2 rounded-md flex items-center justify-center transition-all duration-200">
                    <i class="fas fa-download mr-2"></i> Download Receipt
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function downloadReceipt() {
        // TODO: Implement receipt download functionality
        alert('Your receipt will be downloaded shortly.');

        // Example implementation would generate a PDF and trigger download
        // window.location.href = "{{ route('bookings.receipt', $booking->id) }}";
    }
</script>
