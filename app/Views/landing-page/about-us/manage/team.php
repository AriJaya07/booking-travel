<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
	<div class="flex flex-col text-center">
		<h5 class="font-[700] md:text-[2em] text-[1.5em]">
			Our Team
		</h5>
		<p class="text-yellow-500 font-[600] md:text-[1.5em] text-[1em]">
			Meet our team
		</p>
		<p class="md:text-[1em] text-[0.85em]">
			Here are all the amazing people that make ForeverVacation possible. We are all one big happy (and crazy)
			family. Please take a minute to meet our team. We hope to see you soon!
		</p>
	</div>
	<div class="py-10">

		<div id="loop-team" class="flex flex-row justify-center flex-wrap w-full gap-[1em] ">
			<!-- inner HTML -->
		</div>

	</div>
</div>

<script>
	function showTeam(data) {
		let tab = '';
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]
			tab +=
				`
				<div class="flex flex-col text-center p-2 2xl:w-[25em] md:w-[20em] w-full">
					<img src="${d.image}" alt="people-1"
							class="2xl:w-[25em] md:w-[22em] w-full rounded-t-lg"/>
					<div class="bg-yellow-500 rounded-b-lg p-5 flex flex-col">
						<h5 class="font-[700] text-[1em] px-1">
							${d.name}
						</h5>
						<p class="text-[1em] p-1">
							${d.position}
						</p>
						<p class="text-[0.85em] p-2">
							${d.jobdesk}
						</p>
						<p class="text-[0.85em] p-2 border-2 border-white rounded">
							${d.description}
						</ul>
					</div>
				</div>
				`
			document.getElementById("loop-team").innerHTML = tab
		}
	}
</script>
