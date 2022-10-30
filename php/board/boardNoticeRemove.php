<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myNoticeBoardID = $_GET['myNoticeBoardID'];
    $myNoticeBoardID = $connect -> real_escape_string($myNoticeBoardID);

    if( $_SESSION['myMemberID'] === '1'){
        $sql = "DELETE FROM myNoticeBoard WHERE myNoticeBoardID = {$myNoticeBoardID}";
    } else {
        echo "<script>alert('공지사항 삭제 권한이 없습니다.');</script>";
    }
    $connect -> query($sql);
?>

<script>
    location.href="boardNotice.php";
</script>