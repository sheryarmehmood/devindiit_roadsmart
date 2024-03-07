<?php

    $page = substr(basename($_SERVER['PHP_SELF']), 0, -4);

    if ($_SERVER['HTTP_HOST'] != 'localhost') {

        $baseurl = "https://roadsmart.co.zm/";

    } else {

        $baseurl = "http://localhost/rss/";

    }

?>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Css files -->

<!-- Bootstrap Css -->

<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/bootstrap.min.css">

<!-- Main Css -->

<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/mycss.css?v=1.6;">

<!-- Media-Query Css -->

<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/responsive.css?v=1.4">

<!-- commonCss Css -->

<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/commonCss.css">

<!-- Favicon -->

<!-- <link type="image/png" rel="icon" href="<?= $baseurl ?>images/favicon.png"> -->

