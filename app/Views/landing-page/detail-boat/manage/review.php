<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em] mb-[10em]">
	<div class="flex flex-col">
		<div id="loop-title">
			<!-- inner HTML -->
		</div>
		<div class="flex flex-col">
			<div id="loop-count-review" class="pb-5">
				<!-- inner HTML -->
			</div>

			<div id="loop-review" class="flex flex-row flex-wrap gap-[2em]">
				<!-- inner HTML -->
			</div>

			<div id="show-more-btn" class="flex flex-row justify-center items-center gap-[2em] p-10">
				<div class="flex flex-row items-center gap-[2em] w-full">
					<hr class="bg-blue-200 w-full p-[0.1em]"/>
					<button type="button"
							class="text-blue-500 hover:bg-blue-100 text-[0.85em] border-2 border-blue-500 px-3 py-2 rounded-full whitespace-nowrap">
						Show more
					</button>
					<hr class="bg-blue-200 w-full p-[0.1em]"/>
				</div>
			</div>

		</div>
	</div>
</div>

<script>
	function showReviewBoat(data) {
		let loc = '';
		let top = '';
		let tab = '';
		const itemsPerPage = 6;
		let currentPage = 1;

		function aboveReview() {
			// Loop only through data[0].people, assuming data.length is always 1
			const d = data[0];
			const countStar = changeStarFunction.getStarIcons(d.countRating);

			loc +=
				`
				<h5 class="font-[700] md:text-[2em] text-[1.5em] md:py-10 py-5">
					What people are saying about ${d.about}, Indonesia
				</h5>
				`;


			top +=
				`
				<h5 class="font-[700] md:text-[1.5em] text-[1em] py-5">
					Overall rating
				</h5>
				<div class="flex flex-row gap-[1em]">
					${countStar}
				</div>
				<p class="text-gray-500 text-[0.85em]">
					based on ${d.countReview} reviews
				</p>
				`;
			document.getElementById('loop-title').innerHTML = loc;
			document.getElementById('loop-count-review').innerHTML = top;
		}

		function displayItems(startIndex, endIndex) {
			for (let i = 0; i < data.length; i++) {
				const d = data[i]
				for (let p = startIndex; p < endIndex; p++) {
					const starsHtml = changeStarFunction.getStarIcons(d.people[p].rating);

					tab +=
						`
					<div class="flex flex-col gap-[1em]">
						<div class="flex flex-row items-center gap-[1em]">
							<img
								src="${d.people[p].image}"
								alt="picture-1" class="w-[2em] h-[2em] rounded-full"/>
							<div class="flex flex-col gap-[0.5em]">
								<p class="text-black text-[0.85em] font-[700] m-0">
									${d.people[p].email}
								</p>
								<div class="flex flex-row items-center gap-[1em]">
									${starsHtml}
								</div>
							</div>
						</div>
						<div class="full flex flex-col">
							<p id="comment-review-${i}-${p}" class="flex flex-col text-[1em]">
								${d.people[p].comment}
							</p>
							<p class="text-blue-500 py-5 font-[600] text-[0.85em]">
								${d.people[p].location}
							</p>
						</div>
					</div>
				`;
				}
			}
		}

		function attachEventListeners() {
			for (let i = 0; i < data.length; i++) {

				// validation to show-more-content-review
				const showMoreButton = document.getElementById("show-more-btn");
				if (data[i].people.length > itemsPerPage * currentPage) {
					showMoreButton.style.display = "block";

					showMoreButton.addEventListener("click", function () {
						const startIndex = (currentPage - 1) * itemsPerPage;
						const endIndex = currentPage * itemsPerPage;

						if (startIndex < data[i].people.length) {
							displayItems(startIndex, Math.min(endIndex, data[i].people.length));
							document.getElementById("loop-review").innerHTML = tab;
							currentPage++;
							attachEventListeners();
						}

						if (endIndex >= data[i].people.length) {
							showMoreButton.style.display = "none";
						}
					});
				} else {
					showMoreButton.style.display = "none";
				}
			}
		}

		aboveReview()
		displayItems(0, Math.min(itemsPerPage, data[0].people.length));
		document.getElementById("loop-review").innerHTML = tab
		attachEventListeners()
	}
</script>
