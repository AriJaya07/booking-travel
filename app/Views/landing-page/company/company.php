<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Company</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');

echo view('landing-page/company/manage/choose');
echo view('landing-page/company/manage/vacation');
echo view('landing-page/company/manage/environment');
echo view('landing-page/company/manage/family');

echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
	document.addEventListener("DOMContentLoaded", async function () {
		const apiUrlChoose = "<?= base_url('company/generateChoose') ?>"
		const apiUrlEnvironment = "<?= base_url("company/generateEnvironment") ?>"
		const apiUrlFamily = "<?= base_url("company/generateFamily") ?>"
		const apiUrlVacation = "<?= base_url('company/generateVacation') ?>"

		async function getApi() {
			try {
				const responseChoose = await axios(apiUrlChoose)
				const responseEnvironment = await axios(apiUrlEnvironment)
				const responseFamily = await axios(apiUrlFamily)
				const responseVacation = await axios(apiUrlVacation)

				showChoose(responseChoose);
				showEnvironment(responseEnvironment);
				showFamily(responseFamily)
				showVaction(responseVacation)
				showListVacation(responseVacation)
			} catch (error) {
				console.error('Error fetching selling data:', error);
			}
		}

		await getApi();
	})
</script>

</body>
</html>
