<html>
 <head>
   <title>Menu Driven Page</title>
 </head>
 <body>
   <p>1.Remove the whitespaces from String</p>
   <p>2.Find the first the in another string</p>
   <p>3.Check that the string is in lower case</p>
   <p>4.Replace the First the in the entered string</p>
   <form>
     Enter Your Choice:*<br>
     <input type="text" name="text1"><br><br>
     Enter The String:*<br>
     <input type="text" name="text2"><br><br>
     Enter the other String(if your option is 2 or 4):<br>
     <input type="text" name="text3"><br><br>
     Enter the replacement String(if your option is 4):<br>
     <input type="text" name="text4"><br><br>
     <input type="submit"><br>
   </form>
   <?php
     $i=$txt2=$_GET["text2"];
     switch($_GET["text1"])
     {
        case 1:echo str_replace(" ","",$txt2);
                 break;
	case 2:$txt3=$_GET["text3"];
	         if(!strpos($txt2, $txt3))
	           echo "The entered string is not in the text";
	         else
        	   echo "The second string ".$txt3." is in the text ".$i;
                 break;
	case 3:
 	         if(preg_match("/^[a-z ]*$/",$txt2))
        	   echo "The Entered String is in lower Case.";	
		 else
        	  echo "The Entered String is not in lower Case.";
                 break;
        case 4:$txt3=$_GET["text3"];
		echo str_replace($txt3,$_GET["text4"],$txt2);
                 break;
        default:echo "Wrong Choice!!!";
                break;
     }
   ?>
 </body>
</html>
