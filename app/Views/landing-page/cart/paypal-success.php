<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"
            integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .success-message {
            text-align: center;
            padding-top: 50px;
        }
        .success-icon {
            color: green;
            font-size: 48px;
        }
    </style>
<body>

<div class="success-message">
    <i class="fas fa-check-circle success-icon"></i>
    <h1><?= $result['messages'] ?></h1>
    <a href="<?= base_url() ?>" style='color:blue'>back to home</a>
</div>

<script>

    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>cart/sendConfirmMail', // Update with your server-side processing script
            data: {
                "<?= csrf_token() ?>": '<?= csrf_hash() ?>',
                email: 'dedy.blinda94@gmail.com'
            },
            success: function(response) {
                if (response.status === 'success') {
                    console.log(response.message)
                } else {
                    // Handle error response
                    console.log(response.message)
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX request error
                console.error(error);
            }
        });
    });
</script>
</body>
</html>
