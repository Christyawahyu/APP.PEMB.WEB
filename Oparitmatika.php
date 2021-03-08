<?php
//mengambil isi variabel oprand

$Operand1=$_REQUEST['Operand1'];
$Operand2 = $_REQUEST['Operand2'];
$Operator =$_REQUEST['operator'];

//Rumus Perhitungan
$Perhitungan = $Operand1 .  $Operator . $Operand2 ;
eval ("\$hasil = $Perhitungan;");
echo "Hasil Perhitungan : <B> $hasil </B> ";

?>