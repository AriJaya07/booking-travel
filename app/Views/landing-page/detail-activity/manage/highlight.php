<style>
    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0}
    .mySlides {display: none}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
    }
                /* Next & previous buttons */
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
    }

</style>
<script>
    function toggleButton(e) {
        timeslotId = $(e).data('id')
        cartClock = e.innerText

        document.querySelectorAll('.sort').forEach(function (e) {
            e.classList.remove('active')
        });

        e.classList.add('active')
    }

    function addCart(e) {
        id = $(e).data('id')
        cartCount = $("#totalpax-" + id).val()
        cartPrice = $("#totalprice-" + id).val()
        rate = $("#rate-" + id).val()
        countReview = $("#countReview-" + id).val()

        let cartData = []
        count = 0

        if (!cartClock) {
            alert('Please select starting time activity!')
        } else {
            const expiryTime = 1

            cartList = localStorage.getItem('cart');
            if (cartList) {
                const storedArray = JSON.parse(cartList);

                count = Object.keys(storedArray.value).length;

                cartData = storedArray.value
            } else {
                console.log('No array found in local storage.');
            }

            cartData[count] = {
                productId: id,
                price: cartPrice,
                count: cartCount,
                title: cartTitle,
                description: cartDescription,
                image: cartImage,
                timeslotId: timeslotId,
                clock: cartClock,
                date: cartDate,
                language: cartLanguage,
                location: cartLocation,
                review: countReview,
                rate: rate,
            };
            // alert('Success to add cart')

            // // console.log(data)

            // // // window.expiredTime.setItemWithExpiry(`cart-${id}`, data, expiryTime) old adi
            window.expiredTime.setItemWithExpiry(`cart`, cartData, expiryTime)
            // // localStorage.setItem(`cart-list`, JSON.stringify(data))

            window.location.href = "<?php echo base_url()?>cart"

            // localStorage.removeItem('cart');
        }
    }
</script>


<div class="mt-[10em] 2xl:mx-[20em] lg:mx-[5em] md:mx-[2em] mx-[0em]">
    <div class="flex flex-col">
        <div>
            <div id="loop-detail-activity">
                <!-- Inner HTML -->
            </div>
            <!--
            <div class="absolute lg:top-[20em] sm:top-[24em] top-[25em] ml-[0.5em]">
                <div id="loop-count-pic" class="bg-white px-5 py-2 rounded-xl border border-black">
                         inner HTML
                </div>
            </div>
            -->
        </div>
        <div class="flex flex-col md:mx-[1em] mx-[0em]">
            <div id="open-content-banner" class="hidden">
                <div class="fixed z-[10] inset-0 bg-black bg-opacity-70 flex justify-center items-center w-full">
                    <div class="flex absolute md:top-[7em] top-[10em] md:right-[5em] right-[1em] justify-end md:px-[5em] px-[1em] cursor-pointer">
                        <p id="close-popup-banner" class="font-[700] text-white 2xl:text-[2em] sm:text-[1.5em] text-[1em]">
                            x
                        </p>
                    </div>

                    <div id="popup-loop-image" class="relative md:w-1/2 w-3/4 top-0 left-0">
                        <!-- inner HTML -->
                    </div>

                    <div class="absolute flex w-full justify-between md:px-[5em] px-[1em]">
                        <p id="prev-image" class="text-white text-[1.5em] cursor-pointer">
                            &#10094;
                        </p>
                        <p id="next-image" class="text-white text-[1.5em] cursor-pointer">
                            &#10095;
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col p-5">
                <h5 class="font-[700] text-[2em]">
                    About this activity
                </h5>

                <div id="loop-about-activity" class="flex flex-col">
                    <!-- inner HTML -->
                </div>

            </div>

            <div id="clickBooking" class="bg-blue-950 flex flex-col p-5 md:rounded-2xl gap-[1em] lg:w-[50em] w-full">
                <h5 class="text-white font-[700] text-[1.25em]">
                    Select participants, date and language
                </h5>
                <div class="flex md:flex-row flex-col md:justify-between justify-center md:gap-[0em] gap-[2em] md:items-center">
                    <div class="flex md:flex-row flex-col md:items-center gap-[1em]">
                        <div class="flex flex-row items-center rounded-full bg-white px-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                     class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg>
                            </div>
                            <label class="flex flex-row p-2 rounded-full bg-white gap-[0.5em] cursor-pointer">
                                <p id="select-age" class="text-[1em] font-[600]">
                                    Adult <span class="font-[700]">x0</span>
                                </p>
                                <p id="select-count" class="font-[700] md:text-[1em] text-[0.85em]">
                                    <!-- inner HTML -->
                                </p>
                            </label>
                        </div>
                        <div id="loop-participant"
                             class="absolute px-4 py-2 bg-white h-[4em] md:w-[20em] w-[15em] border border-black rounded-2xl md:mt-[7em] mt-[2em] hidden z-[5]">
                            <!-- inner HTML -->
                        </div>
                        <div id="block-loop-participant"
                             class="fixed inset-0 bg-transparent h-full w-full left-0 right-0 hidden z-[2]">
                            <!-- inner HTML -->
                        </div>
                        <label id="block-date-participant" class="border rounded-full font-[600]">
                            <!-- inner HTML -->
                        </label>
                        <div class="flex flex-row items-center rounded-full bg-white px-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                     class="bi bi-globe2" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                </svg>
                            </div>
                            <label id="loop-languages" class="font-[600]">
                                <!-- inner HTML -->
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <button id="button-availability" type="button"
                                class="bg-blue-500 text-white rounded-2xl px-4 py-2 font-[700]">
                            Check availability
                        </button>
                    </div>
                </div>
            </div>

            <div id="show-availability">
                <!-- inner HTML -->
            </div>
        </div>
    </div>

</div>

<script>
    currencyFunctions.setChangeValue(changeCurrency, changeLanguage)
    let cartPrice = 0
    let cartCount = 0
    let age = ''
    let cartTitle = ''
    let cartDescription = ''
    let cartImage = ''
    let timeslotId = ''
    let cartClock = ''
    let cartDate = ''
    let cartLanguage = ''
    let cartLocation = ''
    let cartReview = ''
    let cartRate = ''


    const buttonAvailability = document.getElementById("button-availability")

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }

    setInterval(function() {
        plusSlides(1)
    }, 5000)

    function setValue(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function showDetailActivity(data) {
        let tab = ''
        let countPict = ''
        let popupTab = ''

        let pImageBanner = ''
        let pDotImage = ''
        let pImageBanner1 = ''
        let pItemRow = ''
        let pItemImg = ''

        const d = data
        const starsHtml = changeStarFunction.getStarIcons(d.star)
        const currencyCurrent = changeAllCurrency.symbolPrice(d.price[0].price, changeCurrency)

        cartTitle = d.title
        cartDescription = d.kind
        cartImage = d.imageBanner[0].file_path
        cartReview = d.countReview
        cartRate = d.rate

        for (let i = 0; i < d.imageBanner.length; i++) {
            imgBanner = d.imageBanner[i]
            pImageBanner += `
                    <div class="mySlides fade">
                        <div class="numbertext">${slideIndex + i} / ${d.imageBanner.length}</div>
                        <img
                            src="${imgBanner.file_path}"
                            alt="highlight-${i}" class="w-full h-[30em]"/>
                    </div>
                `
        }

        tab +=
            // `
            // <p class="text-gray-500 font-[700] md:text-[1em] text-[0.85em]">
            //     ${d.duration}
            // </p>`
            `<h5 class="font-[700] md:text-[2em] text-[1.5em] py-2 md:px-0 px-2">
                ${d.title}
            </h5>
            <div class="flex md:flex-row flex-col lg:gap-[2em] gap-[0.5em] md:py-5 py-2 md:px-0 px-2">
                <div class="flex flex-row gap-[1em]">
                    ${starsHtml}
                </div>
                <p class="md:text-[0.85em] text-[0.75em]">${d.star} / ${setValue(d.review)} reviews</p>` +
            // <span class="text-gray-500 md:text-[1em] text-[0.85em]">
            //     Activity provider:
            //     <u class="font-[600] text-black">${d.kind}</u>
            // </span>
            `</div>
            <div id="open-popup-imageBanner" class="slideshow-container">
                ${pImageBanner}
                <a class="prev cursor-pointer" onclick="plusSlides(-1)">❮</a>
                <a class="next cursor-pointer" onclick="plusSlides(1)">❯</a>
            </div>
            <div class="flex lg:flex-row flex-col p-5 lg:items-center lg:gap-[5em] gap-[2em]">
                <div class="flex md:flex-row flex-col lg:gap-[3em] gap-[2em]">
                    <div class="flex md:flex-col flex-row gap-[1em] items-center">
                        <img
                            src="<?= base_url() . '/img/booking.png' ?>"
                            alt="logo-1" class="w-[5em] h-[3.5em] rounded-full"/>
                        <p class="font-[600] md:text-[1em] text-[0.85em]">
                            Admin
                        </p>
                    </div>
                    <p class="text-[1em]">
                        ${d.introduce}
                    </p>
                </div>
                <div class="border border-t-blue-500 flex flex-col lg:w-[50em] w-full">
                    <div class="flex flex-row justify-between items-center p-5">
                        <p class="text-[0.85em]">
                            From <br/> <span class="font-[700]">${currencyCurrent}</span> <br/> per person
                        </p>
                        <div class="">
                            <a href="#clickBooking" target="_self" class="">
                                <button type="button" class="text-[0.85em] bg-blue-500 text-white rounded-full p-2">
                                    Check availability
                                </button>
                            </a>
                        </div>
                    </div>` +
            // <div class="flex flex-row items-center px-5 py-2 gap-[1em]">
            //     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            //                 class="bi bi-calendar-date" viewBox="0 0 16 16">
            //         <path
            //             d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
            //         <path
            //             d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
            //     </svg>
            //     <p class="text-[0.85em]"><strong>Bali Instagram Tour:</strong> ${d.socialMedia}</p>
            // </div>
            `</div>
            </div>
            `

        document.getElementById("loop-detail-activity").innerHTML = tab

        // countPict +=
        //     `
        //         <p class="text-black font-[600]">Total: ${d.imageBanner.length}+</p>
        //         `;
        // document.getElementById('loop-count-pic').innerHTML = countPict

        for (let m = 0; m < d.imageBanner.length; m++) {

            popupTab +=
                `
                <img id="popup-image-${m}" src="${d.imageBanner[m].file_path}" alt="image-popup-${m}" class="w-full hidden"/>
                `;
            document.getElementById('popup-loop-image').innerHTML = popupTab;

            let popupImage = document.getElementById(`popup-image-${m}`);

            if (`popup-image-0`) {
                popupImage.classList.remove("hidden")
            }
            let prevImage = document.getElementById(`prev-image`);
            let nextImage = document.getElementById(`next-image`);

            nextImage.addEventListener('click', nextClickListener);
            prevImage.addEventListener('click', prevClickListener);
        }

        let startIndexImage = 0;

        function nextClickListener() {
            startIndexImage = (startIndexImage + 1) % d.imageBanner.length
            showImage();
        }

        function prevClickListener() {
            startIndexImage = (startIndexImage - 1 + d.imageBanner.length) % d.imageBanner.length
            showImage();
        }

        function showImage() {
            for (let i = 0; i < d.imageBanner.length; i++) {
                let img = document.getElementById(`popup-image-${i}`);
                if (img) {
                    img.classList.add('hidden');
                }
            }

            const popupImage = document.getElementById(`popup-image-${startIndexImage}`);
            if (popupImage) {
                popupImage.classList.remove('hidden');
            }
        }

        // const openPopupImageBanner = document.getElementById('open-popup-imageBanner')
        const closePopupBanner = document.getElementById(`close-popup-banner`)
        const contentPopupBanner = document.getElementById('open-content-banner');

        // openPopupImageBanner.addEventListener("click", function () {
        //     contentPopupBanner.classList.remove("hidden")
        // })

        closePopupBanner.addEventListener("click", function () {
            contentPopupBanner.classList.add("hidden")
        })

        window.switchDetailActivity = {
            getDataChangeDetailActivity: function () {
                showDetailActivity(loadDetailActivityDetail)
            }
        }

    }

    function showTitleActivity(data) {
        let text = '';

        titleData = [
            {
                "title": "Free cancellation",
                "text": "Cancel up to 24 hours in advance for a full refund",
                "image": "img/detail-activity/menu-calender.svg"
            },
            {
                "title": "Reserve now & pay later",
                "text": "Keep your travel plans flexible — book your spot and pay nothing today.",
                "image": "img/detail-activity/clock-history.svg"
            },
            {
                "title": "Duration " + data.estimated_durations,
                "text": "Check availability to see starting times.",
                "image": "img/detail-activity/person-check-fill.svg"
            },
            {
                "title": "Live tour " + data.guide_info,
                "text": data.about_livetourguide,
                "image": "img/detail-activity/headphones.svg"
            }
        ]

        i = 0;
        titleData.forEach(d => {

            text +=
                `
                <div class="flex flex-col py-5">
                    <div class="flex flex-row items-center gap-[1em]">
                `;

            text +=
                `
                <div class="w-[3em]">
                    <img src="${d.image}" alt="image-${i}" class="w-[2em]">
                </div>
                `;

            text +=
                `
                <div class="flex flex-col w-full">
                    <p class="text-black font-[600] text-[1em]">
                        ${d.title}
                    </p>
                `

            text +=
                `
                    <p class="text-gray-500 text-[1em]">
                        ${d.text}
                    </p>
                </div>
                `

            text +=
                `
                    </div>
                </div>
                `

            i++
        })

        document.getElementById("loop-about-activity").innerHTML = text

    }

    function showParticipant(data) {
        let part = ''
        let date = ''
        let lang = ''

        participant = [
            {
                'id': 1,
                'name': 'Adult',
                'detail': 'Age 13-99',
                'quota': data.quota,
                'available': '5',
                'booked': '5',
                'capacity': '5',
                'price': '120000'
            },
        ]

        ///////////// AGE ///////////
        for (let a = 0; a < participant.length; a++) {
            part += `

            <div id="dateSaleClose-0" class="flex flex-row py-2 justify-between items-center">
                <div class="flex flex-row gap-[0.5em]">
                    <p class="font-[700] md:text-[1em] text-[0.85em]">${participant[a].name}</p>` +
                // <p class="font-[400] md:text-[1em] text-[0.85em]">(${d.participant[a].detail})</p>
                `</div>
                <div class="flex gap-3 sm:pl-5 pl-3 items-center">
                    <p id="decrement-0-${a}" class="cursor-pointer md:text-[1em] text-[0.85em]">-</p>
                    <p id="item-0-${a}" class="md:text-[1em] text-[0.85em]">0</p>
                    <p id="increment-0-${a}" class="cursor-pointer md:text-[1em] text-[0.85em]">+</p>
                </div>
            </div>
            `
        }


        date +=
            `
            <input id="value-date" onchange="setValueLanguage(this)" type="date" class="rounded-2xl p-[0.38em] focus:outline-none cursor-pointer w-full"/>
            `
        document.getElementById('block-date-participant').innerHTML = date

        document.getElementById("loop-participant").innerHTML = part
        ////////// END AGE /////////

        //////////// LANGUAGES /////////
        lang += `<select id="value-language" onchange="setValueLanguage(this)" class="bg-white rounded-2xl p-2 cursor-pointer focus:outline-none">`

        languages = [
            'English',
            'Indonesia'
        ]

        for (let l = 0; l < languages.length; l++) {
            lang += `<option value="${languages[l]}">${languages[l]}</option>`
        }

        lang += `</select>`

        document.getElementById("loop-languages").innerHTML = lang


        cartLanguage = document.getElementById('value-language').value
        //////// END LANGUAGES ///////

        const blockLoopParticipant = document.getElementById("block-loop-participant")

        const showColumAge = document.getElementById('select-age')
        const selectCount = document.getElementById('select-count')
        const showLoopParticipant = document.getElementById('loop-participant')

        showColumAge.addEventListener("click", function () {
            showLoopParticipant.classList.remove("hidden")
            blockLoopParticipant.classList.remove("hidden")
        })

        blockLoopParticipant.addEventListener("click", function () {
            showLoopParticipant.classList.add("hidden")
            blockLoopParticipant.classList.add("hidden")
        })

        let resultCurrency = ''

        for (let i = 0; i < 1; i++) {
            for (let a = 0; a < participant.length; a++) {
                const d = data.options[i]

                let allTotal = 0
                let itemFirst = 0

                const calculateCurrentCurrency = changeAllCurrency.symbolPrice(participant[a].price, changeCurrency);

                const itemCountFirst = document.getElementById(`item-${i}-${a}`);
                const incrementFirst = document.getElementById(`increment-${i}-${a}`);
                const decrementFirst = document.getElementById(`decrement-${i}-${a}`);

                const dataChangeCalculate = changeAllCurrency.removeCurrencySymbol(calculateCurrentCurrency)

                // function after click (+) increment
                incrementFirst.addEventListener("click", function () {
                    if (Number(participant[a].quota) > itemFirst) {
                        itemFirst++;
                    }
                    itemCountFirst.textContent = itemFirst

                    showColumAge.textContent = participant[a].name
                    selectCount.textContent = 'x' + itemFirst
                })

                // function after click (-) decrement
                decrementFirst.addEventListener("click", function () {
                    if (itemFirst > 0) {
                        itemFirst--;
                    }
                    itemCountFirst.textContent = itemFirst

                    showColumAge.textContent = participant[a].name
                    selectCount.textContent = 'x' + itemFirst
                })
            }
        }

    }

    function setValueLanguage() {
        cartLanguage = document.getElementById('value-language').value;
        cartDate = document.getElementById('value-date').value
        // You can perform further actions based on the selected language
        // For example, update a variable, make an API call, etc.
    }

    // function showCheckAvailability(data) {


    //     product = data
    //     options = data.options

    //     function bookingCalculate() {
    //         const colPeople1 = document.getElementById('item-0-0').textContent
    //         // const colPeople2 = document.getElementById('item-0-1').textContent
    //         // const colPeople3 = document.getElementById('item-0-2').textContent

    //         // cartCount = Number(colPeople1) + Number(colPeople2) + Number(colPeople3)
    //         cartCount = Number(colPeople1)

    //         const item1 = document.getElementById('calculate-0-0').textContent
    //         // const item2 = document.getElementById('calculate-0-1').textContent
    //         // const item3 = document.getElementById('calculate-0-2').textContent

    //         const allCalculate = document.getElementById('total-price-all')

    //         let result1 = changeAllCurrency.removeCurrencySymbol(item1)
    //         // let result2 = changeAllCurrency.removeCurrencySymbol(item2)
    //         // let result3 = changeAllCurrency.removeCurrencySymbol(item3)
    //         // allCalculate.textContent = resultCurrency + changeAllCurrency.formatNumberResult(Number(result1) + Number(result2) + Number(result3))
    //         allCalculate.textContent = resultCurrency + changeAllCurrency.formatNumberResult(Number(result1))

    //         cartPrice = allCalculate.textContent

    //     }

    //     const hideAvailability = document.getElementById('hide-availability')
    //     const showAvailability = document.getElementById("show-availability")

    //     const storeCartStorage = document.getElementById('store-cart-storage')

    //     storeCartStorage.addEventListener("click", function () {
    //         if (!cartClock) {
    //             alert('Please select starting time activity!')
    //         } else {
    //             const expiryTime = 1

    //             lsCart = JSON.parse(localStorage.getItem('cart'))
    //             keys = Object.keys(lsCart.value)
    //             console.log(lsCart.value)
    //             console.log(keys.length)

    //             const data = {
    //                 productId: id,
    //                 price: cartPrice,
    //                 count: cartCount,
    //                 title: cartTitle,
    //                 description: cartDescription,
    //                 image: cartImage,
    //                 clock: cartClock,
    //                 date: cartDate,
    //                 language: cartLanguage,
    //                 location: cartLocation,
    //                 review: cartReview,
    //                 rate: cartRate,
    //                 productDetail: product,
    //             };
    //             alert('Success to add cart')

    //             console.log(data)

    //             // window.expiredTime.setItemWithExpiry(`cart-${id}`, data, expiryTime) old adi
    //             // window.expiredTime.setItemWithExpiry(`cart`, data, expiryTime)
    //             // // localStorage.setItem(`cart-${id}`, JSON.stringify(data))

    //             // window.location.href = "<?php echo base_url()?>cart"
    //         }
    //     })

    //     hideAvailability.addEventListener("click", function () {
    //         showAvailability.classList.add("hidden")
    //     })
    // }

    function getOptions(data) {
        options = data.options
        let book = ''

        for (let i = 0; i < options.length; i++) {
            const d = options[i]

            totalPricePax = d.price_per_pax * d.total_pax
            convertPrice = changeAllCurrency.symbolPrice(totalPricePax, changeCurrency)

            cartLocation = d.meeting_point

            book +=
                `
                <div class="flex flex-col border border-blue-500 lg:w-[50em] w-full p-5 my-5 rounded-2xl gap-[1em]">
				<div class="flex flex-row justify-between">
					<h5 class="font-[700] md:text-[1em] text-[0.85em]">
						${d.title}
					</h5>
					<div id="hide-availability" class="cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							 class="bi bi-chevron-up" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								  d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
						</svg>
					</div>
				</div>
				<div class="flex flex-row gap-[2em]">
					<div class="flex flex-row items-center gap-[0.5em]">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							 class="bi bi-clock-history" viewBox="0 0 16 16">
							<path
								d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
							<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
							<path
								d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
						</svg>
						<p class="md:text-[1em] text-[0.85em]">
							${d.time_duration_val}
						</p>
					</div>
					<div class="flex flex-row items-center gap-[0.5em]">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							 class="bi bi-person-check-fill" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								  d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
							<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
						</svg>
						<p class="md:text-[1em] text-[0.85em]">
							Guide: ${d.audio_guide}
						</p>
					</div>
				</div>
				<div class="flex flex-row items-center gap-[0.5em]">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
						 viewBox="0 0 16 16">
						<path
							d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
						<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
					</svg>
					<p class="underline text-blue-500 md:text-[1em] text-[0.85em]">
						<a href="${d.meeting_point_maplink}" target="_blank">${d.meeting_point}</a>
					</p>
				</div>
				<hr class=""/>`

            if (typeof d.avaibility[i] !== 'undefined' && typeof d.avaibility[i].timeslot[0] !== 'undefined') {

                book += `<div class="flex flex-row flex-wrap items-center gap-[0.5em] md:text-[1em] text-[0.85em]">
					<p class="font-[700]">
						Starting time:
					</p>
				`
                for (let c = 0; c < d.avaibility[i].timeslot[0].time_slot.length; c++) {
                    book +=
                        `
					<p onclick="toggleButton(this)" data-id="${d.avaibility[i].timeslot[0].id}" class="sort font-[700] border border-gray-500 rounded-lg p-2 hover:bg-gray-500 cursor-pointer md:text-[1em] text-[0.85em]">
						${d.avaibility[i].timeslot[0].time_slot[c]}
					</p>
					`
                }
            } else {
                book += `<div class="flex flex-row flex-wrap items-center gap-[0.5em] md:text-[1em] text-[0.85em]">
				`
            }
            


            book +=
                `
				</div>
				<hr class=""/>
				<div class="flex md:flex-row flex-col md:items-center gap-[0.5em]">
					<div class="flex flex-col md:w-[50em] w-full gap-[1em]">
						<div class="flex flex-row items-center gap-[0.5em]">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
								  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
								  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
								</svg>
							</div>
							<p class="md:text-[1em] text-[0.85em]">Cancel before on 7 days before departure for a full refund</p>
						</div>
						<div class="flex flex-row items-center gap-[0.5em]">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
								  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
								  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
								</svg>
							</div>
							<p class="md:text-[1em] text-[0.85em]">You can reserve now & pay later with this activity option.</p>
						</div>
					</div>

					<div class="flex flex-col md:w-[30em] w-full py-2">
						<p class="font-[700] md:text-[1em] text-[0.85em]">
							Price breakdown
						</p>
						<div class="flex flex-row items-center text-gray-500 justify-between">
							<div class="flex flex-col">

					`


            for (let a = 0; a < participant.length; a++) {
                book +=
                    `
						<p class="font-[700] md:text-[1em] text-[0.85em]">
							${participant[a].name}
							<span id="count-${i}-${a}" class="text-black">x${d.total_pax}</span>
						</p>
						`
            }

            book +=
                `
						</div>
					<div class="flex flex-col">
					`

            for (let a = 0; a < participant.length; a++) {
                book +=
                    `
                        <p id="calculate-${i}-${a}" class="font-[700] md:text-[1em] text-[0.85em]">${convertPrice}</p>
                        `
            }

            book +=
                `
							</div>
						</div>
					</div>
				</div>
				<div class="bg-gray-200 flex flex-row items-center justify-between p-5">
						`

            book +=
                `
                     <div class="flex flex-col">
                        <p class="text-[0.85em] font-[600]">
                            Total Price
                        </p>
                        <p id="total-price-all" class="md:text-[1.25em] text-[1em] text-orange-500 font-[700]">
                        ${convertPrice}
                        </p>
                        <p class="text-[0.85em] font-[600]">
                            All taxes and fees included
                        </p>
                    </div>
					<div class="flex md:flex-row flex-col md:items-center gap-[0.5em]">`

            if (typeof d.avaibility[i] !== 'undefined' && typeof d.avaibility[i].timeslot[0] !== 'undefined') {
                book += `<div id="store-cart-storage-${d.id}">
                            <input id="totalpax-${d.id}" value="${d.total_pax}" type="hidden">
                            <input id="totalprice-${d.id}" value="${totalPricePax}" type="hidden">
                            <input id="rate-${d.id}" value="${d.rate}" type="hidden">
                            <input id="countReview-${d.id}" value="${d.countReview}" type="hidden">
                            <button type="button" onclick="addCart(this)" data-id="${d.id}" class="md:text-[1em] text-[0.85em] bg-gray-200 text-blue-500 rounded-2xl border border-blue-500 px-4 py-2">
                                Add to Cart
                            </button>
						</div>`
                // <div>
                // 	<a href="<?php echo base_url()?>payment" target="_self" class="">
                // 		<button type="button" class="md:text-[1em] text-[0.85em] bg-blue-500 text-white rounded-2xl border border-blue-500 md:px-4 px-5 py-2">
                // 			Book now
                // 		</button>
                // 	</a>
                // </div>`
            } else {
                book += `<p class="md:text-[1.25em] text-[1em] text-red-500 font-[700]">
                        Not available
                    </p>`
            }

            book += `</div>
				</div>
                </div>
				`
        }
        
        document.getElementById("show-availability").innerHTML = book

        document.getElementById("show-availability").innerHTML = book

        window.switchDetailAvailability = {
            getDataAvailability: function () {

                getOptions(data)
            }
        }
    }

    buttonAvailability.addEventListener("click", async function () {
        const selectCount = document.getElementById('select-count')
        cartCount = selectCount.textContent.replace(/x/g, "")

        if (Number(cartCount) < 1) {
            alert('Please select participants!')
        } else if (!cartDate) {
            alert('Please select date!')
        } else if (!cartLanguage) {
            alert('Please select language!')
        } else {

            buttonAvailability.classList.add("cursor-not-allowed")
            buttonAvailability.textContent = 'Please wait ..'

            const apiUrlActivityDetail = `<?= base_url('activity/getOptions/') ?>` + id + '/' + cartCount + '/' + cartDate

            async function getApi() {
                try {
                    const responseActivityDetail = await axios(apiUrlActivityDetail)
                    a = responseActivityDetail.data
                    getOptions(a)

                    buttonAvailability.classList.remove("cursor-not-allowed")
                    buttonAvailability.textContent = 'Check availability'

                } catch (err) {
                    console.error("response error", err)
                }
            }

            await getApi()
        }
    })
</script>
