

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Поиск квартиры</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <Style>
            table,form, div{
                display: flex;
                align-items: center;
                justify-content: center;
            }
           
            
        </Style>
    </head>
    <body>
        <div><a href="admin.php">Админ панель</a></div>
       <form name ="test" id="form_id" action="" method="post" >
          <input type="text" name = "town" placeholder="Киев"> 
          <select name = "C_ROOM">
               <option value="1">Студия</option>
               <option value="2">1</option>
               <option value="3">2</option>
               <option value="4">3</option>
               <option value="5">4</option>
               <option value="6">5</option>
               <option value="7"> 5 - 2</option>
               <option value="8">6 - 2</option>
           </select>
           <a href="#" id = "Search">Поиск</a> 
        </form>
        <div id="table"></div>
<script>
        $('#Search').on('click', function() 
            {
             
            $.ajax
                ({     
                    url:     'PrintResult.php', 
                    type:     "POST",
                    dataType: "html", 
                    data: $("#form_id").serialize(),  
                success: function(data){
                    $('#table').html(data);
                }

                });
                
                    
            });
        $('select').on('change', function() 
            {
             
            $.ajax
                ({     
                    url:     'PrintResult.php', 
                    type:     "POST",
                    dataType: "html", 
                    data: $("#form_id").serialize(),  
                success: function(data){
                    $('#table').html(data);
                }

                });
                
                    
            });
    </script>
    </body>
</html>