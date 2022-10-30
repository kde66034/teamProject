<?php
    include "../connect/connect.php";
    $newsID = $_POST["newsID"];
    $commentName = $_POST["name"];
    $commentPass = $_POST["pass"];
    $commentMsg = $_POST["msg"];
    $regTime = time();
    $sql = "INSERT INTO myNewsComment (myMemberID, newsID, commentName, commentMsg, commentPass, commentDelete, regTime) VALUES ('1','$newsID','$commentName','$commentMsg','$commentPass','0','$regTime')";
    $result = $connect -> query($sql);
    echo json_encode(array("info" => $newsID));
?>