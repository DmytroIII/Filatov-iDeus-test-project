<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}
$BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

$isHomepage = (basename($_SERVER['PHP_SELF']) == 'index.php');
$title = $isHomepage ? $siteName : $pageName . ' : ' . $siteName;
?>
<!doctype html>
<html class="l-html" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title; ?></title>
  <meta name="description" content="" />

  <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!--<meta name="theme-color" content="#ed1c24" />-->

  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime('assets/css/main.min.css'); ?>" />
</head>

<body class="l-body -page_<?php echo $uri; ?><?php echo (!$isHomepage) ? ' -page_inner' : ''; ?>">

  <header class="l-siteHeader">
    <div class="b-siteHeader">
      <div class="l-siteLogo">
        <img class="l-siteLogo__png" src="/assets/img/blocks/siteLogo/Logo.png" width="" height="" alt="logo">
      </div>
      <nav class="l-mainNavigation">

        <ul class="b-mainNavigation">
          <li class="b-mainNavigation__list"><a href="#" class="b-mainNavigation__link">Kurse</a></li>
          <li class="b-mainNavigation__list"><a href="#" class="b-mainNavigation__link">Verband</a></li>
          <li class="b-mainNavigation__list"><a href="#" class="b-mainNavigation__link">Grundkompetenzen</a></li>
        </ul>
      </nav>
    </div>
  </header>