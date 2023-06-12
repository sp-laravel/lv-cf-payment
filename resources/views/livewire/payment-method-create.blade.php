<div>
  <article class="card">
    <div class="card-body">

      <h1 class="mb-4 text-lg font-bold text-gray-700">Agregar método de pago</h1>

      <div class="flex">
        <p class="text-gray-700">Información de tarjeta</p>
        <div class="flex-1 ml-6">
          <div class="form-group">
            <input class="form-control" id="card-holder-name" type="text"
              placeholder="Nombre del titular de la tarjeta">
          </div>

          <!-- Stripe Elements Placeholder -->
          <div>
            <div class="form-control" id="card-element"></div>
            <span id="cardErrors" class="invalid-feedback"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-end card-footer bg-gray-50">
      <button class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
        Update Payment Method
      </button>
    </div>
  </article>

  @slot('js')
    <script>
      const stripe = Stripe(
        'pk_test_51MIhAkCOwOKuZK1iyYaevUL08n0RWirYj9ZaBwekyvqnQZt6xZ2PDm8LRZlBKOyy3RbkgoWPs2xnEpwpToGpLqBP00IY10Ooih');

      const elements = stripe.elements();
      const cardElement = elements.create('card');

      cardElement.mount('#card-element');

      // Generate Token
      const cardHolderName = document.getElementById('card-holder-name');
      const cardButton = document.getElementById('card-button');

      cardButton.addEventListener('click', async (e) => {
        const {
          paymentMethod,
          error
        } = await stripe.createPaymentMethod(
          'card', cardElement, {
            billing_details: {
              name: cardHolderName.value
            }
          }
        );

        if (error) {
          document.getElementById('cardErrors').textContent = error.message;
        } else {
          // The card has been verified successfully...
        }
      });
    </script>
  @endslot
</div>
