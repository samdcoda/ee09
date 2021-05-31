
    <?php
     $conn = mysqli_connect('localhost', 'root', 'dbname');
      if(!conn)
      {
       exit("No connection");
      }
      else
      {
       $q1=mysqli_query($conn, 'SELECT * FROM tableName');
       echo "<table border=1>";
        while($result = mysqli_fetch_array($q1))
        {
        echo "<tr><td>".$result['columnName']."</td></tr>";
        }
       echo "</table>";      
       
       mysqli_close($conn);
      }
    ?>
 
mysqli_connect(serwer, user, password, db_name) //id_connection or FALSE
mysqli_select_db(id_connection, db_name) // TRUE/FALSE
mysqli_error(id_connection) //error text
mysqli_close(id_connection) // TRUE/FALSE
mysqli_query(id_connection, query1)
mysqli_fetch_row(result_query1)
mysqli_fetch_array(result_query1)
mysqli_num_rows(result_query1)
mysqli_num_fields(result_query1)
