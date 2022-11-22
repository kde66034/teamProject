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
    $myBoardID = $_POST['myBoardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = nl2br($_POST['boardContents']);
    $myMemberID = $_SESSION['myMemberID'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);

    $sql = "SELECT myMemberID FROM myBoard WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['myMemberID'] === $myMemberID){
        $sql = "UPDATE myBoard SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE myBoardID = '{$myBoardID}'";
        $connect -> query($sql);
    }else {
        echo "<script>alert('직접 작성한 게시글만 수정할 수 있습니다.')</script>";
    }
?>
<script>
    location.href="boardStory.php";
</script>


</body>
</html>