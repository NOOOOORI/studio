<?php get_header(); ?>

<main>
    <section class="home" id="home">
      <div class="home__container">
        <div class="home__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/mainvisual.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png" alt="" width="640" height="480" />
          </picture>
        </div>
      </div>
    </section>

    <section class="section">
      <h2 class="home__title section-title" data-sub="- DESIGN -">
        こだわりのデザイン
      </h2>
      <div class="home__data bd-container bd-grid">
        <img class="grid-right" src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
          " alt="" />
        <div class="about__description grid-left">
          <h3 class="contents-subtitle">こだわったデザインの3フロア</h3>
          <p class="home__description">
            4階建一棟３フロアの大型レンタルスタジオがオープンしました。
            トータル２２０平米を超える大型スタジオ。
            ​各フロアで様々なロケーション撮影が可能な空間。
            撮影スタジオとしてはもちろん、展示会やポップアップなど
            ​レンタルスペースとしてもご利用いただけます。
          </p>
          <button id="openModal" 　href="#contact" class="button">MORE</button>
          <!-- モーダルエリアここから -->
          <section id="modalArea" class="modalArea">
            <div id="modalBg" class="modalBg"></div>
            <div class="modalWrapper">
              <div class="modalContents">
                <h1>こだわったデザインの3フロア</h1><br>
                <p>4階建一棟３フロアの大型レンタルスタジオがオープンしました。
                  トータル２２０平米を超える大型スタジオ。
                  ​各フロアで様々なロケーション撮影が可能な空間。
                  撮影スタジオとしてはもちろん、展示会やポップアップなど
                  ​レンタルスペースとしてもご利用いただけます。
                  <br>
                  4階建一棟３フロアの大型レンタルスタジオがオープンしました。
                  トータル２２０平米を超える大型スタジオ。
                  ​各フロアで様々なロケーション撮影が可能な空間。
                  撮影スタジオとしてはもちろん、展示会やポップアップなど
                  ​レンタルスペースとしてもご利用いただけます。
                  <br>
                  4階建一棟３フロアの大型レンタルスタジオがオープンしました。
                  トータル２２０平米を超える大型スタジオ。
                  ​各フロアで様々なロケーション撮影が可能な空間。
                  撮影スタジオとしてはもちろん、展示会やポップアップなど
                  ​レンタルスペースとしてもご利用いただけます。
                </p>
              </div>
              <div id="closeModal" class="closeModal">
                ×
              </div>
            </div>
          </section>
          <!-- モーダルエリアここまで -->
        </div>
      </div>
      <div class="swiper-container">
        <!-- メイン表示部分 -->
        <div class="swiper-wrapper">
          <!-- 各スライド -->
          <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/studio01.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/studio01.JPG" alt="" width="640" height="480" />
          </picture>
          </div>
          <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/studio02.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/studio02.JPG" alt="" width="640" height="480" />
          </picture>
          </div>
          <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/studio03.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/studio03.JPG" alt="" width="640" height="480" />
          </picture>
          </div>
          <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/studio04.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/studio04.JPG" alt="" width="640" height="480" />
          </picture>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
            " alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
            " alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <h2 class="home__title section-title" data-sub="- PRICE & SYSTEM -">
        料金システム
      </h2>
      <div class="home__data bd-container bd-grid">
        <div class="image-grid-container grid_img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
            " alt="" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
            " alt="" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png
            " alt="" />
        </div>
        <div class="grid-left">
          <h3 class="contents-subtitle">基本料金</h3>
          <p class="home__description">
            平日/９時～1９時<br />
            ※時間外・土日祝については要相談。
          </p>
          <small>※ご利用は3時間２フロアのレンタルから可能となっています。</small>
        </div>
        <a href="#contact" class="button">MORE</a>
      </div>
    </section>

    <section class="section">
      <h2 class="home__title section-title" data-sub="- SCHEDULE -">
        予約状況
      </h2>
      <div class="home__data bd-container bd-grid">
        <a href="#contact" class="button">予約する</a>
      </div>
    </section>

    <section class="section">
      <h2 class="home__title section-title">TOPICS</h2>
      <div class="home__data bd-container bd-grid"></div>
    </section>
  </main>

  <?php get_footer(); ?>  