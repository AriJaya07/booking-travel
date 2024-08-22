<div class="flex flex-col gap-[1em] 2xl:w-[50em] lg:w-[40em] w-full">
    <h5 class="font-700 text-[1.5em]">
        Select a payment method
    </h5>
    <div class="flex flex-col border border-gray-200 p-4">
        <div id="input-card" class="flex flex-row justify-between items-center cursor-pointer">
            <div class="flex flex-row gap-[0.5em] items-center">
                <label>
                    <input type="radio" name="card-payment" value="" class="cursor-pointer"/>
                </label>
                <p class="text-[1em]">
                    Paypal
                </p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-paypal" viewBox="0 0 16 16">
                    <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.35.35 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91q.57-.403.993-1.005a4.94 4.94 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.7 2.7 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.7.7 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016q.326.186.548.438c.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.87.87 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.35.35 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32z"/>
                </svg>
            </div>
        </div>

        <div id="content-card-paypal" class="flex flex-col-reverse gap-[1em] p-5 hidden">
            <div id="paypal-button-container-card" class="flex flex-col">
            </div>
        </div>

    </div>

    <div class="flex flex-col border border-gray-200 p-4">
        <div id="input-xendit" class="flex flex-row justify-between items-center cursor-pointer">
            <div class="flex flex-row gap-[0.5em] items-center">
                <label>
                    <input type="radio" name="card-payment" value="" class="cursor-pointer"/>
                </label>
                <p class="text-[1em]">
                    Xendit
                </p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"
                     viewBox="0 0 16 16">
                    <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                </svg>
            </div>
        </div>

        <div id="content-xendit" class="flex flex-col gap-[1em] px-5 py-2 hidden">
            <div class="flex justify-center items-center">
                <img
                        src="<?php echo base_url() . "img/xendit.png" ?>"
                        alt="card-payment" class="lg:w-[50em] w-full cursor-pointer p-5">
            </div>
        </div>
    </div>
</div>

<script>
    function showCardPayment(data) {
        const inputPaypal = $("#input-card")
        const inputGooglePlay = $("#input-xendit")

        const contentPaypal = $("#content-card-paypal")
        const contentXendit = $("#content-xendit")


        inputPaypal.on("click", function () {
            contentPaypal.removeClass("hidden")
            contentXendit.addClass("hidden")
        })

        inputGooglePlay.on("click", function () {
            contentXendit.removeClass("hidden")
            contentPaypal.addClass("hidden")
        })

        const PAYPAL_SCRIPT = 'https://www.paypal.com/sdk/js?client-id=AVtR-s6Fm9JKgpZNjko25iawXRPO-jUx9gdtvRN2PL4vsA28QrhrpCm-HxUfGNiID0rNsTAVvUMfEINm';
        var script = $('<script>', {
            src: PAYPAL_SCRIPT
        });
        $('head').append(script);

        let buttonPaypal = false
        let confirmMailPaypal = false
        const clickPaypal = document.getElementById('paypal-button-container-card')
        inputPaypal.on('click', async function () {
            if (!buttonPaypal) {
                buttonPaypal = true

                await paypal.Buttons({
                    style: {
                        color: 'blue',              // Specify text color
                        shape: 'pill',              // Specify button shape
                        label: 'paypal',            // Specify button label
                        layout: 'horizontal',       // Specify button layout
                        height: 40,                 // Specify button height
                        fundingicons: true,         // Show funding icons
                        fundingSource: paypal.FUNDING.PAYPAL  // Show only PayPal option
                    },
                    createOrder: function (data, actions) {
                        // Function to set up the transaction details
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '10.00'  // Specify the transaction amount
                                }
                            }]
                        });
                    },
                    onApprove: function (data, actions) {
                        // Function to handle the approval of the transaction
                        return actions.order.capture().then(async function (details) {
                            // Show a success message to the user
                            alert('Transaction completed by ' + details.payer.name.given_name);
                            confirmMailPaypal = true

                            await postMailTemplatePayment.sendToBookingEmailPayment(emailPayment)
                        });
                    }
                }).render(clickPaypal);

                if (confirmMailPaypal) {
                    await postMailTemplatePayment.sendToBookingEmailPayment(emailPayment)
                }
            }
        })
    }
</script>
