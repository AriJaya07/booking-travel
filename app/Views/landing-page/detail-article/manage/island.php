<div class="2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em]">
	<div id="loop-detail-article-island" class="mt-[10em] flex flex-col mb-[5em]">
		<!-- Inner HTML -->
	</div>
</div>

<script>
	function showIsland(data) {
		let island = ''
		for (let i = 0; i < data.data.length; i++) {
			const d = data.data[i]

			island +=
				`
				<div class="flex md:flex-row flex-col justify-between">
					<p class="font-[700] md:text-[1em] text-[0.85em]">
						Vacationer
					</p>
					<p class="">
						<span class="font-[700] md:text-[1em] text-[0.85em]">Home</span> > ${d.title}
					</p>
				</div>
				<div class="flex justify-center items-center flex-col">
					<div class="flex flex-col justify-center items-center">
						<h5 class="font-[700] xl:text-[3em] text-[2em] py-5">
							${d.title}
						</h5>
						<img src="${d.image}" alt="image-cover"
								class="w-full rounded-2xl"/>
						<div class="flex md:flex-row flex-col justify-between md:p-10 p-2 gap-12em] w-full">
							<div class="flex flex-row items-center gap-[1em]">
								<img src="${d.profile}"
										alt="image-profile" class="w-[3em] h-[3em] rounded-full"/>
								<p class="md:text-[1em] text-[0.85em]">
									By <span class="font-[700]">${d.name}</span>
								</p>
								<p class="md:text-[1em] text-[0.85em]">
									${d.time} years
								</p>
							</div>
							<div class="flex flex-row items-center gap-[1em] justify-end">
								<p class="md:text-[1em] text-[0.85em]">
									Share
								</p>
								<a href="${d.facebook}" target="_black">
									<img src="https://forevervacation.com/layout_v_3/assets/img/blog-detail/icon_facebook.svg"
										alt="facebook" class="w-[1.5em]"/>
								</a>
								<a href="${d.pinterest}" target="_black">
									<img src="https://forevervacation.com/layout_v_3/assets/img/blog-detail/icon_pinterest.svg"
											alt="pintress" class="w-[1.5em]"/>
								</a>
								<a href="${d.twitter}" href="_blank">
									<img src="https://forevervacation.com/layout_v_3/assets/img/blog-detail/icon_twitter.svg"
										alt="twitter" class="w-[1.5em]"/>
								</a>
								<a href="${d.gmail}" target="_blank">
									<img src="https://forevervacation.com/layout_v_3/assets/img/blog-detail/icon_email.svg" alt="email"
										class="w-[1.5em]"/>
								</a>
							</div>
						</div>
						<div class="flex flex-col">
							<p class="p-2 md:text-[1em] text-[0.85em]">
								${d.description}
							</p>
						</div>
					</div>
				</div>
				`

			document.getElementById("loop-detail-article-island").innerHTML = island
		}
	}
</script>
