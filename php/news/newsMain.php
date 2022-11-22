<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
        <section id="banner">
            <div class="banner__wrap">
            <h2>기후 소식</h2>
                <p>기후 위기와 관련된 소식을 전해드립니다. <br>
                    국내외 기후 뉴스와 캠페인 소식 등을 받아보세요.</p>
                <img src="../assets/img/board_img01.png" alt="커뮤니티 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="newsMain">
            <div class="newsMain__wrap">
                <h2>실시간으로 기후 소식들을 받아보세요!</h2>
                <p>국내와 해외(전세계)의 기후 관련 소식들과 캠페인 정보를 전해드립니다.</p>
                <div class="card__inner container">
                    <article class="card">
                        <a href="newsCategory.php?category=국내기후뉴스">
                            <figure class="card__header">
                                <img src="../assets/img/card_bg01.jpg" alt="국내 뉴스">
                            </figure>
                            <div class="card__body">
                                <h3 class="title">국내 뉴스</h3>
                                <p class="desc">
                                    국내의 기후 관련 소식들을 전합니다.
                                </p>
                                <a class="btn" href="newsCategory.php?category=국내기후뉴스">
                                    보러가기
                                </a>
                            </div>
                        </a>
                    </article>
                    <article class="card">
                        <a href="newsCategory.php?category=해외기후뉴스">
                            <figure class="card__header">
                                <img src="../assets/img/card_bg02.jpg" alt="해외 뉴스">
                            </figure>
                            <div class="card__body">
                                <h3 class="title">해외 뉴스</h3>
                                <p class="desc">
                                    전세계의 기후 관련 소식들을 전합니다. 
                                </p>
                                <a class="btn" href="newsCategory.php?category=해외기후뉴스">
                                    보러가기
                                </a>
                            </div>
                        </a>
                    </article>
                    <article class="card">
                        <a href="newsCategory.php?category=캠페인정보">
                            <figure class="card__header">
                                <img src="../assets/img/card_bg03.jpg" alt="캠페인 정보">
                            </figure>
                            <div class="card__body">
                                <h3 class="title">캠페인 정보</h3>
                                <p class="desc">
                                    기후 관련 캠페인 정보를 전합니다.
                                </p>
                                <a class="btn" href="newsCategory.php?category=캠페인정보">
                                    보러가기
                                </a>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section id="newsBoard">
            <div class="newsBoard__wrap container">
                <h2>기후 뉴스 목록</h2>
                <p>
                    <!-- 총 000건의 국내외 기후 소식 및 캠페인 정보들을 만나보세요. -->
<?php
                $sql = "SELECT count(newsID) FROM newsBoard";
                $result = $connect -> query($sql);
                $newsCount = $result -> fetch_array(MYSQLI_ASSOC);
                $newsCount = $newsCount['count(newsID)'];
                if(isset($_GET['page'])){
                    $page = (int)$_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $viewNum = 10;
                    $viewLimit = ($viewNum * $page) - $viewNum;

                echo "총 <em>{$newsCount}</em>건의 국내외 기후 소식 및 캠페인 정보들을 만나보세요.";
?>
                </p>
                <!-- // -->
                
<?php           
                if(isset($_GET['page'])){
                    $page = (int)$_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $viewNum = 10;
                    $viewLimit = ($viewNum * $page) - $viewNum;
                
                $sql = "SELECT * FROM newsBoard WHERE newsDelete = 0 ORDER BY newsID DESC LIMIT {$viewLimit}, {$viewNum}";
                $result = $connect -> query($sql);

                foreach($result as $news){ ?>

                <div class="news__document">
                    <a href="newsView.php?newsID=<?=$news['newsID']?>">
                        <div class="news__contents">
                            <figure>
                                <img src="../assets/img/news/<?=$news['newsImgFile']?>" alt="뉴스 썸네일">
                            </figure>
                            <div class="news__info">
                                <h3 class="news__title">【<?=$news['newsCategory']?>】<?=$news['newsTitle']?></h3>
                                <p class="news__desc">
                                    <?=$news['newsContents']?>
                                </p>
                                <div class="news__date">
                                    <p><?=$news['newsAuthor']?> <em> | </em> <?=date('Y-m-d', $news['newsRegTime'])?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php   } ?>
                <!-- // 뉴스 목록 -->

                <div class="board__search mt60">
                    <div class="left">
                        <form action="newsSearch.php" name="newsSearch" method="get">
                            <fieldset>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="name">등록자</option>
                                </select>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력해주세요!"
                                    aria-label="search" required>
                                <button type="submit" class="searchBtn">검색</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="right">
                        <a href="newsWrite.php" class="btn">글쓰기</a>
                    </div>
                </div>
                <!-- //board__search -->
                <div class="board__pages">
                    <ul>
<?php
    $sql = "SELECT count(newsID) FROM newsBoard";
    $result = $connect -> query($sql);
    $newsCount = $result -> fetch_array(MYSQLI_ASSOC);
    $newsCount = $newsCount['count(newsID)'];

    // if(isset($_GET['page'])){
    //     $page = (int)$_GET['page'];
    // } else {
    //     $page = 1;
    // }
    // $viewNum = 10;
    // $viewLimit = ($viewNum * $page) - $viewNum;
    
    // 총 페이지 개수
    $newsCount = ceil($newsCount/$viewNum);
    // echo $newsCount;
    // 현재 페이지를 기준으로 보여주고 싶은 개수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;
    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;
    // 마지막 페이지 초기화
    if($endPage >= $newsCount) $endPage = $newsCount;
    // 이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='newsMain.php?page=1'>처음으로</a></li>";
        echo "<li><a href='newsMain.php?page={$prevPage}'>이전</a></li>";
    }
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='newsMain.php?page={$i}'>{$i}</a></li>";
    }
    // 다음 페이지, 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='newsMain.php?page={$nextPage}'>다음</a></li>";
        echo "<li><a href='newsMain.php?page={$newsCount}'>마지막으로</a></li>";
    }
?>

                        <!-- <li><a href="#">처음으로</a></li>
                        <li><a href="#">&lt;&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                        <li><a href="#">마지막으로</a></li> -->
                    </ul>
                </div>
                <!-- //board__pages -->
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