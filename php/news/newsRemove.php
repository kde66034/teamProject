<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $newsID = $_GET['newsID'];
    $newsID = $connect -> real_escape_string($newsID);

    $sql = "DELETE FROM newsBoard WHERE newsID = {$newsID}";
    $connect -> query($sql);
?>

<script>
    alert("뉴스 기사가 삭제되었습니다.");
    history.go(-2);
</script>