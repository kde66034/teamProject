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
    <title>지구ON 기후 실천</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">

    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/silcheon.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/login.css">
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
        <section id="banner">
            <div class="banner__wrap">
                <h2>기후 실천</h2>
                <p>
                    건강한 지구를 위한 우리의 노력, 어디서든 실천할 수 있습니다.<br>
                    지구를 위한 좋은 습관, 지구ON과 함께해요!
                </p>
                <img src="../assets/img/iLoveEarth.png" alt="기후 실천 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="silcheonMain">
            <div class="silcheonMain__wrap">
                <h2>지구와 인류 모두를 위한 기후 실천!</h2>
                <p>
                    기후위기로부터 지구와 인류를 모두 지키기 위한 「기후 실천」에는 어떤 것들이 있을까요? <br>
                    기후 실천 방법과 기후 실천에 대한 지식을 배울 수 있는 기후 퀴즈에 참여해보세요!
                </p>
                <div class="card__inner container">
                    <article class="card">
                        <a href="silcheonHow.php">
                            <figure class="card__header">
                                <img src="../assets/img/gihusilcheon/card_bg01.jpg" alt="국내 뉴스">
                            </figure>
                            <div class="card__body">
                                <h3 class="title">기후 실천 방법</h3>
                                <p class="desc">
                                    기후 위기에 대응하기 위한 기후행동 실천 방법에 대해 알려드립니다.
                                </p>
                                <a class="btn" href="silcheonHow.php">
                                    보러가기
                                </a>
                            </div>
                        </a>
                    </article>
                    <article class="card">
                        <a href="silcheonQuiz.php">
                            <figure class="card__header">
                                <img src="../assets/img/gihusilcheon/card_bg02.jpg" alt="해외 뉴스">
                            </figure>
                            <div class="card__body">
                                <h3 class="title">기후 퀴즈</h3>
                                <p class="desc">
                                    기후 위기와 탄소중립의 중요성에 대해 배우기 위한 기후 퀴즈를 풀어봐요!
                                </p>
                                <a class="btn" href="silcheonQuiz.php">
                                    보러가기
                                </a>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../login/login.php" ?>
    <!-- //login -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
</html>