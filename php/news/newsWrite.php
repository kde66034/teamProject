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
    <title>지구ON 기후 소식 게시글 작성하기</title>

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
        <section id="banner">
            <div class="banner__wrap">
                <h2>기후 소식 글쓰기</h2>
                <p>
                    여러분이 알고 계신 기후 소식을 이곳에 <br>
                    알리는 시민 기자가 되어주세요!
                </p>
                <img src="../assets/img/board_img01.png" alt="기후 소식 게시판 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="news" class="container">
            <h2>기후 소식 글쓰기</h2>
            <div class="news__inner">
                <div class="news__write">
                    <form action="newsWriteSave.php" name="newsWrite" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>기후 소식 작성 영역</legend>
                            <div>
                                <label for="newsCategory">카테고리</label>
                                <select name="newsCategory" id="newsCategory">
                                    <option value="국내기후뉴스">국내 뉴스</option>
                                    <option value="해외기후뉴스">해외 뉴스</option>
                                    <option value="캠페인정보">캠페인 정보</option>
                                </select>
                            </div>
                            <div>
                                <label for="newsTitle">제목</label>
                                <input type="text" name="newsTitle" id="newsTitle" placeholder="게시글의 제목을 입력해주세요.">
                            </div>
                            <div>
                                <label for="newsContents">내용</label>
                                <textarea name="newsContents" id="newsContents" rows="20" placeholder="게시글의 내용을 입력해주세요."></textarea>
                            </div>
                            <div>
                                <label for="newsImgFile">파일</label>
                                <input type="file" name="newsImgFile" id="newsImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                            </div>
                            <div class="news__write__btn">
                                <a href="#" class="back_btn">게시판으로</a>
                                <button type="submit" class="btn">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- //news__inner -->
        </section>
        <!-- //news -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
</html>