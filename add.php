<?php

    
        $name=$_POST['namе'];
        $town=$_POST['town'];
        $street=$_POST['Street'];
        $S=$_POST['S'];
        $C_ROOM=$_POST['C_ROOM'];
        if($name ==''|| $town==''||$street==''||$S==0||$C_ROOM==0)
        {
            
        }
        else
        {
        if($_POST['typeprice']=="кв.м.")
        {
            $Price=(int)$_POST['Price']*(int)$_POST['S'];
        }
        else
        {
           $Price = $_POST['Price']; 
        }
      
        
        echo $Price;
        
            $typeroom =$_POST["UNIC"];
        
        
        
        
        
        $mysqli = new mysqli("BELN", "root", "", "Buildings");
        $mysqli->query ("SET NAMES 'utf8'");
        
        
         $mysqli->query("INSERT INTO `JK`(`Name`, `Town`, `NameB`, `S`, `Price`, `CountROOM`, `Type`) VALUES ('$name','$town','$street','$S','$Price','$C_ROOM','$typeroom')");
         $mysqli->close();  



        }
    
  
?>