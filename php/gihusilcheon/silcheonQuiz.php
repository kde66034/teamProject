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
    <title>지구ON 기후 실천 - 기후 실천 퀴즈</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">

    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/quiz.css">
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

    <section id="climateQuiz">
        <div class="quiz__title">
            <img src="../assets/img/quizicon.png" alt="QnA" class="img1">
            <h2>기후실천 퀴즈</h2>
            <img src="../assets/img/quizicon2.png" alt="saveEarth" class="img2">
        </div>
        <p>
            퀴즈를 풀면서 기후 위기에 대한 예방 및 실천의 중요성을 배우고, <br>
            지구 환경을 지키기 위한 실천 방법을 배워봅시다.
        </p>
        <div class="quiz__wrap container">
            <div class="quiz__inner">
                <div class="quiz__question">
                    <!-- <div class="quiz__number">1</div>
                    <div class="quiz__ask">퀴즈 질문입니다.</div> -->
                </div>
                <!-- //quiz__question -->
                <div class="quiz__view">
                    <div class="true">정답입니다 🤓</div>
                    <div class="false">오답입니다 🥺</div>
                    <div class="quiz__result"></div>
                </div>
                <!-- //quiz__view --> 
                <div class="quiz__answer">
                    <div class="quiz__selects">
                        <!-- <label for="select1">
                            <input type="radio" id="select1" class="select" name="select" value="1">
                            <span class="choice img1"></span>
                        </label>
                        <label for="select2">
                            <input type="radio" id="select2" class="select" name="select" value="2">
                            <span class="choice img2"></span>
                        </label> -->
                    </div>
                    <!-- //quiz__selects -->
                </div>
                <!-- //quiz__answer -->
            </div>
            <!-- //quiz__inner -->
            <div class="quiz__start">
                <img src="../assets/img/quizicon3.png" alt="earthON">
                <div class="startBtn">시작하기</div>
            </div>
            <div class="quiz__foot">
                <button class="quiz__confirm">다음 문제로 👉</button>
                <div class="finish">
                    <div class="finishCont">10개를 맞추었습니다.</div>
                    <button class="restart">🔙 다시 풀어보기</button>
                </div>
            </div>
        </div>
        <!-- //quiz__wrap -->
    </section>
    <!-- //climateQuiz -->
    
    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../login/login.php" ?>
    <!-- //login -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/quiz.js"></script>
</html>