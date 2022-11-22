<header id="header">
    <div class="header__wrap">
      <h1>
        <a href="../main/main.php"><img src="../assets/img/footer_logo.png" alt="지구ON 로고" /></a>
      </h1>
      <h2>
        <a href="../main/main.php"><img src="../assets/img/logo.png" alt="지구ON 로고" /></a>
      </h2>
    </div>
    <!-- 메인 전용 헤더 -->
    <nav class="mainpage__nav">

<?php if( isset($_SESSION['myMemberID']) ){ ?>
        <ul class="mainpage__menuWrap">
            <li><a href="../myPage/PWcheck.php" class="mainpage_member_info"><?=$_SESSION['youName']?>님 환영합니다!</a></li>
            <li><a href="../login/logout.php">로그아웃</a></li>
          </ul>
        <?php } else { ?>
        <ul class="mainpage__menuWrap">
            <li><a href="../login/login2.php" class="mainpage_member_info">로그인하기</a></li>
        </ul>
<?php } ?>

      <ul class="mainpage__menuWrap">
        <li>
          <a href="../introduce/introduce.php" class="big_menu">지구ON 소개</a>
          <ul class="m__submenu">
            <li><a href="../introduce/introduce.php">스토리</a></li>
          </ul>
        </li>
      </ul>
      <ul class="mainpage__menuWrap">
        <li>
          <a href="../news/newsMain.php" class="big_menu">기후 소식</a>
          <ul class="m__submenu">
            <li><a href="../news/newsCategory.php?category=국내기후뉴스">국내 뉴스</a></li>
            <li><a href="../news/newsCategory.php?category=해외기후뉴스">해외 뉴스</a></li>
            <li><a href="../news/newsCategory.php?category=캠페인정보">캠페인 정보</a></li>
          </ul>
        </li>
      </ul>
      <ul class="mainpage__menuWrap">
        <li>
          <a href="../gihusilcheon/silcheonMain.php" class="big_menu">기후 실천</a>
          <ul class="m__submenu">
            <li><a href="../gihusilcheon/silcheonHow.php">기후 실천 방법</a></li>
            <li><a href="../gihusilcheon/silcheonQuiz.php">기후 퀴즈</a></li>
          </ul>
        </li>
      </ul>
      <ul class="mainpage__menuWrap">
        <li>
          <a href="../zerowaste/zerowasteMain.php" class="big_menu">제로웨이스트</a>
          <ul class="m__submenu">
            <li><a href="../zerowaste/zerowasteMain.php">제로웨이스트란?</a></li>
          </ul>
        </li>
      </ul>
      <ul class="mainpage__menuWrap">
        <li>
          <a href="../board/boardStory.php" class="big_menu">커뮤니티</a>
          <ul class="m__submenu">
            <li><a href="../board/boardNotice.php">공지사항</a></li>
            <li><a href="../board/boardStory.php">이야기방</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="header__menu__button">
      <div class="header__ham">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu__text">MENU</div>
    </div>
  </header>