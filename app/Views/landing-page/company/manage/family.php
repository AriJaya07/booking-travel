<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
	<div id="loop-family" class="py-10">
		<!-- inner HTML -->
	</div>
</div>

<script>
	function showFamily(data) {
		let tab = ''
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tab +=
				`
				<div class="flex flex-col">
					<div class="text-center">
						<h5 class="font-[700] 2xl:text-[3em] lg:text-[2em] text-[1.5em]">
						${d.title}
						</h5>
					</div>

					<div class="flex lg:flex-row flex-col-reverse justify-center items-center gap-[2em] py-10">
						<div class="flex flex-col lg:w-[50em] w-full font-[600]">
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionOne}
							</p>
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionTwo}
							</p>
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionThree}
							</p>
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionFour}
							</p>
						</div>
						<div class="">
							<img src="${d.image}" alt="photo-family"
								class="lg:w-[50em] w-full"/>
						</div>
					</div>
					</div>
				`
			document.getElementById("loop-family").innerHTML = tab
		}
	}
</script>
