<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/png" href="resources/img/favicon.png">

    <title>LAZY READER | Subscribe</title>
</head>

<body style="background: #2d3748; position: relative; overflow-y: hidden">
<div id="particles-js"></div>

<section class="section-subscribe">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class=" heading-secondary">
            Select Plan
        </h2>
        @if(session()->has('success'))

            <p>{{session()->get('success')}}</p>
            @endif
        <form action="/subscribe" method="post" id="payment-form">

            @csrf

            <div class="form__group u-margin-bottom-medium u-margin-top-medium">
                <div class="form__radio-group">
                    <input type="radio" value="price_1JDrZLIadGfgle9bwXf0OM5o" required class="form__radio-input" id="small" name="plan">
                    <label for="small" class="form__radio-label">
                        <span class="form__radio-button"></span>
                        Gold Plan
                    </label>
                </div>

                <div class="form__radio-group">
                    <input type="radio" value="price_1JDrZLIadGfgle9bJINvHOhk" required class="form__radio-input" id="large" name="plan">
                    <label for="large" class="form__radio-label">
                        <span class="form__radio-button"></span>
                        Premium Plan
                    </label>
                </div>
            </div>
            <div class="form__group">
                <input type="text" class="form__input u-margin-left-small" placeholder="Name on The Card" name="name" id="card-holder-name" required>
                <label for="email" class="form__label">Email address</label>

            </div>

            <div class="form__group col-2-of-4">
                <div id="card-element"></div>
            </div>
            <div class="form__group">
                <span class="payment-errors" id="card-errors" style="color: red;margin-top:10px;"></span>
            </div>
            <div class="form__group">

                <button type="submit" class="btn btn--white " id="card-button" data-secret="{{ $intent->client_secret }}">Subscribe</button>
            </div>
        </form>
    </div>
</section>

<script>
    window.ParsleyConfig = {
        errorsWrapper: '<div></div>',
        errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>',
        errorClass: 'has-error',
        successClass: 'has-success'
    };
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="js/summarize.js"></script>
<script src="js/particles.js"></script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe('pk_test_51J99a0IadGfgle9b87rMrkgH2o0f29rKJqwSFw6xAWX8RGUJV0jLA1IJ0jD1BvCWQGeZmHo3skyNyKjtnj8knIrf00OQ5AKflb', { locale: 'en' }); // Create a Stripe client.
    const elements = stripe.elements(); // Create an instance of Elements.
    const card = elements.create('card', { style: style }); // Create an instance of the card Element.

    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')

    card.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }
        );
        stripe.createToken(card).then(function(result) {
            console.log(result);
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token, setupIntent);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token, setupIntent) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        let payment = document.createElement('input')

        payment.setAttribute('type', 'hidden')
        payment.setAttribute('name', 'payment_token')
        payment.setAttribute('value', setupIntent.payment_method)

        form.appendChild(payment)


        // Submit the form
        form.submit();
    }
</script>
<script>
    $(document).ready(function(){
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    })

</script>



</body>
</html>
