<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Comment Template</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/conditions.css">
	<script type='text/javascript' src="<?php echo base_url(); ?>js/conditions.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.5/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.5/js/star-rating.min.js" type="text/javascript"></script>

	<script src="<?= base_url() ?>adminlte/plugins/moment/moment.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
			integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[1980px] m-auto">

<div class="flex flex-col m-[5em]">
	<div class="flex justify-center items-center w-full">
		<div class="border border-black rounded-lg p-5 w-[50em]">
			<div class="py-5">
				<h5 class="text-[2em] text-left">
					Comment
				</h5>
			</div>
			<hr/>
			<div class="flex flex-col py-5">
				<p class="">
					Name
				</p>
				<label>
					<input type="text" class="border p-3 focus:outline-none w-full font-[400] text-gray-500" placeholder="Name...">
				</label>
			</div>

			<div class="flex flex-col py-5">
				<p class="">
					Email
				</p>
				<label>
					<input type="email" class="border p-3 focus:outline-none w-full font-[400] text-gray-500" placeholder="Email...">
				</label>
			</div>
			<div class="flex flex-col py-5">
				<p class="">
					Rating
				</p>
				<label>
					<input id="rating-id" name="rating-id" type="text" class="rating-kv w-full" min="0" max="5" step="0.2" data-size="sm">
				</label>
			</div>

			<div class="flex flex-col py-5">
				<p class="">
					Comment
				</p>
				<label>
					<textarea class="border p-5 focus:outline-none w-full font-[400] text-gray-500"></textarea>
				</label>
			</div>

			<div class="flex justify-end">
			</div>
		</div>
	</div>


	<script>
		$(function() {
			$('#rating-id').rating();
			$('#rating-id').on('change', function(event) {
				console.log($(this).attr('name'), $(this).val(), ': rating value')
			});
		});
	</script>
</body>
