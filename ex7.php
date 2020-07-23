<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Number:<input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit">
</form>
<?php
  $number=0;
  $result="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number=test_input($_POST["name"]);
    for($i=0;$i<strlen($number);$i++){
        if($i%2==1){
           echo $result[$i]=$number[$i];
           echo ",";
        }
        else{
          echo $result[$i]=$number[$i];
        }
    }
    //echo $result;
    
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