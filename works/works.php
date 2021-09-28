<?php
 /* Template Name: works
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>実績紹介 | 建設業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
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
    <main id="main-contents" class="c-works">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_3.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">works</span>
          <span class="ja">施工実績</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="works" class="c-works-section">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">施工実績一覧</p>
          </h2>
          <div class="c-works__list">
            <ul>
              <li class="c-works__item">
                <h3 class="c-works__item__tit view-sp">
                  <p class="c-txt-md">Riv保育園 改修工事</p>
                </h3>
                <div class="c-works__img-wrap">
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/nursery_2.jpg" data-lightbox="img01"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/nursery_2.jpg"
                        alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="/images/home/nursery_1.jpg" data-lightbox="img01"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/nursery_1.jpg"
                        alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/nursery_3.jpg" data-lightbox="img01"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/nursery_3.jpg"
                        alt="">
                    </a>
                  </div>
                </div>
                <div class="c-works__txt">
                  <h3 class="c-works__item__tit view-pc">
                    <p class="c-txt-md">Riv保育園 改修工事</p>
                  </h3>
                  <div class="c-works__desc">
                    <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
                      土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
                      今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
                    </p>
                  </div>
                </div>
              </li>
              <li class="c-works__item">
                <h3 class="c-works__item__tit view-sp">
                  <p class="c-txt-md">Riv河川敷道路 改修工事</p>
                </h3>
                <div class="c-works__img-wrap">
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_3.jpg" data-lightbox="img02"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_3.jpg"
                        alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_2.jpg" data-lightbox="img02"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_2.jpg"
                        alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_1.jpg" data-lightbox="img02"> <img src="<?php echo get_template_directory_uri(); ?>/images/home/riverbed_1.jpg"
                        alt="">
                    </a>
                  </div>
                </div>
                <div class="c-works__txt">
                  <h3 class="c-works__item__tit view-pc">
                    <p class="c-txt-md">Riv河川敷道路 改修工事</p>
                  </h3>
                  <div class="c-works__desc">
                    <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
                      土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
                      今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
                    </p>
                  </div>
                </div>
              </li>
              <li class="c-works__item">
                <h3 class="c-works__item__tit view-sp">
                  <p class="c-txt-md">住宅リフォーム</p>
                </h3>
                <div class="c-works__img-wrap">
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_3.jpg" data-lightbox="img02"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_3.jpg" alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_2.jpg" data-lightbox="img02">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_2.jpg" alt="">
                    </a>
                  </div>
                  <div class="c-works__img">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_1.jpg" data-lightbox="img02">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/home/remodeling_1.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="c-works__txt">
                  <h3 class="c-works__item__tit view-pc">
                    <p class="c-txt-md">住宅リフォーム</p>
                  </h3>
                  <div class="c-works__desc">
                    <p class="c-txt-sm">「研鑽した技術で社会に貢献する」を理念としております。
                      土木工事・電気工事・解体工事を主な分野とし、創業20年以上、お引先のニーズにお応えできるよう技術と品質の向上に努めています。
                      今後も社員の創造力とチームワークの強みを最大限に生かし、地域社会から信頼される企業を目指します。
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- /.c-works-item -->
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
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/lightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>