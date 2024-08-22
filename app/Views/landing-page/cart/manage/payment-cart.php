<div class="w-full">
    <div class="flex flex-col">
        <!--
        <div class="bg-orange-200 p-3 text-left">
            <p class="text-[0.85em]">
                We'll hold your spot for 30 minutes.
            </p>
        </div>
        -->
        <div>
            <h5 class="text-[1.5em] font-[600]">
                Check your personal details
            </h5>
        </div>
        <div class="flex lg:flex-row flex-col lg:gap-[2em] gap-[1em]">
            <div class="lg:w-[57em] w-full">
                <div class="flex flex-row items-center gap-[0.5em] pb-[2em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-shield-lock" viewBox="0 0 16 16">
                            <path
                                    d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56"/>
                            <path
                                    d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                        </svg>
                    </div>
                    <p class="text-green-500 text-[1em]">
                        Checkout is fast and secure
                    </p>
                </div>
                <form id="form-personal-cart" class="flex flex-col gap-[1em]">
                    <p class="text-gray-500 text-[1em]">
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        * Required fields
                    </p>
                    <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                        <p class="text-[0.85em] text-gray-500">
                            Full name *
                        </p>
                        <label class="p-2">
                            <input id="name-cart" type="text" class="border-0 text-[1em] focus:outline-none w-full"
                                   required/>
                        </label>
                    </div>
                    <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                        <p class="text-[0.85em] text-gray-500">
                            Email *
                        </p>
                        <label class="p-2">
                            <input id="email-cart" type="email" class="border-0 text-[1em] focus:outline-none w-full"
                                   required/>
                        </label>
                    </div>
                    <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                        <p class="text-[0.85em] text-gray-500">
                            Country *
                        </p>
                        <label class="p-2">
                            <input id="country-cart" type="text" class="border-0 text-[1em] focus:outline-none w-full"
                                   required/>
                        </label>
                    </div>
                    <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                        <p class="text-[0.85em] text-gray-500">
                            Mobile phone number *
                        </p>
                        <label class="p-2">
                            <input id="phone-cart" type="number" class="border-0 text-[1em] focus:outline-none w-full"
                                   required/>
                        </label>
                    </div>
                    <div class="mx-2">
                        <p class="text-[0.85em] text-gray-500">
                            We'll only contact you with essential update or change to your booking
                        </p>
                    </div>
                    <div id="loop-information-cart">
                        <!-- inner HTML -->
                    </div>

                    <div class="py-5">
                        <button type="submit"
                                class="border-0 bg-blue-500 rounded-full text-white px-10 py-2 font-[600]">
                            Next: Payment details
                        </button>
                    </div>
                </form>
            </div>
            <div class="lg:w-[25em] w-full">
                <div class="border border-t-4 border-blue-500 rounded-2xl p-5 mb-[1em]">
                    <div class="flex flex-col justify-between">
                        <div class="flex flex-col">
                            <div id="calculate-cart" class="flex flex-row justify-between p-2">
                                <!-- inner HTML -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-blue-500 flex flex-col gap-[1em] p-3 rounded-2xl">
                    <p class="font-[600] text-[1em]">
                        Why book with us?
                    </p>
                    <div class="px-1">
                        <div class="flex flex-row items-center justify-between gap-[0.5em] font-[600] p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                            </svg>
                            <p class="text-[1em] text-right">
                                Secure payment
                            </p>
                        </div>
                        <div class="flex flex-row items-center justify-between gap-[0.5em] font-[600] p-1">
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
                        <div class="flex flex-row items-center justify-between gap-[0.5em] font-[600] p-1">
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
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function showFromCart(data) {
        $('#form-personal-cart').submit(async function (e) { 
            e.preventDefault()           
            if (confirm('Yakin data sudah benar ?')) {

                for (let i = 0; i < data.length; i++) {
                    data[i]['request'] = $(`#request-cart-${i}`).val().trim()
                }

                var requestData = {
                    name: $("#name-cart").val().trim(),
                    email: $("#email-cart").val().trim(),
                    country: $("#country-cart").val().trim(),
                    phone: $("#phone-cart").val().trim(),
                    currency: changeCurrency,
                    currencyRate: currencyData.rates.IDR,
                    cart: data,
                    totalPrice: totalCurrency
                };
                requestCart = requestData

                // function to next form
                cardCart.removeClass("hidden")
                paymentCart.addClass("hidden")

                // await postMailTemplateCart.sendToBookingEmailCart(emailCart)
            }
        })

        let tab = ''
        let calItem = ''
        for (let i = 0; i < data.length; i++) {
            const d = data[i]

            tab +=
                `
                  <div class="flex flex-col gap-[1em] py-4">
                        <div class="flex flex-row gap-[0.5em] items-center">
                            <img src="${d.image}" alt="image-cart-${i}" class="w-[5em]"/>
                            <div class="flex flex-col">
                                <p class="text-[1em] font-[700]">
                                    ${d.title}
                                </p>
                                <p class="text-[1em] text-gray-500 font-[600]">
                                    ${d.date}, ${d.clock}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[1em] py-4">
                            <h5 class="text-[1em] font-[600]">
                                Request information
                            </h5>
                            <p class="text-[1em]">
                            Please provide information the genders amd nationalities of all participants in your group. Please also provide the full name of everyone in your group and the passport number of everyone in your group.
                            </p>
                        <label>
                        <textarea id="request-cart-${i}"
                                class="text-[1em] w-full border border-gray-200 p-2 focus:outline-none w-full" required></textarea>
                        </label>
                    </div>
                </div>
                `
                // old
            // tab +=
            //     `
            //       <div class="flex flex-col gap-[1em] py-4">
            //             <div class="flex flex-row gap-[0.5em] items-center">
            //                 <img src="${d.image}" alt="image-cart-${i}" class="w-[5em]"/>
            //                 <div class="flex flex-col">
            //                     <p class="text-[1em] font-[700]">
            //                         ${d.from} -> ${d.to}
            //                     </p>
            //                     <p class="text-[1em] text-gray-500 font-[600]">
            //                         ${d.day}, ${d.date} at ${d.start} -> ${d.end}
            //                     </p>
            //                 </div>
            //             </div>
            //             <div class="flex flex-col gap-[1em] py-4">
            //                 <h5 class="text-[1em] font-[600]">
            //                     Request information
            //                 </h5>
            //                 <p class="text-[1em]">
            //                     ${d.reqInformation}
            //                 </p>
            //             <label>
            //             <textarea id="request-cart-${i}"
            //                     class="text-[1em] w-full border border-gray-200 p-2 focus:outline-none w-full" required></textarea>
            //             </label>
            //         </div>
            //     </div>
            //     `
            $('#loop-information-cart').html(tab)
        }

        function calculateProduct(acc, price) {
            return acc * price;
        }

        // const allPrice = data.map(d => (Array.isArray(d.price) ? d.price : [d.price]))
        // const allPrice = data.map(d => (Array.isArray(d.price) ? d.price : [d.price]))
        // const totalProduct = allPrice.reduce((acc, prices) => acc + prices.reduce(calculateProduct, 1), 1)

        const totalPriceCart = changeAllCurrency.symbolPrice(totalCurrency, changeCurrency)

        calItem +=
            `
                <p class="font-[600] text-[0.85em] text-left">
                    Total (${data.length} item):
                </p>
                <div class="flex flex-col text-right">
                    <p class="font-[600] text-[1.25em]">
                        ${totalPriceCart}
                    </p>
                    <p class="text-green-900 text-[0.85em]">
                        All taxes and fees included
                    </p>
                </div>
                `
        $('#calculate-cart').html(calItem)

        window.switchCartPayment = {
            getDataChartForm: function () {
                showFromCart(loadContentCart);
            }
        }
    }

</script>
