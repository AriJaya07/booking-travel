<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]"> <!--  my-[5em] -->

	<div class="flex flex-col py-2">
		<h5 class="md:text-[3em] text-[1.5em] font-[700]">
			Experience
		</h5>

		<ul id="loop-detail-activity-experience" class="py-10">
			<!-- Inner HTML -->
		</ul>

	</div>

	<hr class="bg-gray-500"/>
	<div class="flex md:flex-row flex-col md:gap-[5em] gap-[1em] md:py-5 py-2">
		<h5 class="text-[1em] font-[600] pt-[1em] w-[8em]">
			Highlight
		</h5>
		<div class="">

			<ul id="loop-detail-activity-highlight" class="md:pl-0 pl-4" style="list-style-type:disc">
				<!-- Inner HTML -->
			</ul>

		</div>
	</div>

	<hr class="bg-gray-500"/>
	<div class="flex md:flex-row flex-col md:gap-[5em] gap-[1em] md:py-5 py-2">
		<h5 class="text-[1em] font-[600] pt-[1em] w-[8em] whitespace-nowrap">
			Full description
		</h5>
		<div id="loop-detail-activity-full-description" class="">
				<!-- Inner HTML -->
		</div>
	</div>

	<hr class="bg-gray-500"/>
	<div class="flex md:flex-row flex-col md:gap-[5em] gap-[1em] md:py-5 py-2">
		<h5 class="text-[1em] font-[600] pt-[1em] w-[8em]">
			Includes
		</h5>
		<div id="loop-detail-activity-includes" class="">
			<!-- inner HTML -->
		</div>
	</div>

	<!-- <hr class="bg-gray-500"/>
	<div class="flex md:flex-row flex-col md:gap-[5em] gap-[1em] md:py-5 py-2">
		<h5 class="text-[1em] font-[600] pt-[1em] w-[8em] whitespace-nowrap">
			Meeting point
		</h5>
		<div class="">
			<ul id="loop-detail-activity-meetingpoint" class="md:pl-0 pl-4" style="list-style-type:disc"> -->
				<!-- Inner HTML -->
			<!-- </ul>
		</div>
	</div> -->

	<hr class="bg-gray-500"/>
	<div class="flex md:flex-row flex-col md:gap-[6em] gap-[1em] md:py-5 py-2">
		<h5 class="text-[1em] font-[600] pt-[1em] w-[8em] whitespace-nowrap">
			Important information
		</h5>
		<div  id="loop-detail-activity-information" class="">
			<!-- Inner HTML -->
		</div>
	</div>
	<hr class="bg-gray-500"/>

</div>

<script>
	function showExperience(data) {
		let experience = '';
		let highlights = '';
		let description = '';
		let inclusions = '';
		let exclusions = '';
		// let suitable = '';
		let information = '';
		
		const d = data

		experience +=
			`
			<div class="flex flex-col gap-[1em]">
			`

		for (let m = 0; m < d.itinerary.length; m++) {
			if(m==0) {
				image = 'img/detail-activity/cone-striped.svg'
			} else if(m==d.itinerary.length-1) {
				image = 'img/detail-activity/geo.svg'
			}else {
				image = 'img/detail-activity/grip-vertical.svg'
			}
			experience +=
				`
				<div class="flex flex-row gap-[1em] items-start">
					<img src="${image}" class="w-[2em]" alt="image-${i}" />
					<div class="flex flex-col">
						<p class="tracking-widest md:text-[1em] text-[0.85em]">
							${d.itinerary[m].location_name}
						</p>
						<span>${d.itinerary[m].descriptions}</span>
					</div>
				</div>
				`
		}

		experience += '</div>'
		document.getElementById("loop-detail-activity-experience").innerHTML = experience

		for (let h = 0; h < d.highlights.length; h++) {
			highlights +=
			`
			<li class="py-[0.4em] text-[1em]">
				${d.highlights[h]}
			</li>
			`
			document.getElementById("loop-detail-activity-highlight").innerHTML = highlights
		}

		description +=
		`
			<p class="text-[1em]">${d.description}</p>
		`
		document.getElementById("loop-detail-activity-full-description").innerHTML = description

		for (let c = 0; c < d.inclusions.length; c++) {
			inclusions += `
			<div class="flex flex-row gap-[1em]">
			`

			inclusions +=
			`
			<img src="img/detail-activity/check2.svg" class="w-[1.5em] text-green-500 py-[0.4em]" alt="icon-${i}-${c}" />
			<p class="py-[0.4em] text-[1em]">${d.inclusions[c]}</p>
			`

			inclusions += `
			</div>
			`
		}

		for (let c = 0; c < d.exclusions.length; c++) {
			exclusions += `
			<div class="flex flex-row gap-[1em]">
			`

			exclusions +=
			`
			<img src="img/detail-activity/x.svg" class="w-[1.5em] text-green-500 py-[0.4em]" alt="icon-${i}-${c}" />
			<p class="py-[0.4em] text-[1em]">${d.exclusions[c]}</p>
			`

			exclusions += `
			</div>
			`
		}
		document.getElementById("loop-detail-activity-includes").innerHTML = inclusions+exclusions

		// for (let s = 0; s < d.suitable.length; s++) {
		// 	suitable +=
		// 		`
		// 	<li class="py-[0.4em] text-[1em]">
		// 		${d.suitable[s]}
		// 	</li>
		// 	`
		// 	document.getElementById("loop-detail-activity-suitable").innerHTML = suitable
		// }

		information +=
			`
		<div class="text-[1em]">
			${d.important_information}
		</div>
		`
		document.getElementById("loop-detail-activity-information").innerHTML = information
	}
</script>
