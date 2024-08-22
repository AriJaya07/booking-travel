<div class="md:mx-[2em] md:my-[5em] mx-[1em] my-[2em]">
    <div id="show-look-search" class="flex flex-col hidden">
        <div class="py-5">
            <h5 class="font-[700] text-[3em]">
                Boat
            </h5>
        </div>

        <div id="loop-boat" class="flex flex-row flex-wrap justify-center items-center gap-[1em]">
            <!-- Inner HTML -->
        </div>

        <div id="show-more-boat" class="flex flex-row justify-center items-center gap-[2em] p-10">
            <div class="flex flex-row gap-[2em] items-center w-full">
                <hr class="bg-blue-200 w-full p-[0.1em]"/>
                <button type="button"
                        class="text-blue-500 text-[0.85em] border-2 hover:bg-blue-100 border-blue-500 px-3 py-2 rounded-full whitespace-nowrap">
                    Show more
                </button>
                <hr class="bg-blue-200 w-full p-[0.1em]"/>
            </div>
        </div>

        <div id="not-found-boat" class="flex flex-row justify-center items-center gap-[2em] p-10 hidden">
            <div class="flex flex-row gap-[2em] justify-center items-center w-full">
                <p class="2xl:text-[1.5em] text-[1em]">
                    Boat not available
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function showContentBoat(data) {
        let tab = '';
        const itemsPerPage = 4;
        let currentPage = 1;

        function displayItems(startIndex, endIndex) {
            for (let i = startIndex; i < endIndex; i++) {
                const d = data[i]
                const starsHtml = changeStarFunction.getStarIcons(d.rate)
                const currencyCurrent = changeAllCurrency.symbolPrice(d.price, changeCurrency)

                tab +=
                    `
					<div class="flex flex-col border border-gary-500 lg:max-w-[16em] h-[28em] max-w-[21em] rounded-2xl">
						<div>
                            <a id="id_${i + 1}" href="<?php echo base_url()?>detail-boat?id=${i + 1}" target="_self" class="cursor-pointer">
                                <img
                                    src="${d.image}"
                                    alt="image-1" class="w-full h-[16em] rounded-t-lg"/>
                            </a>
						</div>
						<div class="flex flex-col justify-between h-[15em] p-2">
							<div class="flex flex-col">
								<h5 class="text-gray-500 capitalize text-[0.85em] font-[600] capitalize">
										${d.title}
								</h5>
								<div class="flex flex-row gap-[0.5em]">
									<p class="font-[600] text-[0.85em] capitalize text-gray-800">
										${d.to}
									</p>
									<p class="font-[600] text-[0.85em] capitalize text-gray-800">
										->
									</p>
									<p class="font-[600] text-[0.85em] capitalize text-gray-800">
										${d.from}
									</p>
								</div>
							</div>

							<div class="flex flex-col">
								<p class="capitalize text-gray-500 font-[500] text-[0.65em]">
									${d.type}
								</p>
								<div class="flex flex-row text-gray-500 flex-wrap">
									<p class="font-[500] capitalize text-[0.65em]">
										${d.passenger} Hours &nbsp;•&nbsp;
									</p>
									<p class="capitalize font-[500] text-[0.65em]">
										Departure: ${d.departure}  &nbsp;•&nbsp;
									</p>
									<p class="capitalize font-[500] text-[0.65em]">
										return: ${d.returnDeparture}
									</p>
								</div>
							</div>
							<div class="">
								<div class="flex flex-row flex-wrap items-center gap-[0.5em]">
									${starsHtml}
									<p class="text-[0.85em] text-gray-500">
										${d.rate}
									</p>
									<p class="text-gray-500 capitalize text-[0.85em]">
										(${d.review})
									</p>
								</div>
								<div class="flex flex-col gap-[0.5em]">
									<p class="capitalize text-gray-800 text-[0.75em]">
										From ${currencyCurrent} per person
									</p>
									<a id="id_${i + 1}" href="<?php echo base_url()?>detail-boat?id=${i + 1}" target="_self" class="cursor-pointer">
										<p class="capitalize text-white text-[0.75em] text-center bg-blue-500 py-2 cursor-pointer hover:bg-blue-900">
											${d.availability}
										</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					`
            }
        }

        displayItems(0, Math.min(itemsPerPage, data.length))
        document.getElementById("loop-boat").innerHTML = tab

        if (data.length > itemsPerPage) {
            const showMoreButtonBoat = document.getElementById("show-more-boat")
            showMoreButtonBoat.addEventListener("click", function () {
                currentPage++;
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = currentPage * itemsPerPage;

                if (startIndex < data.length) {
                    displayItems(startIndex, Math.min(endIndex, data.length));
                    document.getElementById("loop-boat").innerHTML = tab
                }

                if (endIndex > data.length) {
                    showMoreButtonBoat.style.display = "none"
                }
            })
        } else if (data.length === 0) {
            document.getElementById('not-found-boat').classList.remove('hidden')
        }

        const filterButtonSearchBoat = document.getElementById("search-boat-btn")

        filterButtonSearchBoat.addEventListener("click", function () {
            const fromFilter = document.getElementById(`select-from`).value;
            const toFilter = document.getElementById(`select-to`).value;
            const filterType = document.getElementById(`select-type`).value;
            const filterPassenger = document.getElementById(`select-passenger`).value;
            const filterDeparture = document.getElementById("departure-value").value;
            const filterReturn = document.getElementById("return-value").value;

            if (!fromFilter) {
                alert('Please select from address!')
            } else if (!toFilter) {
                alert('Please select to address!')
            } else if (!filterType) {
                alert('Please select type!')
            } else if (!filterPassenger) {
                alert('Please select passenger!')
            } else if (!filterDeparture) {
                alert('Please select date departure!')
            } else if (!filterReturn) {
                alert('Please select date return!')

            } else {
                document.getElementById('show-look-search').classList.remove('hidden')
                filteredDataBoat = originalDataBoat.filter(item =>
                    (fromFilter === item.from || item.from === '') &&
                    (toFilter === item.to || item.to === '') &&
                    (filterType === item.type || item.type === '') &&
                    (filterPassenger === item.passenger || item.passenger === '') &&
                    (filterDeparture === item.departure || item.departure === '') &&
                    (filterReturn === item.returnDeparture || item.returnDeparture === '')
                )
                currentPage = 1;
                showContentBoat(filteredDataBoat);
                const showMoreButtonBoat = document.getElementById("show-more-boat");
                showMoreButtonBoat.style.display = filteredDataBoat.length > itemsPerPage ? "block" : "none"
            }
        })

        window.switchBoat = {
            getDataChangeBoat: function () {
                tab = ''
                showContentBoat(filteredDataBoat);
                document.getElementById("show-more-boat").style.display = "block"
                displayItems(0, Math.min(itemsPerPage, data.length))
                document.getElementById("loop-boat").innerHTML = tab
            }
        }

    }
</script>
