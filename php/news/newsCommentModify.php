<?php
    include "../connect/session.php";
    include "../connect/connect.php";

    if(!isset($_SESSION['myMemberID'])){
        echo "<script>window.alert('댓글을 수정할 권한이 없습니다.'); history.back();</script>";
    }

    $commentMsg = $_POST['msg'];
    $commentPass = $_POST['pass'];
    $commentID = $_POST['commentID'];
    $sql = "UPDATE myNewsComment SET commentMsg = '{$commentMsg}', commentPass = '{$commentPass}' WHERE myCommentID = '{$commentID}'";
    $result = $connect -> query($sql);
    echo json_encode(array("info" => $commentID));
?>