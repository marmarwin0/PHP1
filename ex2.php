<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
   String:&nbsp;&nbsp;  <input type="text" name="name"><br>
   Position:<input type="number" name="position"><br>
   <input type="submit" name="Delete" value="Submit">
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputstring=test_input($_POST["name"]);
    $value=test_input($_POST["position"]);
    echo "Your input sting:".$inputstring."<br>";
    $length=strlen($inputstring);
    

   $arr="";
   for($i=0;$i<$length;$i++){
    if($i==$value){
        $arr[$i]=$inputstring[++$i];
        //continue;
        
    }else{
    $arr[$i]=$inputstring[$i];
    }
   }
  echo "Removed character:".$arr;
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