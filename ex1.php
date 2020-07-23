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
   $string="";
  
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string=test_input($_POST["name"]);
  
      $length=strlen($string);
  //$result=$string[$length];
  //echo $length;
      echo "Origin value is:".$string."<br>";
  //$output=str_split($string);
  /*echo $output."<br>";
  print_r($output);*/
      $char=$string[$length-1];
  
      echo "Changed result is: ".$char.$string;
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