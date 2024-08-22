<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Boat</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
					integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
					crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1980px] m-auto">
<?php
echo view('landing-page/@common/header');

echo view("landing-page/detail-boat/manage/activity");
echo view("landing-page/detail-boat/manage/review");

echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
    let loadDetailBoat = ''
    let loadDetailReview = ''

	document.addEventListener("DOMContentLoaded", async function () {
		const urlParams = new URLSearchParams(window.location.search);
		const id = urlParams.get('id');

		const apiUrlActivity = `<?= base_url('detail-boat/generateBoatActivity/') ?>` + id
		const apiUrlReview = `<?= base_url('detail-boat/generateReviewBoat/') ?>` + id

		async function getApi() {
			try {
				const detailBoatActivity = await axios(apiUrlActivity)

                loadDetailBoat = detailBoatActivity.data
				showDetailBoatActivity(loadDetailBoat)
				showTitleActivityBoat(loadDetailBoat)


				const responseReviewBoat = await axios(apiUrlReview)
                loadDetailReview = responseReviewBoat.data
				showReviewBoat(loadDetailReview)
			} catch (err) {
				console.log('response fetch error', err)
			}
		}

		await getApi()
	})
</script>

</body>
</html>
