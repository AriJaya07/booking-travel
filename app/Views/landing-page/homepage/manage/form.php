<div class="mt-[10em] mb-[3em] md:mx-[2em] mx-[1em]">
    <div class="flex flex-row md:gap-[2em] gap-[1em] py-5">
        <div id="activity" class="bg-yellow-500 flex flex-row items-center md:px-5 px-2 text-white ">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-clipboard-data" viewBox="0 0 16 16">
                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                </svg>
            </div>
            <p class="px-5 py-3 cursor-pointer md:text-[1em] text-[0.85em]">Add Activity</p>
        </div>

        <div id="boat" class="flex flex-row items-center md:px-5 px-2">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                     viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                </svg>
            </div>
            <p class="px-5 py-3 cursor-pointer md:text-[1em] text-[0.85em]">Boat</p>
        </div>

    </div>
    <hr class="bg-gray-500"/>
    <div id="open-boat" class="hidden border border-black md:p-10 p-5 flex sm:flex-row flex-col flex-wrap smitems-center gap-[2em] py-5">

        <div class="md:w-[20em] sm:w-[10em] w-full">
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-[1em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-house-add" viewBox="0 0 16 16">
                            <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path
                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <p class="px-5 m-0 text-[0.85em]">
                            From
                        </p>
                        <label id="form-boat" class="p-2">
                            <!-- inner HTML -->
                        </label>
                        <hr class="bg-gray-500"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-[20em] sm:w-[10em] w-full">
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-[1em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-bus-front" viewBox="0 0 16 16">
                            <path
                                    d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3"/>
                            <path
                                    d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <p class="px-5 text-[0.85em]">
                            To
                        </p>
                        <label id="to-boat" class="p-2">
                            <!-- inner HTML -->
                        </label>
                        <hr class="bg-gray-500"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:w-[20em] w-full">
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-[1em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                    </div>
                    <div class="flex sm:flex-row flex-col items-center gap-[0.85em]">
                        <div class="flex flex-col">
                            <p class="sm:px-5 px-3 text-[0.85em]">
                                Type
                            </p>
                            <label id="type-boat">
                                <!-- inner HTML -->
                            </label>

                        </div>
                        <div class="flex flex-col">
                            <p class="sm:px-5 px-3 text-[0.85em]">
                                Passenger
                            </p>
                            <label id="passenger-boat">
                                <!-- Inner HTML -->
                            </label>
                        </div>
                    </div>
                </div>
                <hr class="bg-gray-500"/>
            </div>
        </div>

        <div class="md:w-[20em] sm:w-[10em] w-full">
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-[1em]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-calendar-event" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                            <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[1em]">
                        <p class="px-5 text-[0.85em]">
                            Departure
                        </p>
                        <label class="px-5">
                            <input id="departure-value" type="date" class="text-[0.85em] text-gray-500"
                                   placeholder="departure"/>
                        </label>
                        <hr class="bg-gray-500"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-[20em] sm:w-[10em] w-full">
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-[0.5em]">
                    <div class="flex flex-row items-center">
                        <label class="px-5">
                            <input id="return" type="checkbox" class="text-black text-[0.85em]" placeholder="Title"/>
                        </label>
                        <div class="flex flex-col gap-[1em]">
                            <p class="px-5 text-gray-500 text-[1em]">
                                Return
                            </p>
                            <label id="date-return" class="hidden">
                                <input id="return-value" type="date" class="text-[0.85em] text-gray-500"
                                       placeholder="return">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="search-boat-btn" class="md:w-[10em] w-full">
            <button class="bg-yellow-500 text-white px-5 py-3 w-full hover:bg-yellow-800">
                Search Boat
            </button>
        </div>

    </div>

    <div id="open-activity" class="py-5">
        <div class="flex lg:flex-row flex-col lg:justify-between gap-[2em]">
            <div class="lg:w-[70em] w-full">
                <label class="flex flex-row justify-between border border-gray-500 rounded-full p-3">
                    <input id="search-title-activity" type="text" placeholder="Search places..."
                           class="focus:outline-none border-0 w-full px-5 md:text-[1em] text-[0.85em]"/>
                    <button id="search-activity-button" type="button"
                            class="bg-blue-500 rounded-full text-[1em] text-[0.85em] px-5 py-3 text-white hover:bg-blue-900">
                        Search
                    </button>
                </label>
            </div>
            <div class="flex justify-end">
                <label class="flex flex-row justify-between border border-gray-500 rounded-full p-2 items-center lg:w-[20em] sm:w-[15em] w-full">
                    <input id="search-date-activity" type="date" class="w-[30em] md:text-[1em] text-[0.85em] border-0 p-2 focus:outline-none"
                           placeholder="Add dates">
                </label>
            </div>
        </div>
    </div>

</div>

<script>
    function listDropdownBoat(data) {
        let from = '';
        let to = '';
        let type = '';
        let passenger = '';

        for (let i = 0; i < data.length; i++) {
            const d = data[i]

            /// looping from data ///
            from += `<select id="select-from" class="rounded-2xl px-3 py-2 bg-white focus:outline-none text-gray-500 text-[0.85em]">`

            for (let f = 0; f < d.from.length; f++) {
                from +=
                    `
					<option value="" class="hidden">from</option>
					<option value="${d.from[f]}">${d.from[f]}</option>
					`
            }
            from += `</select>`

            document.getElementById('form-boat').innerHTML = from
            //// *** ////

            /// looping to data ///
            to += `<select id="select-to" class="rounded-2xl px-3 py-2 bg-white focus:outline-none text-gray-500 text-[0.85em]">`

            for (let t = 0; t < d.to.length; t++) {
                to +=
                    `
				<option value="" class="hidden">to</option>
				<option value="${d.to[t]}">${d.to[t]}</option>
				`
            }
            to += `</select>`

            document.getElementById('to-boat').innerHTML = to
            //// *** ////

            /// looping type data ///
            type += `<select id="select-type" class="rounded-2xl px-3 py-2 bg-white focus:outline-none text-gray-500 text-[0.85em]">`

            for (let t = 0; t < d.type.length; t++) {
                type +=
                    `
				<option value="" class="hidden">type</option>
				<option value="${d.type[t]}">${d.type[t]}</option>
				`

            }
            type += `</select>`

            document.getElementById('type-boat').innerHTML = type
            //// *** ////

            // looping passenger data
            passenger += `<select id="select-passenger" class="rounded-2xl px-3 py-2 bg-white focus:outline-none text-gray-500 text-[0.85em]">`

            for (let p = 0; p < d.passenger.length; p++) {
                passenger += `
				<option value="" class="hidden">passenger</option>
				<option value="${d.passenger[p]}">${d.passenger[p]} person</option>
				`
            }
            passenger += `</select>`

            document.getElementById('passenger-boat').innerHTML = passenger
            //// *** ////
        }
    }

    const clickBoat = document.getElementById("boat");
    const clickActivity = document.getElementById("activity");

    const displayBoat = document.getElementById("open-boat");
    const displayActivity = document.getElementById("open-activity");

    const returnCheckBox = document.getElementById("return")
    const dateReturn = document.getElementById("date-return")

    returnCheckBox.addEventListener("click", function () {
        dateReturn.classList.toggle("hidden")
    })

    clickBoat.addEventListener("click", function () {
        displayActivity.classList.add("hidden")
        displayBoat.classList.remove("hidden")
        clickBoat.classList.add("bg-yellow-500", "text-white")
        clickActivity.classList.remove("bg-yellow-500", "text-white")

        openLoadActivity.classList.add("hidden")
        openLoadBoat.classList.remove("hidden")
    })

    clickActivity.addEventListener("click", function () {
        displayBoat.classList.add("hidden")
        displayActivity.classList.remove("hidden")
        clickBoat.classList.remove("bg-yellow-500", "text-white")
        clickActivity.classList.add("bg-yellow-500", "text-white")

        openLoadActivity.classList.remove("hidden")
        openLoadBoat.classList.add("hidden")
    })
</script>
