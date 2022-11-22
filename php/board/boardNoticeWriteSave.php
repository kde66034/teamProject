<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck2.php";

    $NoticeTitle = $_POST['NoticeTitle'];
    $NoticeContents = nl2br($_POST['NoticeContents']);

    $NoticeTitle = $connect -> real_escape_string($NoticeTitle);
    $NoticeContents = $connect -> real_escape_string($NoticeContents);
    $NoticeView = 1;
    $regTime = time();
    $myAdminMemberID = $_SESSION['myMemberID'];
    $sql = "INSERT INTO myNoticeBoard(myAdminMemberID, NoticeTitle, NoticeContents, NoticeView, regTime) VALUES('$myAdminMemberID','$NoticeTitle', '$NoticeContents', '$NoticeView', '$regTime')";
    $connect -> query($sql);
?>
<script>
    location.href = "boardNotice.php";
</script>