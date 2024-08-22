<nav class="flex flex-col">
    <div class="fixed top-0 w-full max-w-[1980px] z-[1000]">
        <div class="md:block hidden">
            <div
                    class="flex flex-row bg-black text-white 2xl:px-[20em] xl:px-[5em] px-[2em] py-[1em] justify-between items-center gap-[1em]">
                <div class="flex flex-row lg:gap-[2em] gap-[1em] items-center">
                    <div>
                        <a href="<?php echo base_url() ?>home" target="_self" class="cursor-pointer">
                            <img src="<?php echo base_url() . "img/booking.png" ?>" alt="logo"
                                 class="w-[7em]"/>
                        </a>
                    </div>
                    <div class="">
                        <a href="<?php echo base_url() ?>company" target="_self" class="cursor-pointer">
                            <p class="font-[700] cursor-pointer xl:text-[1em] text-[0.85em]">
                                WHY WE'RE DIFFERENT
                            </p>
                        </a>
                    </div>
                    <div class="">
                        <a href="<?php echo base_url() ?>about" target="_self" class="cursor-pointer">
                            <p class="font-[700] cursor-pointer xl:text-[1em] text-[0.85em]">
                                ABOUT US
                            </p>
                        </a>
                    </div>
                    <div class="">
                        <a href="<?php echo base_url() ?>cart" target="_self" class="cursor-pointer">
                            <p class="font-[700] cursor-pointer xl:text-[1em] text-[0.85em]">
                                CART
                            </p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-row gap-[1em]">
                    <label class="flex flex-col xl:text-[1em] text-[0.85em]">
                        <span>Languages</span>
                        <select id="language-select" class="bg-black text-white font-[700] focus:outline-none">
                            <option value="eng">English</option>
                            <option value="ind">Indonesia</option>
                        </select>
                    </label>
                    <label class="flex flex-col xl:text-[1em] text-[0.85em]">
                        <span>Currency</span>
                        <select id="currency-select" class="bg-black text-white font-[700] focus:outline-none">
                            <option value="USD">USD ($)</option>
                            <option value="IDR">IDR (Rp)</option>
                        </select>
                    </label>
                </div>
            </div>

        <!--<p id="expiryTime" class="text-[1em]"></p>-->

        </div>

        <div class="md:hidden block">
            <div class="flex flex-row bg-black text-white p-[1.5em] justify-between items-center">
                <div class="">
                    <a href="<?php echo base_url() ?>home" target="_self" class="cursor-pointer">
                        <img src="<?php echo base_url() . "img/booking.png" ?>" alt="logo"
                             class="md:w-[7em] w-[5em]"/>
                    </a>
                </div>
                <div id="open-stack-header" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                         class="bi bi-stack" viewBox="0 0 16 16">
                        <path
                                d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                        <path
                                d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                    </svg>
                </div>
            </div>

            <div id="stack-mobile" class="w-full hidden">
                <div id="block-close-header" class="fixed z-[15] bg-black w-full h-full bg-opacity-50">
                </div>
                <div class="fixed z-[20] right-0 bg-gray-100 sm:w-[25em] w-[15em] top-0 h-[100vh]">
                    <div class="flex flex-col h-full justify-between">
                        <div class="">
                            <div class="text-right px-10 pt-10">
                                <p id="close-stack" class="font-[600] text-[1em] cursor-pointer">x</p>
                            </div>
                            <div class="tracking-widest">
                                <div class="flex flex-col gap-[2em] text-black p-5">
                                    <hr class="bg-green-900 py-[0.1em]"/>
                                    <div class="flex flex-row items-center gap-[1em]">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                <path
                                                        d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                                <path
                                                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                                            </svg>
                                        </div>
                                        <a href="<?php echo base_url() ?>company" target="_self" class="">
                                            <p class="sm:text-[1em] text-[0.85em] font-[700]">WHY WE'RE DIFFERENT </p>
                                        </a>
                                    </div>
                                    <hr class="bg-green-900 py-[0.1em]"/>
                                    <div class="flex flex-row items-center gap-[1em]">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                                <path
                                                        d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                                                <path
                                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12z"/>
                                            </svg>
                                        </div>
                                        <a href="<?php echo base_url() ?>about" target="_self" class="">
                                            <p class="sm:text-[1em] text-[0.85em] font-[700]">ABOUT US</p>
                                        </a>
                                    </div>
                                    <hr class="bg-green-900 py-[0.1em]"/>
                                    <div class="flex flex-row items-center gap-[1em]">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path
                                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                            </svg>
                                        </div>
                                        <a href="<?php echo base_url() ?>cart" target="_self" class="">
                                            <p class="sm:text-[1em] text-[0.85em] font-[700]">Cart</p>
                                        </a>
                                    </div>
                                    <hr class="bg-green-900 py-[0.1em]"/>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-col mb-[2em] gap-[1em]">
                            <div class="border border-black sm:p-5 p-3 mx-5 cursor-pointer">
                                <label class="text-[1em] sm:text-[0.85em] flex flex-col">
                                    <span class="">Languages</span>
                                    <select id="language-select-mobile"
                                            class="bg-transparent text-black font-[700] focus:outline-none">
                                        <option value="eng">English</option>
                                        <option value="ind">Indonesia</option>
                                    </select>
                                </label>
                            </div>
                            <div class="border border-black sm:p-5 p-3 mx-5 cursor-pointer">
                                <label class="text-[1em] sm:text-[0.85em] flex flex-col">
                                    <span class="">Currency</span>
                                    <select id="currency-select-mobile"
                                            class="bg-transparent text-black font-[700] focus:outline-none">
                                        <option value="USD">USD ($)</option>
                                        <option value="IDR">IDR (Rp)</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

<script>
    
    let currencyData = ''
    // function to changeCurrency
    let changeCurrency = 'IDR'
    let changeLanguage = 'ind'
    window.currencyFunctions = {
        setChangeValue: function (newCurrency, newLanguage) {
            changeCurrency = newCurrency
            changeLanguage = newLanguage

            

            const baseURL = '<?= env('URL_API_CURRENCY'); ?>'; 
            const fullURL = baseURL;
            return axios(fullURL)
                .then(response => {
                    currencyData = response.data;
                })
                .catch(error => {
                    console.error('Error:', error);
                    throw error;
                });

            return changeCurrency;
        }
    }

    // function display starImage
    window.changeStarFunction = {
        getStarIcons: function (rating) {
            const maxStars = 5;
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            const emptyStars = maxStars - fullStars - (hasHalfStar ? 1 : 0)
            
            let starsHtml = '';

            for (let i = 0; i < fullStars; i++) {
                starsHtml += `<img src="<?php echo base_url() . "/img/review/full-star.png" ?>" alt="star" class="w-[1em] h-[1em]"/>`;
            }

            if (hasHalfStar) {
                starsHtml += `<img src="<?php echo base_url() . "/img/review/half-star.png" ?>" alt="half-star" class="w-[1.2em] h-[1.2em]"/>`;
            }

            for (let i = 0; i < emptyStars; i++) {
                starsHtml += `<img src="<?php echo base_url() . "/img/review/empty-star.png" ?>" alt="empty-star" class="w-[0.85em] h-[0.85em]"/>`;
            }

            return starsHtml
        }
    }

    // function to updateCurrency
    window.changeAllCurrency = {
        symbolPrice: function (price, currency) {
            let dataSymbol = ''

            function formatNumberWithTwoDecimals(number) {
                
                return parseFloat(number).toFixed(2);
            }

            function formatNumberResult(number) {
                const parts = number.toFixed(2).toString().split('.');
                const integerPart = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                return integerPart + '.' + parts[1];
            }

            if (currency === 'USD') {
                dataSymbol = Number(price) / Number(currencyData.rates.IDR);
                return '$ ' + formatNumberWithTwoDecimals(dataSymbol);
            } else if (currency === 'IDR') {
                dataSymbol = Number(price);
                return 'Rp ' + formatNumberResult(dataSymbol);
            }
            return formatNumberWithTwoDecimals(dataSymbol)
        },

        removeCurrencySymbol: function (amountString) {
            // Remove non-numeric characters and trailing zeros after the decimal point
            return amountString.replace(/[^\d.]/g, '').replace(/(\.\d*?[1-9])?0+$/, '$1').replace(/\./, '');
        },

        formatNumberResult: function (number) {
            const parts = number.toFixed(2).toString().split('.');
            const integerPart = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            return integerPart + '.' + parts[1];
        },
    }

    window.expiredTime = {
        setItemWithExpiry: function (key, value, expiryInMinutes) {
            const currentTime = new Date().toLocaleDateString()
            const expiryTime = currentTime
            // const expiryTime = currentTime + expiryInMinutes * 60 * 1000; // Convert minutes to milliseconds

            const item = {
                value: value,
                expiry: expiryTime,
            };

            localStorage.setItem(key, JSON.stringify(item));

            expiredTime.updateTimer(key, expiryTime);

            const countdownInterval = 1000; // Update the countdown every second
            const timerInterval = setInterval(() => {
                // expiredTime.updateTimer(key, expiryTime);

                if (currentTime !== expiryTime) {
                    clearInterval(timerInterval);
                    localStorage.removeItem(key);
                    alert(`Item "${key}" removed from local storage after ${expiryInMinutes} minutes.`);
                    // Optionally, update UI to indicate expiration
                    expiredTime.updateExpirationUI(key);
                    location.reload()
                }
            }, countdownInterval);
        },
        updateTimer: function (key, expiryTime) {
            const currentTime = new Date().toLocaleDateString();
            const timeDifference = expiryTime - currentTime;
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            const expiryTimeElement = document.getElementById('expiryTime');
            if (expiryTimeElement) {
                expiryTimeElement.textContent = `Time remaining for ${key}: ${minutes} minutes ${seconds} seconds`;
            }
        },
        updateExpirationUI: function (key) {
            const expiryTimeElement = document.getElementById('expiryTime');
            if (expiryTimeElement) {
                expiryTimeElement.textContent = `Expired Time for ${key}`;
            }
        },
        removeFromCart: function (key) {
            localStorage.removeItem(key)
            alert(`remove item cart-${key}`)
            location.reload()
        }
    };


    document.addEventListener("DOMContentLoaded", function () {
        const stackMobile = document.getElementById('stack-mobile');
        const openStackHeader = document.getElementById('open-stack-header');
        const blockHeaderOpen = document.getElementById('block-close-header')
        const closeStack = document.getElementById('close-stack');

        const currencySelect = document.getElementById("currency-select")
        const languageSelect = document.getElementById("language-select")

        currencySelect.value = 'IDR';
        languageSelect.value = 'ind';

        const currencySelectMobile = document.getElementById("currency-select-mobile")
        const languageSelectMobile = document.getElementById("language-select-mobile")

        currencySelectMobile.value = 'IDR';
        languageSelectMobile.value = 'ind';

        openStackHeader.addEventListener("click", function () {
            stackMobile.classList.remove("hidden");
        })

        closeStack.addEventListener("click", function () {
            stackMobile.classList.add("hidden");
        })

        blockHeaderOpen.addEventListener("click", function () {
            stackMobile.classList.add("hidden")
        })

        currencySelect.addEventListener("change", async function () {
            const newCurrency = currencySelect.value;
            const newLanguage = languageSelect.value;
            await currencyFunctions.setChangeValue(newCurrency, newLanguage)

            const currentPathname = window.location.pathname

            switch (currentPathname) {
                case '/':
                    switchActivity.getDataChangeActivity()
                    switchBoat.getDataChangeBoat()
                    break;

                case '/home':
                    switchActivity.getDataChangeActivity()
                    switchBoat.getDataChangeBoat()
                    break;

                case '/detail-activity':
                    switchDetailActivity.getDataChangeDetailActivity()
                    switchDetailAvailability.getDataAvailability()
                    break;

                case '/detail-boat':
                    switchDetailBoat.getDataChangeDetailBoat()
                    break;

                case '/cart':
                    switchCart.getDataChangeCart()
                    switchCartPayment.getDataChartForm()
                    switchCardPayment.getDataChartCard()
                    break;

                case '/payment':
                    switchSearchPayment.getDataSearchPayment()
                    break

                default:
                    console.error('Unknown pathname: ', currentPathname)
            }
        })

        currencySelectMobile.addEventListener("change", function () {
            const newCurrency = currencySelectMobile.value;
            const newLanguage = languageSelectMobile.value;
            currencyFunctions.setChangeValue(newCurrency, newLanguage)

            const currentPathname = window.location.pathname

            switch (currentPathname) {
                case '/':
                    switchActivity.getDataChangeActivity()
                    switchBoat.getDataChangeBoat()
                    break;

                case '/home':
                    switchActivity.getDataChangeActivity()
                    switchBoat.getDataChangeBoat()
                    break;

                case '/detail-activity':
                    switchDetailActivity.getDataChangeDetailActivity()
                    break;

                case '/detail-boat':
                    switchDetailBoat.getDataChangeDetailBoat()
                    break;

                case '/cart':
                    switchCart.getDataChangeCart()
                    switchCartPayment.getDataChartForm()
                    switchCardPayment.getDataChartCard()
                    break;

                case '/payment':
                    switchSearchPayment.getDataSearchPayment()
                    break

                default:
                    console.error('Unknown pathname: ', currentPathname)
            }
        })

    })
</script>
