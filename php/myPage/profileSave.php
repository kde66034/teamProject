<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    // 파일정보
    $myMemberID = $_SESSION['myMemberID'];
    $youImgFile = $_FILES['youImgFile'];
    $youImgSize = $_FILES['youImgFile']['size'];
    $youImgType = $_FILES['youImgFile']['type'];
    $youImgName = $_FILES['youImgFile']['name'];
    $youImgTmp = $_FILES['youImgFile']['tmp_name'];

    echo "<pre>";
    var_dump($youImgFile);
    echo "</pre>";

    if($youImgType){
        $fileTypeExtension = explode("/", $youImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png

        // 이미지타입확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $youImgDir = "../assets/img/profile/";
                $youImgName = "Img_".time().rand(1,99999).".".$fileExtension;
                // echo "이미지 파일이 맞네요!";
                $sql = "SELECT myMemberID FROM myMember WHERE '$myMemberID'";
                // var_dump($sql);
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        }
    } else {
        echo "<script>alert('이미지 파일이 첨부되지 않았습니다.'); history.back(1)</script>";
        // echo "<script>alert('프로필 사진 변경을 취소하셨습니다.'); history.back(1)</script>";
    }

    // 이미지사이즈확인
    if($youImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1MB를 초과했습니다.'); history.back(1)</script>";
        exit;
    }

    $sql = "UPDATE myMember SET youImgFile = '".$youImgName."', youImgSize = '".$youImgSize."' WHERE myMemberID = '".$myMemberID."'";
    var_dump($sql);
    $result = $connect -> query($sql);

    if($youImgSize >= 1){
        $result = move_uploaded_file($youImgTmp, $youImgDir.$youImgName);
        echo "<script>alert('프로필 사진 변경이 완료되었습니다.'); history.back(1)</script>";
    }
?>