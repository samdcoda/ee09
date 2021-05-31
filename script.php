
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
 
