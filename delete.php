<?php
$mysqli = new mysqli("BELN", "root", "", "Buildings");
        $mysqli->query ("SET NAMES 'utf8'");
        
        $ID = $_POST['mynumb'];
         $mysqli->query("DELETE FROM `JK` WHERE  ID ='$ID'");
         $mysqli->close();
?>