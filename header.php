<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MY BLOG</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicon/browserconfig.xml">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#000000">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>

<body>
  <!------------------------------------------------>
  <!-- ヘッダ -->
  <!------------------------------------------------>
  <header class="site-header">
    <div class="site-header-wrapper">

      <!-- LOGO -->
      <a href="<?php echo home_url(); ?>" class="brand">MY BLOG</a>

      <!-- Navi -->
      <nav class="nav">
        <ul class="nav-wrapper">
          <li class="nav-item"><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li class="nav-item"><a href="<?php echo home_url('/works'); ?>">Works</a></li>
          <li class="nav-item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>