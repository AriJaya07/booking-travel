<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/homepage/homepage");
	}

	public function generateFormSearch()
	{
		// Define form search options
		$items = [
			[
				'id' => 1,
				"from" => [
					"Sanur",
					"Denpasar",
					"Benua"
				],
				"to" => [
					"Sanur",
					"Denpasar",
					"Benua",
					"Tabanan"
				],
				"type" => [
					"Domestic",
					"Foreign"
				],
				"passenger" => [
					"1",
					"2",
					"3",
					"4",
					"5"
				],
				"price" => [
					'500000',
					'1000000',
					'1500000'
				],
				'differPrice' => '15000',
				'symbolCurrency' => [
					'$',
					'Rp'
				],
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateBoat()
	{
		$items = [
			[
				'id' => 1,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Domestic',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://penidago.com/assets/images/boat/605ee82623ae1.png',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
			[
				'id' => 2,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Foreign',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://cdn.getyourguide.com/img/tour/f7097fa85967d1ab.jpeg/132.jpg',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
			[
				'id' => 3,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Domestic',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://cdn.getyourguide.com/img/tour/ae79a5feac3910c5.jpeg/132.jpg',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
			[
				'id' => 4,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Domestic',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://cdn.getyourguide.com/img/tour/ef722039a459b4c5.jpeg/132.jpg',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
			[
				'id' => 5,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Domestic',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://penidago.com/assets/images/boat/605ee82623ae1.png',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
			[
				'id' => 6,
				'orderId' => '#2443',
				'from' => 'Sanur',
				'rate' => '4.8',
				'review' => '1,333',
				'to' => 'Benua',
				'type' => 'Domestic',
				'passenger' => '1',
				'departure' => '2023-12-11',
				'returnDeparture' => '2023-12-18',
				'village' => 'Banjar Nyuh',
				'date' => '11 December, 2023',
				'image' => 'https://penidago.com/assets/images/boat/605ee82623ae1.png',
				'title' => 'Semabu Hill Fast Boat',
				'price' => '90000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'country' => 'Indonesia',
				'availability' => 'CHOOSE DEPARATURE',
			],
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateActivity()
	{
		$items = [
			[
				'id' => 1,
				'image' => 'https://cdn.getyourguide.com/img/tour/c12cff8f020d1472.jpeg/132.jpg',
				'sport' => 'PRIVATE',
				'title' => 'Nusapenida : Private customized day tour, with expert local.ise',
				'date' => '2023-12-13',
				'time' => '8',
				'capacity' => 'small',
				'transportation' => 'available',
				'star' => '4',
				'review' => '5,266',
				'price' => '760000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
			[
				'id' => 2,
				'image' => 'https://cdn.getyourguide.com/img/tour/1c497deacd12bd5a3f5dffb47cf3270752122f6f001487f0d3afda9ac6ca4973.jpeg/132.jpg',
				'sport' => 'WATER',
				'title' => 'Nusapenida : Private customized day tour, with expert local.Sunrise',
				'date' => '2023-12-13',
				'time' => '8',
				'capacity' => 'big',
				'transportation' => 'non available',
				'star' => '3.5',
				'review' => '5,266',
				'price' => '1100000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
			[
				'id' => 3,
				'image' => 'https://cdn.getyourguide.com/img/tour/64075f0786a9b.jpeg/132.jpg',
				'sport' => 'WATER',
				'title' => 'Nusapenida : Private customized day tour, with expert local.e',
				'date' => '2023-12-13',
				'time' => '36',
				'capacity' => 'small',
				'transportation' => 'available',
				'star' => '4.8',
				'review' => '5,266',
				'price' => '2000000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
			[
				'id' => 4,
				'image' => 'https://cdn.getyourguide.com/img/tour/601bf4521be18.jpeg/132.jpg',
				'sport' => 'WATER',
				'title' => 'Nusapenida : Private customized day tour, with expert local.',
				'date' => '2023-12-15',
				'time' => '12',
				'capacity' => 'Medium',
				'transportation' => 'available',
				'star' => '5.8',
				'review' => '5,266',
				'price' => '760000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
			[
				'id' => 1,
				'image' => 'https://cdn.getyourguide.com/img/tour/64075f0786a9b.jpeg/132.jpg',
				'sport' => 'WATER',
				'title' => 'Nusapenida : Private customized day tour, with expert local.',
				'date' => '2023-12-13',
				'time' => '8',
				'capacity' => 'small',
				'transportation' => 'available',
				'star' => '4.8',
				'review' => '5,266',
				'price' => '760000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
			[
				'id' => 1,
				'image' => 'https://cdn.getyourguide.com/img/tour/d980d440a24171ad.jpeg/132.jpg',
				'sport' => 'WATER',
				'title' => 'Nusapenida : Private customized day tour, with expert local.',
				'date' => '2023-12-13',
				'time' => '8',
				'capacity' => 'small',
				'transportation' => 'available',
				'star' => '4.8',
				'review' => '5,266',
				'price' => '760000',
				'differPrice' => '15000',
				'symbolCurrency' => array(
					'$',
					'Rp'
				),
				'availability' => 'available'
			],
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateRecommended()
	{
		$items = [
			[
				'id' => '1',
				'image' => 'https://cdn.getyourguide.com/img/tour/c12cff8f020d1472.jpeg/97.jpg',
				'title' => '1. From Bali: Swim with Manta Rays in Nusa Penida',
				'description' => 'Head for the island of Nusa Penida and embark on a snorkeling adventure. Take advantage of 3 different stops to swim with Manta Rays, enjoy lunch on the beach, then spend the afternoon exploring the mangrove forest. Benefit from pick-up at your hotel in selected areas of Bali or wait directly at the ferry office (depending on the option selected), and then journey to Nusa Penida, located 20 kilometers off the southeast coast. '
			],
			[
				'id' => '2',
				'image' => 'https://cdn.getyourguide.com/img/tour/638873590ff72.png/97.jpg',
				'title' => '2. Bali Sanur: One-Way Express Ferry to/from Nusa Penida',
				'description' => 'Travel along the fastest route between Bali`s Sanur Beach and Nusa Penida on a spacious ferry ride. Make the most of your holiday time by booking your transfer in advance and arriving quickly at your chosen destination.'
			],
			[
				'id' => '3',
				'image' => 'https://cdn.getyourguide.com/img/tour/d980d440a24171ad.jpeg/97.jpg',
				'title' => '3. From Bali: 3 Snorkeling Spots Tour to Lembongan and Penida',
				'description' => 'Snorkel through the colorful underwater worlds of the islands of Nusa Lembongan and Nusa Penida on this guided tour from selected locations in Bali. Use high-quality gear to search for marine life and kayak through mangroves.'
			],
			[
				'id' => '4',
				'image' => 'https://cdn.getyourguide.com/img/tour/6400b578dff24.jpeg/97.jpg',
				'title' => '4. Bali: Nusa Penida All-Inclusive Full-Day Tour with Transfers',
				'description' => 'Start the tour with pickup direct from your accommodation either in Nusa Penida or in Bali by one of our English-speaking driver or guide who will take you to explore Nusa Penida island with its breathtaking views. '
			],
			[
				'id' => '5',
				'image' => 'https://cdn.getyourguide.com/img/tour/79f65776d763ed99.jpeg/97.jpg',
				'title' => '5. From Bali: Nusa Penida Small Group Tour by Speed Boat',
				'description' => 'Explore the tropical Nusa Penida Island, nestled in the waters between Bali and Lombok. This tropical island is known for its beautiful beaches, rugged coastline, and relaxed way of life. Discover Kelingking Beach, Broken Beach, '
			],
			[
				'id' => '6',
				'image' => 'https://cdn.getyourguide.com/img/tour/601bf4521be18.jpeg/97.jpg',
				'title' => '6. Nusa Penida: Private Car Hire with Driver',
				'description' => 'Spend a day discovering Nusa Penida with a professional driver. Tailor the trip to your interests, and travel between the island`s top sights in a private air-conditioned vehicle. Benefit from free guidance to help plan your itinerary. '
			],
			[
				'id' => '7',
				'image' => 'https://cdn.getyourguide.com/img/tour/638ec7e9aacd3.jpeg/97.jpg',
				'title' => '7. From Nusa Penida: 3 Spots Snorkeling Tour with Manta Rays',
				'description' => 'Meet at Toyapakeh Harbour, heading for the island of Nusa Lembongan and embark on a snorkeling adventure. Take advantage of 3 different stops to swim with Manta Rays, enjoy lunch on the beach, '
			],
			[
				'id' => '8',
				'image' => 'https://cdn.getyourguide.com/img/tour/2533ee1463c0b686.jpeg/97.jpg',
				'title' => '8. Bali: Best of Nusa Penida Full-Day Tour by Fast Boat',
				'description' => 'Climb aboard a fast boat at Sanur Beach and cross the brilliant blue sea to Toyapakeh on the small island of Nusa Penida. Meet your local host on arrival and begin your day trip by air-conditioned van. '
			],
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateReview()
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
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateSelling()
	{
		$items = [
			[
				'id' => '1',
				'image' => 'https://cdn.forevervacation.com/uploads/tour/bali-instagram-tour-the-most-famous-spots-3509.jpg?tr=w-516,h-375',
				'title' => 'Bali Instagram Tour: The Most Famous Spots',
				'packet' => 'All-inclusive',
				'price' => '144'
			],
			[
				'id' => '1',
				'image' => 'https://cdn.forevervacation.com/uploads/tour/kuala-lumpur-instagram-tour-most-famous-spots-2446.jpeg?tr=w-516,h-375',
				'title' => 'Bali Instagram Tour: The Most Famous Spots',
				'packet' => 'All-inclusive',
				'price' => '144'
			],
			[
				'id' => '1',
				'image' => 'https://cdn.forevervacation.com/uploads/tour/bangkok-instagram-tour-the-most-famous-spots-4359.jpg?tr=w-516,h-375',
				'title' => 'Bali Instagram Tour: The Most Famous Spots',
				'packet' => 'All-inclusive',
				'price' => '144'
			],
			[
				'id' => '1',
				'image' => 'https://cdn.forevervacation.com/uploads/tour/ha-long-bay-instagram-tour-the-most-famous-spots-3981.jpg?tr=w-516,h-375',
				'title' => 'Bali Instagram Tour: The Most Famous Spots',
				'packet' => 'All-inclusive',
				'price' => '144'
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}
}

?>
