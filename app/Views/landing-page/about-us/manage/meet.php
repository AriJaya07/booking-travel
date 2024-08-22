<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em] my-[2em]">
	<div id="loop-meet" class="">
		<!-- Inner Html -->
	</div>
</div>

<script>
	function showMeet(data) {
		let tab = ''
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tab +=
				`
				<div class="">
					<h5 class="uppercase font-[700]">
						${d.title}
					</h5>
				</div>
				<div class="flex lg:flex-row flex-col-reverse mt-[5em] gap-[2em] w-full">
					<div class="flex flex-col lg:w-[40em] w-full">
						<h5 class="font-[700] p-5">
							${d.subHeader}
						</h5>
						<p class="p-5">
							${d.descriptionOne}
						</p>
						<p class="p-5">
							${d.descriptionTwo}
						</p>
					</div>
					<div class="lg:w-[40em] w-full flex justify-center">
						<img src="${d.image}" alt="together"
								class="w-[40em]"/>
					</div>
				</div>
				<div class="flex md:flex-row flex-col">
					<div class="flex lg:flex-row flex-col items-center gap-[2em] lg:p-10 p-5">
						<div>
							<img src="${d.iconCustomer}"
								alt="icon-1" class="w-[2em]"/>
						</div>
						<div class="">
							<p class="text-grey-500 lg:text-left text-center">
								${d.customerReview} happy customers
							</p>
						</div>
					</div>
					<div class="flex lg:flex-row flex-col items-center gap-[2em] lg:p-10 p-5">
						<div>
							<img src="${d.iconTour}"
								alt="icon-2" class="w-[2em]"/>
						</div>
						<div class="">
							<p class="text-grey-500 lg:text-left text-center">
								${d.toursReview} Tours already given
							</p>
						</div>
					</div>
					<div class="flex lg:flex-row flex-col items-center gap-[2em] lg:p-10 p-5">
						<div>
							<img src="${d.iconTop}"
								alt="icon-3" class="w-[2em]"/>
						</div>
						<div class="">
							<p class="text-grey-500 lg:text-left text-center">
								Top Rated on ${d.topReview}
							</p>
						</div>
					</div>
					<div class="flex lg:flex-row flex-col items-center gap-[2em] lg:p-10 p-5">
						<div>
							<img src="${d.iconEmoji}" alt="icon-4"
									class="w-[2em]"/>
						</div>
						<div class="">
							<p class="text-grey-500 lg:text-left text-center">
								${d.emojiReview}
							</p>
						</div>
					</div>
				</div>
				`
			document.getElementById("loop-meet").innerHTML = tab
		}
	}
</script>
