<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Destinations</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/destination.css">
	<script type='text/javascript' src="<?php echo base_url(); ?>js/destination.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<div class="flex bg-gray-500 text-white justify-center flex-col p-[8em]">
	<div class="text-center">
		<h5 class="font-[700] text-[3em]">
			VOTED #1 TOUR <br/>OPERATOR IN SOUTH <br/> EAST ASIA
		</h5>
	</div>
	<div class="text-center">
		<p>
			Amazing Tours & Experiences in Select Destinations around South East Asia
		</p>
	</div>
	<div class="flex justify-center p-5">
		<button type="button" class="border bg-yellow-500 text-black rounded-2xl px-5 py-3">See Our Destinations
		</button>
	</div>
</div>

<div class=" p-10">
	<div class="flex flex-row justify-center gap-[1em] p-5">
		<div class="">
			<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp" alt="award-1"
				 class="w-[10em]"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp" alt="award-2"
				 class="w-[10em]"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp" alt="award-3"
				 class="w-[10em]"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp" alt="award-4"
				 class="w-[10em]"/>
		</div>
	</div>
	<div class=" p-10">
		<div class="flex flex-row justify-center gap-[2em] p-2">
			<div class="">
				<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp" alt="star-1"
					 class="w-[2em]"/>
			</div>
			<div class="">
				<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp" alt="star-2"
					 class="w-[2em]"/>
			</div>
			<div class="">
				<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp" alt="star-3"
					 class="w-[2em]"/>
			</div>
			<div class="">
				<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp" alt="star-4"
					 class="w-[2em]"/>
			</div>
			<div class="">
				<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/star-yellow.webp" alt="star-5"
					 class="w-[2em]"/>
			</div>
		</div>
		<div class="text-center">
			<p class="text-gray-500">
				Over 20,500 5 Star Reviews!
			</p>
		</div>
	</div>
</div>

<div class="flex justify-between bg-green-900 p-10 items-center">
	<div class="px-10 text-white">
		<h5 class="font-[700] text-[2em]">Populer Destinations</h5>
		<p class="py-10">Here are some of our most Populer destinations where you can find our tours and
			experiences.</p>
	</div>
	<div class="flex flex-row gap-[1em]">
		<div class="">
			<img
				src="https://cdn.forevervacation.com/uploads/destination/best-bali-tours-day-trips-excursions-2023-forevervacation-cropped-3070.jpg"
				alt="bali-trip" class="w-[20em] h-[23em] rounded-2xl"/>
		</div>
		<div class=" rounded-2xl">
			<img src="https://cdn.forevervacation.com/uploads/destination/bangkok.jpeg" alt="bangkok"
				 class="w-[20em] h-[23em] rounded-2xl"/>
		</div>
	</div>
</div>

<div class="flex justify-center p-10">
	<div class="flex flex-col text-center">
		<h5 class="text-black font-[700] text-[2em]">
			Why choose Forever Vacation?
		</h5>
		<p class="text-gray-400 font-[600]">
			Here are 3 reasons
		</p>
	</div>
</div>
<div class=" border border-gray-500 rounded-2xl mx-20">
	<div class="flex flex-row p-10 gap-[5em]">
		<div class="flex flex-col text-center">
			<div class="border-0 border-black">
				<div class="flex justify-center p-5">
					<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/Icon-Lock.svg"
						 alt="icon-lock" class="w-[3em]"/>
				</div>
				<div>
					<h5 class="text-black font-[500]">
						Safe, Fun & Unique Experiences
					</h5>
					<p class="text-gray-500">
						Your safety and the amount of fun you have with us is our top priority. You will be treated like
						family and enjoy a once in a lifetime experience that you will never forget.
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col">
			<div class="border-0 border-black text-center">
				<div class="flex justify-center p-5">
					<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/human.svg" alt="human"
						 class="w-[3em]"/>
				</div>
				<div>
					<h5 class="text-black font-[500]">
						Safe, Fun & Unique Experiences
					</h5>
					<p class="text-gray-500">
						Your safety and the amount of fun you have with us is our top priority. You will be treated like
						family and enjoy a once in a lifetime experience that you will never forget.
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col">
			<div class="border-0 border-black text-center">
				<div class="flex justify-center p-7">
					<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/Icon-Star.svg"
						 alt="icon-star" class="w-[3em]"/>
				</div>
				<div>
					<h5 class="text-black font-[500]">
						Safe, Fun & Unique Experiences
					</h5>
					<p class="text-gray-500">
						Your safety and the amount of fun you have with us is our top priority. You will be treated like
						family and enjoy a once in a lifetime experience that you will never forget.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="text-center flex flex-col p-10">
	<div class="p-10">
		<h5 class="font-[700] text-black text-[2em]">
			Our Best Selling Tours
		</h5>
		<p class="text-gray-500">
			Here are some of our best selling tours across all of our destinations
		</p>
	</div>
	<div class="flex flex-row gap-[2em] justify-center">
		<div class="flex flex-col border border-gray-300 rounded-2xl bg-white w-[15em]">
			<div>
				<img
					src="https://cdn.forevervacation.com/uploads/tour/bali-instagram-tour-the-most-famous-spots-3509.jpg?tr=w-516,h-375"
					alt="famous-spot" class="w-[15em] h-[15em] rounded-2xl"/>
			</div>
			<div class="p-2 text-left">
				<div class="p-2">
					<p class="font-[600]">
						Bali Instagram Tour: The Most Famous Spots
					</p>
				</div>
				<div class="flex justify-between p-2">
					<p class="">
						All-inclusive
					</p>
					<p class="bg-yellow-500 font-[700]">
						US$144
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col border border-gray-300 rounded-2xl bg-white w-[15em]">
			<div>
				<img
					src="https://cdn.forevervacation.com/uploads/tour/kuala-lumpur-instagram-tour-most-famous-spots-2446.jpeg?tr=w-516,h-375"
					alt="famous-spot-2" class="w-[15em] h-[15em] rounded-2xl"/>
			</div>
			<div class="p-2 text-left">
				<div class="p-2">
					<p class="font-[600]">
						Bali Instagram Tour: The Most Famous Spots
					</p>
				</div>
				<div class="flex justify-between p-2">
					<p class="">
						All-inclusive
					</p>
					<p class="bg-yellow-500 font-[700]">
						US$144
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col border border-gray-300 rounded-2xl bg-white w-[15em]">
			<div>
				<img
					src="https://cdn.forevervacation.com/uploads/tour/bangkok-instagram-tour-the-most-famous-spots-4359.jpg?tr=w-516,h-375"
					alt="famous-spot-3" class="w-[15em] h-[15em] rounded-2xl"/>
			</div>
			<div class="p-2 text-left">
				<div class="p-2">
					<p class="font-[600]">
						Bali Instagram Tour: The Most Famous Spots
					</p>
				</div>
				<div class="flex justify-between p-2">
					<p class="">
						All-inclusive
					</p>
					<p class="bg-yellow-500 font-[700]">
						US$144
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col border border-gray-300 rounded-2xl bg-white w-[15em]">
			<div>
				<img
					src="https://cdn.forevervacation.com/uploads/tour/ha-long-bay-instagram-tour-the-most-famous-spots-3981.jpg?tr=w-516,h-375"
					alt="famous-spot-4" class="w-[15em] h-[15em] rounded-2xl"/>
			</div>
			<div class="p-2 text-left">
				<div class="p-2">
					<p class="font-[600]">
						Bali Instagram Tour: The Most Famous Spots
					</p>
				</div>
				<div class="flex justify-between p-2">
					<p class="">
						All-inclusive
					</p>
					<p class="bg-yellow-500 font-[700]">
						US$144
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-green-900 p-10">
	<div class="flex justify-end text-right px-10">
		<h5 class="font-[700] text-[3em]">
			OVER 20,000+ HAPPY <br/> GUESTS HAVE <br/> CHOSEN US!
		</h5>
	</div>
	<div class="flex justify-end ">
		<div class="border rounded-2xl w-[50em] border-gray-500 text-center p-10">

			<div class="">
				<h5 class="font-[700] text-[2em]">
					Get your Vacation on!
				</h5>
			</div>
			<div class="flex flex-col justify-center">
				<p class="font-[600] text-[1em]">
					Expertly curated emails packed full of vacation inspiration, travel tips and more!
				</p>
				<div class="flex flex-row gap-[2em] p-5 items-center">
					<input type="text" class="bg-gray-500 rounded-2xl w-full h-[3em] p-5" placeholder="Your email"/>
					<button type="button" class="bg-yellow-500 px-5 py-3 rounded-2xl" style="white-space: nowrap;">Count
						me
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="text-center text-black p-10">
	<div class="p-10">
		<h5 class="font-[700] text-[3em]">
			Top articles from our blog
		</h5>
	</div>
	<div class="flex flex-row justify-center gap-[2em]">
		<div class="">
			<img src="https://cdn.forevervacation.com/uploads/blog/1580650819_blog_bannr_20.jpg" alt="blog-1"
				 class="w-[15em] h-[15em] rounded-2xl"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/uploads/blog/1581756001_blog_bannr_27.jpg" alt="blog-2"
				 class="w-[15em] h-[15em] rounded-2xl"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/uploads/blog/1584247012_blog_bannr_46.jpeg" alt="blog-3"
				 class="w-[15em] h-[15em] rounded-2xl"/>
		</div>
		<div class="">
			<img src="https://cdn.forevervacation.com/uploads/blog/1552801223_dest_2.jpg" alt="blog-4"
				 class="w-[15em] h-[15em] rounded-2xl"/>
		</div>
	</div>
</div>

<div class="bg-gray-500 text-center p-10">
	<h5 class="underline text-[1.5em] font-[700]">
		Visit The Vactioner Blog
	</h5>
	<div class="flex row justify-between text-white">
		<div class="flex flex-row p-10">
			<div class="flex flex-col text-left">
				<p class="text-[1em] font-[600]">
					Our Promise
				</p>
				<p class="text-[0.85em]">
					With ForeverVacation, you will be treated like family. Your safety and enjoyment is our primary
					mission. We are excited to meet you
				</p>
				<div class="flex flex-row gap-[1em] p-5">
					<div class="">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp"
							 alt="top-award-1" class="w-[5em]"/>
					</div>
					<div class="">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp"
							 alt="top-award-2" class="w-[5em]"/>
					</div>
					<div class="">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp"
							 alt="top-award-3" class="w-[5em]"/>
					</div>
					<div class="">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/top/award2.webp"
							 alt="top-award-4" class="w-[5em]"/>
					</div>
				</div>
				<div class="flex flex-col py-10">
					<div class="">
						<p class="font-[600] text-[1em] py-5">
							Contact info
						</p>
						<p class="text-[0.85em]">
							Our address: Seminyak, Bali, Indonesia
						</p>
						<p class="text-[0.85em]">
							Phone: +1 617 404 2125 (WhatsApp)
						</p>
						<p class="text-[0.85em]">
							Email: team@forevervacation.com
						</p>
					</div>
					<div class="flex flex-row gap-[1em] py-5">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/instagram.svg"
							 alt="instagram" class="w-[1.5em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/facebook.svg"
							 alt="facebook" class="w-[1.5em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/pinterest.svg"
							 alt="pinterest" class="w-[1.5em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/youtube.svg"
							 alt="youtube" class="w-[1.5em]"/>
					</div>
				</div>
			</div>
		</div>
		<div class="p-10">
			<div class="flex fle-row">
				<div class="flex flex-col text-left">
					<p class="font-[600] text-[1.5em]">
						Payment methods
					</p>
					<p class="text-[0.85em]">
						At ForeverVacation we take your online security seriously. All of the payments processed are
						secure and encrypted. You can pay using any of these payment methods:
					</p>
					<div class="flex flex-row gap-[1em] py-5">
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/visa.svg" alt="visa"
							 class="w-[2em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/mastercard.svg"
							 alt="mastercard" class="w-[2em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/paypal.svg" alt="paypal"
							 class="w-[2em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/gpay.svg" alt="gpay"
							 class="w-[2em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/amex.svg" alt="amex"
							 class="w-[2em]"/>
						<img src="https://cdn.forevervacation.com/layout_v_3/assets/img/common/discover.svg"
							 alt="discover" class="w-[2em]"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
