<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Google Tag Manager start -->
<!-- ※※※ アクセス解析タグの設置を忘れずに！ ※※※ -->
<!-- Google Tag Manager end -->

<?php
if( !empty($device) && $device === 'mobile' ){
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}else{
  echo '<meta name="viewport" content="width=1008">';
}
?>

<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta name="description" content="<?php e(@$description, 'ディスクリプションが入ります。') ?>">
<?php if (!empty($keywords)):?>
  <meta name="keywords" content="<?php e(@$keywords, '') ?>">
<?php endif?>

<!-- OGTag start -->
<?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
  <meta property="og:type" content="website">
<?php else: ?>
  <meta property="og:type" content="article">
<?php endif; ?>
<meta property="og:title" content="<?php e(@$title, 'NPM-SCRIPT-TEST', true) ?>">
<meta property="og:url" content="<?php echo protocol().'://'.$_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI'],ENT_QUOTES); ?>">
<meta property="og:image" content="<?php echo protocol().'://'.$_SERVER['HTTP_HOST'].(!empty($fbimage) ? $fbimage : '/img/thumb_fb.png'); ?>">
<meta property="og:description" content="<?php e(@$description, 'ディスクリプションが入ります。') ?>">
<meta property="og:site_name" content="NPM-SCRIPT-TEST">
<!-- OGTag end -->

<link rel="icon" href="/img/favicon.ico">
<link rel="apple-touch-icon" href="/img/icon.png">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,700" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css?v=<?php echo $cache_version;?>">
<?php
if (!empty($ex_file_css) && is_array($ex_file_css)):
  foreach ($ex_file_css as $f):
    if (is_array($f)){
      $href = htmlspecialchars(array_shift($f),ENT_QUOTES);
      $attr = array();
      foreach ($f as $k => $v) {
        if ($k==='href' || $k==='rel') continue;
        $attr[] = htmlspecialchars($k,ENT_QUOTES).'="'.htmlspecialchars($v,ENT_QUOTES).'"';
      }
      $attr = implode(' ', $attr). ' ';
    } else {
      $href = htmlspecialchars($f,ENT_QUOTES);
      $attr = '';
    }
    ?>
    <link href="<?php echo $href;?>?v=<?php echo $cache_version;?>" <?php echo $attr ?>rel="stylesheet">
    <?php
  endforeach;
endif;
?>
<?php e(@$ex_tag_css) ?>
<title><?php e(@$title, 'NPM-SCRIPT-TEST', true) ?></title>
</head>
<body<?php if (!empty($bodyClass)) echo ' class="'.$bodyClass.'"'; ?>>

<!-- Google Tag Manager (noscript) -->
<!-- ※※※ アクセス解析タグの設置を忘れずに！ ※※※ -->
<!-- End Google Tag Manager (noscript) -->


<div id="Wrapper" class="Wrapper">

<!-- ////////////////////////////////////////////////// Header start -->
<header class="Header" id="Header">
  <p>ヘッダー</p>
</header>
<!-- ////////////////////////////////////////////////// Header end -->
