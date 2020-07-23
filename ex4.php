<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   String:<input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $string=test_input($_POST["name"]);

   //$string=$_GET["name"];
   if(strlen($string)>2){
     $f1=$string[0];
     $f2=$string[1];
     $f3=$string[2];
   
     $threechar="";
     $threechar[0]=$f1;
     $threechar[1]=$f2;
     $threechar[2]=$f3;
     echo "Output is:".$threechar.$string.$threechar;
   } 
   else{
       echo "Output is:$string";
   }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }   
?>   
</body>
</html>