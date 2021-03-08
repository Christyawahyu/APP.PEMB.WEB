<?php
 
$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil =  @$_POST['THASIL'];


//TOMBOL TAMBAH
If (isset ($_POST['BtnTambah']))
{
$hasil = $angka1 + $angka2;
}

If (isset ($_POST['BtnKurang']))
{
$hasil = $angka1 - $angka2;
}

If (isset ($_POST['BtnKali']))
{
$hasil = $angka1 * $angka2;
}


If (isset ($_POST['BtnBagi']))
{
$hasil = $angka1 / $angka2;
}
?>

<html>
<head>
	<title> Kalkulator Sederhana </title>
</head>
<body>

	<form method = "post" >
	<table align="center" border ="0">
		<tr>
		<td colspan = "3"  bgcolor="YELLOW"> ~ KALKULATOR SEDERHANA ~ </td>
		</tr>
		<tr>
		<td colspan="3" > <hr></td>
		</tr>
		
		<tr> 
		<td>Input Angka 1 </td>
		<td> :</td>	
		<td>
		 <input type="text" name="tangka1" value = " <?= $angka1?>" >
			    
		</td>
		</tr>
		
		<tr> 
		<td>Input Angka 2 </td>
		<td> :</td>	
		<td>
		 <input type="text" name="tangka2" value = " <?= $angka2?>" >	    
		</td>
		</tr>
		
		<tr> 
		<td>  </td>
		<td>  </td>	
		<td>
		 <input type="submit" name="BtnTambah"  value="   +    ">
		 <input type="submit" name="BtnKurang"  value="   -   ">
		 <input type="submit" name="BtnKali"  value="  x  ">
		<input type="submit" name="BtnBagi"  value="  /  ">
			
		</td>
		</tr>
		
		<tr> 
		<td>  HASIL  </td>
		<td> :</td>	
		<td>
		 <input type="text" name="THASIL" value = "<?= $hasil?>"  >	    
		</td>
		</tr>
		
		
		<tr>
		<td colspan="3" > <hr></td>
		</tr>
		
		</table>
	</form> 

</body>
</html>
