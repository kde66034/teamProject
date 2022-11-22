<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
    $myMemberID = $_SESSION['myMemberID'];
    $newsAuthor = $_SESSION['youName'];
    $newsCategory = $_POST['newsCategory'];
    $newsTitle = $_POST['newsTitle'];
    $newsContents = nl2br($_POST['newsContents']);
    $newsView = 1;
    $newsLike = 0;
    $regTime = time();
    $newsImgFile = $_FILES['newsImgFile'];
    $newsImgSize = $_FILES['newsImgFile']['size'];
    $newsImgType = $_FILES['newsImgFile']['type'];
    $newsImgName = $_FILES['newsImgFile']['name'];
    $newsImgTmp = $_FILES['newsImgFile']['tmp_name'];
    echo "<pre>";
    var_dump($newsImgFile);
    echo "</pre>";
    // array(5) {
    //     ["name"]=>
    //     string(9) "icon1.png"
    //     ["type"]=>
    //     string(9) "image/png"
    //     ["tmp_name"]=>
    //     string(36) "/Applications/MAMP/tmp/php/phpWOWyQJ"
    //     ["error"]=>
    //     int(0)
    //     ["size"]=>
    //     int(1479)
    // }
    //이미지 파일명 확인
    if($newsImgType){
        $fileTypeExtension = explode("/", $newsImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $newsImgDir = "../assets/img/news/";
                $newsImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                $sql = "INSERT INTO newsBoard(myMemberID, newsTitle, newsContents, newsCategory, newsAuthor, newsView, newsLike, newsImgFile, newsImgSize, newsDelete, newsRegTime) VALUES('$myMemberID', '$newsTitle', '$newsContents', '$newsCategory', '$newsAuthor', '$newsView', '$newsLike', '$newsImgName', '$newsImgSize', '$newsLike', '$regTime')";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        }
    } else {
        // echo "이미지 파일이 첨부하지 않았습니다.";
        $sql = "INSERT INTO newsBoard(myMemberID, newsTitle, newsContents, newsCategory, newsAuthor, newsView, newsLike, newsImgFile, newsImgSize, newsDelete, newsRegTime) VALUES('$myMemberID', '$newsTitle', '$newsContents', '$newsCategory', '$newsAuthor', '$newsView', '$newsLike', 'Img_default.jpg', '$newsImgSize', '$newsLike', '$regTime')";
    }
    //이미지 사이즈 확인
    if($newsImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1MB를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($newsImgTmp, $newsImgDir.$newsImgName);
    Header("Location: newsMain.php");
?>
</body>
</html>