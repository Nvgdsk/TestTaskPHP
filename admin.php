

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            div{
                display: flex;
               
                justify-content: center;
            }
            a{
                text-decoration:  none;
            }
           
           
        </style>
        
    </head>
    <body>
      <div> <a href="index.php">Назад</a></div>
        <div> <a href="edit.php">Редактировать</a></div>
        <div>
          <form name ="test" action="" id="form_id" method="post" >
          <label>Название</label><br /> <input type="text" name = "namе" placeholder="ЖК НОВОСТРОЙКА"> <br />
          <label>Город</label><br /><input type="text" name = "town" placeholder="Киев"> <br />
          <label>Площадь</label><br /><input type="number" name = "S" placeholder="60"> <br /> 
        
            <label>Дом/Улица</label><br /><input type="text" name = "Street" placeholder="Дом 1"> <br />
          <label>Цена</label><br /><input type="number" name = "Price" placeholder="7500">  
           <select name = "typeprice">
               <option>кв.м.</option>
               <option>За всю квартиру</option> 
           </select><br />
         <label>Количество комнат</label>
           <select name = "C_ROOM">
               <option value="1">Студия</option>
               <option value="2">1</option>
               <option value="3">2</option>
               <option value="4">3</option>
               <option value="5">4</option>
               <option value="6">5</option>
               <option value="7"> 5 - 2</option>
               <option value="8">6 - 2</option>
           </select><br />
           <label>Уникальность</label>
            <select name = "Unic">
               <option value = "1">Типовая</option>
               <option value = "0">Нетиповая</option>
           </select> <br />
           
              <a href = "#" id = "test">ADD</a>
        </form>
</div>
<?php

            function printResult ($result_set) 
            {
            echo"<table  border='1'>";
                echo "<thead>
                <tr>
            <td>Название</td>
            <td>Город</td>
            <td>Дом</td>
            <td>Площадь</td>
            <td>Цена</td>
            <td>Количество комнат</td>
            <td>Тип</td>
            <td>ID</td>
            
        </tr></thead>";
                
                while (($row = $result_set->fetch_assoc()) != false) 
                    {
                        $ID = $row["ID"];
                   
                        echo "<tr><td>".$row["Name"]."</td><td>".$row["Town"]."</td><td>".$row["NameB"]."</td><td>".$row["S"]." кв.м.</td><td>".$row["Price"]." грн.</td><td>".$row["NAMEF"]."</td><td>".$row["Type"]."</td><td>".$row["ID"]."</td><td><a href='#' id = '$ID'>X</a>  </td></tr>";
                    }
                echo "</table>";
            }
            $mysqli = new mysqli("BELN", "root", "", "Buildings");
            $mysqli->query ("SET NAMES 'utf8'");
            $result_set = $mysqli->query("SELECT T.Name,T.Town,T.NameB,T.S,T.Price,T.Type,T.ID, K.NAMEF
                FROM JK AS T
                JOIN Flat AS K ON T.CountROOM = K.ID");
            printResult ($result_set); 
            $mysqli->close();   
?>
<script>
       
        $(document).ready(function(){
           $('table a').click(function(event) {
         
              
           var id_e =  event.target.id;
            $.ajax({
                url: "delete.php",
                type: "post",
                dataType: "html", 
                data: {mynumb: id_e} 
            })
                
            location.reload();       
            });
              $('#test').on('click', function() 
            {
             
            $.ajax
                ({     
                    url:     'add.php', 
                    type:     "POST",
                    dataType: "html", 
                    data: $("#form_id").serialize(),  

                });
                
            location.reload();       
            });
            
        });
        
            
       


</script>
</body>
</html>

