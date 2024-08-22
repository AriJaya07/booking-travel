<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .failure-message {
            text-align: center;
            padding-top: 50px;
        }
        .failure-icon {
            color: red;
            font-size: 48px;
        }
    </style>
</head>
<body>

<div class="failure-message">
    <i class="fas fa-times-circle failure-icon"></i>
    <h1>Payment failed. Please try again later.</h1>
    <a href="<?= base_url() ?>">back to home</a>
</div>

</body>
</html>
