<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>지구ON</title>
  <link rel="stylesheet" href="../assets/css/fonts.css" />
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/common.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/css/footer.css" />
</head>

<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header02.php" ?>
    <!-- //header -->

    <main id="main">
    <section id="main__top">
      <div class="main__wrap container">
        <h2 class="main__title">
          A Right Move <br />
          to Earth
        </h2>
        <p class="main__desc">
          기후 위기 대응을 위한 지구ON, <br />
          기후 위기의 실체와 대응 실천 방법을 제공하여 미래 환경을
          변화시킵니다.
        </p>
        <div class="main__btn">
          <a href="#mainCard">risk</a>
          <a href="#mainBanner">purpose</a>
          <a href="#hero-section">solution</a>
        </div>
      </div>
    </section>
    <!-- // -->
    <section id="mainCard" class="container">
      <h2 class="blind">오염 및 피해 현황</h2>
      <div class="card__wrap">
        <div class="card__first">
          <div class="card__cont bg1">
            <h3>폐기물 <br />발생량</h3>
            <p class="total">534,055 <em>톤 /일</em></p>
            <p class="refer">
              # 전년 대비 약 7.4% 증가 <br />
              # 우리나라 (2020)
            </p>
          </div>
          <div class="card__cont bg2">
            <h3>화학물질 <br />배출량</h3>
            <p class="total">53,732 <em>톤 /년</em></p>
            <p class="refer">
              # 전년 대비 약 4.5% 감소 <br />
              # 우리나라 (2020)
            </p>
          </div>
          <div class="card__cont bg3">
            <h3>온실가스 <br />배출량</h3>
            <p class="total">701 <em>만 톤/년</em></p>
            <p class="refer">
              # 전년 대비 약 9.3% 증가 <br />
              # 우리나라 (2020)
            </p>
          </div>
        </div>
        <!-- //card__first -->
        <div class="card__second">
          <div class="card__cont bg4">
            <h3>미세먼지(PM2.5) <br />농도</h3>
            <p class="total">21 <em>㎍/㎥</em></p>
            <p class="refer">
              # 전년 대비 약 16% 감소 <br />
              # 서울 (2020)
            </p>
          </div>
          <div class="card__cont bg5">
            <h3>한파, 고온현상의 <br />기온 변동폭</h3>
            <p class="total">19.7 <em>°C</em></p>
            <p class="refer">
              # 역대 최고 기록 <br />
              # 우리나라 (21년 1월)
            </p>
          </div>
          <div class="card__cont bg6">
            <h3>평균 기온 및 <br />개화시기 변화</h3>
            <p class="total">
              8.7 <em>°C</em> <span>3.24</span> <em>월.일</em>
            </p>
            <p class="refer">
              # 역대 최고 기록 <br />
              # 우리나라 (21년 3월)
            </p>
          </div>
        </div>
        <!-- //card__second -->
        <div class="card__third">
          <div class="card__cont bg7">
            <h3>월별 극도의 <br />폭염 발생 증가율</h3>
            <p class="total">90 <em>배 증가</em></p>
            <p class="refer">
              # 1951~1980년 대비 <br />
              # 전 세계 (2021)
            </p>
          </div>
          <div class="card__cont bg8">
            <h3>우리나라 <br />자연재해 피해액</h3>
            <p class="total">1,318 <em>십억 원</em></p>
            <p class="refer">
              # 전년 대비 512% 증가 <br />
              # 우리나라 (2020)
            </p>
          </div>
          <div class="card__cont bg9">
            <h3>전 세계 <br />자연재해 피해액</h3>
            <p class="total">
              20 <em>조</em> <span>2906</span> <em>억원</em>
            </p>
            <p class="refer">
              # 평균 대비 4.7% 증가 <br />
              # 세계 (2022)
            </p>
          </div>
        </div>
        <!-- //card__third -->
      </div>
    </section>
    <!-- //mainCard -->
    <section id="mainBanner" class="mainBanner">
      <div class="banner">
        <h2 class="b_title">지구 ON</h2>
        <p class="b_desc1">자유롭고 안전하게 살아갈 권리,<br /></p>
        <p class="b_desc2">
          생명에 대한 권리를 지키기 위해 존재합니다.<br />
        </p>
        <p class="b_desc3">기후 위기 대응을 위한 실천에 함께 해주세요.</p>
      </div>
    </section>
    <!-- //"mainBanner" -->
    <section id="hero-section" class="hero-section">
      <div class="card-grid">
        <a class="card" href="../news/newsMain.php">
          <div class="card__background" style="background-image: url(../assets/img/bulb.png)">
          </div>
          <div class="card__content">
            <p class="card__category">Issues</p>
            <h3 class="card__heading">기후 소식</h3>
          </div>
        </a>
        <a class="card" href="../gihusilcheon/silcheonMain.php">
          <div class="card__background" style="background-image: url(../assets/img/calendar.png)">
          </div>
          <div class="card__content">
            <p class="card__category">Action</p>
            <h3 class="card__heading">기후 실천</h3>
          </div>
        </a>
        <a class="card" href="../zerowaste/zerowasteMain.php">
          <div class="card__background" style="background-image: url(../assets/img/heart.png)">
          </div>
          <div class="card__content">
            <p class="card__category">Recommend</p>
            <h3 class="card__heading">제로웨이스트 상품</h3>
          </div>
          </li>
          <a class="card" href="../gihusilcheon/silcheonQuiz.php">
            <div class="card__background" style="background-image: url(../assets/img/target.png)">
            </div>
            <div class="card__content">
              <p class="card__category">Quiz</p>
              <h3 class="card__heading">기후 퀴즈</h3>
            </div>
          </a>
          <div>
    </section>
    <!-- //subcard -->
    </main>
    <!-- //main -->

    <div id="earthON__top">
      <div>
        <p>TOP</p>
      </div> 
    </div>
    <!-- //earthON__top -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
  <script src="../assets/js/header02.js"></script>
  <script>
    const Ban = document.querySelector(".banner");
    function scroll() {
      let scrollTop =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        window.screenY;
      document.querySelectorAll(".banner").forEach((item) => {
        // 각 섹션의 탑값에서 윈도우 하이트값을 뺀 값보다 컸을 때 window.innerHeight값만 쓰면 너무 빨리 나와서 나누기 2
        if (scrollTop > item.offsetTop - window.innerHeight / 2) {
          Ban.classList.add("show");
        }
      });
      //1초에 60번 실행 //자기 호출
      requestAnimationFrame(scroll);
      //scroll() : 위에 넣어줬음
    }
    scroll();
    $("#main__top").ripples({
      resolution: 900,
      dropRadius: 10,
      perturbance: 0.02,
    });

    // 스크롤 이동 스무스하게
    document.querySelectorAll(".main__btn a").forEach(a => {
      a.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(a.getAttribute("href")).scrollIntoView({
            behavior: "smooth"  // 이동 부드럽게
        });
      });
    });

    // top 버튼
    // 스크롤 내리면 top버튼 올라오게하기
    window.addEventListener("scroll", () => {
    let scrollTop = window.pageYOffset || window.scrollY || document.documentElement.scrollTop; 
    //(문서 전체 높이 - 브라우저 높이)
    if(scrollTop >= (document.body.scrollHeight-window.innerHeight-300)){
        document.querySelector("#earthON__top > div").classList.add("show");
    } else {
        document.querySelector("#earthON__top > div").classList.remove("show")
    }
    //top 버튼
      document.querySelector("#earthON__top > div").addEventListener("click", ()=>{
          window.scrollTo({left:0, top: 0, behavior: "smooth"});
      });
    });
  </script>
</body>

</html>