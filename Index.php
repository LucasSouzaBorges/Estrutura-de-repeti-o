<?php

echo "LAÇO FOR<br>";
for($i=0; $i<=10; $i++){
    echo$i . "<br>";
}
echo "<br>LAÇO WHILE<br>";
$i =0;
while($i<=10){
    echo $i . "<br>";
    $i++;
}

$i = 0;
echo "<br>LAÇO DO WHILE<br>";
do{
    echo $i . "<br>";
    $i++;
}while($i<=10);

echo "<br>DECISÃO<br>";
$i = 0;
if($i < 10){
    echo "Valor da variavel I é " . $i . "e passou no IF";
}   elseif($i == 10){
        echo"Valor da variavel I é " . $i . "e passou no ELSE IF";
}else{
    echo "Valor da variavel I é " . $i . "e passou no ELSE";
}

?>