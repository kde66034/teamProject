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
    $NoticeContents = $_POST['NoticeContents'];
    $youPass = $_POST['youPass'];
    $myAdminMemberID = $_SESSION['myMemberID'];

    $NoticeTitle = $connect -> real_escape_string($NoticeTitle);
    $NoticeContents = $connect -> real_escape_string($NoticeContents);

    $sql = "SELECT youPass, myMemberID FROM myMember WHERE myMemberID = {$myAdminMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    //서버에 있는 유패스memberInfo['youPass']랑 우리 유패스랑 같은지
    if($memberInfo['youPass'] === $youPass && $memberInfo['myMemberID'] === $myAdminMemberID){
        $sql = "UPDATE myNoticeBoard SET NoticeTitle = '{$NoticeTitle}', NoticeContents = '{$NoticeContents}' WHERE myNoticeBoardID = '{$myNoticeBoardID}'";
        $connect -> query($sql);
    }else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요!')</script>";
    }
?>
<script>
    location.href="boardNotice.php";
</script>


</body>
</html>