<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$a = 5;
$b = 8;
$c = 2;
if ($a == 0) {
    if ($b == 0) {
        if ($c == 0) {
            echo 'Phuong trinh vo so nghiem';
        } else {
            echo 'Phuong trinh co vo nghiem ';
        }
    } else {
        echo 'Phuong trinh co 1 nghiem x=' . (-$c / $b);
    }
} else {
    $d=$b*$b-4*$a*$c;
    if($d<0){
        echo 'Phuong trinh vo nghiem';
    } else {
        if($d==0){
            echo 'Phuong trinh co 1 nghiem duy nhat '.(-$b/(2*$a));
        } else {
            echo 'Phuong trinh co 2 nghiem x1='.(-$b+ sqrt($d))/(2*$a).' x2='.(-$b-sqrt($d))/(2*$a) ;
        }
    }
}

