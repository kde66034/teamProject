<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>지구ON 기후 소식</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section id="zerorecommend__main" >
            <div class="recom__wrap container">
                다양한<br>
                <span>제로웨이스트 상품</span> <br>
                보러가기<br><br>
                <p>scroll</p>
            </div>
            <svg viewbox="0 0 800 400" class="svg">
                <path id="curve" fill="#94daa7" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
                </path>
            </svg>           
        </section>
        <section id="zero__best">
            <div class="month__best">
                <h3>이 달의 <br>      베스트 🎖</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="https://www.jigushop.co.kr/all/?idx=411"><img src="../assets/img/best1.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.jigushop.co.kr/all/?idx=145"><img src="../assets/img/best2.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.thanksto.co.kr/goods/goods_view.php?goodsNo=1000000041"><img src="../assets/img/best3.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.thanksto.co.kr/goods/goods_view.php?goodsNo=1000000022"><img src="../assets/img/best4.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.thanksto.co.kr/goods/goods_view.php?goodsNo=1000000039"><img src="../assets/img/best5.png" alt="베스트 상품"></a>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
            <div class="month__recom">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="https://www.thanksto.co.kr/goods/goods_view.php?goodsNo=1000000077"><img src="../assets/img/recommend1.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.thanksto.co.kr/goods/goods_view.php?goodsNo=1000000036"><img src="../assets/img/recommend2.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.jigushop.co.kr/all/?idx=411"><img src="../assets/img/best3.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.jigushop.co.kr/all/?idx=411"><img src="../assets/img/best4.png" alt="베스트 상품"></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="https://www.jigushop.co.kr/all/?idx=411"><img src="../assets/img/best5.png" alt="베스트 상품"></a>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <h3>이 달의<br>         추천 👍🏻</h3>
            </div>
        </section>
        <!-- //banner -->
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
//   // 스크롤시 화면 움직이게
//   const Zero = document.querySelector("#zerowaste");
//     function scroll() {
//       let scrollTop =
//         window.pageYOffset ||
//         document.documentElement.scrollTop ||
//         window.screenY;
//       document.querySelectorAll("#zerowaste").forEach((item) => {
//         // 각 섹션의 탑값에서 윈도우 하이트값을 뺀 값보다 컸을 때 window.innerHeight값만 쓰면 너무 빨리 나와서 나누기 2
//         if (scrollTop > item.offsetTop - window.innerHeight / 1.5) {
//           Zero.classList.add("show");
//         }
//       });
//       //1초에 60번 실행 //자기 호출
//       requestAnimationFrame(scroll);
//       //scroll() : 위에 넣어줬음
//     }
//     scroll();
//     $("#main__top").ripples({
//       resolution: 900,
//       dropRadius: 10,
//       perturbance: 0.02,
//     });
(function() {
  // Variables
  var $curve = document.getElementById("curve");
  var last_known_scroll_position = 0;
  var defaultCurveValue = 350;
  var curveRate = 3;
  var ticking = false;
  var curveValue;

  // Handle the functionality
  function scrollEvent(scrollPos) {
    if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
      curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
      $curve.setAttribute(
        "d",
        "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
      );
    }
  }

  // Scroll Listener
  window.addEventListener("scroll", function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        scrollEvent(last_known_scroll_position);
        ticking = false;
      });
    }

    ticking = true;
  });
})();

// swipter
var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
</html>
