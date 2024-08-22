<div class="bg-yellow-500 py-5">
	<div id="loop-environment" class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
		<!-- inner HTML -->
	</div>
</div>

<script>
	function showEnvironment(data) {
		let tab = '';
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tab +=
				`
				<div class="flex flex-col">
					<div class="">
						<h5 class="font-[700] 2xl:text-[3em] md:text-[2em] text-[1.5em] text-center py-10">
							${d.title}
						</h5>
					</div>
					<div class="flex lg:flex-row flex-col justify-center items-center lg:p-10">
						<div class="2xl:w-[50em] w-full">
							<img src="${d.image}" alt="people-team"
									class="w-full"/>
						</div>
						<div class="md:w-[50em] w-full flex flex-col lg:p-10">
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionOne}
							</p>
							<p class="p-5 md:text-[1em] text-[0.85em]">
								${d.descriptionTwo}
							</p>

							<div class="flex flex-col lg:p-10">
								<div class="flex flex-col p-5">
									<h5 class="font-[700] md:text-[1em] text-[0.85em]">
										${d.subHeaderOne}
									</h5>
									<p class="md:text-[1em] text-[0.85em]">
										${d.descriptionThree}
									</p>
								</div>

								<div class="flex flex-col p-5">
									<h5 class="font-[700] md:text-[1em] text-[0.85em]">
										${d.subHeaderTwo}
									</h5>
									<p class="md:text-[1em] text-[0.85em]">
										${d.descriptionFour}
									</p>
								</div>

								<div class="flex flex-col p-5">
									<h5 class="font-[700] md:text-[1em] text-[0.85em]">
										${d.subHeaderThree}
									</h5>
									<p class="md:text-[1em] text-[0.85em]">
										${d.descriptionFive}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			`
			document.getElementById("loop-environment").innerHTML = tab
		}
	}
</script>
