<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $youName = $_POST['youName'];
        $youPass = $_POST['youPass'];
        $youPassC = $_POST['youPassC'];
        $youPhone = $_POST['youPhone'];
        $myMemberID = $_SESSION['myMemberID'];

        // echo $_SESSION['myMemberID']."<br>";
        // echo $youPass."<br>";

        if($youPass == $youPassC){
            $sql = "UPDATE myMember SET youName = '{$youName}', youPass = '{$youPass}', youPhone = '{$youPhone}' WHERE myMemberID = '{$myMemberID}'";
            echo "<script>alert('회원 정보가 변경되었습니다. 로그아웃 후 다시 로그인해주시면 변경된 정보가 반영되어 있을 것입니다.'); location.href='../main/main.php';</script>";    
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 시도해주세요.'); history.back(1)</script>";
        }

        $result = $connect -> query($sql);
    ?>
</body>
</html>