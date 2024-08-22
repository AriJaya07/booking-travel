<div class="flex flex-col 2xl:w-[30em] lg:w-[25em] w-full">
    <h5 class="font-[700] text-[1.5em] pb-5">
        Order summary
    </h5>
    <div id="loop-search-result">
        <!-- inner HTML -->
    </div>

</div>

<script>
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function showSearchResult(data) {
        let tab = ''
        for (let i = 0; i < data.length; i++) {
            const d = data[i]

            const starHtml = changeStarFunction.getStarIcons(d.rate)
            const currencyCurrent = changeAllCurrency.symbolPrice(d.price, changeCurrency)
            const subCurrencyCurrent = changeAllCurrency.symbolPrice(d.subTotal, changeCurrency)

            tab +=
                `
              <div class="flex flex-col border rounded-t-lg border-gray-200 p-4">
                <div class="flex flex-row items-center gap-[0.5em]">
                    <div>
                        <img src="${d.image}"
                             alt="image-payment" class="w-[10em]"/>
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-[1em] font-[700]">
                            ${d.title}
                        </h5>
                        <p class="text-[0.85em] text-gray-500">
                            Provided by <span class="underline">${d.tour}</span>
                        </p>
                        <div class="flex flex-row items-center gap-[0.5em]">
                            <p class="text-[0.85em]">
                               ${d.rate}
                            </p>
                            <div class="flex flex-row items-center gap-[0.1em]">
                                ${starHtml}
                            </div>
                            <p class="text-[0.85em] text-black">
                                (${d.review})
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col border border-gray-200 gap-[0.5em] p-4">
                <div class="flex flex-row items-center gap-[0.5em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-bookmarks" viewBox="0 0 16 16">
                            <path
                                    d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"/>
                            <path
                                    d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"/>
                        </svg>
                    </div>
                    <p class="text-[0.85em] text-gray-500">
                        ${d.bookmark} • Languages: ${d.language}
                    </p>
                </div>
                <div class="flex flex-row items-center gap-[0.5em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock"
                             viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                    </div>
                    <p class="text-[0.85em] text-gray-500">
                        ${d.day}, ${d.date} at ${d.clock}
                    </p>
                </div>
                <div class="flex flex-row items-center gap-[0.5em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people"
                             viewBox="0 0 16 16">
                            <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                        </svg>
                    </div>
                    <p class="text-[0.85em] text-gray-500">
                        ${d.passenger}
                    </p>
                </div>
            </div>
            <div class="flex flex-row items-center justify-between border border-gray-200 p-4">
                <h5 class="text-[1em] text-black font-[700]">
                    Price
                </h5>
                <p class="text-[1em] font-[700]">
                    ${currencyCurrent}
                </p>
            </div>
            <div class="border border-gray-200 p-4 flex flex-row items-center gap-[0.5em]">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x"
                         viewBox="0 0 16 16">
                        <path
                                d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708"/>
                        <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                    </svg>
                </div>
                <p class="text-[1em] text-black font-[600]">
                    This activity is ${d.descActivity}
                </p>
            </div>
            <div class="bg-gray-200 p-4 rounded-b-lg flex flex-row justify-between">
                <h5 class="text-black font-[700] text-[1em]">
                    Subtotal
                </h5>
                <div class="flex flex-col text-right">
                    <p class="text-black font-[700]">
                        ${subCurrencyCurrent}
                    </p>
                    <p class="text-[0.85em] font-[600] text-green-800">
                        All taxes and fess included
                    </p>
                </div>
            </div>
            `

            $('#loop-search-result').html(tab)
        }

        window.switchSearchPayment = {
            getDataSearchPayment: function () {
                showSearchResult(loadPaymentData)
            }
        }
    }
</script>
