<?php
    include_once "../connect/connect.php";

    $sql = "CREATE TABLE newsBoard (";
    $sql .= "newsID int(10) unsigned auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "newsTitle varchar(255) NOT NULL,";
    $sql .= "newsContents longtext NOT NULL,";
    $sql .= "newsCategory varchar(20) NOT NULL,";
    $sql .= "newsAuthor varchar(20) NOT NULL,";
    $sql .= "newsView int(10) NOT NULL,";
    $sql .= "newsLike int(10) NOT NULL,";
    $sql .= "newsImgFile varchar(100) DEFAULT NULL,";
    $sql .= "newsImgSize varchar(100) DEFAULT NULL,";
    $sql .= "newsDelete int(10) NOT NULL,";
    $sql .= "newsRegTime int(10) NOT NULL,";
    $sql .= "newsModTime int(10) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (newsID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);
?>