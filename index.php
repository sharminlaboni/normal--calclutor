<?php

if(isset($_GET['operation'])){
    $x= $_GET['num1'];    
    $y= $_GET['num2'];
    $op= $_GET['operation'];

    switch($op){
        case 'add': $result = $x + $y;
        break;
        case 'sub': $result = $x - $y;
        break;
        case 'mul': $result = $x * $y;
        break;
        case 'div': $result = $x / $y;
        break;

    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-calclulator</title>
</head>
<body>
   <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>
    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2"value="<?= $y ?>">
    </div><div>
        <label for="result">Result</label>
        <input type="number" name="result" id="result" value="<?= $result ?>" disabled>
    </div>

    <div>
        <input type="submit" value="add"  name="operation">        
        <input type="submit" value="sub"  name="operation">        
        <input type="submit" value="mul"  name="operation">        
        <input type="submit" value="div"  name="operation">

    </div>

   </form> 
</body>
</html>
