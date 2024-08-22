<div class="text-center flex flex-col pb-[10em] mx-[2em]">
	<div class="p-10">
		<h5 class="font-[700] text-black text-[2em]">
			Our Best Selling Tours
		</h5>
		<p class="text-gray-500">
			Here are some of our best selling tours across all of our destinations
		</p>
	</div>

	<div id="loop-selling" class="flex flex-row flex-wrap gap-[2em] justify-center">
		<!-- inner HTML -->
	</div>


	<div id="show-more-selling" class="flex flex-row justify-center items-center gap-[2em] p-10">
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

<script>
	function showSelling(data) {
		let tab = '';
		const itemsPerPage = 3; // Number of items to display per page
		let currentPage = 1;

		function displayItems(startIndex, endIndex) {
			for (let i = startIndex; i < endIndex; i++) {
				const d = data[i];
				tab += `
               <div class="flex flex-col border border-gray-300 rounded-2xl bg-white w-[15em]">
                  <div class="cursor-pointer">
                     <img src="${d.image}" alt="famous-spot" class="w-[15em] h-[15em] rounded-2xl"/>
                  </div>
                  <div class="p-2 text-left">
                     <div class="p-2">
                        <p class="font-[600]">
                           ${d.title}
                        </p>
                     </div>
                     <div class="flex items-center justify-between p-2">
                        <p class="">
                           ${d.packet}
                        </p>
                        <p class="bg-yellow-500 font-[700] rounded-2xl p-2">
                           US$ ${d.price}
                        </p>
                     </div>
                  </div>
               </div>
            `;
			}
		}

		// Display the first page of items
		displayItems(0, Math.min(itemsPerPage, data.length));
		document.getElementById("loop-selling").innerHTML = tab;

		if (data.length > itemsPerPage) {
			const showMoreButton = document.getElementById("show-more-selling")
			showMoreButton.addEventListener("click", function () {
				currentPage++
				const startIndex = (currentPage - 1) * itemsPerPage;
				const endIndex = currentPage * itemsPerPage;

				if (startIndex < data.length) {
					displayItems(startIndex, Math.min(endIndex, data.length));
					document.getElementById("loop-selling").innerHTML = tab
				}

				if (endIndex > data.length) {
					showMoreButton.style.display = "none"
				}
			});
		}
	}
</script>
