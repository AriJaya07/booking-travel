<div class="md:m-[2em] m-[1em]">
    <div class="flex flex-col">
        <div class="">
            <h5 class="font-[700] text-[3em]">
                All activities
            </h5>
        </div>
        <div class="flex flex-row justify-between py-10">
            <div class="flex md:flex-row flex-col text-black gap-[1em]">
                <div
                     class="border border-gray-500 px-3 flex justify-between py-1 bg-transparent rounded-lg">
                    <label for="price" class="text-[1em]">
                        Price: &nbsp;
                    </label>
                    <label for="price">
                        <select name="price" id="price" class="text-black xl:text-[1em] text-[0.85em] cursor-pointer focus:outline-none bg-white">
                            <!-- inner HTML -->
                        </select>
                    </label>

                </div>
                <div class="border border-gray-500 px-3 flex justify-between py-1 bg-transparent rounded-lg">
                    <label for="durationFilter" class="text-[1em]">
                        Duration: &nbsp;
                    </label>
                    <label for="duration" class="">
                        <select name="duration" id="duration"
                                class="text-black xl:text-[1em] text-[0.85em] cursor-pointer focus:outline-none bg-white">
                            <option value="" class="text-center">All Duration</option>
                            <option value="day" class="text-left">Day</option>
                            <option value="week" class="text-left">Week</option>
                            <option value="month" class="text-left">Month</option>
                            <option value="annual" class="text-left">Noun</option>
                        </select>
                    </label>
                </div>
                <div class="border border-gray-500 px-3 py-1 flex justify-between bg-transparent rounded-lg">
                    <label for="timeFilter" class="text-[1em]">
                        Time: &nbsp;
                    </label>
                    <label for="time" class="">
                        <select name="time" id="time"
                                class="text-black xl:text-[1em] text-[0.85em] cursor-pointer focus:outline-none bg-white">
                            <option value="" class="text-center">All Time</option>
                            <option value="8" class="text-left">8 Hours</option>
                            <option value="36" class="text-left">36 hours</option>
                        </select>
                    </label>
                </div>
            </div>
            <div>
                <div id="filter-button"
                     class="hover:bg-blue-200 border border-gray-500 px-3 py-1 bg-transparent rounded-lg cursor-pointer">
                    <button type="button" class="">
                        Filter
                    </button>
                </div>
            </div>
        </div>

        <div id="loop-activity" class="flex flex-row flex-wrap justify-center items-center gap-[1em]">
            <!-- Inner HTML -->
        </div>

        <div id="show-more-activity" class="flex flex-row justify-center items-center gap-[2em] p-10">
            <div class="flex flex-row gap-[2em] items-center w-full">
                <hr class="bg-blue-200 w-full p-[0.1em]"/>
                <button type="button"
                        class="text-blue-500 text-[0.85em] border-2 hover:bg-blue-100 border-blue-500 px-3 py-2 rounded-full whitespace-nowrap">
                    Show more
                </button>
                <hr class="bg-blue-200 w-full p-[0.1em]"/>
            </div>
        </div>
    </div>
</div>

<script>
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function dropPrice(data) {
        for (let i = 0; i < data.length; i++) {
            const d = data[i]

            for (let p = 0; p < d.price.length; p++) {
                const mockDropPrice = d.price

                let tabDrop = ''
                function dropConvertPrice(data) {

                    function formatNumberWithTwoDecimals(number) {
                        return parseFloat(number).toFixed(2);
                    }

                    function formatNumberResult(number) {
                        const parts = number.toFixed(2).toString().split('.');
                        const integerPart = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                        return integerPart + '.' + parts[1];
                    }

                    const resultArray = [];

                    mockDropPrice.forEach((price) => {
                        let convertedValue = 0;

                        if (data === 'USD') {
                            convertedValue = d.symbolCurrency[0] + ' ' + formatNumberWithTwoDecimals(price / Number(d.differPrice));
                        } else if (data === 'IDR') {
                            const mockIdrPrice = price / Number(d.differPrice)
                            convertedValue = d.symbolCurrency[1] + ' ' + formatNumberResult(mockIdrPrice * Number(d.differPrice));
                        }

                        resultArray.push(convertedValue);
                    });

                    return resultArray;
                }

                const convertedPrices = dropConvertPrice(changeCurrency);

                tabDrop +=
                `
                <option value="" class="text-center">All Price</option>
                `

                convertedPrices.forEach((price, index) => {
                    tabDrop +=
                    `
                    <option value="${mockDropPrice[index]}" class="text-left">${' > ' + price}</option>
                    `;
                });

                document.getElementById("price").innerHTML = tabDrop;
            }
        }
    }

    function showActivity(data) {
        let tab = '';
        const itemsPerPage = 4;
        let currentPage = 1;
        
        function displayItems(startIndex, endIndex) {
            for (let i = startIndex; i < endIndex; i++) {
                const d = data[i]
                const starsHtml = changeStarFunction.getStarIcons(d.star)
                const currencyCurrent = changeAllCurrency.symbolPrice(d.price, changeCurrency)
                tab +=
                    `
					<div class="flex md:flex-col flex-row border border-gary-500 md:max-w-[16em] md:h-[28em] max-w-full rounded-2xl">
						<div>
							<a id="id_${d.id}" href="<?php echo base_url()?>detail-activity?id=${d.id}" target="_self" class="cursor-pointer">
								<img
									src="<?php echo base_url()?>${d.photo}"
									alt="image-1" class="md:w-full w-[25em] md:p-0 p-2 md:h-[16em] h-[10em] md:rounded-t-lg md:rounded-none rounded-2xl"/>
							</a>
						</div>
						<div class="flex flex-col md:justify-between max-h-[15em] p-2">
							<div class="flex flex-col">
								<h5 class="text-gray-500 capitalize text-[0.85em] font-[600] capitalize">
									 ACTIVITY
								</h5>
								<p class="font-[600] text-[0.85em] capitalize text-gray-800">
									${d.title} Trip
								</p>
							</div>

							<div class="flex flex-col">`+
								// <p class="capitalize text-gray-500 font-[500] text-[0.65em]">
								// 	${moment(d.reg_date).format("MM/DD/YYYY")} date
								// </p>
								`<div class="flex flex-row text-gray-500 flex-wrap">
									<p class="font-[500] capitalize text-[0.65em]">
										 ${d.duration}
									</p>`+
									// <p class="capitalize font-[500] text-[0.65em]">
									// 	 group &nbsp;•&nbsp;
									// </p>
									// <p class="capitalize font-[500] text-[0.65em]">
									// 	Pickup
									// </p>
								`</div>
							</div>
							<div class="">
								<div class="flex flex-row flex-wrap items-center gap-[0.5em]">
									${starsHtml}
									<p class="text-[0.85em] text-gray-500">
                                        ${d.star}
									</p>
									<p class="text-gray-500 capitalize text-[0.85em]">
										(${d.review})
									</p>
								</div>
								<div class="">
									<p class="capitalize text-gray-800 text-[0.75em]">
										From <strong class="text-[1em]">${currencyCurrent}</strong> per person
									</p>
								</div>
							</div>
						</div>
					</div>
					`
            }
        }

        displayItems(0, Math.min(itemsPerPage, data.length))
        document.getElementById("loop-activity").innerHTML = tab

        const showMoreButton = document.getElementById("show-more-activity")
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = currentPage * itemsPerPage;
        if (data.length > itemsPerPage) {
            showMoreButton.addEventListener("click", function () {
                currentPage++;

                if (startIndex < data.length) {
                    displayItems(startIndex, Math.min(endIndex, data.length));
                    document.getElementById("loop-activity").innerHTML = tab
                }

                if (endIndex > data.length) {
                    showMoreButton.style.display = "none";
                }
            })
        } else {
            showMoreButton.style.display = "none";
        }

        const filterButtonTitle = document.getElementById("search-activity-button")

        filterButtonTitle.addEventListener("click", function () {
            const searchTerm = document.getElementById("search-title-activity").value.toLowerCase()
            const dateTerm = document.getElementById("search-date-activity").value;

            const priceFilter = document.getElementById("price").value;
            const durationFilter = document.getElementById("duration").value;
            const timeFilter = document.getElementById("time").value

            filteredDataActivity = originalDataActivity.filter(item =>
                (item.title === '' || item.title.toLowerCase().includes(searchTerm)) &&
                (dateTerm === '' || item.date === dateTerm) &&

                // (priceFilter === "" || parseFloat(item.price) === parseFloat(priceFilter)) &&
                (priceFilter === "" || parseFloat(item.price) > parseFloat(priceFilter)) &&
                (durationFilter === "" || item.duration === durationFilter) &&
                (timeFilter === "" || parseFloat(item.time) >= parseFloat(timeFilter))
            )

            currentPage = 1;
            showActivity(filteredDataActivity);
            const showMoreButton = document.getElementById("show-more-activity");
            showMoreButton.style.display = filteredDataActivity.length > itemsPerPage ? "block" : "none";
        })


        // Search functionality
        const filterButton = document.getElementById('filter-button');

        filterButton.addEventListener("click", function () {
            const searchTerm = document.getElementById("search-title-activity").value.toLowerCase()
            const dateTerm = document.getElementById("search-date-activity").value;

            const priceFilter = document.getElementById("price").value;
            const durationFilter = document.getElementById("duration").value;
            const timeFilter = document.getElementById("time").value

            filteredDataActivity = originalDataActivity.filter(item =>
                // (priceFilter === "" || parseFloat(item.price) === parseFloat(priceFilter)) &&
                (priceFilter === "" || parseFloat(item.price) > parseFloat(priceFilter)) &&
                (durationFilter === "" || item.duration === durationFilter) &&
                (timeFilter === "" || parseFloat(item.time) >= parseFloat(timeFilter)) &&

                (item.title === '' || item.title.toLowerCase().includes(searchTerm)) &&
                (dateTerm === '' || item.date === dateTerm)

                // Add more fields to search if needed
            );

            currentPage = 1;
            showActivity(filteredDataActivity);
            const showMoreButton = document.getElementById("show-more-activity");
            showMoreButton.style.display = filteredDataActivity.length > itemsPerPage ? "block" : "none";
        })

        window.switchActivity = {
            getDataChangeActivity: function () {
                tab = ''
                dropPrice(dataMockFilter)
                showActivity(filteredDataActivity);
                document.getElementById("show-more-activity").style.display = "block"
                displayItems(0, Math.min(itemsPerPage, data.length))
                document.getElementById("loop-activity").innerHTML = tab
            }
        }
    }

</script>
