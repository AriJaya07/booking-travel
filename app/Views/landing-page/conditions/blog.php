<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<div class="my-[5em]">
	<div class="flex flex-col justify-center items-center">
		<div class="bg-blue-900 flex flex-row justify-center items-center w-full p-10">
			<div class="w-[30em]">
				<p class="font-[700] text-[2em] text-left text-white">
					Welcome to The Vacationer! Your dream vacation starts here.
				</p>
			</div>
			<div class="">
				<img
					src="https://cdn.forevervacation.com/uploads/destination/forevervacation-bali-1-rated-tour-operator-in-bali-3948-desktop-mobile-thumb.jpg"
					alt="image-1" class="w-[20em]"/>
			</div>
		</div>

		<div class="flex flex-col justify-center text-center p-10">
			<h5 class="font-[700] text-[3em] p-10">
				New Blog Posts
			</h5>
			<div class="flex flex-row flex-wrap gap-[2em]">
				<img
					src="https://cdn.forevervacation.com/uploads/blog/top-3-photos-to-take-in-kuala-lumpur-to-spice-up-your-instagram-feed-2864.jpg"
					alt="image-blog" class="w-[20em]"/>
				<img
					src="https://cdn.forevervacation.com/uploads/blog/top-3-photos-to-take-in-kuala-lumpur-to-spice-up-your-instagram-feed-2864.jpg"
					alt="image-blog" class="w-[20em]"/>
				<img
					src="https://cdn.forevervacation.com/uploads/blog/top-3-photos-to-take-in-kuala-lumpur-to-spice-up-your-instagram-feed-2864.jpg"
					alt="image-blog" class="w-[20em]"/>
				<img
					src="https://cdn.forevervacation.com/uploads/blog/top-3-photos-to-take-in-kuala-lumpur-to-spice-up-your-instagram-feed-2864.jpg"
					alt="image-blog" class="w-[20em]"/>
			</div>
		</div>
	</div>

	<div class="bg-gray-300 flex flex-row px-[10em]">
		<p class="text-[2em] font-[700] p-10" style="white-space: nowrap">
			Top Destinations:
		</p>
		<div class="flex flex-row flex-wrap justify-center gap-[2em] p-10">

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

			<div class="flex flex-row items-center border rounded-2xl px-3 py-1 border-black bg-white gap-[1em]">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					 class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
				</svg>
				<p class="text-[1.25em]">
					Bali
				</p>
			</div>

		</div>
	</div>

	<div class="bg-blue-900 p-10">
		<div class="flex flex-row w-full">
			<div class="flex flex-col text-white w-[50em]">
				<h5 class="font-[700] text-[3em]">
					Our Top Travel Guides
				</h5>
				<p class="">
					Planning a trip? Be sure to check out our in depth travel guides on where to go, what to do and what
					you don't want to miss. Happy Travels!
				</p>
			</div>
			<div class="flex flex-row gap-[1em]">
				<img src="https://cdn.forevervacation.com/uploads/travelGuide/bali-travel-guide-2664-desktop-banner.png"
					 alt="image-1" class="w-[20em]"/>
				<img src="https://cdn.forevervacation.com/uploads/travelGuide/bali-travel-guide-2664-desktop-banner.png"
					 alt="image-1" class="w-[20em]"/>
				<img src="https://cdn.forevervacation.com/uploads/travelGuide/bali-travel-guide-2664-desktop-banner.png"
					 alt="image-1" class="w-[20em]"/>
			</div>
		</div>
	</div>

	<div class="flex flex-row justify-center p-10">
		<div class="flex flex-row">
			<div class="flex flex-col">
				<img
					src="https://cdn.forevervacation.com/uploads/blog/visa-guidelines-for-your-travels-the-vacationer-by-forevervacation-2355.png"
					alt="image-tour" class="w-[19em] p-2 rounded-2xl"/>
				<img
					src="https://cdn.forevervacation.com/uploads/blog/visa-guidelines-for-your-travels-the-vacationer-by-forevervacation-2355.png"
					alt="image-tour" class="w-[19em] p-2 rounded-2xl"/>
			</div>
			<div class="flex flex-col">
				<img
					src="https://cdn.forevervacation.com/uploads/blog/visa-guidelines-for-your-travels-the-vacationer-by-forevervacation-2355.png"
					alt="image-tour" class="w-[19em] p-2 rounded-2xl"/>
				<img
					src="https://cdn.forevervacation.com/uploads/blog/visa-guidelines-for-your-travels-the-vacationer-by-forevervacation-2355.png"
					alt="image-tour" class="w-[19em] p-2 rounded-2xl"/>
			</div>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/uploads/blog/best-hotels-in-ubud-2318.jpg" alt="image-right"
				 class="w-[25em] rounded-2xl"/>
		</div>
	</div>

	<div class="px-[10em]">
		<div class="flex flex-col">
			<h5 class="font-[700] text-center text-[3em] p-10">
				Recommended Articles
			</h5>
			<div class="flex flex-row flex-wrap gap-[2em] p-10">

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

				<div class="flex flex-row items-center gap-[2em]">
					<img src="https://cdn.forevervacation.com/uploads/blog/best-islands-near-singapore-4739.jpg"
						 alt="image-1" class="w-[10em] rounded-2xl"/>
					<div class="flex flex-col">
						<button type="button" class="bg-yellow-500 rounded-2xl font-[700] py-2">
							Destination
						</button>
						<p class="font-[600] text-[1em]">
							Best Island Near Bali
						</p>
					</div>
				</div>

			</div>
		</div>

		<div class="flex flex-col text-center border border-gray-500 bg-gray-500 rounded-2xl p-10">
			<h5 class="font-[700] text-[3em]">
				GET YOUR VACATION ON!
			</h5>
			<p class="p-5">
				Expertly curated e-mails packed full of vacation inspiration, unique travel tips and so much more! Don’t
				miss.
			</p>
			<div class="flex flex-row justify-center items-center gap-[1em]">
				<label>
					<input type="text" class="rounded-full p-3" placeholder="Input your email...">
				</label>
				<button type="button" class="border bg-black text-white rounded-2xl p-3">
					Count me in
				</button>
			</div>
		</div>

	</div>
</div>

</body>
</html>
