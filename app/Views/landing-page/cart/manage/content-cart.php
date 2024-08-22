<div class="my-[10em] 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
    <div class="flex flex-col">
        <div class="">
            <h5 class="font-[700] text-[2em]">
                Shopping cart
            </h5>
        </div>

        <div class="flex lg:flex-row flex-col lg:justify-between py-[2em] lg:gap-[1em] gap-[2em]">
            <div id="shop-cart" class="border-t-4 border-orange-500 2xl:w-[50em] lg:w-[40em] w-full">
                <!--
                <div class="bg-orange-500 px-5 py-2 bg-opacity-20">
                    <p id="expiryTime" class="text-black">Expired Time: 30 minutes</p>
                </div>
                -->


            </div>
            <div class="flex flex-col 2xl:w-[25em] lg:w-[20em] w-full">
                <div class="border border-t-4 border-blue-500 rounded-2xl p-5 mb-[1em]">
                    <div class="flex flex-col justify-between">

                        <div id="loop-count" class="flex flex-col">
                            <!-- inner HTML -->
                        </div>

                        <div class="flex justify-center w-full">
                            <button id="button-checkout" type="button"
                                    class="font-[700] border border-blue-500 text-[0.85em] bg-blue-500 hover:bg-blue-800 text-white p-2 rounded-2xl w-full">
                                Go to checkout
                            </button>
                        </div>
                    </div>
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
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function showContentCart(keyCart, item) {
        const cartList = item
        let shop = '';
        let count = '';
        let currencyCurrent;
        let totalPrice = 0;
        
        count = Object.keys(cartList).length;

        for (let i = 0; i < count; i++) {
            const data = cartList[i]

            const starsHtml = changeStarFunction.getStarIcons(data.rate)

            currencyCurrent = changeAllCurrency.symbolPrice(data.price, changeCurrency)
            totalPrice += parseFloat(data.price)

            shop +=
                `
                <div class="md:mt-[0em] mt-[5em]">
                    <div class="flex md:flex-row flex-col md:items-center gap-[2em] md:py-5 py-[5em]">
                        <div>
                            <img src="${data.image}" alt="image" class="md:w-[30em] w-full mt-[-8em]" />
                        </div>
                        <div class="flex flex-col gap-[0.5em] w-full">
                            <p class="text-[1em] font-[700]">
                                ${data.title}
                            </p>
                            <div class="flex flex-row items-center gap-[1em]">
                                <p class="text-[0.85em]">
                                    ${data.rate}
                                </p>
                                <div class="flex flex-row gap-[0.5em]">
                                ${starsHtml}
                                </div>
                                <p class="text-[0.85em]">
                                    ${data.review}
                                </p>
                            </div>
                            <div class="flex flex-row items-center gap-[0.5em]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-people"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg>
                                <p class="font-[600] text-[1em]">
                                    ${data.count} person
                                </p>
                            </div>
                            <div class="flex flex-row items-center gap-[0.5em]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                </svg>
                                <p class="font-[600] text-[1em]">
                                    ${data.date}
                                </p>
                            </div>
                            <div class="flex flex-row items-center gap-[0.5em]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-clock"
                                    viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                </svg>
                                <p class="font-[600] text-[1em]">
                                    Starting time: ${data.clock}(local time)
                                </p>
                            </div>
                            <div class="flex flex-row items-center gap-[0.5em]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-globe"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472M3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                                </svg>
                                <p>
                                    <span class="font-[600] text-[1em]">Languages:</span> ${data.language}
                                </p>
                            </div>
                            <div class="flex flex-row items-center gap-[0.5em]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-x" viewBox="0 0 16 16">
                                    <path
                                        d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708"/>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                </svg>
                                <p class="text-[1em]">
                                    This activity is non refundable
                                </p>
                            </div>

                            <!-- Change date -->
                            <!--
                            <p id="change-date-${keyCart}" class="text-blue-500 text-[0.85em]">
                                Change date or participant(s)
                            </p>
                            -->

                            <hr class="md:block hidden"/>

                            <div class="flex flex-col gap-[0.5em] w-full">
                                <div class="flex justify-end">
                                    <div id="delete-${keyCart}" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-red-500 font-[600] text-right text-[1em] whitespace-nowrap">
                                    ${currencyCurrent}
                                </p>
                            </div>
                        </div>

                        <hr class="text-gray-500 md:hidden block" />
                    </div>
                </div>
                    ` 
        }

        $(`#shop-cart`).html(shop)

        count =
            `
            <div class="flex flex-row justify-between p-2 text-right">
                <p class="font-[600] text-[0.85em]">
                    Total item:
                </p>
                <div class="flex flex-col">
                    <p class="font-[600] text-[1.25em]">
                        ${changeAllCurrency.symbolPrice(totalPrice, changeCurrency)}
                    </p>
                    <p class="text-green-900 text-[0.85em]">
                        All taxes and fees included
                    </p>
                </div>
            </div>
            `
        $(`#loop-count`).html(count)
        


        // const starsHtml = changeStarFunction.getStarIcons(data.rate)

        // function setCurrency(data, kind) {
        //     let valueSet = 0;
        //     if (kind === 'remove') {
        //         valueSet = changeAllCurrency.removeCurrencySymbol(data)
        //     } else if (kind === 'non-remove') {
        //         valueSet = data
        //     }

        //     if (changeCurrency === 'IDR') {
        //         const mockData = valueSet / 15000
        //         valueSet = 'Rp' + changeAllCurrency.formatNumberResult(mockData * 15000)
        //     } else if (changeCurrency === 'USD') {
        //         valueSet = '$' + changeAllCurrency.formatNumberResult(valueSet / 15000)
        //     }

        //     return valueSet
        // }

        // currencyCurrent = setCurrency(data.price, 'remove')
        // totalPrice = setCurrency(totalCurrency, 'non-remove')

        // shop +=
        //     `
        //         <div class="flex md:flex-row flex-col md:items-center gap-[2em] md:py-5 py-[5em]">
        //             <div>
        //                 <img src="${data.image}" alt="image" class="md:w-[30em] w-full mt-[-8em]" />
        //             </div>
        //             <div class="flex flex-col gap-[0.5em] w-full">
        //                 <p class="text-[1em] font-[700]">
        //                     ${data.title}
        //                 </p>
        //                 <div class="flex flex-row items-center gap-[1em]">
        //                     <p class="text-[0.85em]">
        //                         ${data.rate}
        //                     </p>
        //                     <div class="flex flex-row gap-[0.5em]">
        //                        ${starsHtml}
        //                     </div>
        //                     <p class="text-[0.85em]">
        //                         ${data.review}
        //                     </p>
        //                 </div>
        //                 <div class="flex flex-row items-center gap-[0.5em]">
        //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                          class="bi bi-people"
        //                          viewBox="0 0 16 16">
        //                         <path
        //                             d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
        //                     </svg>
        //                     <p class="font-[600] text-[1em]">
        //                         ${data.count} person
        //                     </p>
        //                 </div>
        //                 <div class="flex flex-row items-center gap-[0.5em]">
        //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                          class="bi bi-calendar3" viewBox="0 0 16 16">
        //                         <path
        //                             d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        //                         <path
        //                             d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
        //                     </svg>
        //                     <p class="font-[600] text-[1em]">
        //                         ${data.date}
        //                     </p>
        //                 </div>
        //                 <div class="flex flex-row items-center gap-[0.5em]">
        //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                          class="bi bi-clock"
        //                          viewBox="0 0 16 16">
        //                         <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
        //                         <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
        //                     </svg>
        //                     <p class="font-[600] text-[1em]">
        //                         Starting time: ${data.clock}(local time)
        //                     </p>
        //                 </div>
        //                 <div class="flex flex-row items-center gap-[0.5em]">
        //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                          class="bi bi-globe"
        //                          viewBox="0 0 16 16">
        //                         <path
        //                             d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472M3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
        //                     </svg>
        //                     <p>
        //                         <span class="font-[600] text-[1em]">Languages:</span> ${data.language}
        //                     </p>
        //                 </div>
        //                 <div class="flex flex-row items-center gap-[0.5em]">
        //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                          class="bi bi-calendar-x" viewBox="0 0 16 16">
        //                         <path
        //                             d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708"/>
        //                         <path
        //                             d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
        //                     </svg>
        //                     <p class="text-[1em]">
        //                         This activity is non refundable
        //                     </p>
        //                 </div>

        //                 <!-- Change date -->
        //                 <!--
        //                 <p id="change-date-${keyCart}" class="text-blue-500 text-[0.85em]">
        //                     Change date or participant(s)
        //                 </p>
        //                  -->

        //                 <hr class="md:block hidden"/>

        //                 <div class="flex flex-col gap-[0.5em] w-full">
        //                     <div class="flex justify-end">
        //                         <div id="delete-${keyCart}" class="cursor-pointer">
        //                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        //                                  class="bi bi-trash3"
        //                                  viewBox="0 0 16 16">
        //                                 <path
        //                                     d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
        //                             </svg>
        //                         </div>
        //                     </div>
        //                     <p class="text-red-500 font-[600] text-right text-[1em] whitespace-nowrap">
        //                         ${currencyCurrent}
        //                     </p>
        //                 </div>
        //             </div>

		// 			<hr class="text-gray-500 md:hidden block" />
        //         </div>
        //         `
        // $(`#loop-shop-${keyCart}`).html(shop)

        // count =
        //     `
        //     <div class="flex flex-row justify-between p-2 text-right">
        //         <p class="font-[600] text-[0.85em]">
        //             Total item:
        //         </p>
        //         <div class="flex flex-col">
        //             <p class="font-[600] text-[1.25em]">
        //                 ${totalPrice}
        //             </p>
        //             <p class="text-green-900 text-[0.85em]">
        //                 All taxes and fees included
        //             </p>
        //         </div>
        //     </div>
        //     `
        // $(`#loop-count`).html(count)

        const delStorage = document.getElementById(`delete-${keyCart}`);

        delStorage.addEventListener("click", function () {
            const res = confirm('Are you sure to remove this activity?')
            if (res) {
                localStorage.removeItem(keyCart)
                location.reload()
            }
        })
    }

    window.switchCart = {
        getDataChangeCart: function () {
            let loopCart = 0
            for (let i = 1; i < 4; i++) {
                loopCart = i
                window.extensionStorage.handleCart(`cart-${loopCart}`, loadStorageCart)
            }
        }
    }

</script>
