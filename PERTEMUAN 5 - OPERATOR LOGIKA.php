<?php
$a = True;
$b = False;

//variabel c akan bernilai FALSE
$c = $a && $b;

printf ("%b && %b = %b",$a,$b,$c);
echo"<hr>";



//Variabel c FALSE

$c =$a || $b;
printf (" %b || %b = %b",$a,$b,$c);
echo"<hr>";


$c =! $a;
printf (" !%b = %b",$a,$c);
echo"<hr>";

?>