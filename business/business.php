<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>事業案内 | 建設業テンプレート4</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
      <span class="txt">Riv<br>Construction</span>
    </div>
    <!-- /.pageBg -->
    <?php get_template_part('includes/c-header'); ?>
    <main id="main-contents" class="c-business">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_3.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">Business information</span>
          <span class="ja">事業案内</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="business01" class="c-business-item">
        <h2 class="c-title">
          <span class="ja">建設事業</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_7.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business01 -->
      <section id="business02" class="c-business-item">
        <h2 class="c-title">
          <span class="ja">土木工事事業</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/woks-5.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/works-3.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business02 -->
      <section id="business03" class="c-business-item">
        <h2 class="c-title">
          <span class="ja">住宅リフォーム事業</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_2.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
              土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
              今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business03 -->
      <section class="p-contact">
        <div class="p-contact__wrap">
          <h2 class="p-title">
            <span class="en">CONTACT</span>
            <span class="ja">お問い合わせ</span>
          </h2>
          <div class="p-contact__desc">
            以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
          </div>
          <div class="p-contact__tel">
            <a href="tel:050-3786-1317">Tel:050-3786-1317</a>
          </div>
          <div class="p-contact__form">
            <a class="link-btn" href="/contact/contact.html">
              <span class="c-txt-md">お問い合わせフォーム</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-contact -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>