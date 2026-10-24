<?php
// This file is rendered by index.php.
if (!isset($portfolio, $profile)) {
    http_response_code(404);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#102c44">
  <meta name="description" content="<?= portfolio_e($profile['meta_description']) ?>">
  <meta property="og:title" content="<?= portfolio_e($profile['page_title']) ?>">
  <meta property="og:description" content="<?= portfolio_e($profile['social_description']) ?>">
  <meta property="og:type" content="website">
  <title><?= portfolio_e($profile['page_title']) ?></title>
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='16' fill='%23102c44'/%3E%3Ctext x='32' y='43' text-anchor='middle' font-family='Arial,sans-serif' font-weight='700' font-size='32' fill='%23efc56b'%3EA%3C/text%3E%3C/svg%3E">
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header" id="site-header">
    <div class="container header-inner">
      <a class="brand" href="#home" aria-label="<?= portfolio_e($profile['name']) ?>, home">
        <span class="brand-mark" aria-hidden="true">at<span>.</span></span>
        <span class="brand-name"><?= portfolio_e($profile['name']) ?><span><?= portfolio_e($profile['role']) ?></span></span>
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Open navigation" hidden>
        <span></span><span></span>
      </button>
      <nav class="main-nav" id="main-nav" aria-label="Main navigation">
        <?php foreach ($portfolio['navigation'] as $item): ?>
        <a<?= $item['contact'] ? ' class="nav-contact"' : '' ?> href="<?= portfolio_e($item['href']) ?>"><?= portfolio_e($item['label']) ?></a>
        <?php endforeach; ?>
      </nav>
    </div>
  </header>

