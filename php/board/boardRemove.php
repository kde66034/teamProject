<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myBoardID = $_GET['myBoardID'];
    $myMemberID = $_SESSION['myMemberID'];

    $myBoardID = $connect -> real_escape_string($myBoardID);

    $sql = "SELECT myMemberID FROM myBoard WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['myMemberID'] === $myMemberID){
        $sql = "DELETE FROM myBoard WHERE myBoardID = {$myBoardID}";
        $connect -> query($sql);
    } else {
        echo "<script>alert('직접 작성한 게시글만 삭제할 수 있습니다.')</script>";
    }

?>

<script>
    location.href="boardStory.php";
</script>