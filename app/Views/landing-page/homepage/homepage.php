<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
            integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');
?>

<div class="2xl:mx-[20em]">
	<?php
	echo view('landing-page/homepage/manage/form');
	?>

    <div id="open-load-activity">
        <?php
        echo view('landing-page/homepage/manage/activity');
        ?>

        <?php
        echo view('landing-page/homepage/manage/recommended');
        echo view('landing-page/homepage/manage/review');
        //	echo view('landing-page/homepage/manage/selling');
        ?>
    </div>

    <div id="open-load-boat" class="hidden">
        <?php
        echo view('landing-page/homepage/manage/boat');
        ?>
    </div>


</div>

<?php
echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
    var dataMockFilter;

    var originalDataActivity;
    var filteredDataActivity;

    var originalDataBoat;
    var filteredDataBoat;

    var openLoadActivity = document.getElementById('open-load-activity')
    var openLoadBoat = document.getElementById('open-load-boat')

    document.addEventListener("DOMContentLoaded", async function () {
        //const apiUrlSelling = "<?php //= base_url('home/generateSelling') ?>//"
        const apiUrlRecommended = "<?= base_url('home/generateRecommended') ?>"
        const apiUrlActivity = "<?= base_url('activity/all-list') ?>"
        const apiUrlBoat = "<?= base_url('home/generateBoat') ?>"
        const apiUrlFormSearch = "<?= base_url('home/generateFormSearch') ?>"
        const apiUrlReview = "<?= base_url('home/generateReview') ?>"

        async function getApi() {
            try {
                // const responseSelling = await axios(apiUrlSelling)
                const responseRecommended = await axios(apiUrlRecommended)
                const responseActivity = await axios(apiUrlActivity)
                const responseBoat = await axios(apiUrlBoat)
                const responseFormSearch = await axios(apiUrlFormSearch)
                const responseReview = await axios(apiUrlReview)

                // showSelling(responseSelling)
                showReview(responseReview.data)
                listDropdownBoat(responseFormSearch.data)
                showContentBoat(responseBoat.data)
                showRecommended(responseRecommended.data)

                dataMockFilter = responseFormSearch.data
                dropPrice(dataMockFilter)

                originalDataActivity = responseActivity.data
                filteredDataActivity = [...originalDataActivity]
                showActivity(filteredDataActivity);

                originalDataBoat = responseBoat.data
                filteredDataBoat = [...originalDataBoat]
                showContentBoat(filteredDataBoat)
            } catch (error) {
                console.error('Error fetching selling data:', error);
            }
        }

        await getApi()
    })
</script>

</body>
</html>
