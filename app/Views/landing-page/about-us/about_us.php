<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');

echo view("landing-page/about-us/manage/meet");
echo view("landing-page/about-us/manage/team");
echo view("landing-page/about-us/manage/customer");

echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
	document.addEventListener("DOMContentLoaded", async function () {
		const apiUrlCustomer = "<?= base_url("about/generateCustomer") ?>"
		const apiUrlMeet = "<?= base_url("about/generateMeet") ?>"
		const apiUrlTeam = "<?= base_url('about/generateTeam') ?>"

		async function getApi() {
			try {
				const responseCustomer = await axios(apiUrlCustomer)
				const responseMeet = await axios(apiUrlMeet)
				const responseTeam = await axios(apiUrlTeam)

				showCustomer(responseCustomer)
				showMeet(responseMeet)
				showTeam(responseTeam)
			} catch (err) {
				console.error("response error", err)
			}
		}

		await getApi()
	})
</script>

</body>
</html>
