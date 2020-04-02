<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arr = array(1, 4, 2, 6, 9, 100, 45, 8, 20);
$max = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}
echo 'Phan tu lon nhat trong mang la '.$max;
?>
