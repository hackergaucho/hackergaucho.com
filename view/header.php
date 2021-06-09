<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print htmlentities($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php print SITE_URL; ?>favicon.ico">
    <!-- facebook min200x200 -->
    <meta property="og:image"
    content="<?php print SITE_URL; ?>img/capa_social_2.png" />
    <meta property="og:title" content="<?php print htmlentities($title); ?>" />
    <meta property="og:description" content="<?php print SITE_NAME; ?>" />
    <meta property="og:url" content="<?php print @$canonicalUrl; ?>"/>
    <!-- twitter -->
    <meta name="twitter:title" content="<?php print htmlentities($title); ?>">
    <meta name="twitter:description" content="<?php print SITE_NAME; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image"
    content="<?php print SITE_URL; ?>img/capa_social_2.png">
    <meta name="twitter:site" content="@hackergaucho">
    <meta name="twitter:creator" content="@hackergaucho">
    <meta name="twitter:url" content="<?php print @$canonicalUrl; ?>">
    <!-- assets -->
    <?php $asset([
        "css/style.css",
        "js/jquery-1.12.4.min.js",
        "js/loadingoverlay.js",
        "js/script.js"
    ]); ?>
</head>
<body>
