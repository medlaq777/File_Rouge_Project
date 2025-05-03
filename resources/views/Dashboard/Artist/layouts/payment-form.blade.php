<style>
    .payment-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: var(--dark-accent);
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        border: 1px solid var(--border);
    }

    .payment-header {
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
        border-bottom: 1px solid var(--border);
    }

    .payment-header h1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: var(--text-light);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .payment-header .secure-badge {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: var(--success);
        margin-top: 0.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: var(--text-light);
    }

    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        background-color: var(--dark-ui);
        border: 1px solid var(--border);
        border-radius: 6px;
        color: var(--text-light);
        font-size: 1rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(229, 0, 0, 0.1);
    }

    .card-element-container {
        padding: 1rem;
        background-color: var(--dark-ui);
        border: 1px solid var(--border);
        border-radius: 6px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .card-element-container:focus-within {
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(229, 0, 0, 0.1);
    }

    .payment-summary {
        margin-top: 2rem;
        padding: 1rem;
        background-color: rgba(26, 26, 26, 0.5);
        border-radius: 8px;
        border: 1px solid var(--border);
    }

    .payment-summary h3 {
        margin-bottom: 1rem;
        font-size: 1.2rem;
        font-weight: 500;
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px dashed rgba(255, 255, 255, 0.1);
    }

    .summary-item:last-child {
        border-bottom: none;
        font-weight: 600;
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px solid var(--border);
    }

    .btn {
        display: inline-block;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 6px;
        transition: all 0.15s ease-in-out;
        cursor: pointer;
    }

    .btn-primary {
        background-color: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background-color: var(--primary-hover);
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .text-danger {
        color: var(--primary);
        margin-top: 0.5rem;
        font-size: 0.9rem;
    }

    .payment-options {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .payment-option {
        flex: 1;
        padding: 1rem;
        border: 1px solid var(--border);
        border-radius: 6px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
    }

    .payment-option:hover {
        border-color: var(--primary);
        background-color: rgba(229, 0, 0, 0.05);
    }

    .payment-option.active {
        border-color: var(--primary);
        background-color: rgba(229, 0, 0, 0.1);
    }

    .payment-option i {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: var(--text-muted);
    }

    .payment-option.active i {
        color: var(--primary);
    }

    .payment-processing {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        backdrop-filter: blur(5px);
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: var(--text-light);
    }

    .loader {
        border: 3px solid var(--dark-accent);
        border-radius: 50%;
        border-top: 3px solid var(--primary);
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        margin-bottom: 1rem;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @media (max-width: 768px) {
        .payment-container {
            padding: 1.5rem;
            margin: 1rem;
        }

        .payment-options {
            flex-direction: column;
        }
    }
</style>


<div class="payment-container">
    <div class="payment-header">
        <h1><i class="fas fa-credit-card text-primary"></i> Complete Your Payment</h1>
        <div class="secure-badge">
            <i class="fas fa-lock"></i>
            <span>Secure Payment Processing</span>
        </div>
    </div>


    <div class="payment-options">
        <div class="payment-option active" data-payment-type="card">
            <i class="far fa-credit-card"></i>
            <div>Credit / Debit Card</div>
        </div>
    </div>


    <form id="payment-form" action="/payment/process" method="POST">
        @csrf
        <input type="hidden" name="payment_type" id="payment-type" value="card">
        <input type="hidden" name="user_id" value="{{ $userId }}">
        <input type="hidden" name="studio_id" value="{{ $studioId }}">
        <input type="hidden" name="total_price" value="{{ $totalPrice }}">
        <input type="hidden" name="startDate" value="{{ $startDate }}">
        <input type="hidden" name="endDate" value="{{ $endDate }}">

        <div id="card-payment-form">
            <div class="form-group">
                <label>Amount (USD)</label>
                <div class="form-control">
                    <span>${{ $totalPrice }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="cardholder">Cardholder Name</label>
                <input type="text" name="cardholder" id="cardholder" class="form-control"
                    value="{{ Auth::user()->profile->full_name }}">
            </div>

            <div class="form-group">
                <label for="card-element">Card Information</label>
                <div id="card-element" class="card-element-container"></div>
                <div id="card-errors" role="alert" class="text-danger"></div>
            </div>


            <div class="payment-summary">
                <h3>Payment Summary</h3>
                <div class="summary-item">
                    <span>Subtotal</span>
                    <span>$150.00</span>
                </div>
                <div class="summary-item">
                    <span>Processing Fee</span>
                    <span>$4.50</span>
                </div>
                <div class="summary-item">
                    <span>Total Amount</span>
                    <span>$154.50</span>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-lock"></i> Pay Securely Now
                </button>
            </div>
        </div>
    </form>
</div>


<div class="payment-processing" id="payment-processing">
    <div class="loader"></div>
    <p>Processing your payment...</p>
    <p>Please do not close this window</p>
</div>


<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const paymentOptions = document.querySelectorAll('.payment-option');
        const cardPaymentForm = document.getElementById('card-payment-form');
        const paypalPaymentForm = document.getElementById('paypal-payment-form');
        const paymentTypeInput = document.getElementById('payment-type');

        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {

                paymentOptions.forEach(opt => opt.classList.remove('active'));


                this.classList.add('active');


                const paymentType = this.getAttribute('data-payment-type');
                paymentTypeInput.value = paymentType;


                if (paymentType === 'card') {
                    cardPaymentForm.style.display = 'block';
                    paypalPaymentForm.style.display = 'none';
                } else if (paymentType === 'paypal') {
                    cardPaymentForm.style.display = 'none';
                    paypalPaymentForm.style.display = 'block';
                }
            });
        });


        // Initialize Stripe Elements
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        const elements = stripe.elements({
            fonts: [{
                cssSrc: 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap',
            }],
        });

        // Style configuration for the card element
        const style = {
            base: {
                color: '#e0e0e0',
                fontFamily: '"Montserrat", sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#8a8a8a'
                },
                ':-webkit-autofill': {
                    color: '#e0e0e0',
                }
            },
            invalid: {
                color: '#e50000',
                iconColor: '#e50000'
            }
        };

        // Create and mount the card element
        const cardElement = elements.create('card', {
            style
        });
        cardElement.mount('#card-element');

        // Form handling
        const form = document.getElementById('payment-form');
        const cardErrors = document.getElementById('card-errors');
        const paymentProcessing = document.getElementById('payment-processing');

        form.addEventListener('submit', async (event) => {
            if (paymentTypeInput.value === 'card') {
                event.preventDefault();
                paymentProcessing.style.display = 'flex';

                try {
                    const {
                        paymentMethod,
                        error
                    } = await stripe.createPaymentMethod({
                        type: 'card',
                        card: cardElement,
                        billing_details: {
                            name: document.getElementById('cardholder').value,
                        },
                    });

                    if (error) {
                        throw error;
                    }

                    // Add payment method ID to form
                    const hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentMethod.id);
                    form.appendChild(hiddenInput);

                    // Submit the form
                    form.submit();

                } catch (error) {
                    cardErrors.textContent = error.message ||
                    'An error occurred. Please try again.';
                    paymentProcessing.style.display = 'none';
                }
            }
        });
    });
</script>
