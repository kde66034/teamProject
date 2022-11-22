<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $category = $_GET['category'];
    
    $categorySql = "SELECT * FROM newsBoard WHERE newsDelete = 0 AND newsCategory = '$category' ORDER BY newsID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
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

        <section id="newsBoard">
            <div class="newsBoard__wrap container">
                <h2><?=$categoryInfo['newsCategory']?> 목록</h2>
                <!-- <p>총 128건의 뉴스가 있습니다.</p> -->
                <p>
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
                echo "총 <em>".$categoryCount."</em>건의 뉴스가 등록되어 있습니다.";
?>          
                </p>

<?php           
                if(isset($_GET['page'])){
                    $page = (int)$_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $viewNum = 10;
                    $viewLimit = ($viewNum * $page) - $viewNum;

                    $sql = "SELECT * FROM newsBoard WHERE newsDelete = 0 AND newsCategory = '$category' ORDER BY newsID DESC LIMIT {$viewLimit}, {$viewNum}";
                    $result = $connect -> query($sql);

                foreach($result as $news){ ?>

                <div class="news__document">
                    <a href="newsView.php?newsID=<?=$news['newsID']?>">
                        <div class="news__contents">
                            <figure>
                                <img src="../assets/img/news/<?=$news['newsImgFile']?>" alt="뉴스 썸네일">
                            </figure>
                            <div class="news__info">
                                <h3 class="news__title"><?=$news['newsTitle']?></h3>
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

<?php           } ?>
                <!-- // 뉴스 목록 -->

                <div class="board__search mt60">
                    <div class="left">
                        <form action="newsSearch.php" name="newsSearch" method="get">
                            <fieldset>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">전체</option>
                                    <option value="title">제목</option>
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
    $sql = "SELECT count(newsID) FROM newsBoard WHERE newsCategory = '$category'";
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
        echo "<li><a href='newsCategory.php?category={$categoryInfo['newsCategory']}&page=1'>처음으로</a></li>";
        echo "<li><a href='newsCategory.php?category={$categoryInfo['newsCategory']}&page={$prevPage}'>이전</a></li>";
    }
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='newsCategory.php?category={$categoryInfo['newsCategory']}&page={$i}'>{$i}</a></li>";
    }
    // 다음 페이지, 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='newsCategory.php?category={$categoryInfo['newsCategory']}&page={$nextPage}'>다음</a></li>";
        echo "<li><a href='newsCategory.php?category={$categoryInfo['newsCategory']}&page={$newsCount}'>마지막으로</a></li>";
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