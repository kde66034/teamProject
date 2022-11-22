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
    <title>마이 페이지 - 탈퇴하기</title>

    <?php include "../include/link.php" ?>
</head>

<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section id="join" class="container">
            <h2>탈퇴하기</h2>
            <div class="join__inner">
                <h3>회원 정보 입력</h3>
                <p class="mt30">정말 탈퇴하시겠습니까? 탈퇴하셔도 작성하셨던 게시글과 댓글은 그대로 유지됩니다.
                    탈퇴를 원하신다면 비밀번호를 입력해주세요.
                </p>
                <form action="removeAccountSave.php" name="remove" method="post">
                    <fieldset>
                        <legend>회원탈퇴</legend>
                        <div class="join__box">
                            <div>
                                <label for="youPass">비밀번호 입력</label>
                                <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요!" maxlength="20" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="joinend__btn">
                            <a href="editInfo.php">돌아가기</a>
                            <button type="submit" class="joinfinish">탈퇴하기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <footer id="join__footer">지구 ON</footer>
        </section>
        <!-- //remove -->
    </main>
    <!-- //main -->

    <?php include "../login/login.php" ?>
    <!-- //login -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>