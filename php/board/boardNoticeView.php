<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myNoticeBoardID = $_GET['myNoticeBoardID'];
    $boardSql = "SELECT * FROM myNoticeBoard WHERE myNoticeBoardID = '$myNoticeBoardID'";
    $boardResult = $connect -> query($boardSql);
    $boardInfo = $boardResult -> fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>지구ON 커뮤니티 공지사항</title>

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
        <section id="banner">
            <div class="banner__wrap">
                <h2>커뮤니티</h2>
                <p>이곳은 소통하는 공간입니다. <br> 지구 ON은 당신이 서 있는 오늘과 걸어온 모든 하루를 응원합니다.</p>
                <img src="../assets/img/board_img01.png" alt="커뮤니티 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="board" class="container">
            <h2>공지사항</h2>
            <div class="board__inner">
                <div class="board__view">
                    <table>
                        <colgroup>
                            <col style="width: 20%">
                            <col style="width: 80%">
                        </colgroup>
                        <tbody>
<?php
    $myNoticeBoardID = $_GET['myNoticeBoardID'];

    // echo $myBoardID;

    $sql = "SELECT b.NoticeTitle, m.youName, b.regTime, b.NoticeView, b.NoticeContents FROM myNoticeBoard b JOIN myMember m ON(m.myMemberID = b.myAdminMemberID) WHERE b.myNoticeBoardID = {$myNoticeBoardID}";
    $result = $connect -> query($sql);

    // 보드뷰 + 1
    $sql = "UPDATE myNoticeBoard SET NoticeView = NoticeView + 1 WHERE myNoticeBoardID = {$myNoticeBoardID}";
    $connect -> query($sql);

    if($result) {
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        // echo "<pre>";
        // var_dump($info);
        // echo "</pre>";

        echo "<tr><th>제목</th><td>".$info['NoticeTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>작성일</th><td>".date('Y-m-d H:i', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['NoticeView']."</td></tr>";
        echo "<tr><th>내용</th><td class='height'>".$info['NoticeContents']."</td></tr>";
    }
?>
                            
                        </tbody>
                    </table>
                </div>

                <div class="board__btn">
                    <a href="boardNoticeModify.php?myNoticeBoardID=<?=$myNoticeBoardID?>">수정하기</a>
                    <a href="boardNoticeRemove.php?myNoticeBoardID=<?=$myNoticeBoardID?>" onclick="alert('정말 삭제하시겠습니까?')">삭제하기</a>
                    <a href="boardNotice.php">목록으로</a>
                </div>
            </div>
            <!-- //board__inner -->
        </section>
        <!-- //board -->
        
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../login/login.php" ?>
    <!-- //login -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>