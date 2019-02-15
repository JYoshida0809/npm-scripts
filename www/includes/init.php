<?php

$cache_version = '1.2'; // CSS or JSのキャッシュ対策用バージョン番号

// インクルードパス追加
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));

function e($value, $default = '', $add_flag = false) {
  if (!empty($value)) {
    if ($add_flag && !empty($default)) {
      echo $value.' | '.$default;
    } else {
      echo $value;
    }
  } else {
    echo $default;
  }
}

// パンくずリスト出力
global $pankuzu;
function pankuzu($pankuzu=null) {
  if (empty($pankuzu)){
    global $pankuzu;
  }

  if (!empty($pankuzu)){
    $pos = 1;
    echo '<!-- ////////////////////////////////////////////////// topicpath start -->'."\n";
    echo '<ol class="topicpath sp-pdg" itemscope itemtype="http://schema.org/BreadcrumbList">'. "\n";
      foreach ($pankuzu as $title => $url){
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">'."\n";

        if (is_int($title)) { // タイトルのみの指定
          $title = $url;
          $url = null;
        }
        if (empty($url) && $pos==count($pankuzu)){ // 最下層かつURLの指定がない
          $url = $_SERVER['REQUEST_URI']; // 現在地のURLを取得
        }

        $title = htmlspecialchars($title,ENT_QUOTES);
        $url = htmlspecialchars($url,ENT_QUOTES);

        echo '<a itemprop="item" href="'.$url.'"><span itemprop="name">'.$title.'</span></a>'."\n";
        echo '<meta itemprop="position" content="'.$pos.'">'."\n";
        echo '</li>'."\n";

        $pos++;
      }
    echo '</ol>'."\n";
    echo '<!-- ////////////////////////////////////////////////// topicpath end -->'."\n";
  }
}

function protocol(){
  return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on' ? 'https' : 'http';
}

//端末判定
$ua = mb_strtolower($_SERVER['HTTP_USER_AGENT']);
$device = '';
if (
    (strpos($ua, 'windows') !== false && strpos($ua, 'touch') !== false && strpos($ua, 'tablet pc') === false) ||
    (strpos($ua, 'ipad') !== false) ||
    (strpos($ua, 'android') !== false && strpos($ua, 'mobile') === false) ||
    (strpos($ua, 'firefox') !== false && strpos($ua, 'tablet') !== false) ||
    (strpos($ua, 'kindle') !== false) ||
    (strpos($ua, 'silk') !== false) ||
    (strpos($ua, 'playbook') !== false)

) {
    $device = 'tablet';
} elseif (
    (strpos($ua, 'windows') !== false && strpos($ua, 'phone') !== false ) ||
    (strpos($ua, 'iphone') !== false) ||
    (strpos($ua, 'ipod') !== false) ||
    (strpos($ua, 'android') !== false && strpos($ua, 'mobile') !== false) ||
    (strpos($ua, 'firefox') !== false && strpos($ua, 'mobile') !== false) ||
    (strpos($ua, 'blackberry') !== false)
) {
    $device = 'mobile';
}
