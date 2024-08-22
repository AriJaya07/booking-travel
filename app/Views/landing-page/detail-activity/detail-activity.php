<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Activity</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');

echo view("landing-page/detail-activity/manage/highlight");
echo view("landing-page/detail-activity/manage/experience");
echo view("landing-page/detail-activity/manage/reviews");

echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
    let loadDetailHighlight = '';
    let loadDetailExperience = '';
    let loadDetailReview = '';
    let id = ''

    let slideIndex = 1;

    document.addEventListener("DOMContentLoaded", async function () {
		const urlParams = new URLSearchParams(window.location.search);
		id = urlParams.get('id');
		// const apiUrlHighlight = `<?= base_url('detail-activity/generateHighlight/') ?>` + id

		// const apiUrlExperience = `<?= base_url('detail-activity/generateExperience/') ?>` + id

		// const apiUrlReview = `<?= base_url('detail-activity/generateReview/') ?>` + id

		const apiUrlActivityDetail = `<?= base_url('activity/getDetail/') ?>` + id

		async function getApi() {
			try {
                // const detailActivityResponse = await axios(apiUrlHighlight)
                // loadDetailHighlight = detailActivityResponse.data

				// showDetailActivity(loadDetailHighlight)
				// showParticipant(loadDetailHighlight)
				// showTitleActivity(loadDetailHighlight)
				// showCheckAvailability(loadDetailHighlight)

				// const responseExperience = await axios(apiUrlExperience)
                // loadDetailExperience = responseExperience.data
				// await showExperience(loadDetailExperience)

				// const responseReview = await axios(apiUrlReview)
                // loadDetailReview = responseReview.data
				// showReviewActivity(loadDetailReview)

				const responseActivityDetail = await axios(apiUrlActivityDetail)
                loadDetailActivityDetail = responseActivityDetail.data
				showDetailActivity(loadDetailActivityDetail)
				showParticipant(loadDetailActivityDetail)
				showTitleActivity(loadDetailActivityDetail)

                showSlides(slideIndex);

				showExperience(loadDetailActivityDetail)
			} catch (err) {
				console.error("response error", err)
			}
		}

		await getApi()
	})
</script>

</body>
</html>
