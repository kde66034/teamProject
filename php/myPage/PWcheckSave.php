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
    <title>마이 페이지</title>
</head>

<body>
    
<?php
    $youPass = $_POST['youPass'];
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "SELECT youPass FROM myMember WHERE youPass = '{$youPass}'";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    //서버에 있는 유패스memberInfo['youPass']랑 우리 유패스랑 같은지
    if($memberInfo['youPass'] === $youPass){
        echo "<script>location.replace('editInfo.php');</script>";
    }else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요!');history.back();</script>";
    }
?>

</body>
</html>