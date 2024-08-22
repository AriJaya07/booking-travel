<?php

namespace App\Controllers;

class Detail_article extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/detail-article/detail-article");
	}

	public function generateIsland($id)
	{
		$items = [
			[
				'id' => 1,
				'title' => 'MOST POPULAR PLACES TO VISIT IN TABANAN',
				'image' => 'https://cdn.forevervacation.com/uploads/blog/1552801223_dest_2.jpg',
				'profile' => 'https://cdn.forevervacation.com/uploads/users/1673429176_partner_27.jpeg',
				'name' => 'Shara',
				'time' => '1',
				'facebook' => 'facebook.com',
				'pinterest' => 'pinterest.com',
				'twitter' => 'twitter.com',
				'gmail' => 'gmail.com',
				'description' => 'So you are getting ready for your big trip to Bali, Indonesia? Well, before you get to Bali, make sure to do your research and plan where you want to go. Most people visiting Bali try to jam too much into their schedule and don’t consider traffic and other factors that will waste a lot of time.
					We usually suggest our guests pick one location every day in Bali. Then on top of that, add one extra day for a little bit of relaxation.
					Below we have listed our top 5 most popular places to visit while you’re in Bali.'
			],
			[
				'id' => 2,
				'title' => 'MOST POPULAR PLACES TO VISIT IN DENPASAR',
				'image' => 'https://cdn.forevervacation.com/uploads/blog/1552801223_dest_2.jpg',
				'profile' => 'https://cdn.forevervacation.com/uploads/users/1673429176_partner_27.jpeg',
				'name' => 'Shara',
				'time' => '1',
				'facebook' => 'facebook.com',
				'pinterest' => 'pinterest.com',
				'twitter' => 'twitter.com',
				'gmail' => 'gmail.com',
				'description' => 'So you are getting ready for your big trip to Bali, Indonesia? Well, before you get to Bali, make sure to do your research and plan where you want to go. Most people visiting Bali try to jam too much into their schedule and don’t consider traffic and other factors that will waste a lot of time.
					We usually suggest our guests pick one location every day in Bali. Then on top of that, add one extra day for a little bit of relaxation.
					Below we have listed our top 5 most popular places to visit while you’re in Bali.'
			],
			[
				'id' => 3,
				'title' => 'MOST POPULAR PLACES TO VISIT IN BADUNG',
				'image' => 'https://cdn.forevervacation.com/uploads/blog/1552801223_dest_2.jpg',
				'profile' => 'https://cdn.forevervacation.com/uploads/users/1673429176_partner_27.jpeg',
				'name' => 'Shara',
				'time' => '1',
				'facebook' => 'facebook.com',
				'pinterest' => 'pinterest.com',
				'twitter' => 'twitter.com',
				'gmail' => 'gmail.com',
				'description' => 'So you are getting ready for your big trip to Bali, Indonesia? Well, before you get to Bali, make sure to do your research and plan where you want to go. Most people visiting Bali try to jam too much into their schedule and don’t consider traffic and other factors that will waste a lot of time.
					We usually suggest our guests pick one location every day in Bali. Then on top of that, add one extra day for a little bit of relaxation.
					Below we have listed our top 5 most popular places to visit while you’re in Bali.'
			]
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

	public function generateTrending($id)
	{
		$items = [
			[
				'id' => 1,
				'imageOne' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleOne' => 'Uluwatu Instagram Tour: Unforgettable Beaches',
				'imageTwo' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleTwo' => 'Uluwatu Instagram Tour: Unforgettable Beaches',
				'imageThree' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleThree' => 'Uluwatu Instasgram Tour: Unforgettable Beaches',
			],
			[
				'id' => 2,
				'imageOne' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleOne' => 'Kuta Instagram Tour: Unforgettable Beaches',
				'imageTwo' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleTwo' => 'Kuta Instagram Tour: Unforgettable Beaches',
				'imageThree' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleThree' => 'Kuta Instagram Tour: Unforgettable Beaches',
			],
			[
				'id' => 3,
				'imageOne' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleOne' => 'Sanur Instagram Tour: Unforgettable Beaches',
				'imageTwo' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleTwo' => 'Sanur Instagram Tour: Unforgettable Beaches',
				'imageThree' => 'https://cdn.forevervacation.com/uploads/tour/uluwatu-instagram-tour-unforgettable-beaches7.jpg',
				'titleThree' => 'Sanur Instagram Tour: Unforgettable Beaches',
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

	public function generateTour($id)
	{
		$items = [
			[
				'id' => 1,
				'title' => 'Nusa Penida',
				'image' => 'https://cdn.forevervacation.com/uploads/media/images/uploaded_images/1556381469.png',
				'descriptionOne' => 'Nusa Penida is the largest of three islands off the southeastern coast of Bali, Indonesia. It has recently gained much popularity due to the increase in social media and people posting pictures of its main attraction, Kelingking Beach. It’s also an unofficial bird sanctuary for endangered Balinese and Indonesian bird species; Nusa Penida has prevented the Bali Starling’s extinction — the locals actively work hard to protect the birds.',
				'descriptionTwo' => 'Many people come to Nusa Penida to escape the crowds — and immerse themselves in nature and local hospitality. It’s known as one of the best scuba diving destinations in the area and you’re likely to see large pelagic creatures, like Manta Rays and Oceanic sunfish—maybe even a whale shark.',
				'descriptionThree' => 'One thing to caution about when visiting is that the hiking is a bit steep. However, the beaches are amazingly beautiful and great for travelers looking to get away from it all.',
				'descriptionFour' => 'If you are looking for a way to liven up your Instagram feed, Nusa Penida is the place to visit!'
			],
			[
				'id' => 2,
				'title' => 'Kuta',
				'image' => 'https://cdn.forevervacation.com/uploads/media/images/uploaded_images/1556381469.png',
				'descriptionOne' => 'Nusa Penida is the largest of three islands off the southeastern coast of Bali, Indonesia. It has recently gained much popularity due to the increase in social media and people posting pictures of its main attraction, Kelingking Beach. It’s also an unofficial bird sanctuary for endangered Balinese and Indonesian bird species; Nusa Penida has prevented the Bali Starling’s extinction — the locals actively work hard to protect the birds.',
				'descriptionTwo' => 'Many people come to Nusa Penida to escape the crowds — and immerse themselves in nature and local hospitality. It’s known as one of the best scuba diving destinations in the area and you’re likely to see large pelagic creatures, like Manta Rays and Oceanic sunfish—maybe even a whale shark.',
				'descriptionThree' => 'One thing to caution about when visiting is that the hiking is a bit steep. However, the beaches are amazingly beautiful and great for travelers looking to get away from it all.',
				'descriptionFour' => 'If you are looking for a way to liven up your Instagram feed, Nusa Penida is the place to visit!'
			],
			[
				'id' => 3,
				'title' => 'Bedugul',
				'image' => 'https://cdn.forevervacation.com/uploads/media/images/uploaded_images/1556381469.png',
				'descriptionOne' => 'Nusa Penida is the largest of three islands off the southeastern coast of Bali, Indonesia. It has recently gained much popularity due to the increase in social media and people posting pictures of its main attraction, Kelingking Beach. It’s also an unofficial bird sanctuary for endangered Balinese and Indonesian bird species; Nusa Penida has prevented the Bali Starling’s extinction — the locals actively work hard to protect the birds.',
				'descriptionTwo' => 'Many people come to Nusa Penida to escape the crowds — and immerse themselves in nature and local hospitality. It’s known as one of the best scuba diving destinations in the area and you’re likely to see large pelagic creatures, like Manta Rays and Oceanic sunfish—maybe even a whale shark.',
				'descriptionThree' => 'One thing to caution about when visiting is that the hiking is a bit steep. However, the beaches are amazingly beautiful and great for travelers looking to get away from it all.',
				'descriptionFour' => 'If you are looking for a way to liven up your Instagram feed, Nusa Penida is the place to visit!'
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
