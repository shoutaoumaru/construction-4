<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会社案内 | 建設業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
      <span class="lines">
        <span class="line-t"></span>
        <span class="line-r"></span>
        <span class="line-l"></span>
        <span class="line-b"></span>
      </span>
      <span class="txt">Riv<br>Construction</span>
    </div>
    <!-- /.pageBg -->
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"><span>会社案内</span>
                <small>Company</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/business')); ?>"><span>事業案内</span><small>business</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/works')); ?>"><span>実績紹介</span><small>Works</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>Recruit</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <!-- <div class="reserve-btn-js">
        <div class="reserve-btn-js__inner">
          <div class="reserve-btn-js__01">
            <span>お</span>
            <span>問</span>
            <span>合</span>
            <span>せ</span>
          </div>
          <div class="reserve-btn-js__02 js-left">
            <div class="tel">
              <a href="tel:092-686-7954">電話で<br>お問い合わせ</a>
            </div>
            <div class="net">
              <a href="#">フォームで<br>お問い合わせ</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.reserve-btn -->
    </header>
    <!-- /.header -->
    <main id="main-contents" class="c-company">
      <section class="c-topview">
        <div class="c-topview__img">
          <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/img_1.jpg" alt="">
          <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/img_1.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">company</span>
          <span class="ja">会社案内</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section class="c-message">
        <div class="c-container">
          <div class="c-message__wrap">
            <div class="c-message__img">
              <h2 class="c-sub-title">
                <p class="c-txt-lr">代表挨拶</p>
              </h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/ceo_1.jpg" alt="">
            </div>
            <div class="c-message__txt">
              <div class="c-message__desc">
                <p class="c-txt-sm">
                  当社は創業以来、公共事業を通じて社会インフラの整備など地域社会に広く貢献しています。
                  おかげさまで各界から高い評価を頂いております。
                </p>
                <p class="c-txt-sm">
                  又、地域社会貢献の一環として、2015年には、福岡県建築業広域事業継続マネジメント構築に参加し、事業継続計画を策定している企業として福岡県より認定されました。
                </p>
                <p class="c-txt-sm">
                  「研鑽した技術をもって、社会に貢献する」という理念のもと、技術力の蓄積と最新設備の導入を進め、地域から信頼される企業を目指しています。
                  これからも益々のご愛顧お願い申し上げます。
                </p>
              </div>
              <div class="c-message__name">
                <p class="c-txt-md">代表取締役社長</p>
                <p class="c-txt-md">利部 翔太</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.c-message -->
      <section class="c-policy">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">企業理念</p>
          </h2>
          <div class="c-policy__desc">
            <p class="c-txt-md">私たちは、常にお客様第一を考え、誠実な対応と研鑽した技術力で貢献し、地域No.1の“信頼”出来る企業を目指します。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-policy -->
      <section class="c-about">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">会社概要</p>
          </h2>
          <div class="c-about__desc">
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">会社名</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">株式会社Riv建設</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">設立</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">2001年5月</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">本社</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">〒812-0011<br>福岡県福岡市博多区3-27-25-9F<br><a
                        href="tel:092-686-7954">TEL:092-686-7954</a></span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">資本金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">500万円</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">代表者</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">利部 翔太</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">事業内容</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">建設業の種類</span>
                    <span class="c-txt-sm">土木工事<br></span>
                    <span class="c-txt-sm">電気工事<br></span>
                    <span class="c-txt-sm">解体工事</span>
                    <span class="c-txt-sm">その他工事</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">主な取引先</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">福岡県・佐賀県・山口県・その他</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="c-about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_4.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_6.jpg" alt="">
          </div>
        </div>
      </section>
      <!-- /.c-about -->
      <section class="c-access">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">アクセスマップ</p>
          </h2>
          <div class="c-access__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1631756601585!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </section>
      <section class="c-history">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">沿革</p>
          </h2>
          <div class="c-history__desc">
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">2001年 5月</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">Riv建設を設立</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">2005年 5月</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">Riv建設法人化 株式会社Riv建設に</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">2010年 5月</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">資本金を1000万円へ増資</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">2012年 5月</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">資本金を2000万円へ増資</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">2017年 5月</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">資本金を3000万円へ増資</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /.c-history -->
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
    <?php get_template_part('includes/c-footer'); ?>      
    <!-- /.footer -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <!-- <script src="/scripts/main.js"></script> -->
</body>

</html>