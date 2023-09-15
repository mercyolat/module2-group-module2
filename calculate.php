<!DOCTYPE html>
<head><title>Hello World</title></head>
<body>
<?php


$first=$_GET['n1'];
$second=$_GET['n2'];

$v1=$_GET['s1'];



$i=(float) $first;
$j=(float) $second;
 if($v1=="plus"){
    echo $i +$j;
}
else if($v1== "minus"){
    echo $i -$j;
}
else if ($v1== "multi"){
    echo $i * $j;
}
else if ($v1== "divide"){
    echo $i / $j;
}

?>
</body>
</html>