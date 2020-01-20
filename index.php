<?php
print ("<h3>Tugas 6 PHP</h3>");

echo "<b>==============================================================================================</b><br>";
echo "<b>Soal 1:</b><br>";
echo "Aji adalah kakak Habib, 4 tahun lebih tua. Bintan adalah kakak Aji dan berbeda 3 tahun.<br>";
echo "Berapakah usia Bintan, jika saat ini Habib baru saja merayakan ulang tahun yang ke-21?<br>";
echo "<b>Jawaban: </b><br>";
$habib = 21;
$aji = 4 + $habib;
$bintan = 3 + $aji;
echo "Usia Habib adalah <b>$habib</b> tahun.<br>";
echo "Usia Aji adalah <b>$aji</b> tahun.<br>";
echo "Usia Bintan adalah <b>$bintan</b> tahun.<br>";
echo "<b>==============================================================================================</b><br>";

echo "<br><br><br>";
echo "<b>==============================================================================================</b><br>";
echo "<b>Soal 2:</b><br>";
$jambu = 15000;
$harga_dus = 2000;
$total_dus = 6;
$jambuperdus = 5;
echo "Seorang pedagang menjual jambu dengan harga Rp. $jambu/kg. Di dalam tokonya terdapat $total_dus dus dan di setiap dus berisi $jambuperdus kg jambu.<br>";
echo "Dus bekas tempat jambu itu masih bisa dijual lagi dengan harga Rp. $harga_dus/dus.<br>";
echo "Berapakah uang hasil penjualan seluruh jambu dan dus tersebut?<br>";
echo "<b>Jawaban: </b><br>";
$jual_jambu = $total_dus * $jambuperdus * $jambu;
$jual_dus = $harga_dus * $total_dus;
$total_jual = $jual_jambu + $jual_dus;
echo "Total uang hasil penjualan seluruh jambu dan dus adalah <b>Rp. $total_jual</b>.<br>";
echo "<b>==============================================================================================</b><br>";


?>
