<?PHP

        $town = $_POST['town'];
        
        $C_Room = $_POST['C_ROOM'];


    function printResult ($result_set) 
            {
            echo"<table  border='1'>";
   
                
                while (($row = $result_set->fetch_assoc()) != false) 
                    {
                        
                   
                        echo "<tr><td>".$row["Name"]."</td><td>".$row["Town"]."</td><td>".$row["NameB"]."</td><td>".$row["S"]." кв.м.</td><td>".$row["Price"]." грн.</td></tr>";
                    }
                echo "</table>";
            }
            $mysqli = new mysqli("BELN", "root", "", "Buildings");
            $mysqli->query ("SET NAMES 'utf8'");
            $result_set = $mysqli->query("SELECT `Name`,`Town`,`NameB`,`S` ,`Price` 
FROM `JK`
Where Town = '$town' and CountROOM = '$C_Room'
group by nameB
having Price = min(price)
Order by Price ASC
");

            printResult ($result_set); 
            $mysqli->close();   

?>