<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Affiliate</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<div class="bg-gray-300 h-full w-full pb-[10em]">
	<div class="flex justify-between items-center p-20">
		<a href="<?= base_url() ?>" class="cursor-pointer">
			<img src="<?php echo base_url("img/booking.png") ?>" alt="logo-1"
				 class="w-[15em]"/>
		</a>
		<div class="">
			<a href="/booking-travel/" target="_self" class="">
				<button type="button" class="bg-blue-400 px-3 py-2 rounded-2xl text-white">
					Login
				</button>
			</a>
		</div>
	</div>
	<div class="flex flex-col justify-center items-center px-[10em]">
		<div class="flex flex-col p-10">
			<h5 class="text-[3em] py-5">
				ForeverVacation - Join our Affiliate Program!
			</h5>
			<p class="py-2">
				Do you want to make money from telling other people about our tours? Perfect! Now you can earn
				commission for referring customers to book tours & experiences on ForeverVacation.com
			</p>
			<p class="py-2">
				We will provide you with your own unique referral link and you will receive a 10% commission for every
				tour that is booked on our website.
			</p>
			<p class="py-2">
				Just sign up below and we will contact you on how to get started.
			</p>
			<p class="py-2">
				We are excited to have you as a partner :)
			</p>
		</div>
		<div class="rounded-2xl bg-white p-10 w-[50em]">
			<div class="flex flex-col">
				<p class="text-[1.5em] pb-5">
					Become our affiliate. Sign up here!
				</p>
				<div class="flex flex-col gap-[2em]">
					<div class="flex flex-row items-center gap-[1em]">
						<p class="font-[700] text-gray-500">
							First Name*
						</p>
						<label>
							<input type="text" class="p-2 bg-gray-200" name="firstName" placeholder="First name"/>
						</label>
					</div>
					<div class="flex flex-row items-center gap-[1em]">
						<p class="font-[700] text-gray-500">
							Last Name*
						</p>
						<label>
							<input type="text" class="p-2 bg-gray-200" name="lastName" placeholder="Last name"/>
						</label>
					</div>
					<div class="flex flex-row items-center gap-[1em]">
						<p class="font-[700] text-gray-500">
							Your Email*
						</p>
						<label>
							<input type="email" class="p-2 bg-gray-200" name="email" placeholder="Email"/>
						</label>
					</div>
					<div class="flex flex-row items-center gap-[1em]">
						<p class="font-[700] text-gray-500">
							Password*
						</p>
						<label>
							<input type="text" class="p-2 bg-gray-200" name="password" placeholder="Password"/>
						</label>
					</div>
				</div>
				<div class="flex justify-end py-5">
					<button type="button" class="bg-blue-500 text-white rounded-2xl px-3 py-2">
						Sign up now
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
