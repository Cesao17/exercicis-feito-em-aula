<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$array= array($a,$b,$c,$d,$e);
if ($array[0]>=$array[1] and $array[0]>=$array[2] and $array[0]>=$array[3] and $array[0]>=$array[4])
echo "maior numero: ".$array[0];
else 
if ($array[1]>=$array[0] and $array[1]>=$array[2] and $array[1]>=$array[3] and $array[1]>=$array[4])
echo "maior numero: ".$array[1];
else
if ($array[2]>=$array[1] and $array[2]>=$array[0] and $array[2]>=$array[3] and $array[2]>=$array[4])
echo "maior numero: ".$array[2];
else
if ($array[3]>=$array[1] and $array[3]>=$array[2] and $array[3]>=$array[0] and $array[3]>=$array[4])
echo "maior numero: ".$array[3];
else
if ($array[4]>=$array[1] and $array[4]>=$array[2] and $array[4]>=$array[3] and $array[4]>=$array[0])
echo "maior numero: ".$array[4];
else
echo"";

echo"<br>";

if ($array[0]<=$array[1] and $array[0]<=$array[2] and $array[0]<=$array[3] and $array[0]<=$array[4])
echo "menor numero: ".$array[0];
else 
if ($array[1]<=$array[0] and $array[1]<=$array[2] and $array[1]<=$array[3] and $array[1]<=$array[4])
echo "menor numero: ".$array[1];
else
if ($array[2]<=$array[1] and $array[2]<=$array[0] and $array[2]<=$array[3] and $array[2]<=$array[4])
echo "menor numero: ".$array[2];
else
if ($array[3]<=$array[1] and $array[3]<=$array[2] and $array[3]<=$array[0] and $array[3]<=$array[4])
echo "menor numero: ".$array[3];
else
if ($array[4]<=$array[1] and $array[4]<=$array[2] and $array[4]<=$array[3] and $array[4]<=$array[0])
echo "menor numero: ".$array[4];
else
echo"";











?>