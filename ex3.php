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
      echo "Old String:".$string."<br>";
      $length=strlen($string);
      $last=$string[$length-1];
      $first=$string[0];
  
      $string[0]=$last;
      $string[$length-1]=$first;
      echo "New String:".$string;
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