<?php

namespace App\Controllers;

class Company extends BaseController
{
	public function index()
	{
		// Load the helper and view within the controller
		helper('url');
		return view("landing-page/company/company");
	}

	public function generateChoose()
	{
		$items = [
			[
				"id" => 1,
				"title" => "WHY WE'RE DIFFERENT",
				"image" => "https://forevervacation.com/layout_v_3/assets/img/why-different/Hero_Image.png",
				"descriptionOne" => "Your vacation is around the corner and you have an important decision to make when choosing a tour
				operator. We understand this and know that vacations don’t happen often so our goal is to pull out all
				the stops to make your trip as AMAZING & MEMORABLE as we can.",
				"descriptionTwo" => "We always compete on quality and our entire team works super hard to deliver you the best experience
				possible. We can’t inform you about how other companies operate but with ForeverVacation, we can promise
				you that every detail is covered and we will always go above and beyond."
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateVacation()
	{
		$items = [
			[
				"id" => 1,
				"title" => "Here is why ForeverVacation is different:",
				"list" => [
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate.",
					"We only use local guides, restaurants and partners to help spark the local economy and ensure the local communities benefit from every tour we operate."
				]
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateEnvironment()
	{
		$items = [
			[
				"id" => 1,
				"title" => "A Focus on the Environment and the Local Community",
				"image" => "https://forevervacation.com/layout_v_3/assets/img/why-different/img_01.png",
				"descriptionOne" => "At ForeverVacation, we understand our role in protecting the environment and supporting local communities. It’s more important than ever to be an advocate of responsible travel and make each destination where we operate better off than before we were there.",
				"descriptionTwo" => "	Here are just a few of the things we are currently doing to help make the world a better place",
				"subHeaderOne" => "Only work with the locals",
				"descriptionThree" => "Whether it’s a local guide, local restaurant or local business; we ensure all of our partners in each destination are operated by locals.",
				"subHeaderTwo" => "Give back to the local communities",
				"descriptionFour" => "Whether it’s buying school supplies for children, providing food for local villages or conducting local clean-ups, ForeverVacation is always trying to help the community and continuously give back. We’re by no means perfect but we are constantly trying to improve our contributions every month.",
				"subHeaderThree" => "Environmental Clean Ups",
				"descriptionFive" => "Sadly, we have seen the overall trash and pollution continue to increase from when we started back in 2017. We work with our local teams in each destination to conduct local clean-ups. Whether it’s removing trash from the shores of beaches or cleaning up the surrounding areas of sacred temples, our entire team is focused on reducing waste and protecting the environment."
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}

	public function generateFamily()
	{
		$items = [
			[
				"id" => 1,
				"title" => "A Focus on Family",
				"image" => "https://forevervacation.com/layout_v_3/assets/img/why-different/img_02.png",
				"descriptionOne" => "At ForeverVacation, we build our culture around one word… FAMILY. Sure, families may argue and disagree at times, but in the end, we always have each-others backs. We have instilled this culture into every one of our team members and it’s visible during every one of our tours.",
				"descriptionTwo" => "  When you are on one of our tours you are instantly part of the ForeverVacation family. We don’t treat you as a stranger but as a friend/family member. This sense of family has helped us grow quickly and become one of the top tour operators in Asia.",
				"descriptionThree" => "If one of our teammates or guests have any type of problem, our entire team is instantly there for them to make sure they are ok and get what they need.",
				"descriptionFour" => "We invite you to try one of our tours so you can see for yourself. We look forward to having you with us during your next trip and becoming part of the ForeverVacation family. ❤️",
			]
		];

		// Sending data as JSON response
		return $this->response->setJSON($items);
	}
}

?>
