<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Title</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- link js and php files -->
 </head>
 <body>
  <div id="header">
   <p>Header</p>
  </div>
  <div id="left">
   <h2>Left box</h2>
   <form action="sript.php" method="post">
   <label> Label text: <input type="text" name="text"></label> <input type="submit" value="Show">
   </form>
  </div>
  <div id="right">
   <h2>Right box</h2>
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
  </div>
  <div id="footer">
   <p><a class="footer" href="project.html">Project</a></p>
   <p><!-- contact form -->contact us</p>
  </div>
 </body>
</html>
