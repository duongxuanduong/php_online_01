<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <?php
                // put your code here
                for ($i = 2; $i <= 9; $i++) {
                    echo "<td>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo '' . $i . 'x' . $j . '=' . $i * $j . '</br>';
                    }
                    echo "</td>";
                }
                ?>
            </tr>
        </table>
    </body>
</html>*/
