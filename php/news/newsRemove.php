<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $newsID = $_POST['newsID'];
    $newsTitle = $_POST['newsTitle'];
    $newsContents = $_POST['newsContents'];
    $newsCategory = $_POST['newsCategory'];
    $myMemberID = $_SESSION['myMemberID'];

    $newsTitle = $connect -> real_escape_string($newsTitle);
    $newsContents = $connect -> real_escape_string($newsContents);

    $newsID = $_GET['newsID'];
    $newsID = $connect -> real_escape_string($newsID);

    $sql = "SELECT myMemberID FROM newsBoard WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['myMemberID'] === $myMemberID){
        $sql = "DELETE FROM newsBoard WHERE newsID = {$newsID}";
        $connect -> query($sql);
        echo "<script>alert('뉴스 기사가 삭제되었습니다.');history.go(-2);</script>";
    }else {
        echo "<script>alert('직접 작성한 게시글만 삭제할 수 있습니다.');history.go(-2);</script>";
    }
?>