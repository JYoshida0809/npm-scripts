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

  <section class="RestaurantCafe">
    <div class="RestaurantCafe__background">
      <h2 class="@Title -reversal">
        <span class="@Title__english"><span>RESTAURANT &amp; CAFE</span></span>
        <span class="@Title__japanese"><span>レストラン&amp;カフェ</span></span>
      </h2>
      <div class="RestaurantCafe__thumbnailWrap">
        <div class="RestaurantCafe__thumbnail">
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
          <div class="RestaurantCafe__thumbnailItem"><img src="https://placehold.jp/250x250.png" alt="" class="RestaurantCafe__thumbnailImage"></div>
        </div>
      </div>
      <p class="RestaurantCafe__text">和食・中華・イタリアンからスイーツまで。<br>多数のメニューバリエーションからお選びいただけます。多数のメニューバリエーションからお選びいただけます。</p>
      <div class="RestaurantCafe__button"><a href="sample" class="@ButtonB -reversal"><span class="@ButtonB__adjust">一覧をみる</span></a></div>
    </div>
  </section><!-- .RestaurantCafe -->

  <p class="@TestTitle">テストタイトルです</p>

</article>
</main>

<?php include 'footer.php'; ?>
