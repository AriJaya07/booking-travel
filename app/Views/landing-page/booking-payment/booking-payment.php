<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Payment</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
            integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');
?>

<div class="2xl:mx-[20em] xl:mx-[5em] md:mx-[2em] mx-[1em] mt-[10em] mb-[5em]">
    <div class="flex lg:flex-row flex-col gap-[5em]">

        <div id="transaction-payment" class="">
					<?php
					echo view('landing-page/booking-payment/manage/payment');
					?>
        </div>

        <div id="card-payment" class="hidden">
					<?php
					echo view('landing-page/booking-payment/manage/card-transaction');
					?>
        </div>

        <div id="search-payment" class="">
					<?php
					echo view('landing-page/booking-payment/manage/search-result');
					?>
        </div>

    </div>
</div>
<?php
echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>


<script>
    window.postMailTemplatePayment = {
        sendToBookingEmailPayment: async function (email) {
            const postPaymentUrl = '<?= base_url("payment/sendConfirmMailPayment") ?>';

            const dataToSend = {
                email: email
            };

            try {
                const response = await axios({
                    method: "POST",
                    headers: {'Content-type': 'application/json'},
                    data: JSON.stringify(dataToSend),
                    url: postPaymentUrl
                })
                console.log(response)
            } catch (err) {
                console.error(err)
            }

        }
    };


    let loadPaymentData;

    let namePayment = '';
    let emailPayment = '';
    let countryPayment = '';
    let phonePayment = '';
    let requestPayment = [];

    const transactionPayment = $('#transaction-payment');
    const cardPayment = $('#card-payment');
    const searchPayment = $('#search-payment');

    $(document).ready(async function () {
        const apiUrlPayment = "<?= base_url('payment/generateOrder') ?>"

        async function getApi() {
            try {
                const responsePayment = await axios(apiUrlPayment)

                loadPaymentData = responsePayment.data
                showFromProcess(loadPaymentData)
                showSearchResult(loadPaymentData)
                showCardPayment(loadPaymentData)

            } catch (err) {
                console.error('Response Error', err)
            }
        }

        await getApi()
    })
</script>

</body>
</html>
