<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Payment</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
            integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="<?= base_url() ?>dist/cryptojs-aes.min.js"></script>
            <script src="<?= base_url() ?>dist/cryptojs-aes-format.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<?php
echo view('landing-page/@common/header');
?>

<div id="content-cart" class="">
	<?php
	echo view('landing-page/cart/manage/content-cart');
	?>
</div>

<div id="payment-cart" class="hidden 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em] my-[10em]">
	<?php
	echo view('landing-page/cart/manage/payment-cart');
	?>
</div>

<div id="card-cart" class="hidden 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[1em] my-[10em]">
	<?php
	echo view('landing-page/cart/manage/card-cart');
	?>
</div>

<?php
echo view('landing-page/@common/contact');
echo view('landing-page/@common/footer');
?>

<script>
    window.postMailTemplateCart = {
        sendToBookingEmailCart: async function (email) {
            const postCardUrl = '<?= base_url("cart/sendConfirmMail") ?>';

            const dataToSend = {
                email: email
            };

            try {
                const response = await axios({
                    method: "POST",
                    headers: {'Content-type': 'application/json'},
                    data: JSON.stringify(dataToSend),
                    url: postCardUrl
                })
                console.log(response)
            } catch (err) {
                console.error(err)
            }

        }
    };

    let loadContentCart = ''
    let loadStorageCart = ''
    const data = JSON.parse(localStorage.getItem('cart'))  // initial price
    // let totalCurrency = parseFloat(window.changeAllCurrency.removeCurrencySymbol(data.value.price))
    let totalCurrency = 0

    let nameCart = '';
    let emailCart = '';
    let countryCart = '';
    let phoneCart = '';
    let requestCart = [];

    const contentCart = $("#content-cart");
    const paymentCart = $("#payment-cart")
    const cardCart = $("#card-cart");

    const buttonCheckout = $("#button-checkout");
    buttonCheckout.on("click", function () {
        paymentCart.removeClass("hidden")
        contentCart.addClass("hidden")
    })

    $(document).ready(async function () {
        // const apiUrl = `<?= base_url('cart/generateCart') ?>`;

        // async function getApi() {
        //     const responseCart = await axios(apiUrl);
        //     loadContentCart = responseCart.data;
        //     // showContentCart(loadContentCart)
        //     showFromCart(loadContentCart)
        //     showCardCart(loadContentCart)
        //     // showBookingPaymentCart(loadContentCart)
        //     await showCardCart(loadContentCart)
        // }

        
        window.extensionStorage.handleCart(`cart`)

        cartList = localStorage.getItem('cart');
        if (cartList) {
            const storedArray = JSON.parse(cartList);

            count = Object.keys(storedArray.value).length;
            
            loadContentCart = storedArray.value

            // count total payment
            for (let i = 0; i < count; i++) {
                const item = loadContentCart[i]

                if (item) {
                    const itemPrice = parseFloat(item.price)

                    if (!isNaN(itemPrice)) {
                        totalCurrency += itemPrice
                    } else {
                        console.error('Invalid', itemPrice)
                    }
                }
            }

            showFromCart(loadContentCart)
            showCardCart(loadContentCart)
        } else {
            console.log('No array found in local storage.');
        }

        // await getApi();
        // dataCart = data.value
        // showFromCart(dataCart)
    });

    window.extensionStorage = {
        handleCart: function (cartKey) {
            loadStorageCart = JSON.parse(localStorage.getItem(cartKey));

            if (loadStorageCart) {
                const currentTimeInPage = new Date().toLocaleDateString()
                // const currentTimeInPage = Math.floor(Date.now() % (1000 * 60) / 1000);
                // const currentTimeInPage = Math.floor((new Date().getTime() % (1000 * 60 * 60)) / (1000 * 60));
                // const currentTimeInPage = Math.floor(new Date().getTime() / 1000);
                // const currentTimeInPage = Math.floor(new Date().getTime() / 1000);

                if (currentTimeInPage === loadStorageCart.expiry) {
                    window.expiredTime.setItemWithExpiry(
                        cartKey,
                        loadStorageCart.value,
                        (loadStorageCart.expiry - currentTimeInPage) / 60
                    );
                    showContentCart(cartKey, loadStorageCart.value);
                } else {
                    localStorage.removeItem(cartKey);
                    window.expiredTime.updateExpirationUI(cartKey);
                }
            }
        }
    }
</script>

</body>
</html>
