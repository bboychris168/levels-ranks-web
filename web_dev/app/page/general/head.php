<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php empty( $data['global']['info'] ) ? print $General->arr_general['info'] : print $data['global']['info']?>">
    <meta property="og:description" content="<?php empty( $data['global']['info'] ) ? print $General->arr_general['info'] : print $data['global']['info']?>">
    <meta name="author" content="https//vk.com/M0st1ce">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title><?php empty( $data['global']['title'] ) ? print $General->arr_general['full_name'] : print $data['global']['title']?></title>
    <meta property="og:title" content="<?php empty ( $data['global']['title'] ) ? print $General->arr_general['full_name'] : print $data['global']['title']?>">
<?php if( ! empty( $data['global']['avatar'] ) ) :?>
    <meta property="og:image" content="<?php echo $General->arr_general['site'] . $data['global']['avatar']?>">
    <link rel="image_src" href="<?php echo $General->arr_general['site'] . $data['global']['avatar']?>">
    <meta name="twitter:image" content="<?php echo $General->arr_general['site'] . $data['global']['avatar']?>">
<?php else :?>
    <meta property="og:image" content="<?php echo $og_image = file_exists( CACHE . '/img/global/bar_logo.jpg' ) ? $General->arr_general['site'] . '/storage/cache/img/global/bar_logo.jpg' : copy(CACHE . '/img/global/default_bar_logo.jpg', CACHE . '/img/global/bar_logo.jpg') && $General->arr_general['site'] . '/storage/cache/img/global/bar_logo.jpg'?>">
    <link rel="image_src" href="<?php echo $og_image?>">
    <meta name="twitter:image" content="<?php echo $og_image?>">
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo ! file_exists( ASSETS_CSS . '/generation/style_generated.min.ver.' . $Modules->actual_library['actual_css_ver'] . '.css' ) ? $General->arr_general['site'] . '/storage/assets/css/themes/' . $General->arr_general['theme'] . '/style' :  $General->arr_general['site'] . '/storage/assets/css/generation/style_generated.min.ver.' . $Modules->actual_library['actual_css_ver']?>.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <?php echo $Graphics->get_css_color_palette()?>
    <style>.sidebar-collapse .user-sidebar-block { <?php echo ! isset( $_SESSION['steamid32'] ) ? 'height: 59px;' : 'height: 88px;';?></style>
    <script>var avatar=[];var servers=[];var profile;</script>
</head>
<body <?php $_SESSION['sidebar_open'] == false && print 'class="sidebar-collapse"'?>>