<div class="md:mx-[2em] mx-[1em]">
	<div class="flex flex-col">
		<h5 class="font-[700] md:text-[2em] text-[1.5em] py-10">
			Our most recommended things to do in Nusa Penida
		</h5>

		<div id="loop-recommended" class="flex flex-row flex-wrap justify-center items-center gap-[3em]">
			<!-- inner Html -->
		</div>

		<div id="show-more-recommend" class="flex flex-row justify-center items-center gap-[2em] p-10">
			<div class="flex flex-row gap-[2em] items-center w-full">
				<hr class="bg-blue-200 w-full p-[0.1em]"/>
				<button
					class="text-blue-500 text-[0.85em] border-2 border-blue-500 px-3 py-2 rounded-full whitespace-nowrap hover:bg-blue-100">
					Show more
				</button>
				<hr class="bg-blue-200 w-full p-[0.1em]"/>
			</div>
		</div>
	</div>
</div>


<script>
	// function to limit description
	function limitDescription(description) {
		const words = description.split(' ');
		const limitedWords = words.slice(0, 20);
		return limitedWords.join(' ')
	}

	// load content recommended
	function showRecommended(data) {
		let tab = ''
		const itemsPerPage = 6;
		let currentPage = 1;

		function displayItems(startIndex, endIndex) {
			for (let i = startIndex; i < endIndex; i++) {
				const d = data[i]

				tab +=
					`
					<div class="flex md:flex-row flex-col lg:w-[32em] w-full gap-[1em]">
						<div class="md:w-[30em] w-full">
							<a id="id_${i + 1}" href="<?php echo base_url()?>detail-article?id=${i + 1}" target="_self" class="cursor-pointer">
								<img
									src="${d.image}"
									alt="recommend"
									class="md:w-[30em] md:h-[10em] w-full rounded-2xl"/>
							</a>
						</div>
						<div class="md:w-[30em] w-full">
							<h5 class="text-[1em] font-[700]">
								${d.title}
							</h5>
							<p id="description-recommended-${i}" class="flex flex-col text-[0.85em]">
								${limitDescription(d.description) + ' ...'}
							</p>
							<p class="text-right">
								<a id="id_${i + 1}" href="<?php echo base_url()?>detail-article?id=${i + 1}" target="_self" class="cursor-pointer text-blue-500">
									Show more
								</a>
							</p>
						</div>
					</div>
					`
			}
		}

		function attachEventListeners() {
			// validation to show-more-content-recommended
			if (data.length > itemsPerPage * currentPage) {
				const showMoreButton = document.getElementById("show-more-recommend");
				showMoreButton.style.display = "block"; // Make sure the button is initially visible

				showMoreButton.addEventListener("click", function () {
					currentPage++;
					const startIndex = (currentPage - 1) * itemsPerPage;
					const endIndex = currentPage * itemsPerPage;

					if (startIndex < data.length) {
						displayItems(startIndex, Math.min(endIndex, data.length));
						document.getElementById("loop-recommended").innerHTML = tab;
						attachEventListeners(); // Reattach event listeners after loading new content

						return
					}

					if (endIndex >= data.length) {
						showMoreButton.style.display = "none"; // Hide the button when all items are displayed
					}
				});
			}
		}

		displayItems(0, Math.min(itemsPerPage, data.length))
		document.getElementById("loop-recommended").innerHTML = tab
		attachEventListeners();
	}
</script>

