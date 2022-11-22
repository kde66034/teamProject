<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $myNoticeBoardID = $_POST['myNoticeBoardID'];
    $NoticeTitle = $_POST['NoticeTitle'];
    $NoticeContents = nl2br($_POST['NoticeContents']);
    $youPass = $_POST['youPass'];
    $myAdminMemberID = '1';

    $NoticeTitle = $connect -> real_escape_string($NoticeTitle);
    $NoticeContents = $connect -> real_escape_string($NoticeContents);

    $sql = "SELECT myAdminMemberID FROM myNoticeBoard WHERE myAdminMemberID = {$myAdminMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['myAdminMemberID'] == $myAdminMemberID){
        $sql = "UPDATE myNoticeBoard SET NoticeTitle = '{$NoticeTitle}', NoticeContents = '{$NoticeContents}' WHERE myNoticeBoardID = '{$myNoticeBoardID}'";
        $connect -> query($sql);
    }else {
        echo "<script>alert('공지사항 게시글을 수정할 권한이 없습니다.')</script>";
    }
?>
<script>
    location.href="boardNotice.php";
</script>


</body>
</html>