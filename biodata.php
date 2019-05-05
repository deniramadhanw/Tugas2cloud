<?php

$NamaLengkap = "Deni Ramadhan Wibowo";
$NIM = "1614321051";
$TempatLahir = "Cilacap, 16 januari 1998";
$Jurusan = "Teknik Informatika";
$Angkatan = "2016";

?>
<table>
<tr>
<td><?php echo "Nama Lengkap";?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $NamaLengkap ?></td>
<td rowspan="5">
<img src="deni.JPEG"" width="130" height="200">
</td>
</tr>
<tr>
<td><?php echo "Tempat,Tanggal Lahir"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $TempatLahir  ;?></td>
</tr>
<tr>
<td><?php echo "NIM"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $NIM ;?></td>
</tr>
<tr>
<td><?php echo "Jurusan"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Jurusan ;?></td>
</tr>
<tr>
<td><?php echo "Angkatan"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Angkatan ;?></td>
</tr>

</table>