<?php

while(true){ //ini biar game nya berulang sampe dia menang
echo "Welcome To Sarah's Game\n"; //eco sama kaya printf
echo "Tebaklah sebuah angka antara 1 sampai 9!\n";

//ini biar si komputer nyimpen angka random di oraknya
$computer = rand(1,9);

//meminta player masukin tebakannya
echo "Masukan Tebakanmu: ";

//ini biar nyimpen masukan dari player
$player = trim(fgets(STDIN));

//peraturan menang : angka yang ditebak player sama kaya angka yang disimpen komputer
if($player==$computer){
    echo"MENANG!. Komputer memikirkan angka $computer.\n";
    exit; //ini biar pas mennag, game nya langsung berenti
}else{
    echo"KALAH!. Angka Yang Dipikirkan Komputer Adalah $computer.\n";
}}