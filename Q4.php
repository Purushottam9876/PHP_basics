<html>
 <head>
  <title>Q4</title>
 </head>
 <body>
  <h3>This Program will count the no. of days between current day and birthday.</h3><br>
  <form>
   Enter your birth date with coming year:<br>
   <input type="date" name="brth"><br>
   Enter the current date :<br>
   <input type="date" name="crdt"><br>
   <input type="submit" name="submit">
  </form>
  <?php
   $brdt = strtotime($_GET['brth']);
   $crdt = strtotime($_GET['crdt']);
   $days_left=abs($brdt-$crdt)/(60*60*24);
   echo $days_left;
  ?>
 </body>
</html>
