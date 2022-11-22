<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $newsID = $_GET['newsID'];
    $newsSql = "SELECT * FROM newsBoard WHERE newsID = '$newsID'";
    $newsResult = $connect -> query($newsSql);
    $newsInfo = $newsResult -> fetch_array(MYSQLI_ASSOC);

    // 댓글
    if(!isset($_SESSION['myMemberID'])) {
        $myMemberID = -1;
    }
    else {
        $myMemberID = $_SESSION['myMemberID'];
    }
    $youEmail = $_SESSION['youEmail'];
    $myNewsID = $_GET['newsID'];

    $commentSql = "SELECT * FROM myNewsComment WHERE newsID = '$myNewsID' ORDER BY myCommentID DESC";
    $commentResult = $connect -> query($commentSql);
    $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>지구ON 기후 소식</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">

    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/board.css">
    <link rel="stylesheet" href="../assets/css/news.css">
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
        <section id="news">
            <div class="news__inner">
                <div class="news__titleBox" style="background-image:url(../assets/img/news/<?=$newsInfo['newsImgFile']?>)">
                    <a href="newsCategory.php?category=<?=$newsInfo['newsCategory']?>"><span class="news__title__cate"><?=$newsInfo['newsCategory']?></span></a>
                    <h2 class="news__title__h1"><?=$newsInfo['newsTitle']?></h2>
                    <div class="news__title__info">
                        <div>
                            <span class="author"><?=$newsInfo['newsAuthor']?> 기자</span>
                            <span class="date"><?=date('Y-m-d', $newsInfo['newsRegTime'])?></span>
                        </div>
                        <div>
                            <a href="newsModify.php?newsID=<?=$newsID?>" class="modify">수정</a>
                            <a href="newsRemove.php?newsID=<?=$newsID?>" class="delete">삭제</a>
                        </div>
                    </div>
                </div>
                <!-- //title -->

                <div class="news__contents container">
                    <div class="news__contents__cont">
                        <img src="../assets/img/news/<?=$newsInfo['newsImgFile']?>" alt="<?=$newsInfo['newsTitle']?>">
                        <?=$newsInfo['newsContents']?>
                    </div>
                    <!-- //cont -->

                    <div class="news__contents__comment">
                        <div class="comment__title">
                            <h3>
                                <img src="../assets/img/comment.png" alt="댓글 작성하기">
                                댓글 작성하기
                            </h3>
                        </div>
                            <?php
    foreach($commentResult as $comment){ ?>
        <div class="comment" id="comment<?=$comment['myCommentID']?>">
        <div class="comment__view">
            <div class="comment__view__img">
                <img src="../assets/img/personal.png" alt="<?=$comment['commentName']?>">
            </div>
            <div class="comment__view__data">
                <span class="name"><?=$comment['commentName']?></span>
                <span class="date"><?=date('Y-m-d', $comment['regTime'])?></span>
            </div>
            <div class="comment__view__msg">
                <?=$comment['commentMsg']?>
            </div>
        </div>
        <div class="comment__del">
            <a href="#" class="comment__del__del">삭제</a>
            <a href="#" class="comment_del__mod">수정</a>
        </div>
    </div>
<?php } ?>
                        <div class="comment__inner">
                            <div class="comment__delete" style="display: none">
                                <label for="commentDeletePass">비밀번호</label>
                                <input type="password" id="commentDeletePass" name="commentDeletePass">
                                <button id="commentDeleteCancel">취소</button>
                                <button id="commentDeleteButton">삭제</button>
                            </div>
                            <div class="comment__modify" style="display: none">
                                <label for="commentModifyMsg">수정 내용</label>
                                <input type="text" id="commentModifyMsg" name="commentModifyMsg">
                                <label for="commentModifyPass">비밀번호</label>
                                <input type="password" id="commentModifyPass" name="commentModifyPass">
                                <button id="commentModifyCancel">취소</button>
                                <button id="commentModifyButton">수정</button>
                            </div>
                            <div class="comment__write">
                                <div class="comment__write__info">
                                    <label for="commentName">이름</label>
                                    <input type="text" id="commentName" name="commentName" placeholder="이름">
                                    <label for="commentPass">비밀번호</label>
                                    <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호">
                                    <button type="submit" id="commentBtn">댓글 쓰기</button>
                                </div>
                                <div class="comment__write__msg">
                                    <label for="commentWrite">댓글</label>
                                    <input type="text" id="commentWrite" name="commentWrite" placeholder="댓글을 입력해주세요.">
                                </div>
                            </div>
                        </div>
                        <!-- //news__contents__comment -->
                    </div> 
            </div>
            <!-- //news__inner -->
        </section>
        <!-- //news -->
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

<script>
        // 댓글 창 접었다 펼치기
        const commentMenuOpen = $(".news__contents__comment .open");
        const commentMenuClose = $(".news__contents__comment .close");
        const commentTitle = $(".comment__title");
        const commentTitleH3 = $(".news__contents__comment h3");
        const commentTitleEm = $(".news__contents__comment h3 em");
        const commentImg = $(".comment__title h3 img:nth-child(1)");
        const commentImg1 = $(".comment__title h3 img:nth-child(2)");
        commentMenuOpen.click(function(e){
            e.preventDefault();
            $(".comment__inner").css("display","block");
            $(".open").css("display","none"); 
            $(".close").css("display","inline-block");
            commentTitle.addClass("fold");
            commentTitleH3.addClass("fold");
            commentTitleEm.addClass("fold");
            commentImg1.css("display","inline-block");
            commentImg.css("display","none");
        });
        commentMenuClose.click(function(e){
            e.preventDefault();
            $(".comment__inner").css("display","none");
            $(".open").css("display","inline-block"); 
            $(".close").css("display","none");
            commentTitle.removeClass("fold");
            commentTitleH3.removeClass("fold");
            commentTitleEm.removeClass("fold");
            commentImg1.css("display","none");
            commentImg.css("display","inline-block");
        });
 

        // 댓글 수정, 삭제 등등
        const commentName = $("#commentName"); //댓글 이름
        const commentPass = $("#commentPass"); //댓글 비밀번호
        const commentWrite = $("#commentWrite"); //댓글 내용
        let commentID = "";
        // 댓글 삭제 버튼 클릭시
        $(".comment__del__del").click(function(e){
            e.preventDefault();
            // alert("댓글 삭제 버튼 클릭시");
            $(".comment__delete").css("display","block");
            // 클릭했을때 댓글 아이디값 가져오기
            commentID = $(this).parent().parent().attr("id");
        })
        // 댓글 삭제 버튼 > 취소 버튼 클릭시
        $("#commentDeleteCancel").click(function(){
            $(".comment__delete").hide();
        })
        // 댓글 삭제 버튼 > 삭제 버튼 클릭시
        $("#commentDeleteButton").click(function(){
            let number = commentID.replace(/[^0-9]/g, "");
            let myMemberID = <?=$myMemberID?>

            if($("#commentDeletePass").val() == ''){
                alert("댓글 작성시 비밀번호를 적어주세요!");
            $("#commentDeletePass").focus();
            }else{
                $.ajax({
                    url: "newsCommentDelete.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "pass" : $("#commentDeletePass").val(),
                        "commentID": number,
                        "myMemberID": myMemberID,
                    },
                    success: function(data) {
                        if(data.info === "good"){
                            alert("댓글이 삭제되었습니다.");
                            location.reload();
                        }
                        else {
                            alert("비밀번호가 일치하지 않거나 본인이 작성한 댓글이 아닙니다.");
                        }
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        })
        // 댓글 수정 버튼 클릭시
        $(".comment_del__mod").click(function(e){
            e.preventDefault();
            // alert("댓글 수정 버튼 클릭시");
            $(".comment__modify").slideDown();
            commentID = $(this).parent().parent().attr("id");
        })
        // 댓글 수정 버튼 > 취소 버튼
        $("#commentModifyCancel").click(function(e){
            e.preventDefault();
            $(".comment__modify").hide();
        })
        // 댓글 수정 버튼 > 수정 버튼
        $("#commentModifyButton").click(function(e){
            e.preventDefault();
            let number = commentID.replace(/[^0-9]/g, "");
            if($("#commentModifyMsg").val() == '' || $("#commentModifyPass").val() == ''){
                alert("수정 내용 및 비밀번호를 입력해주세요!");
                $("#commentModifyMsg").focus();
            } else {
                $.ajax({
                    url: "newsCommentModify.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "msg": $("#commentModifyMsg").val(),
                        "pass": $("#commentModifyPass").val(),
                        "commentID": number,
                        "myMemberID": <?=$myMemberID?>
                    },
                    success: function(data) {
                        if(data.info === "good"){
                            alert("댓글이 수정되었습니다.");
                            location.reload();
                        }
                        else {
                            alert("비밀번호가 일치하지 않거나 본인이 작성한 댓글이 아닙니다.");
                        }
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        })
        // 댓글 쓰기
        $("#commentBtn").click( () => {
            if($("#commentWrite").val() == ""){
                alert("댓글을 작성해주세요!")
                $("#commentWrite").focus();
            } else {
                $.ajax({
                    url: "newsCommentWrite.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "newsID": <?=$newsID?>,
                        "name": commentName.val(),
                        "pass": commentPass.val(),
                        "msg": commentWrite.val(),
                        "myMemberID": <?=$myMemberID?>
                    },
                    success: function(data) {
                        console.log(data);
                        location.reload();
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                });
            }
        });
    </script>
</html>