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
    <section id="zero__banner">
            <div class="zero__wrap">
                <a href="../Zerowaste/zerowaste__recommend.php"><h2>Zero Waste</h2></a>
                <!-- <p>이곳은 소통하는 공간입니다. <br> 지구 ON은 당신이 서 있는 오늘과 걸어온 모든 하루를 응원합니다.</p> -->
                <figure  class="zero1">
                  <img src="../assets/img/zerowaste_recycle.png" alt="커뮤니티 이미지">
                </figure>
                <figure class="zero2">
                  <img src="../assets/img/zerowaste_bag.png" alt="커뮤니티 이미지">
                  eco bag
                </figure>
                <figure class="zero3">
                  <img src="../assets/img/zerowaste_plant.png" alt="커뮤니티 이미지">
                </figure>
                <figure class="zero4">
                  <img src="../assets/img/zerowaste_tumbler.png" alt="커뮤니티 이미지">
                  tumbler
                </figure>
                <figure class="zero5">
                  <img src="../assets/img/zerowaste_spoon.png" alt="커뮤니티 이미지">
                  Cutlery
                </figure>
                <figure class="zero6">
                  <img src="../assets/img/zerowaste_straw.png" alt="커뮤니티 이미지">
                  straw
                </figure>
                <figure class="zero7">
                  <img src="../assets/img/zerowaste_brush.png" alt="커뮤니티 이미지">
                  brush
                </figure>
            </div>
        </section>
        <!-- //banner -->
        <section id="zerowaste">
          <h3>제로웨이스트<i>(ZERO WASTE)</i>란?</h3>
          <div class="zero__main container">
            <img src="../assets/img/zerowaste.png" alt="제로웨이스트">
            <div class="zero__desc">
              제로웨이스트는 <i>숫자인 ‘0(제로)’와 쓰레기를 뜻하는 ‘waste’가 합쳐져</i>,<br> <i>쓰레기를 없애자는 뜻</i>을 가지고 있습니다.<br><br> 일회용품 컵, 비닐봉지 등 썩지 않는 쓰레기를 줄여 쓰레기 생산을 최소화하자는 생활습관입니다. <br>
              즉, 모든 제품이 재사용될 수 있도록 장려하며 폐기물을 방지하는 데 초점을 맞춘 것이 원칙입니다.<br><br> 쓰레기 매립지나 소각장, 바다로 쓰레기를 흘려보내지 않는 것이 목표입니다. 환경오염과 지구 온난화 등 환경에 대한 관심이 증대되고 있고, 경각심도 커지면서 환경을 보호하려는 움직임의 일종입니다. <br><br>
              하지만, 쓰레기를 배출하지 않는다는 것이 어렵습니다. 카페만 가도 테이크아웃 컵을 제공하며, 일회용 빨대, 배달음식 용기, 포장지 등의 쓰레기 배출을 줄이기란 쉽지 않습니다. 하지만, 생활 속에서 제로웨이스트를 실천할 수 있는 방법이 다양합니다. <br>
            </div>
          </div>
          <div class="zero__solution">
            <h3>➰ 제로웨이스트 실천 방법 ➰</h3>
            <div class="zero__sbox container">
              <div class="zero__stit">
                    1. 먹지 않는 반찬, 일회용품 등은 받지 않기
                <div class="zero__sdesc">배달 음식을 주문하면 수많은 일회용기와 함께 먹지 않는 반찬도 함께 올 때도 있습니다. <br><br>
                  주문하기 전에 먹지 않는 소스, 반찬, 일회용 젓가락·숟가락 등은 미리 빼달라고 요청사항에 요구할 수 있습니다. <br><br>
                  또한 식당에서도 미리 먹지 않는 반찬은 사양하는 방법도 있습니다.</div>           
              </div>
              <div class="zero__stit">
                    2. 종이 영수증, 우편 발급받지 않기
              <div class="zero__sdesc">종이 영수증은, 종이 우편 등은 종이로 되도록 발급받지 않도록 하고, 이메일이나 문자로 받을 수 있는지 확인합니다.</div>
              </div>
              <div class="zero__stit">
                    3. 외출 시 텀블러 준비하기
              <div class="zero__sdesc">텀블러에 생수를 담아 가지고 다니면, 생수 플라스틱 배출을 줄일 수 있습니다. <br><br> 카페에서도 음료를 테이크아웃 할 때, 일회용 컵 대신 텀블러를 건네주어 생활 속에서 제로웨이스트를 실천할 수 있습니다. <br><br>
                종종 카페에서 텀블러 사용시 할인을 해주는 경우도 있습니다.</div>
              </div>
              <div class="zero__stit">
                    4. 장바구니 사용
                <div class="zero__sdesc">비닐봉지나 종이봉투 대신 장바구니 사용을 추천드립니다. <br><br> 
                  국내 대형마트 3개사 기준 연간 655톤의 폐기물이 발생한다고 합니다. <br><br>
                  장바구니나 에코백을 챙겨 장을 보는 자체만으로 제로웨이스트 실천입니다.</div>
              </div>
              <div class="zero__stit">
                    5. 다회용품 사용하기
                <div class="zero__sdesc">플라스틱 빨대가 바다로 흘러들어가면 바다생물의 몸에 꽂히는 등 흉기가 될 수 있다고 합니다. <br><br> 실리콘 빨대, 스테인리스 빨대 등의 다회용품을 사용해 쓰레기 배출을 하는 것을 추천드립니다.</div>
              </div>
              <div class="zero__stit">
                    6. 분리 수거 철저히 하기
                <div class="zero__sdesc">분리수거만 잘 해도 쓰레기가 줄어듭니다. <br><br> 분리수거가 잘 된 쓰레기들은 재활용이 되어 환경에 도움이 됩니다.</div>
              </div>
              <div class="zero__stit">
                    7. 필요한 물건만 구매하기 
                <div class="zero__sdesc">물건을 구매하기 전, 그 물건이 꼭 필요한지 생각하고 구매해야 합니다. <br><br> 불필요한 소비는 쓰레기를 만들기 때문입니다. <br><br>
                  충동구매를 하지 않는 것도 제로웨이스트 실천 방법입니다. 
              </div>
            </div>
          </div>
        </section>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
</html>
