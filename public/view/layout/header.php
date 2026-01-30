<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= WEB_DESCRIPTION ?>">
    <meta name="keywords" content="<?= WEB_KEYWORD ?>">
    <title><?= $title ? WEB_NAME . ' | ' . $title : '' ?></title>
    <link rel="icon" href="<?= WEB_FAVICON ?>" type="image/png">
    <!-- CDN Bootstrap Icon-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- CDN Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- CDN Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CDN AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CDN Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- CSS Custom -->
    <link rel="stylesheet" href="<?= URL_P_V ?>css/main.css?v=1.0.9">
    <link rel="stylesheet" href="<?= URL_P_V ?>css/header.css?v=1.0.4">
    <link rel="stylesheet" href="<?= URL_P_V ?>css/footer.css">
</head>

<?= toast_show() ?>

<body class="">

    <div class="linear-bg"></div>

    <div style="top:6vh" class="position-absolute start-50 translate-middle">
        <img width="60" class="rounded-2" src="<?= URL_A ?>image/favicon.png?v=1.0.1" alt="logo">
    </div>

    <div
        class="d-flex flex-wrap justify-content-end p-3 gap-2 mb-5  animate__animated animate__fadeIn animate__delay-1s">
        <?php if ($_SESSION['btc'] === 'verify'): ?>
            <a href="/config" class="btn btn-sm btn-outline-light"> <i class="bi bi-gear"></i> <span class="d-none d-lg-block">Config</span></a>
            <a href="/show_all" class="btn btn-sm btn-outline-light"> <i class="bi bi-easel"></i> <span class="d-none d-lg-block">Slide Show All</span></a>
            <a href="/btc" class="btn btn-sm btn-outline-light"> <i class="bi bi-list"></i> <span class="d-none d-lg-block">List Show</span></a>
            <a href="/" class="btn btn-sm btn-outline-light"> <i class="bi bi-house"></i> <span class="d-none d-lg-block">Home</span></a>
        <?php else: ?>
            <a <?= !($page == 'home') ?: 'hidden' ?> href="/" class="btn btn-sm btn-outline-light"> <i class="bi bi-house"></i>
                Home</a>
        <?php endif ?>
    </div>