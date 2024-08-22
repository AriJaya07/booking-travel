<div class="flex flex-col gap-[1em] w-full">
    <h5 class="font-[700] text-[1.5em]">
        Select a payment method
    </h5>
    <div class="flex flex-row items-center gap-[0.5em]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock"
                 viewBox="0 0 16 16">
                <path
                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56"/>
                <path
                        d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
            </svg>
        </div>
        <p class="text-green-500 text-[0.85em] font-[600]">
            Payments are secure and encrypted
        </p>
    </div>

    <div class="flex lg:flex-row justify-between flex-col xl:gap-[1em] gap-[2em]">
        <div>

            <div class="flex flex-col border border-gray-200 p-4 xl:w-[45em] lg:w-[35em] w-full">
                <div id="input-card-paypal" class="flex flex-row justify-between items-center pb-5 cursor-pointer">
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

                <div id="content-card-paypal" class="flex flex-col gap-[1em] p-5 hidden">
                    <div id="paypal-button-container-card" class="flex flex-col">
                    
                    </div>
                </div>

            </div>

            <div class="flex flex-col border border-gray-200 p-4 xl:w-[45em] lg:w-[35em] w-full">
                <div id="input-xendit" class="flex flex-row justify-between items-center pb-5 cursor-pointer">
                    <div class="flex flex-row gap-[0.5em] items-center">
                        <label>
                            <input type="radio" name="card-payment" value="" class="cursor-pointer"/>
                        </label>
                        <p class="text-[1em]">
                            Xendit
                        </p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-google"
                             viewBox="0 0 16 16">
                            <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg>
                    </div>
                </div>

                <div id="content-input-xendit" class="flex flex-col gap-[1em] px-5 py-2 hidden">
                    <div class="flex justify-center items-center">
                        <img
                                src="<?php echo base_url() . "img/xendit.png" ?>"
                                alt="card-payment-xendit" class="lg:w-[30em] w-full p-5 cursor-pointer">
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="lg:w-[25em] w-full">
                <div id="calculate-card-cart" class="border border-t-4 border-blue-500 rounded-2xl p-5 mb-[1em]">
                    <!-- inner HTML -->
                </div>
                <div class="border border-blue-500 flex flex-col gap-[1em] p-3 rounded-2xl">
                    <p class="font-[600] text-[1em]">
                        Why book with us?
                    </p>
                    <div class="px-1">
                        <div class="flex flex-row justify-between items-center gap-[0.5em] font-[600] p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                            </svg>
                            <p class="text-[1em] text-right">
                                Secure payment
                            </p>
                        </div>
                        <div class="flex flex-row justify-between items-center gap-[0.5em] font-[600] p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-shield-check" viewBox="0 0 16 16">
                                <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56"/>
                                <path
                                        d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            <p class="text-[1em] text-right">
                                No hidden costs
                            </p>
                        </div>
                        <div class="flex flex-row justify-between items-center gap-[0.5em] font-[600] p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path
                                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                <path
                                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2"/>
                            </svg>
                            <p class="text-[1em] text-right">
                                24/7 customer support worldwide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    function showCardCart(data) {
        let tab = ''

        // function calculateProduct(acc, price) {
        // console.log(acc * price)
        //     return acc * price;
        // }

        // const allPrice = data.map(d => (Array.isArray(d.price) ? d.price : [d.price]))
        // const totalProduct = allPrice.reduce((acc, prices) => acc + prices.reduce(calculateProduct, 1), 1)

        const totalPriceCart = changeAllCurrency.symbolPrice(totalCurrency, changeCurrency)
        tab +=
            `
            <div class="flex flex-col justify-between">
                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between p-2">
                            <p class="font-[600] text-[1em] text-left">
                                Total ${data.length} item:
                            </p>
                            <div class="flex flex-col text-right">
                                <p class="font-[600] text-[1.25em]">
                                    ${totalPriceCart}
                                </p>
                                <p class="text-green-900 text-[0.85em]">
                                    All taxes and fees included
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        $('#calculate-card-cart').html(tab)


        const inputCardPaypal = $("#input-card-paypal")
        const inputXendit = $("#input-xendit")

        const contentCardPaypal = $("#content-card-paypal")
        const contentXendit = $("#content-input-xendit")

        inputCardPaypal.on("click", function () {
            contentCardPaypal.removeClass("hidden")
            contentXendit.addClass("hidden")

            $('#paypal-button-container-card').html(`
                 <a id="postDataBtn" class="btn btn-primary">
                        <img src="<?= base_url() . 'img/paypal.png' ?>" alt="PayPal Icon" class="lg:w-[30em] w-full p-5 cursor-pointer">
                    </a>
            `)

            document.getElementById('postDataBtn').addEventListener('click', createPaypal);
        })

        inputXendit.on("click", function () {
            contentXendit.removeClass("hidden")
            contentCardPaypal.addClass("hidden")
        })

        window.switchCardPayment = {
            getDataChartCard: function () {
                showCardCart(loadContentCart);
            }
        }
    }

    function createPaypal() {
        // Sample data to send
        const dataToSend = {
            "<?= csrf_token() ?>": '<?= csrf_hash() ?>',
            order: JSON.stringify(requestCart)
        };

        // Send POST request using Axios
        axios.post('<?= base_url() ?>paypal/create-order', dataToSend, {
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => {
                // Handle successful response
                localStorage.removeItem('cart');
                window.location.href = response.data.link
            })
            .catch(error => {
                // Handle error
                console.error('Error:', error);
            });
    }

</script>
