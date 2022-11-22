<?php
    if( $_SESSION['myMemberID'] !== '1'){
        Header("Location: ../main/alert2.php");
    }
?>