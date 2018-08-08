<?php

    
        $name=$_POST['namе'];
        $town=$_POST['town'];
        $street=$_POST['Street'];
        $S=$_POST['S'];
        $C_ROOM=$_POST['C_ROOM'];
        $Price = $_POST['Price'];
        $ID = $_POST['ID_F'];
        if($name ==''|| $town==''||$street==''||$S==0||$C_ROOM==0||$Price == 0)
        {
            
        }
        else
        {
        if($_POST['typeprice']=="кв.м.")
        {
            $Price=(int)$_POST['Price']*(int)$_POST['S'];
        }
       
      
        
        
        
        $typeroom =$_POST["UNIC"];
        
        
        
        
        
        $mysqli = new mysqli("BELN", "root", "", "Buildings");
        $mysqli->query ("SET NAMES 'utf8'");
        
        
         $mysqli->query("UPDATE `JK` SET `Name`='$name',`Town`='$town',`NameB`='$street',`S`='$S',`Price`='$Price',`CountROOM`='$C_ROOM',`Type`='$typeroom' WHERE ID='$ID'");
         $mysqli->close();  



        }
    
  
?>