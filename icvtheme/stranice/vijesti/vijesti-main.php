<?php

$desktop_ad = 'oglas1.php';
$mobile_ad = 'oglas1-mobile.php';

// Read the ad type from the cookie
$adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

if ($adType === 'desktop-ad') {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
} else {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
}

if (!empty($file_path) && file_exists($file_path)) {
    include($file_path);
} else {
    echo 'File not found or invalid ad type';
}

?>


<?php

// Construct the full path to the file
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/vijesti-sec-nav.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    include($file_path);
} else {}

?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('vijesti.php') ?>

            <?php

                $desktop_ad = 'oglas2.php';
                $mobile_ad = 'oglas2-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('aktualno.php') ?>

            <?php

                $desktop_ad = 'oglas3.php';
                $mobile_ad = 'oglas3-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('zanimljivosti.php') ?>

            <?php

                $desktop_ad = 'oglas4.php';
                $mobile_ad = 'oglas4-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('crna-kronika.php') ?>

            <?php

                $desktop_ad = 'oglas5.php';
                $mobile_ad = 'oglas5-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>
        
        <?php include ('hrvatska.php') ?>

            <?php

                $desktop_ad = 'oglas6.php';
                $mobile_ad = 'oglas6-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('fotka-dana.php') ?>

            <?php

                $desktop_ad = 'oglas7.php';
                $mobile_ad = 'oglas7-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('politika.php') ?>

            <?php

                $desktop_ad = 'oglas8.php';
                $mobile_ad = 'oglas8-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('vjerski-zivot.php') ?>

            <?php

                $desktop_ad = 'oglas9.php';
                $mobile_ad = 'oglas9-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/vijesti/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

    </main>
    
</section>
<!-- .container-mainxaside -->