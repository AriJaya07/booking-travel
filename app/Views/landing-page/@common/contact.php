<div class="fixed bottom-10 md:right-[5em] right-[1em]">
	<div class="relative z-[20]">
		<div id="logo" class="cursor-pointer">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-chat-dots-fill"
				 viewBox="0 0 16 16">
				<path
					d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
			</svg>
		</div>

		<div id="chat" class="md:w-[25em] w-full hidden">
			<div class="border border-black rounded-2xl">
				<div class="flex flex-col">
					<div class="flex flex-row justify-between items-center bg-green-900 rounded-t-2xl p-5">
						<div class="flex flex-row items-center gap-[1em]">
							<img src="<?php echo base_url("img/booking.png") ?>"
								 alt="chat-logo"
								 class="md:w-[7em] w-[5em]"/>
							<div class="flex flex-col text-center text-white">
								<p class="md:text-[1em] text-[0.85em]">
									It's Time for a Vacation!
								</p>
								<p class="md:text-[1em] text-[0.85em]">
									How can we help?
								</p>
							</div>
						</div>
						<div id="close-chat" class="cursor-pointer">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
								 class="bi bi-chevron-down" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
							</svg>
						</div>
					</div>

					<div id="form" class="bg-white pt-[5em] pb-[2em] rounded-b-2xl">
						<div class="flex flex-col md:ml-[2em]">
							<div class="border border-black rounded-2xl md:w-[20em] w-full p-5">
								<div class="flex flex-col">
									<p class="md:text-[1em] text-[0.85em]">
										Name*
									</p>
									<label>
										<input type="text" name="name" class="md:w-[17em] w-full md:text-[1em] text-[0.85em] focus:outline-none bg-gray-100 p-2"
											   placeholder="Name"/>
									</label>
								</div>
								<div class="flex flex-col">
									<p class="md:text-[1em] text-[0.85em]">
										Email*
									</p>
									<label>
										<input type="email" name="email" class="md:w-[17em] w-full md:text-[1em] text-[0.85em] focus:outline-none bg-gray-100 p-2"
											   placeholder="Email Address"/>
									</label>
								</div>
								<div class="flex flex-col">
									<p class="md:text-[1em] text-[0.85em]">
										Message*
									</p>
									<label>
										<textarea name="message" class="md:text-[1em] text-[0.85em] bg-gray-100 md:w-[17em] w-full p-2 focus:outline-none"></textarea>
									</label>
								</div>
								<div id="button-submit" class="flex justify-end p-3">
									<button type="button" class="md:text-[1em] text-[0.85em] bg-gray-200 rounded-2xl px-3 py-2">
										Submit
									</button>
								</div>
							</div>
						</div>
					</div>

					<div id="chat-person" class="bg-white rounded-b-2xl h-[20em] hidden">
						<p class="text-center">
							Chat
						</p>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<script>
	$(document).ready(function() {
		$(document).on("click", function() {
			const logo = $("#logo");
			const chat = $("#chat");
			const closeChat = $("#close-chat");

			const form = $("#form");
			const chatPerson = $("#chat-person");
			const buttonSubmit = $("#button-submit")

			logo.on("click", function() {
				chat.removeClass("hidden")
				logo.addClass("hidden")
			});

			closeChat.on("click", function() {
				logo.removeClass("hidden");
				chat.addClass("hidden");
			});

			buttonSubmit.on("click", function() {
				chatPerson.removeClass("hidden")
				form.addClass("hidden")
			})
		})
	})
</script>
