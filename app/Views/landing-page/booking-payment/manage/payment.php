<div class="flex flex-col 2xl:w-[50em] lg:w-[40em] w-full">
    <div class="flex flex-col">
        <div class="bg-orange-200 p-3 text-left">
            <p class="text-[0.85em]">
                We'll hold your spot for 30 minutes.
            </p>
        </div>
        <div>
            <h5 class="text-[1.5em] font-[600]">
                Check your personal details
            </h5>
        </div>
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
        <form id="form-personal-payment" class="flex flex-col gap-[1em]">
            <p class="text-gray-500 text-[1em]">
                * Required fields
            </p>
            <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                <p class="text-[0.85em] text-gray-500">
                    Full name *
                </p>
                <label class="p-2">
                    <input id="name-payment" type="text" class="border-0 text-[1em] focus:outline-none w-full"
                           required/>
                </label>
            </div>
            <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                <p class="text-[0.85em] text-gray-500">
                    Email *
                </p>
                <label class="p-2">
                    <input id="email-payment" type="email" class="border-0 text-[1em] focus:outline-none w-full"
                           required/>
                </label>
            </div>
            <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                <p class="text-[0.85em] text-gray-500">
                    Country *
                </p>
                <label class="p-2">
                    <input id="country-payment" type="text" class="border-0 text-[1em] focus:outline-none w-full"
                           required/>
                </label>
            </div>
            <div class="flex flex-col rounded-lg border border-gray-300 px-2">
                <p class="text-[0.85em] text-gray-500">
                    Mobile phone number *
                </p>
                <label class="p-2">
                    <input id="phone-payment" type="number" class="border-0 text-[1em] focus:outline-none w-full"
                           required/>
                </label>
            </div>
            <div class="mx-2">
                <p class="text-[0.85em] text-gray-500">
                    We'll only contact you with essential update or change to your booking
                </p>
            </div>
            <div id="loop-request-information">
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
</div>

<script>
    function showFromProcess(data) {
        $('#form-personal-payment').submit(async function (e) {
            e.preventDefault()

            namePayment = $('#name-payment').val().trim();
            emailPayment = $('#email-payment').val().trim();
            countryPayment = $('#country-payment').val().trim();
            phonePayment = $('#phone-payment').val().trim();
            for (let i = 0; i < data.length; i++) {
                const d = data[i]
                for (let r = 0; r < d.reqInformation.length; r++) {
                    const storeRequest = $(`#request-payment-${r}`).val().trim()
                    requestPayment.push(storeRequest)
                }
            }

            // to next section form
            cardPayment.removeClass("hidden")
            transactionPayment.addClass("hidden")

            // await postMailTemplatePayment.sendToBookingEmailPayment(emailPayment)
        })


        let tab = ''
        for (let i = 0; i < data.length; i++) {
            const d = data[i]

            tab +=
                `
                <div class="flex flex-col gap-[1em] py-4">
                    <div class="flex flex-row gap-[0.5em] items-center">
                        <img src="${d.image}"
                             alt="image-payment" class="w-[5em]"/>
                        <div class="flex flex-col">
                            <p class="text-[1em] font-[700]">
                                ${d.title}
                            </p>
                            <p class="text-[1em] text-gray-500 font-[600]">
                                ${d.day}, ${d.date} at ${d.clock}
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[1em] py-4">
                        <h5 class="text-[1em] font-[600]">
                            Request information
                        </h5>
            `
            for (let r = 0; r < d.reqInformation.length; r++) {
                tab +=
                    `

                        <p class="text-[1em]">
                            ${d.reqInformation[r]}
                        </p>
                        <label>
							<textarea id="request-payment-${r}" class="text-[1em] w-full border border-gray-200 p-2 focus:outline-none w-full" required></textarea>
                        </label>
                    </div>
                </div>
                `
            }
            $('#loop-request-information').html(tab)
        }
    }

</script>
