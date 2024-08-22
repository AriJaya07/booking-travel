<div class="mt-[10em] 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
    <div class="flex flex-col">

        <div>
            <div id="loop-detail-boat">
                <!-- Inner HTML -->
            </div>
            <div class="absolute lg:top-[20em] sm:top-[24em] top-[25em] ml-[0.5em]">
                <div id="loop-pic-boat" class="bg-white px-5 py-2 rounded-xl border border-black">
                    <!-- inner HTML -->
                </div>
            </div>
        </div>

        <div id="open-banner-boat" class="hidden">
            <div class="fixed z-[10] inset-0 bg-black bg-opacity-70 flex justify-center items-center w-full">
                <div class="flex absolute md:top-[7em] top-[10em] md:right-[5em] right-[1em] justify-end md:px-[5em] px-[1em] cursor-pointer">
                    <p id="close-banner-boat" class="font-[700] text-white 2xl:text-[2em] sm:text-[1.5em] text-[1em]">
                        x
                    </p>
                </div>

                <div id="popup-banner-boat" class="relative md:w-1/2 w-3/4 top-0 left-0">
                    <!-- inner HTML -->
                </div>

                <div class="absolute flex w-full justify-between md:px-[5em] px-[1em]">
                    <p id="prev-image-boat" class="text-white text-[1.5em] cursor-pointer">
                        &#10094;
                    </p>
                    <p id="next-image-boat" class="text-white text-[1.5em] cursor-pointer">
                        &#10095;
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col p-5">
            <h5 class="font-[700] md:text-[2em] text-[1.5em]">
                About this Boat
            </h5>

            <div id="loop-about-boat" class="flex flex-col">
                <!-- inner HTML -->
            </div>

        </div>

    </div>
</div>

<script>
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)

    function showDetailBoatActivity(data) {
        let tab = ''
        let countPict = ''
        let popupTab = ''

        for (let i = 0; i < data.length; i++) {
            const d = data[i]
            const starsHtml = changeStarFunction.getStarIcons(d.rate)
            const currencyCurrent = changeAllCurrency.symbolPrice(d.price, changeCurrency)

            tab +=
                `
				<p class="text-gray-500 font-[700] text-[1em]">
					${d.duration}
				</p>
				<h5 class="font-[700] md:text-[2em] text-[1.5em] py-2">
					${d.title}
				</h5>
				<div class="flex md:flex-row flex-col lg:gap-[2em] gap-[0.5em] md:py-5 py-2">
					<div class="flex flex-row gap-[1em]">
						${starsHtml}
					</div>
					<p class="md:text-[1em] text-[0.85em]">${d.rate} / ${d.countReview} reviews</p>
					<span class="text-gray-500 md:text-[1em] text-[0.85em]">
						Activity provider:
						<u class="font-[600] text-black">${d.kind}</u>
					</span>
				</div>
				<div id="popup-boat-banner" class="flex flex-row items-center w-full justify-center cursor-pointer">
					<img
						src="${d.imageBanner[0]}"
						alt="highlight-1" class="2xl:w-[50em] lg:w-[40em] md:w-[30em] lg:h-[27em] md:h-[20em] w-full md:p-1"/>
					<div class="flex flex-col w-full md:block hidden">
						<img
							src="${d.imageBanner[1]}"
							alt="highlight-1" class="lg:w-[40em] lg:h-[20em] w-[20em] h-[13em] p-1"/>
						<div class="flex flex-row items-center">
							<img
								src="${d.imageBanner[2]}"
								alt="highlight-1" class="lg:w-[15em] h-[7em] w-[8.4em] p-1"/>
							<img
								src="${d.imageBanner[3]}"
								alt="highlight-1" class="lg:w-[15em] h-[7em] w-[8.4em] p-1"/>
						</div>
					</div>
				</div>

				<div class="flex lg:flex-row flex-col md:p-5 p-2 lg:items-center lg:gap-[5em] gap-[2em]">
					<div class="flex md:flex-row flex-col lg:gap-[3em] gap-[2em]">
						<div class="flex md:flex-col flex-row items-center gap-[1em]">
							<img
								src="${d.profile}"
								alt="logo-1" class="w-[5em] h-[3.5em] rounded-full"/>
							<p class="font-[600] text-[1em]">
								${d.name}
							</p>
						</div>
						<p class="text-[1em]">
							${d.description}
						</p>
					</div>
					<div class="border border-t-blue-500 flex flex-col lg:w-[50em] w-full">
						<div class="flex flex-row justify-between items-center p-5">
							<p class="text-[0.85em]">
								From <br/> <span class="font-[700]">${currencyCurrent}</span> <br/> per person
							</p>
							<div class="">
								<a href="<?php echo base_url()?>payment" target="_self" class="">
									<button type="button" class="text-[0.85em] bg-blue-500 text-white rounded-full py-2 px-4">
										Book Ticket
									</button>
								</a>
							</div>
						</div>
						<div class="flex flex-row items-center px-5 py-2 gap-[1em]">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
										class="bi bi-calendar-date" viewBox="0 0 16 16">
								<path
									d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
								<path
									d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
							</svg>
							<p class="text-[0.85em]"><strong>Bali Instagram Tour:</strong> ${d.socialMedia}</p>
						</div>
					</div>
				</div>
				`
            document.getElementById("loop-detail-boat").innerHTML = tab

            countPict +=
                `
                    <p class="text-black font-[600]">Total: ${d.imageBanner.length}+</p>
                    `;
            document.getElementById('loop-pic-boat').innerHTML = countPict

            for (let m = 0; m < d.imageBanner.length; m++) {
                popupTab +=
                    `
                <img id="popup-boat-${m}" src="${d.imageBanner[m]}" alt="baot-popup-${m}" class="w-full hidden"/>
                `;
                document.getElementById('popup-banner-boat').innerHTML = popupTab;

                let popupImage = document.getElementById(`popup-boat-${m}`);
                if (`popup-boat-0`) {
                    popupImage.classList.remove("hidden")
                }
                let prevImage = document.getElementById(`prev-image-boat`);
                let nextImage = document.getElementById(`next-image-boat`);

                nextImage.addEventListener('click', nextClickListener);
                prevImage.addEventListener('click', prevClickListener);
            }

            let startIndexImage = 0;

            function nextClickListener() {
                startIndexImage = (startIndexImage + 1) % d.imageBanner.length
                showImage();
            }

            function prevClickListener() {
                startIndexImage = (startIndexImage - 1 + d.imageBanner.length) % d.imageBanner.length
                showImage();
            }

            function showImage() {
                for (let i = 0; i < d.imageBanner.length; i++) {
                    let img = document.getElementById(`popup-boat-${i}`);
                    if (img) {
                        img.classList.add('hidden');
                    }
                }

                const popupImage = document.getElementById(`popup-boat-${startIndexImage}`);
                if (popupImage) {
                    popupImage.classList.remove('hidden');
                }
            }
        }

        const openPopupImageBanner = document.getElementById('popup-boat-banner')
        const closePopupBanner = document.getElementById(`close-banner-boat`)
        const contentPopupBanner = document.getElementById('open-banner-boat');

        openPopupImageBanner.addEventListener("click", function () {
            contentPopupBanner.classList.remove("hidden")
        })

        closePopupBanner.addEventListener("click", function () {
            contentPopupBanner.classList.add("hidden")
        })

        window.switchDetailBoat = {
            getDataChangeDetailBoat: function () {
                showDetailBoatActivity(loadDetailBoat)
            }
        }
    }

    function showTitleActivityBoat(data) {
        let text = '';
        const maxLength = Math.max(
            ...data.map(d => Math.max(d.activityTitle.length, d.activityDescription.length, d.activityImage.length))
        );

        for (let i = 0; i < maxLength; i++) {
            text +=
                `
				<div class="flex flex-col py-5">
					<div class="flex flex-row items-center gap-[1em]">
				`;

            // Iterate over data use the index to access element
            data.forEach(d => {
                const title = (d.activityTitle || [])[i] || '';
                const description = (d.activityDescription || [])[i] || '';
                const image = (d.activityImage || [])[i] || '';

                text +=
                    `
					<div class="w-[3em]">
						<img src="${image}" alt="image-${i}" class="w-[2em]">
					</div>
					`;

                text +=
                    `
					<div class="flex flex-col w-full">
						<p class="text-black font-[600] text-[1em]">
							${title}
						</p>
					`

                text +=
                    `
						<p class="text-gray-500 text-[1em]">
							${description}
						</p>
					</div>
					`
            })

            text +=
                `
					</div>
				</div>
				`
        }

        document.getElementById("loop-about-boat").innerHTML = text
    }
</script>
