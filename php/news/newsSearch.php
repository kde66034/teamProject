<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기후 소식 검색결과</title>
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
                <h2>기후 소식</h2>
                <p>기후 위기와 관련된 소식을 전해드립니다. <br> 국내외 기후 뉴스와 캠페인 소식 등을 받아보세요.</p>
                <img src="../assets/img/board_img01.png" alt="기후 소식 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="newsBoard">
            <div class="newsBoard__wrap container">
                <h2>기후 소식 검색결과</h2>
<?php
    if(isset($_GET['page'])){
        $page = (int)$_GET['page'];
        } else {
            $page = 1;
        }

    function msg($alert){
        echo "<p>총 <em>".$alert."</em>건이 검색되었습니다.</p>";
    }

    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];

    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    $sql = "SELECT b.newsID, b.newsTitle, b.newsContents, b.newsCategory, m.youName, newsImgFile, b.newsRegTime, b.newsView FROM newsBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID)";

    switch($searchOption){
        case "title":
            $sql .= "WHERE b.newsTitle LIKE '%{$searchKeyword}%' ORDER BY newsID DESC ";
            break;
        case "content":
            $sql .= "WHERE b.newsContents LIKE '%{$searchKeyword}%' ORDER BY newsID DESC ";
            break;
        case "name":
            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY newsID DESC ";
            break;
        // 다 아닐 때 default 써줄 수 있는데 생략 가능
    }
    // 보내주기
    $result = $connect -> query($sql);

    // 전체 게시글 갯수
    $totalCount = $result -> num_rows;
    msg($totalCount);
?>
<?php
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
        
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $news = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='news__document'>";
                echo "<a href='newsView.php?newsID=".$news['newsID']."'>";
                echo "<div class='news__contents'>";
                echo "<figure>";
                echo "<img src='../assets/img/news/".$news['newsImgFile']."' alt='뉴스 썸네일'>";
                echo "</figure>";
                echo "<div class='news__info'>";
                echo "<h3 class='news__title'>【".$news['newsCategory']."】".$news['newsTitle']."</h3>";
                echo "<p class='news__desc'>".$news['newsContents']."</p>";
                echo "<div class='news__date'><p>".$news['youName']." <em> | </em> ".date('Y-m-d', $news['newsRegTime'])."</p></div>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
            }
        }else {
            echo "<h4>등록된 뉴스 기사가 없습니다.</h4>";
        }
    }
?>

                <div class="board__pages">
                    <ul>
<?php
    // 총 페이지 갯수
    $newsCount = ceil($totalCount / $viewNum);

    // 현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;
    // 처음 페이지 초기화  (첫 페이지인 1을 기준으로 -4부터 나옴)
    if($startPage < 1) $startPage = 1;
    // 마지막 페이지 초기화
    if($endPage >= $newsCount) $endPage = $newsCount;
    // 이전 페이지, 처음 페이지로 이동
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='newsSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음으로</a></li>";
        echo "<li><a href='newsSearch.php?page={$prevPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>이전</a></li>";
    }
    // 페이지 넘버 표시 (순서 중요! 가운데에 위치해야 함)
    for($i= $startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='newsSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}</a></li>";
    }
    // 다음 페이지, 마지막 페이지로 이동
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='newsSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";
        echo "<li><a href='newsSearch.php?page={$newsCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막으로</a></li>";
    }
?>
                    </ul>
                </div>
            </div>
        </section>
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