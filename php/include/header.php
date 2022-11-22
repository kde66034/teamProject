<header id="header">
    <h1><a href="../main/main.php"><img src="../assets/img/logo.png" alt="지구ON 로고"></a></h1>
    <nav class="header__nav">
        <ul class="clearfix">
            <li><a href="../introduce/introduce.php">지구ON 소개</a>
                <ul class="submenu">
                    <li><a href="../introduce/introduce.php">스토리</a></li>
                </ul>
            </li>
            <li><a href="../news/newsMain.php">기후 소식</a>
                <ul class="submenu">
                    <li><a href="../news/newsCategory.php?category=국내기후뉴스">국내 뉴스</a></li>
                    <li><a href="../news/newsCategory.php?category=해외기후뉴스">해외 뉴스</a></li>
                    <li><a href="../news/newsCategory.php?category=캠페인정보">캠페인 정보</a></li>
                </ul>
            </li>
            <li><a href="../gihusilcheon/silcheonMain.php">기후 실천</a>
                <ul class="submenu">
                    <li><a href="../gihusilcheon/silcheonHow.php">기후 실천 방법</a></li>
                    <li><a href="../gihusilcheon/silcheonQuiz.php">기후 퀴즈</a></li>
                </ul>
            </li>
            <li><a href="../zerowaste/zerowasteMain.php">제로웨이스트</a>
                <ul class="submenu">
                    <li><a href="../zerowaste/zerowasteMain.php">제로웨이스트란?</a></li>
                </ul>
            </li>
            <li><a href="../board/boardStory.php">커뮤니티</a>
                <ul class="submenu">
                    <li><a href="../board/boardNotice.php">공지사항</a></li>
                    <li><a href="../board/boardStory.php">이야기방</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- 반응형 전용 -->
    <nav class="mobile__nav">
        <?php if( isset($_SESSION['myMemberID']) ){ ?>
        <ul class="mobile__menuWrap">
            <li><a href="../myPage/PWcheck.php" class="mobile_member_info"><?=$_SESSION['youName']?>님 환영합니다!</a></li>
            <li><a href="../login/logout.php">로그아웃</a></li>
        </ul>
        <?php } else { ?>
        <ul class="mobile__menuWrap">
            <li><a href="../login/join.php" class="mobile_member_info">회원가입 하러가기</a></li>
        </ul>
        <?php } ?>

        <ul class="mobile__menuWrap">
            <li><a href="../introduce/introduce.php" class="big_menu">지구ON 소개</a>
                <ul class="m__submenu">
                    <li><a href="../introduce/introduce.php">스토리</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="../news/newsMain.php" class="big_menu">기후 소식</a>
                <ul class="m__submenu">
                    <li><a href="../news/newsCategory.php?category=국내기후뉴스">국내 뉴스</a></li>
                    <li><a href="../news/newsCategory.php?category=해외기후뉴스">해외 뉴스</a></li>
                    <li><a href="../news/newsCategory.php?category=캠페인정보">캠페인 정보</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="../gihusilcheon/silcheonMain.php" class="big_menu">기후 실천</a>
                <ul class="m__submenu">
                    <li><a href="../gihusilcheon/silcheonHow.php">기후 실천 방법</a></li>
                    <li><a href="../gihusilcheon/silcheonQuiz.php">기후 퀴즈</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="../zerowaste/zerowasteMain.php" class="big_menu">제로웨이스트</a>
                <ul class="m__submenu">
                    <li><a href="../zerowaste/zerowasteMain.php">제로웨이스트란?</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="../board/boardStory.php" class="big_menu">커뮤니티</a>
                <ul class="m__submenu">
                    <li><a href="../board/boardNotice.php">공지사항</a></li>
                    <li><a href="../board/boardStory.php">이야기방</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="header__login">
    <?php if( isset($_SESSION['myMemberID']) ){?>
        <a href="../myPage/PWcheck.php" class="header__member"><?=$_SESSION['youName']?>님 환영합니다!</a>
        <a href="../login/logout.php">로그아웃</a>
    <?php } else {?>
        <a href="#">로그인</a>
    <?php }?>
    </div>
    <div class="header__ham">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
<!-- // header-->