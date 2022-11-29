<html>
<head></head>
<body>

<?php
function Factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
    $factorial = $factorial * $i;
    }
    return $factorial;
}

function setArr($facArr, $number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
    $factorial = $factorial * $i;
    }
    array_push($facArr, $factorial);
    return $facArr;
}

if (empty($_POST["n"])) {
    $number = 1;
  }
else{
    $number = $_POST["n"];
}
echo "The factorial of ", $number, " is ", Factorial($number);

$facArr = array();
setArr($facArr, $number);

?>
</body>
</html>

