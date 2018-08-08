<?PHP

function printResult ($result_set) 
            {
            
                while (($row = $result_set->fetch_assoc()) != false) 
                    {
                        $ID = $row["ID"];

                        echo json_encode($row);
                            
                    

                        
                    }
                
            }
$ID = $_POST['my_id'];
$mysqli = new mysqli("BELN", "root", "", "Buildings");
$mysqli->query ("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT  * FROM  `JK` WHERE  ID ='$ID'");
printResult ($result_set); 
$mysqli->close();   
?>