<?php

$number1 = 0;
$number2 = 0;
$arithmetic = "";
$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$number1,2への代入
    if(isset($_POST['number_1']) === TRUE){
        $number1 = $_POST['number_1'];
    }
    if(isset($_POST['number_2']) === TRUE){
        $number2 = $_POST['number_2'];
    }
    if(isset($_POST['arithmetic']) === TRUE){
        $arithmetic = $_POST['arithmetic'];
    }
    //パターン別の計算
    if($arithmetic == "+"){
        $result = $number1 + $number2;
    }
    if($arithmetic == "-"){
        $result = $number1 - $number2;
    }
    if($arithmetic == "*"){
        $result = $number1 * $number2;
    }
    if($arithmetic == "/"){
        $result = $number1 / $number2;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>四則演算</title>
</head>
<body>
    <h1>四則演算</h1>
    <form action="" method="post">
        <input type="text" name="number_1">
        <select name="arithmetic" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="text" name="number_2">
        <input type="submit" value="計算開始！！">
    </form>
    <h2>答え：<?php echo $result;?></h2>
</body>
</html>