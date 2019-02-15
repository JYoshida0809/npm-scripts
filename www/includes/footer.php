<!-- ////////////////////////////////////////////////// Footer start -->
<footer class="Footer">
  <p>フッター</p>
</footer>


<script src="/js/lib/jquery-3.3.1.min.js"></script>
<script src="/js/bundle.js?v=<?php echo $cache_version;?>"></script>
<?php
// JSタグ出力
if (!empty($ex_file_js) && is_array($ex_file_js)):
  foreach ($ex_file_js as $f):
    if (is_array($f)){
      $src = htmlspecialchars(array_shift($f),ENT_QUOTES);
      $attr = array();
      foreach ($f as $k => $v) {
        if ($k==='src') continue;
        $attr[] = htmlspecialchars($k,ENT_QUOTES).'="'.htmlspecialchars($v,ENT_QUOTES).'"';
      }
      $attr = ' '.implode(' ', $attr);
    } else {
      $src = htmlspecialchars($f,ENT_QUOTES);
      $attr = '';
    }
?>
<script src="<?php echo $src;?>?v=<?php echo $cache_version;?>"<?php echo $attr ?>></script>
<?php
  endforeach;
endif;
?>
<?php e(@$ex_tag_js) ?>

</body>
</html>
