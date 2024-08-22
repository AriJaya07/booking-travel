<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em] my-[5em]">
	<div class="flex justify-center">
		<div id="loop-detail-article-tour" class="flex flex-col gap-[2em]">
			<!-- inner HTML -->
		</div>
	</div>
</div>


<script>
	function showTour(data) {
		let tour = ''
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tour +=
				`
				<div class="flex flex-col gap-[1em] w-full">
					<h5 class="font-[700] md:text-[2em] text-[1.5em]">
						${d.title}
					</h5>
					<img src="${d.image}" alt="image-nusa" class="w-full rounded" />
					<p class="p-2 md:text-[1em] text-[0.85em]">
						${d.descriptionOne}
					</p>
					<p class="p-2 md:text-[1em] text-[0.85em]">
						${d.descriptionTwo}
					</p>
					<p class="p-2 md:text-[1em] text-[0.85em]">
						${d.descriptionThree}
					</p>
					<p class="p-2 md:text-[1em] text-[0.85em]">
						${d.descriptionFour}
					</p>
				</div>
				`
			document.getElementById("loop-detail-article-tour").innerHTML = tour
		}
	}
</script>
