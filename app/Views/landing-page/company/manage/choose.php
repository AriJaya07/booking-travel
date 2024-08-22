<div class="bg-yellow-500">
	<div class="flex flex-col 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
	
		<div id="loop-choose" class="flex lg:flex-row flex-col-reverse justify-center items-center md:pt-[10em] pt-[5em]">
			<!-- inner HTML -->
		</div>
	
		<div class="flex justify-center p-10">
			<img src="https://forevervacation.com/layout_v_3/assets/img/why-different/explore_more.svg" class="md:w-[5em] w-[3em]"
				 alt="arrow-bottom"/>
		</div>
	</div>
</div>

<script>
	function showChoose(data) {
		let tab = '';
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tab += 
			`
			<div class="flex flex-col">
				<h5 class="uppercase font-[700] md:text-[2em] text-[1.5em] md:p-5 p-2">
					${d.title}
				</h5>
				<p class="md:p-5 p-2 md:text-[1em] text-[0.85em]">
					${d.descriptionOne}
				</p>
				<p class="md:p-5 p-2 md:text-[1em] text-[0.85em]">
					${d.descriptionTwo}
				</p>
			</div>
			<div class="lg:w-[70em] flex justify-center w-full p-10">
				<div class="">
					<img src="${d.image}"
						class="w-[30em]" alt="people-1"/>
				</div>
			</div>
			`
			document.getElementById("loop-choose").innerHTML = tab
		}
	}
</script>

