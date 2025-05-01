<div class="container">
    <h1>Make a Payment</h1>

    <form id="payment-form" action="{{ route('payment.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="amount">Amount (USD)</label>
            <input type="number" name="amount" id="amount" class="form-control" min="1" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="card-element">Credit or debit card</label>
            <div id="card-element" class="form-control"></div>
            <div id="card-errors" role="alert" class="text-danger"></div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit Payment</button>
    </form>
</div>

<!-- Add Stripe.js -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const {paymentMethod, error} = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
        });

        if (error) {
            cardErrors.textContent = error.message;
        } else {
            // Add the payment method to the form
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', paymentMethod.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    });
</script>
