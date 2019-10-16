<?php
/*
Operator Aritmatika adalah operator matematis yang terdiri dari operator penambahan, pengurangan, perkalian, pembagian, modulus, plus,
dan minus.
*/
    $hasil1= -3;//deklarasi variabel hasil1 
    $hasil2=3+5;//deklarasi variabel hasil2 
    $hasil3=8-4.5;//deklarasi variabel hasil3 
    $hasil4=2*5;//deklarasi variabel hasil4 
    $hasil5=3+8/5-3;//deklarasi variabel hasil5
    $hasil6=10 % 4; // modulus adalah sisa bagi (deklarasi variabel hasil6 )

    echo "\$hasil1:"; var_dump($hasil1); // $hasil1:int(-3)
    echo "<br \>";
    echo "\$hasil2:"; var_dump($hasil2); // $hasil2:int(8)
    echo "<br \>";
    echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5)
    echo "<br \>";
    echo "\$hasil4:"; var_dump($hasil4); // $hasil4:int(10)
    echo "<br \>";
    echo "\$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6)
    echo "<br \>";
    echo "\$hasil6:"; var_dump($hasil6); // $hasil6:int(2)
?>