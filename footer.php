<footer class="footer">
    <div class="footer-container">
      <h2 class="footer-title">STUDIO</h2>
      <div class="address-container">
        <p>ADDRESS</p>
        <p>大阪府大阪市○○区○○</p>
        <p>○○ビル</p>
      </div>
      <small>©DESIGN All Rights Reserved.</small>
    </div>
    <div class="map-container">
      <iframe class="map" src="https://maps.google.co.jp/maps?output=embed&q=原宿駅&z=14" width="100%" height="auto"
        style="border: 0" loading="lazy"></iframe>
    </div>
  </footer>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="./assets/js/main.js"></script>
  <script>
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
      var mySwiper = new Swiper(".swiper-container", {
        speed: 8000,
        loop: true,
        autoplay: {
          delay: 0,　// 0にすることで流れ続けるようになる
          disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 25,
        centeredSlides: true,
        initialSlide: 1,
      });
    } else {
      var mySwiper = new Swiper(".swiper-container", {
        speed: 8000,
        loop: true,
        autoplay: {
          delay: 0,　// 0にすることで流れ続けるようになる
          disableOnInteraction: false,
        },
        slidesPerView: 3.5,
        spaceBetween: 25,
        centeredSlides: true,
        initialSlide: 1,
      });
    }

    $(function () {
      $('#openModal').click(function () {
        $('#modalArea').fadeIn();
      });
      $('#closeModal , #modalBg').click(function () {
        $('#modalArea').fadeOut();
      });
    });
  </script>
  <!-- ↓body閉じタグ直前でjQueryを読み込む -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <?php wp_footer(); ?>

  </body>
</html>