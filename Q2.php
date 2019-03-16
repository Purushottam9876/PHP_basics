<html>
 <head>
   <title>Sort_Array</title>
 </head>
 <body>
   <form>
    Enter elements:<br>
    <input type = "text" name="name">
   </form>
   <?php
       $txt =$_GET["name"];
       $arr =explode(" ",$txt);
       sort($arr);
       foreach($arr as $x)
      {
        echo $x." ";
      }
   ?>
 </body>
</html>
