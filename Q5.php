<html>
 <head>
   <title>Q5</title>
 </head>
 <body>
  <?php
   $color=array('white','green','red');
   foreach($color as $i)
   {
     echo "$i, ";
   }
   sort($color);
   echo "<ul>";
   foreach($color as $j)
   {
     echo "<li>$j</li>";
   }
   echo "</ul>";
  ?>
 </body>
<html>
