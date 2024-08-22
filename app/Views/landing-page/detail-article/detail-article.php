<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Article</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');

echo view("landing-page/detail-article/manage/island");
echo view("landing-page/detail-article/manage/trending");
echo view("landing-page/detail-article/manage/tour");

echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
document.addEventListener("DOMContentLoaded", async function () {
	const urlParams = new URLSearchParams(window.location.search);
	const id = urlParams.get('id');

	const apiUrlIsland = `<?= base_url('detail-article/generateIsland/') ?>` + id
	const apiUrlTour = `<?= base_url('detail-article/generateTour/') ?>` + id
	const apiUrlTrending = `<?= base_url('detail-article/generateTrending/') ?>` + id

	async function getApi() {
		try {
			const responseIsland = await axios(apiUrlIsland)
			const responseTour = await axios(apiUrlTour)
			const responseTrending = await axios(apiUrlTrending)

			showIsland(responseIsland)
			showTour(responseTour)
			showTrending(responseTrending)
		} catch (err) {
			console.error("response error", err)
		}
	}

	await getApi()
})
</script>

</body>
</html>
