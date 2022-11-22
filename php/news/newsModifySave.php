<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
    $newsID = $_POST['newsID'];
    $newsTitle = $_POST['newsTitle'];
    $newsContents = $_POST['newsContents'];
    $newsCategory = $_POST['newsCategory'];
    $myMemberID = $_SESSION['myMemberID'];

    $newsTitle = $connect -> real_escape_string($newsTitle);
    $newsContents = $connect -> real_escape_string($newsContents);

    $sql = "SELECT myMemberID FROM newsBoard WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['myMemberID'] === $myMemberID){
        $sql = "UPDATE newsBoard SET newsTitle = '{$newsTitle}', newsContents = '{$newsContents}', newsCategory = '{$newsCategory}' WHERE newsID = '{$newsID}'";
        $connect -> query($sql);
    }else {
        echo "<script>alert('직접 작성한 게시글만 수정할 수 있습니다.')</script>";
    }

    // $sql = "SELECT youPass, myMemberID FROM myMember WHERE myMemberID = {$myMemberID}";
    // $sql = "UPDATE newsBoard SET newsTitle = '{$newsTitle}', newsContents = '{$newsContents}' WHERE newsID = '{$newsID}'";
    // $result = $connect -> query($sql);

    // $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    // $connect -> query($sql);

    //서버에 있는 유패스memberInfo['youPass']랑 우리 유패스랑 같은지
    // if($memberInfo['youPass'] === $youPass && $memberInfo['myMemberID'] === $myMemberID){
    //     $sql = "UPDATE myBoard SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE myBoardID = '{$myBoardID}'";
    //     $connect -> query($sql);
    // }else {
    //     echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요!')</script>";
    // }
?>
<script>
    location.replace('newsMain.php');
</script>


</body>
</html>