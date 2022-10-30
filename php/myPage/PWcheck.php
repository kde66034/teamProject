<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이 페이지 - 비밀번호 확인</title>

    <?php include "../include/link.php" ?>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <section id="PWcheck">
        <h2>마이 페이지</h2>
        <div class="myBannerImg"></div>
        <div class="box__line1 container">
            <div class="PWcheck__wrap">
                <h3>회원 비밀번호 확인 <span>* 회원정보 확인을 위해 비밀번호를 입력해주세요!</span></h3>
                <form name="PWcheck" action="PWcheckSave.php" method="post">
                    <div class="PWcheck__box">
                        <label for="youPass">비밀번호</label>
                        <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요." required>
                    </div>
                    <div class="PWcheck__btn">
                        <button type="submit" class="PWcheck__end">비밀번호 확인</button>
                    </div>
                </form>
            <div>
        </div>
    </section>
    <!-- //PWcheck -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>