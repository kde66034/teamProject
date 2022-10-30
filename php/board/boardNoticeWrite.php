<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck2.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>지구ON 커뮤니티 공지사항 글쓰기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <?php include "../include/header.php" ?>

    <main id="main">
        <section id="banner">
            <div class="banner__wrap">
                <h2>커뮤니티</h2>
                <p>이곳은 소통하는 공간입니다. <br> 지구 ON은 당신이 서 있는 오늘과 걸어온 모든 하루를 응원합니다.</p>
                <img src="../assets/img/board_img01.png" alt="커뮤니티 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="board" class="container">
            <h2>공지사항 작성하기</h2>
            <div class="board__inner">
                <div class="board__write">
                    <form action="boardNoticeWriteSave.php" name="noticeWrite" method="post">
                        <fieldset>
                            <legend>공지사항 작성 영역</legend>
                            <div>
                                <label for="NoticeTitle">제목</label>
                                <input type="text" name="NoticeTitle" id="NoticeTitle" placeholder="공지사항 제목을 입력해주세요.">
                            </div>
                            <div>
                                <label for="NoticeContents">내용</label>
                                <textarea name="NoticeContents" id="NoticeContents" rows="20" placeholder="공지사항 본문을 입력해주세요."></textarea>
                            </div>
                            <div class="board__write__btn">
                                <a href="boardNotice.php" class="back_btn">게시판으로</a>
                                <button type="submit" class="btn">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <!-- //board -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>