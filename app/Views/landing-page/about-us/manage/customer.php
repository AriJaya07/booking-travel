<div class="py-10 bg-green-700">
	<div class="flex flex-col text-white 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
		<div class="flex flex-col">
			<h5 class="font-[700] text-center md:text-[2em] text-[1.5em]">
				See what our customers are saying on TripAdvisor
			</h5>
		</div>

		<div id="loop-customer" class="py-10 flex flex-row flex-wrap justify-center">
			<!-- inner Html -->
		</div>

		<div id="show-more-customer" class="flex flex-row justify-center items-center gap-[2em] p-10">
			<hr class="bg-white w-full p-[0.1em]"/>
			<button type="button"
					class="text-white text-[0.85em] border-2 border-white hover:bg-gray-500 px-3 py-2 rounded-full whitespace-nowrap">
				Show more
			</button>
			<hr class="bg-white w-full p-[0.1em]"/>
		</div>

	</div>
</div>


<script>
	function showCustomer(data) {
		let tab = '';
		const itemsPerPage = 4;
		let currentPage = 1;

		function displayItems(startIndex, endIndex) {
			for (let i = startIndex; i < endIndex; i++) {
				const d = data.data[i]

				tab +=
					`
				<div class="flex flex-col 2xl:w-[38em] lg:w-[30em] w-full p-5">
					<div class="flex flex-row gap-[1em] items-center ">
						<img
							src="${d.image}"
							class="rounded-full w-[3em] h-[3em]" alt="cutomer-1"/>
						<div class="flex flex-col">
							<h5 class="font-[600]">
								${d.name}
							</h5>
							<p>
								${d.location}
							</p>
							<div class="flex flex-row">
								<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/one-start.svg"
										alt="star-1" class="w-[1em]"/>
								<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/one-start.svg"
										alt="star-1" class="w-[1em]"/>
								<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/one-start.svg"
										alt="star-1" class="w-[1em]"/>
								<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/one-start.svg"
										alt="star-1" class="w-[1em]"/>
								<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/one-start.svg"
										alt="star-1" class="w-[1em]"/>
							</div>
						</div>
					</div>
					<div class="text-[0.85em] py-5">
						<p>
							${d.comment}
						</p>
					</div>
				</div>
				`
			}
		}

		displayItems(0, Math.min(itemsPerPage, data.data.length))
		document.getElementById("loop-customer").innerHTML = tab

		if (data.data.length > itemsPerPage) {
			const showMoreButton = document.getElementById("show-more-customer")
			showMoreButton.addEventListener("click", function () {
				currentPage++;
				const startIndex = (currentPage - 1) * itemsPerPage;
				const endIndex = currentPage * itemsPerPage;

				if (startIndex < data.data.length) {
					displayItems(startIndex, Math.min(endIndex, data.data.length));
					document.getElementById("loop-customer").innerHTML = tab
				}

				if (endIndex > data.data.length) {
					showMoreButton.style.display = "none";
				}
			})
		}
	}
</script>
