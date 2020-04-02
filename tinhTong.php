<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tong=0;
$n=10;
for($i=1;$i<=$n;$i++){
    $giaiThua=1;
    for($j=1;$j<=$i;$j++){
        $giaiThua=$giaiThua*$j;
    }
    $tong=$tong+$i/$giaiThua;   
}
echo 'Ket qua bai toan la '.$tong;
?>

