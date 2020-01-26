<?php require_once '../config/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found | Muhamad Ndaru</title>
    <?php require_once 'css.php'; ?>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" id="main" style="height: 100vh;">
        <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
        <div class="inline-block align-middle">
            <h2 class="font-weight-normal lead" id="desc">Ups. Sepertinya Anda Tersesat.</h2>
            <a href="<?= BASEURL; ?>" class="font-weight-normal"><i class="fas fa-home mr-2"></i>Back To Home</a>
        </div>
    </div>

<?php require_once 'js.php'; ?>
</body>
</html>