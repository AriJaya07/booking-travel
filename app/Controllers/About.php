<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
        // Load the helper and view within the controller
        helper('url');
        return view("landing-page/about-us/about_us");
	}

	public function generateMeet()
	{
		$items = [
			[
				"id" => 1,
				"title" => "THANKS FOR STOPPING BY. WE CAN'T WAIT TO MEET YOU",
				"image" => "https://cdn.forevervacation.com/layout_v_3/assets/img/about-us/pc/about-image.png",
				"subHeader" => "Hi, we are Forever Vacation",
				"descriptionOne" => "ForeverVacation is an award-winning, family-owned tour operator that focuses on creating memorable &
				unique experiences around SouthEast Asia. Our team is composed of fun, adventurous and passionate
				individuals from around the world who are obsessed with travel. We love meeting new people from around
				the world and helping them capture amazing photos and experience our local culture.",
				"descriptionTwo" => "Our promise to you is that you will always be treated as family. We’re sure you will have a fun, safe
				and unique experience that you won’t find anywhere else. We look forward to meeting you.",
				"iconCustomer" => "https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/Icon-Happy-Client-yellow.svg",
				"customerReview" => "20,000+",
				"iconTour" => "https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/Icon-Ticket-yellow.svg",
				"toursReview" => "10,000+",
				"iconTop" => "https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/Icon-awesome-tripadvisor.svg",
				"topReview" => "TripAdvisor",
				"iconEmoji" => "https://cdn.forevervacation.com/layout_v_3/assets/img/common/pc/safe-yellow.svg",
				"emojiReview" => "Safe, fun & unique exp"
			]
		];

		// Sending data as JSON response
        return $this->response->setJSON($items);
	}

	public function generateTeam()
	{
		$items = [
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
			[
				"id" => 1,
				"name" => "Ben Dolgoff",
				"image" => "https://storage.googleapis.com/fvallimages/layout_v_3/assets/images/bennew.jpg",
				"position" => "Co- Founder & CEO",
				"jobdesk" => "A DIGITAL NOMAD AND TRAVEL LOVER. PASSIONATE ABOUT HELPING OTHERS",
				"description" => "Favorite thing about travel: Meeting new people and experiencing new cultures, has an amazing wife and business partner, secret Super Power: Secret Super Power: Can work while he is sleeping"
			],
		];

		// Sending data as JSON response
        return $this->response->setJSON($items);
	}

	public function generateCustomer()
	{
		$items = [
			[
				"id" => 1,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
 			],
			[
				"id" => 2,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			],
			[
				"id" => 3,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			],
			[
				"id" => 4,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			],
			[
				"id" => 5,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			],
			[
				"id" => 6,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			],
			[
				"id" => 7,
				"image" => "https://cdn.forevervacation.com/uploads/tour/guest_thumbnail/bali-instagram-tour-the-most-famous-spots-kassandra-g-2353.jpg",
				"name" => "Kassandra G.",
				"location" => "Bali's best spots",
				"comment" => "	A very well organised trip, the company kept us informed prior to and during the trip. We had great guides who adjusted the itinerary to make the most of the time we had. The view for lunch was probably the best view"
			]
		];

		// Sending data as JSON response
        return $this->response->setJSON($items);
	}

}

?>
