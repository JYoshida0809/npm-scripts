<?php
//共通
require_once substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen($_SERVER['SCRIPT_NAME'])).'/includes/init.php';
//メタディスクリプション
$description = '';
//メタキーワード
$keywords = '';
//Facebook
$fbimage = '';
//タイトル
$title = '';
//bodyClass追加
$bodyClass = '';
?>
<?php include 'header.php'; ?>

<main>
<article>


  <section class="MainContetns">
    <div class="MainContents__inner">
      <h2 class="@Title">
        <span class="@Title__english"><span>english</span></span>
        <span class="@Title__japanese"><span>日本語</span></span>
      </h2>

      <p><a href="sample" class="@ButtonA">ButtonA</a></p>
    </div>
  </section>

</article>
</main>

<?php include 'footer.php'; ?>
