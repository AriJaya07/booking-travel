<?php

namespace App\Controllers;

class Detail_activity extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/detail-activity/detail-activity");
	}


	public function generateHighlight($id)
	{
		$items = [
			[
				'id' => 1,
				"duration" => 'WATER ACTIVITY',
				"title" => 'One Day Nusa Penida Snorkeling and Island Tour Combination',
				"kind" => 'Balian Breeze',

				"imageBanner" => [
					"https://cdn.getyourguide.com/img/tour/cf7ea171d7709648.jpeg/98.jpg",
					"https://cdn.getyourguide.com/img/tour/35e5cb8f3064870e.jpeg/97.jpg",
					"https://cdn.getyourguide.com/img/tour/ddc7fdf3b0fedce1.jpeg/53.jpg",
					"https://cdn.getyourguide.com/img/tour/1c497deacd12bd5a3f5dffb47cf3270752122f6f001487f0d3afda9ac6ca4973.jpeg/132.jpg",
				],

				"profile" => "https://cdn.forevervacation.com/uploads/tour/ha-long-bay-instagram-tour-the-most-famous-spots-3981.jpg?tr=w-516,h-375",
				"name" => "Certified",
				"rate" => '4.8',
				"countReview" => '5,455,555',
				"description" => "From famous rice terraces, stunning waterfalls and breathtaking views of Mount Agung, our Bali InstagramTour is perfect for travelers who want to experience the best of Bali's beautiful landscapes, as well as its other natural and cultural offerings.",
				"price" => "760000",
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				"socialMedia" => "The Most Famous Spots",
				"meet" => "Meet at Dermaga Banjar Nyuh, Ped, Kec. Nusa Penida, Kabupaten Klungkung, Bali 80771, Indonesia",
				"spend" => '2.5 hours',

				"activityTitle" => [
					"Free cancellation",
					"Reserve now & pay later",
					"Duration 8 hours",
					"Live tour guide",
					"Pickup included",
					"Small group"
				],

				"activityDescription" => [
					"Cancel up to 24 hours in advance for a full refund",
					"Keep your travel plans flexible — book your spot and pay nothing today.",
					"Check availability to see starting times.",
					"English, Korean",
					"• Pickup from your accommodation island-wide, except for North and West Bali areas • During high season (Apr-Sept), it is recommended to start as early as possible in order to avoid road traffic and queues at the temple",
					"Limited to 15 participants"
				],

				"activityImage" => [
					"img/detail-activity/calender.svg",
					"img/detail-activity/menu-calender.svg",
					"img/detail-activity/clock-history.svg",
					"img/detail-activity/person-check-fill.svg",
					"img/detail-activity/headphones.svg",
					"img/detail-activity/stack.svg"
				],

				"participant" => [
					[
						'id' => 1,
						'name' => 'Adult',
						'detail' => 'Age 13-99',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '120000'
					],
					[
						'id' => 2,
						'name' => 'Children',
						'detail' => 'Age 3-12',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '150000'
					],
					[
						'id' => 3,
						'name' => 'Infant',
						'detail' => 'Age 2 and younger',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '200000'
					],
				],

				'clock' => [
					'04.30 AM',
					'06.00 AM',
					'08.00 PM',
					'12.00 PM'
				],

				'languages' => [
					'Indonesia',
					'English'
				]
			],
			[
				'id' => 2,
				"duration" => 'WATER ACTIVITY',
				"title" => 'One Day Nusa Penida Snorkeling and Island Tour Combination',
				"kind" => 'Balian Breeze',

				"imageBanner" => [
					"https://cdn.getyourguide.com/img/tour/cf7ea171d7709648.jpeg/98.jpg",
					"https://cdn.getyourguide.com/img/tour/35e5cb8f3064870e.jpeg/97.jpg",
					"https://cdn.getyourguide.com/img/tour/ddc7fdf3b0fedce1.jpeg/53.jpg",
					"https://cdn.getyourguide.com/img/tour/35e5cb8f3064870e.jpeg/97.jpg",
				],

				"profile" => "https://cdn.forevervacation.com/uploads/tour/ha-long-bay-instagram-tour-the-most-famous-spots-3981.jpg?tr=w-516,h-375",
				"name" => "Certified",
				"rate" => '4.8',
				"countReview" => '5,455,555',
				"description" => "From famous rice terraces, stunning waterfalls and breathtaking views of Mount Agung, our Bali InstagramTour is perfect for travelers who want to experience the best of Bali's beautiful landscapes, as well as its other natural and cultural offerings.",
				"price" => "760000",
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				"socialMedia" => "The Most Famous Spots",
				"meet" => "Meet at Dermaga Banjar Nyuh, Ped, Kec. Nusa Penida, Kabupaten Klungkung, Bali 80771, Indonesia",
				"spend" => '2.5 hours',

				"activityTitle" => [
					"Free cancellation",
					"Reserve now & pay later",
					"Duration 8 hours",
					"Live tour guide",
					"Pickup included",
					"Small group"
				],

				"activityDescription" => [
					"Cancel up to 24 hours in advance for a full refund",
					"Keep your travel plans flexible — book your spot and pay nothing today.",
					"Check availability to see starting times.",
					"English, Korean",
					"• Pickup from your accommodation island-wide, except for North and West Bali areas • During high season (Apr-Sept), it is recommended to start as early as possible in order to avoid road traffic and queues at the temple",
					"Limited to 15 participants"
				],

				"activityImage" => [
					"img/detail-activity/calender.svg",
					"img/detail-activity/menu-calender.svg",
					"img/detail-activity/clock-history.svg",
					"img/detail-activity/person-check-fill.svg",
					"img/detail-activity/headphones.svg",
					"img/detail-activity/stack.svg"
				],

				"participant" => [
					[
						'id' => 1,
						'name' => 'Adult',
						'detail' => 'Age 13-99',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '120000'
					],
					[
						'id' => 2,
						'name' => 'Children',
						'detail' => 'Age 3-12',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '150000'
					],
					[
						'id' => 3,
						'name' => 'Infant',
						'detail' => 'Age 2 and younger',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '200000'
					],
				],

				'clock' => [
					'04.30 AM',
					'06.00 AM',
					'08.00 PM',
					'12.00 PM'
				],

				'languages' => [
					'Indonesia',
					'English'
				]
			],
			[
				'id' => 3,
				"duration" => 'WATER ACTIVITY',
				"title" => 'One Day Nusa Penida Snorkeling and Island Tour Combination',
				"kind" => 'Balian Breeze',

				"imageBanner" => [
					"https://cdn.getyourguide.com/img/tour/cf7ea171d7709648.jpeg/98.jpg",
					"https://cdn.getyourguide.com/img/tour/35e5cb8f3064870e.jpeg/97.jpg",
					"https://cdn.getyourguide.com/img/tour/ddc7fdf3b0fedce1.jpeg/53.jpg",
					"https://cdn.getyourguide.com/img/tour/35e5cb8f3064870e.jpeg/97.jpg",
				],

				"profile" => "https://cdn.forevervacation.com/uploads/tour/ha-long-bay-instagram-tour-the-most-famous-spots-3981.jpg?tr=w-516,h-375",
				"name" => "Certified",
				"rate" => '4.8',
				"countReview" => '5,455,555',
				"description" => "From famous rice terraces, stunning waterfalls and breathtaking views of Mount Agung, our Bali InstagramTour is perfect for travelers who want to experience the best of Bali's beautiful landscapes, as well as its other natural and cultural offerings.",
				"price" => "760000",
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				"socialMedia" => "The Most Famous Spots",
				"meet" => "Meet at Dermaga Banjar Nyuh, Ped, Kec. Nusa Penida, Kabupaten Klungkung, Bali 80771, Indonesia",
				"spend" => '2.5 hours',

				"activityTitle" => [
					"Free cancellation",
					"Reserve now & pay later",
					"Duration 8 hours",
					"Live tour guide",
					"Pickup included",
					"Small group"
				],

				"activityDescription" => [
					"Cancel up to 24 hours in advance for a full refund",
					"Keep your travel plans flexible — book your spot and pay nothing today.",
					"Check availability to see starting times.",
					"English, Korean",
					"• Pickup from your accommodation island-wide, except for North and West Bali areas • During high season (Apr-Sept], it is recommended to start as early as possible in order to avoid road traffic and queues at the temple",
					"Limited to 15 participants"
				],

				"activityImage" => [
					"img/detail-activity/calender.svg",
					"img/detail-activity/menu-calender.svg",
					"img/detail-activity/clock-history.svg",
					"img/detail-activity/person-check-fill.svg",
					"img/detail-activity/headphones.svg",
					"img/detail-activity/stack.svg"
				],

				"participant" => [
					[
						'id' => 1,
						'name' => 'Adult',
						'detail' => 'Age 13-99',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '120000'
					],
					[
						'id' => 2,
						'name' => 'Children',
						'detail' => 'Age 3-12',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '150000'
					],
					[
						'id' => 3,
						'name' => 'Infant',
						'detail' => 'Age 2 and younger',
						'quota' => '5',
						'available' => '5',
						'booked' => '5',
						'capacity' => '5',
						'price' => '200000'
					],
				],

				'clock' => [
					'04.30 AM',
					'06.00 AM',
					'08.00 PM',
					'12.00 PM'
				],

				'languages' => [
					'Indonesia',
					'English'
				]
			],
		];

		// Filter items based on the provided ID
		$filteredItems = array_filter($items, function ($item) use ($id) {
			// Check if the 'id' field of the item matches the provided ID
			return $item['id'] == $id;
		});

		// Convert the filtered items to a list to get rid of associative keys
		$filteredItems = array_values($filteredItems);

		// Sending data as JSON response
		return $this->response->setJSON($filteredItems);
	}

	public function generateExperience($id)
	{
		$items = [
			[
				"id" => 1,
				"list" => [
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '05:45-06:15 Pick up 2 from hotel to port',
					],
					[
						'imageList' => 'img/detail-activity/pin-angle.svg',
						'listDesc' => '06:15-08:15 Breakfast the to good place',
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '08:45-12:15 Reset to recommended place'
					],
					[
						'imageList' => 'img/detail-activity/geo.svg',
						'listDesc' => '12:15-03:15 Lunch to resort the beach'
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '03:15-05.15 Back to hotel'
					],
					[
						'imageList' => 'img/detail-activity/cone-striped.svg',
						'listDesc' => '05.15-07.00 Dinner in hotel and break the travel'
					]
				],

				"highlight" => [
					"Tick off Bali's main Instagram hotspot on one full-day trip",
					"Travel around in Bali on trip",
					"Learn culture from traditional place",
					"Looking the activity local human"
				],
				"fullDescription" =>
					"Embark on an exciting day trip to Nusa Penida from the southern regions of Bali. Your day begins with convenient pickup from your hotel, followed by a journey to Sanur Harbor where you'll board a public speedboat bound for Nusa Penida. 
					<br /> <br />
					Upon reaching the island, you'll join a small group tour of approximately 10-12 people for an incredible snorkeling adventure. Weather permitting, you'll explore three fantastic snorkeling spots: Manta Bay, Gamat Bay, and Crystal Bay. In case of inclement weather, alternative snorkeling locations like Wall Point, Gt Point, and SD Point will be visited.
					<br /> <br />
					Get ready to witness the awe-inspiring marine life, including the majestic manta rays, amidst the crystal-clear waters. Following the snorkeling excursion, recharge with a delicious lunch at a local restaurant (meal expenses not included).
					<br /> <br />
					Once refreshed, set off to explore Nusa Penida in a private car. Your first stop will be the iconic Kelingking Beach, renowned for its breathtaking cliffs and pristine white sandy shores. Take in the panoramic views and capture memorable moments of this picturesque location.
					<br /> <br />
					Continuing your island exploration, visit Angel's Billabong, a mesmerizing rock formation, and then head to Broken Beach, a fascinating cave formation with an open-roof concept due to natural erosion.
					<br /> <br />
					As the day draws to a close, return to Bali via the speedboat and conclude your adventure with a drop-off at your hotel.
					<br /> <br />
					This itinerary promises a day filled with captivating underwater adventures, stunning landscapes, and the natural wonders of Nusa Penida.
					",
				"includes" => [
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Hotel pickup and drop-off",
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Air-conditioned transport"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Island Tour"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Shared Boat for snorkeling"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Snorkeling Gear"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Entrance Fees"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Lunch"
					],
					[
						"icon" => "img/detail-activity/x.svg",
						"desc" => "Personal Expenses"
					]
				],
				"suitable" => [
					"Pregnant women",
					"Full service"
				],
				"information" =>
					"<div>
						<p>What to bring</p>
							<br />
							<ul style=`list-style-type:disc`>
								<li>• Change of clothes</li>
								<li>• Cash</li>
							</ul> 
							<br />
						<p>Know before you go</p>
							<br />
							<ul style=`list-style-type:disc;`>
								<li>• In case of unfavorable morning sea conditions, snorkeling activities will be rescheduled for the afternoon.</li>
								<li>• Expect bumpy and narrow roads on Nusa Penida, but the scenic views along the way make it worthwhile.</li>
								<li>• Packages including snorkeling may reduce the time allocated for other destinations due to time constraints</li>
							</ul>
						</div>
					"
			],
			[
				"id" => 2,
				"list" => [
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '05:45-06:15 Pick up 2 from hotel to port',
					],
					[
						'imageList' => 'img/detail-activity/pin-angle.svg',
						'listDesc' => '06:15-08:15 Breakfast the to good place',
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '08:45-12:15 Reset to recommended place'
					],
					[
						'imageList' => 'img/detail-activity/geo.svg',
						'listDesc' => '12:15-03:15 Lunch to resort the beach'
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '03:15-05.15 Back to hotel'
					],
					[
						'imageList' => 'img/detail-activity/cone-striped.svg',
						'listDesc' => '05.15-07.00 Dinner in hotel and break the travel'
					]
				],

				"highlight" => [
					"Tick off Bali's main Instagram hotspot on one full-day trip",
					"Travel around in Bali on trip",
					"Learn culture from traditional place",
					"Looking the activity local human"
				],
				"fullDescription" =>
					"Embark on an exciting day trip to Nusa Penida from the southern regions of Bali. Your day begins with convenient pickup from your hotel, followed by a journey to Sanur Harbor where you'll board a public speedboat bound for Nusa Penida. 
					<br /> <br />
					Upon reaching the island, you'll join a small group tour of approximately 10-12 people for an incredible snorkeling adventure. Weather permitting, you'll explore three fantastic snorkeling spots: Manta Bay, Gamat Bay, and Crystal Bay. In case of inclement weather, alternative snorkeling locations like Wall Point, Gt Point, and SD Point will be visited.
					<br /> <br />
					Get ready to witness the awe-inspiring marine life, including the majestic manta rays, amidst the crystal-clear waters. Following the snorkeling excursion, recharge with a delicious lunch at a local restaurant (meal expenses not included).
					<br /> <br />
					Once refreshed, set off to explore Nusa Penida in a private car. Your first stop will be the iconic Kelingking Beach, renowned for its breathtaking cliffs and pristine white sandy shores. Take in the panoramic views and capture memorable moments of this picturesque location.
					<br /> <br />
					Continuing your island exploration, visit Angel's Billabong, a mesmerizing rock formation, and then head to Broken Beach, a fascinating cave formation with an open-roof concept due to natural erosion.
					<br /> <br />
					As the day draws to a close, return to Bali via the speedboat and conclude your adventure with a drop-off at your hotel.
					<br /> <br />
					This itinerary promises a day filled with captivating underwater adventures, stunning landscapes, and the natural wonders of Nusa Penida.
					",
				"includes" => [
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Hotel pickup and drop-off",
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Air-conditioned transport"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Island Tour"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Shared Boat for snorkeling"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Snorkeling Gear"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Entrance Fees"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Lunch"
					],
					[
						"icon" => "img/detail-activity/x.svg",
						"desc" => "Personal Expenses"
					]
				],
				"suitable" => [
					"Pregnant women",
					"Full service"
				],
				"information" =>
					"<div>
						<p>What to bring</p>
							<br />
							<ul style=`list-style-type:disc`>
								<li>• Change of clothes</li>
								<li>• Cash</li>
							</ul> 
							<br />
						<p>Know before you go</p>
							<br />
							<ul style=`list-style-type:disc;`>
								<li>• In case of unfavorable morning sea conditions, snorkeling activities will be rescheduled for the afternoon.</li>
								<li>• Expect bumpy and narrow roads on Nusa Penida, but the scenic views along the way make it worthwhile.</li>
								<li>• Packages including snorkeling may reduce the time allocated for other destinations due to time constraints</li>
							</ul>
						</div>
					"
			],
			[
				"id" => 3,
				"list" => [
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '05:45-06:15 Pick up 2 from hotel to port',
					],
					[
						'imageList' => 'img/detail-activity/pin-angle.svg',
						'listDesc' => '06:15-08:15 Breakfast the to good place',
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '08:45-12:15 Reset to recommended place'
					],
					[
						'imageList' => 'img/detail-activity/geo.svg',
						'listDesc' => '12:15-03:15 Lunch to resort the beach'
					],
					[
						'imageList' => 'img/detail-activity/grip-vertical.svg',
						'listDesc' => '03:15-05.15 Back to hotel'
					],
					[
						'imageList' => 'img/detail-activity/cone-striped.svg',
						'listDesc' => '05.15-07.00 Dinner in hotel and break the travel'
					]
				],

				"highlight" => [
					"Tick off Bali's main Instagram hotspot on one full-day trip",
					"Travel around in Bali on trip",
					"Learn culture from traditional place",
					"Looking the activity local human"
				],
				"fullDescription" =>
					"Embark on an exciting day trip to Nusa Penida from the southern regions of Bali. Your day begins with convenient pickup from your hotel, followed by a journey to Sanur Harbor where you'll board a public speedboat bound for Nusa Penida. 
					<br /> <br />
					Upon reaching the island, you'll join a small group tour of approximately 10-12 people for an incredible snorkeling adventure. Weather permitting, you'll explore three fantastic snorkeling spots: Manta Bay, Gamat Bay, and Crystal Bay. In case of inclement weather, alternative snorkeling locations like Wall Point, Gt Point, and SD Point will be visited.
					<br /> <br />
					Get ready to witness the awe-inspiring marine life, including the majestic manta rays, amidst the crystal-clear waters. Following the snorkeling excursion, recharge with a delicious lunch at a local restaurant (meal expenses not included).
					<br /> <br />
					Once refreshed, set off to explore Nusa Penida in a private car. Your first stop will be the iconic Kelingking Beach, renowned for its breathtaking cliffs and pristine white sandy shores. Take in the panoramic views and capture memorable moments of this picturesque location.
					<br /> <br />
					Continuing your island exploration, visit Angel's Billabong, a mesmerizing rock formation, and then head to Broken Beach, a fascinating cave formation with an open-roof concept due to natural erosion.
					<br /> <br />
					As the day draws to a close, return to Bali via the speedboat and conclude your adventure with a drop-off at your hotel.
					<br /> <br />
					This itinerary promises a day filled with captivating underwater adventures, stunning landscapes, and the natural wonders of Nusa Penida.
					",
				"includes" => [
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Hotel pickup and drop-off",
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Air-conditioned transport"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Island Tour"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Shared Boat for snorkeling"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Snorkeling Gear"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Entrance Fees"
					],
					[
						"icon" => "img/detail-activity/check2.svg",
						"desc" => "Lunch"
					],
					[
						"icon" => "img/detail-activity/x.svg",
						"desc" => "Personal Expenses"
					]
				],
				"suitable" => [
					"Pregnant women",
					"Full service"
				],
				"information" =>
					"<div>
						<p>What to bring</p>
							<br />
							<ul style=`list-style-type:disc`>
								<li>• Change of clothes</li>
								<li>• Cash</li>
							</ul> 
							<br />
						<p>Know before you go</p>
							<br />
							<ul style=`list-style-type:disc;`>
								<li>• In case of unfavorable morning sea conditions, snorkeling activities will be rescheduled for the afternoon.</li>
								<li>• Expect bumpy and narrow roads on Nusa Penida, but the scenic views along the way make it worthwhile.</li>
								<li>• Packages including snorkeling may reduce the time allocated for other destinations due to time constraints</li>
							</ul>
						</div>
					"
			],
		];

		// Filter items based on the provided ID
		$filteredItems = array_filter($items, function ($item) use ($id) {
			// Check if the 'id' field of the item matches the provided ID
			return $item['id'] == $id;
		});

		// Convert the filtered items to a list to get rid of associative keys
		$filteredItems = array_values($filteredItems);

		// Sending data as JSON response
		return $this->response->setJSON($filteredItems);
	}

	public function generateReview($id)
	{
		$items = [
			[
				'id' => 1,
				'countRating' => '4',
				'countReview' => '1,555',
				'about' => 'Bangli',
				'people' => [
					[
						'id' => 1,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '2',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 2,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 3,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '3.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 4,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 5,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 6,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 7,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 8,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 9,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					]
				]
			],
			[
				'id' => 2,
				'countRating' => '3',
				'countReview' => '9,333',
				'about' => 'Tabanan',
				'people' => [
					[
						'id' => 1,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '2',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 2,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 3,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '3.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 4,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 5,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 6,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 7,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 8,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 9,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					]
				]
			],
			[
				'id' => 3,
				'countRating' => '3',
				'countReview' => '9,333',
				'about' => 'Tabanan',
				'people' => [
					[
						'id' => 1,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '2',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 2,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 3,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '3.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 4,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 5,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 6,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 7,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 8,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					],
					[
						'id' => 9,
						'image' => 'https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg',
						'comment' => 'This week we’re taking it back to where it all began. That’s right, we’re talking about our
									original ForeverVacation tour destination…the beautiful island of Bali and its amazing
									restaurants! East of Java and West of Lombok, Indonesia’s most famous province includes the
									larger island of Bali and don’t forget, the smaller neighboring islands of Nusa Penida, Nusa
									Lembongan and Nusa Ceningan.',
						'rating' => '4.5',
						'location' => 'Nusa Lembongan and Nusa Ceningan.',
						'email' => "familyTour@gmail.com"
					]
				]

			],
		];

		// Filter items based on the provided ID
		$filteredItems = array_filter($items, function ($item) use ($id) {
			// Check if the 'id' field of the item matches the provided ID
			return $item['id'] == $id;
		});

		// Convert the filtered items to a list to get rid of associative keys
		$filteredItems = array_values($filteredItems);

		// Sending data as JSON response
		return $this->response->setJSON($filteredItems);
	}
}

?>
