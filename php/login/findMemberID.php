<?php

        $youName = $_POST['youName'];
        $youPhone = $_POST['youPhone'];
        $userPhone = array();
        $sql = $db -> prepare("SELECT * FROM myMember WHERE youName=:youName");
        $sql -> bindParam("youName",$youName);
        $sql -> execute();
        while($row = $sql -> fetch()){
            if(!$row){
                errMsg("가입 이력이 없습니다.");
            } else{
                array_push($userPhone, $row['youPhone']);
            } 
        }

        if(in_array($youPhone,$userPhone) == false){
            errMsg("휴대폰 번호를 확인해주세요.");
        } elseif (in_array($youPhone,$userPhone) == true) {
            $stmt = $db -> prepare("SELECT * FROM myMember WHERE youName=:youName AND youPhone=:youPhone");
            $stmt -> bindParam("youName",$youName);
            $stmt -> bindParam("youPhone",$youPhone);
            $stmt -> execute();
            $user = $stmt -> fetch();
            echo "
                <script>
                alert('고객님의 이메일 주소는 ".$user['youEmail']."입니다.');
                location.href='../main.php';
                </script>
            ";
        }  

?>