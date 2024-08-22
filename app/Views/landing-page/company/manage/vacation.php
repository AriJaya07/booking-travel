<div class="2xl:mx-[15em] md:mx-[2em] mx-[1em]">
	<div class="flex flex-col p-10">

		<div id="vacation-title">
			<!-- inner HTML -->
		</div>

		<div id="loop-list-vacation" class="flex flex-row flex-wrap justify-center gap-[2em] py-10">
			<!-- inner HTML -->
		</div>

	</div>
</div>

<script>

	function showVaction(data) {
		let tab = '';
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			tab +=
			`
			<h5 class="font-[700] md:text-[2em] text-[1.5em] text-center">
				${d.title}
			</h5>
			`
			document.getElementById("vacation-title").innerHTML = tab
		}
	}

	function showListVacation(data) {
		let list = '';
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			for (let j = 0; j < d.list.length; j++) {
			list +=
				`
				<div class="border border-yellow-500 2xl:w-[25em] lg:w-[20em] w-full rounded-2xl p-10">
					<p class="font-[600] md:text-[1em] text-[0.85em]">
						${d.list[j]}
					</p>
				</div>
				`
				document.getElementById("loop-list-vacation").innerHTML = list
			}
		}
	}
</script>
