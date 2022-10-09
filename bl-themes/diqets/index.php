<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include(THEME_DIR_PHP.'header.php'); ?>
  </head>
  <body class="bg-white">
    <?php Theme::plugins('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP.'topbar.php'); ?>
    <?php
    if ($WHERE_AM_I == 'page') {
    if ($page->slug() == 'error') {
      include(THEME_DIR_PHP.'error.php');
    }
      else {
      include(THEME_DIR_PHP.'page.php');
    }
    } else {
      include(THEME_DIR_PHP.'home.php');
    }
    ?>
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
    <?php echo Theme::js('js/bootstrap.bundle.min.js'); ?>
    <?php Theme::plugins('siteBodyEnd'); ?>
  </body>
</html>