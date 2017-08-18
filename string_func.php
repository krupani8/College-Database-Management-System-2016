<html>
<head>
	<title> Array Function </title>
</head>
<body>
<?php
   $string1="Hello World";
   $string2="1234";
   
   echo $string1 . " " . $string2;
   echo"<br>";	

   echo strlen("Hello world!");
   echo"<br>";	

   echo strpos("Hello world!","world");
?>

<br><br>
    
substr()- Example 1:
<?php echo substr("Hello world",6); ?> <br><br>
substr()- Example 2:
<?php echo substr("Hello world",6,4); ?> <br><br>
substr()- Example 3 :
<?php echo substr("Hello world", -1); ?> <br><br>
substr()- Example 4:
<?php echo substr("Hello world", -4, -2); ?> <br><br>

trim() - Example 1:
<?php echo trim( "        Hello World    "); ?> <br><br>

strtolower() -Example 1:
<?php echo strtolower("HELLO WORLD"); ?> <br><br>

strtoupper()-Example 1:
<?php echo strtoupper("hello world"); ?> <br><br>

str_replace()- <br> 
    syntax: str_replace(search,replace,string/array,count);
<br><br>
Example 1:
<?php echo str_replace("world","Peter","Hello world"); ?>
<br><br>

str_replace()- Example 2:
<?php
 $arr = array("blue","red","green","yellow");
 print_r(str_replace("red","pink",$arr,$i));
 echo "Replacements: $i";
 ?>
<br><br>
str_replace()- Example 3:
<?php
 $phrase  = "You should eat fruits, vegetables, and fiber every day.";
 $healthy = array("fruits", "vegetables", "fiber");
 $junk   = array("pizza", "burger", "ice cream");
 $newphrase = str_replace($healthy, $junk, $phrase);
echo "$newphrase";
?><strong> </strong>
<br><br>

strcmp()-Example 1:
<?php echo strcmp("Hello world!","Hello world!"); ?> 
<br><br>

explode()- Example 1: 
<?php
 $str = "Hello world. It's a beautiful day.";
 print_r (explode(" ",$str));
 ?>
<br><br>
implode()- Example 1:
<?php
 $arr = array('Hello','World!','Beautiful','Day!');
 echo implode(" ",$arr);
 ?>
    
<br><br>
strstr() and strchr()- Example 1:<br>
<?php
    $msg="have a nice day";
    echo $msg;
    echo "<br>";
    echo strstr($msg, "nice");
    echo "<br>";
    echo strchr($msg, 'i');
?>
    
<br><br>
str_repeat- Example 1:<br>
<?php
    $msg="have a nice day";
    echo str_repeat($msg, 3);
?>
        
</body>
</html>