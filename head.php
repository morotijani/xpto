<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>XPTO</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo.svg">

    <!-- Font -->
    <?php if ($newFont == 'yes'): ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <?php else: ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <?php endif; ?>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/vendor.min.css">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/theme.min.css?v=1.0">

    <style>
        * {
            <?php if ($newFont == 'yes'): ?>
            font-family: "Cutive Mono", serif;
            font-weight: 400;
            font-style: normal;
            <?php else: ?>
                font-family: "Turret Road", serif;
                /* font-weight: 200; */
                font-style: normal;
            <?php endif; ?>
        }

        .turret-road-extralight {
            font-family: "Turret Road", serif;
            font-weight: 200;
            font-style: normal;
        }

        .turret-road-light {
            font-family: "Turret Road", serif;
            font-weight: 300;
            font-style: normal;
        }

        .turret-road-regular {
            font-family: "Turret Road", serif;
            font-weight: 400;
            font-style: normal;
        }

        .turret-road-medium {
            font-family: "Turret Road", serif;
            font-weight: 500;
            font-style: normal;
        }

        .turret-road-bold {
            font-family: "Turret Road", serif;
            font-weight: 700;
            font-style: normal;
        }

        .turret-road-extrabold {
            font-family: "Turret Road", serif;
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>
<body>
    <style>

  
    </style>
   

    <div class="nav-scroller bg-bod shadow-sm">
        <nav class="nav nav-sm justify-content-between bg-soft-warning">
            <div class="js-swiper-equal-height swiper swiper-equal-height">
                <div class="swiper-wrapper">
                    <?php 
                        if (is_array($coin_data)) {
                            if (isset($coin_data['data'])) {
                                foreach (array_slice($coin_data['data'], 0, 10) as $crypto) {
                                    $icon = "https://s2.coinmarketcap.com/static/img/coins/64x64/{$crypto['id']}.png";
                                    echo '

                                        <div class="swiper-slide">
                                            <div class="swiper-slide">
                                                <a class="nav-link" href="javascript:;">
                                                    <img src="' . $icon . '" alt="' . $crypto['name'] .'" class="img-fluid" width="30" height="30">
                                                    ' . $crypto['name'] . ' (' . $crypto['symbol'] . ') : $' . number_format($crypto['quote']['USD']['price'], 2) . '
                                                </a>
                                            </div>
                                        </div>
                                        
                                    ';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </nav>
    </div>
