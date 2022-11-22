<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $youPass = $_POST['youPass'];

    $checkSql = "SELECT * FROM myMember WHERE myMemberID=$myMemberID and youPass='$youPass'";
    $checkResult = $connect -> query($checkSql);
    $count = $checkResult -> num_rows;

    if($count) {
        echo "<script>alert('회원 탈퇴 완료되었습니다. 그동안 지구ON을 이용해주셔서 감사합니다.')</script>";
        $sql = "DELETE FROM myMember WHERE myMemberID=$myMemberID";
        $connect -> query($sql);

        unset($_SESSION['myMemberID']);
        unset($_SESSION['youEmail']);
        unset($_SESSION['youName']);
    }
    else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 탈퇴하실 수 없습니다.')</script>";
    }
?>

<script>
    location.href="../main/main.php";
</script>