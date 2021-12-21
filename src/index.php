<!doctype html>
<html lang="ko_KR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fonts.google.com -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Kakao -->
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>
    x-data="{menuSelected: null, widget: false}"
    x-effect="bodyScrollLock(menuSelected === 'menu' || widget)"
  >
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
