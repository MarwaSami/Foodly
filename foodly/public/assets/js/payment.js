  // Get the radio buttons and the credit card form
  const paymentMethodRadios = document.querySelectorAll('input[name="payment-method"]');
  const creditCardForm = document.getElementById('credit-card-form');
  const cashOnDeliveryForm = document.getElementById('cash-on-delivery-form');

  // When a radio button is clicked, toggle the visibility of the forms
  paymentMethodRadios.forEach(function(radio) {
    radio.addEventListener('click', function() {
      if (radio.value === 'cash-on-delivery') {
        creditCardForm.classList.add('hidden');
        cashOnDeliveryForm.classList.remove('hidden');
      } else {
        creditCardForm.classList.remove('hidden');
        cashOnDeliveryForm.classList.add('hidden');
      }
    });
  });