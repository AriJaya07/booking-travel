<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
	<div class="flex justify-center">
		<div class="flex flex-col">
			<h5 class="font-[700] md:text-[1em] text-[0.85em] md:text-[2em] text-[1.5em] py-5">
				Our Top Trending Tours
			</h5>

			<div id="loop-detail-article-trending" class="flex flex-row flex-wrap gap-[2em]">
				<!-- Inner HTML -->
			</div>

		</div>
	</div>
</div>


<script>
	function showTrending(data) {
		let trending = ''
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			trending +=
				`
				<div class="flex flex-col rounded-2xl bg-gray-100 lg:justify-center lg:items-center gap-[0.5em] 2xl:w-[23em] lg:w-[20em] w-full">
					<img
						src="${d.imageOne}"
						alt="image-1" class="2xl:w-[25em] lg:w-[20em] w-full rounded-t-2xl"/>
					<div class="flex flex-col p-5 gap-[0.5em]">
						<p class="font-[700] md:text-[1em] text-[0.85em]">
							${d.titleOne}
						</p>
						<div class="flex flex-row gap-[1em]">
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
						</div>
						<div class="">
							<button class="md:text-[1em] text-[0.85em] rounded-2xl bg-blue-900 text-white px-2 py-1">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="flex flex-col rounded-2xl bg-gray-100 lg:justify-center lg:items-center gap-[0.5em] 2xl:w-[23em] lg:w-[20em] w-full">
					<img
						src="${d.imageTwo}"
						alt="image-1" class="2xl:w-[25em] lg:w-[20em] w-full rounded-t-2xl"/>
					<div class="flex flex-col p-5 gap-[0.5em]">
						<p class="font-[700] md:text-[1em] text-[0.85em]">
							${d.titleTwo}
						</p>
						<div class="flex flex-row gap-[1em]">
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
						</div>
						<div class="">
							<button class="md:text-[1em] text-[0.85em] rounded-2xl bg-blue-900 text-white px-2 py-1">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="flex flex-col rounded-2xl bg-gray-100 lg:justify-center lg:items-center gap-[0.5em] 2xl:w-[23em] lg:w-[20em] w-full">
					<img
						src="${d.imageThree}"
						alt="image-1" class="2xl:w-[25em] lg:w-[20em] w-full rounded-t-2xl"/>
					<div class="flex flex-col p-5 gap-[0.5em]">
						<p class="font-[700] md:text-[1em] text-[0.85em]">
							${d.titleThree}
						</p>
						<div class="flex flex-row gap-[1em]">
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
							<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp"
									alt="star-1" class="w-[1em] h-[1em]"/>
						</div>
						<div class="">
							<button class="md:text-[1em] text-[0.85em] rounded-2xl bg-blue-900 text-white px-2 py-1">
								Book Now
							</button>
						</div>
					</div>
				</div>
				`
			document.getElementById("loop-detail-article-trending").innerHTML = trending
		}
	}
</script>

