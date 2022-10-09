<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body class="bg-dark text-secondary">
<div class="container-fluid" style="padding-top:110px;">
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
    <!-- Javascript -->
	<?php
		echo Theme::jquery();
		echo Theme::js('js/bootstrap.bundle.min.js');
	?>
    <?php Theme::plugins('siteBodyEnd'); ?>
    </div>
</html>