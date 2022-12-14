<?php
function say_hello() {
echo "Hello World";
}
function tambah($a, $b) {
$hasil = $a + $b;
return $hasil;
}
function rata_rata($nilai = array()) {
$total = 0;
foreach ($nilai as $value) {
$total += $value;
}
$rata_rata = $total / count($nilai);
return $rata_rata;
}
//memanggil fungsi
say_hello();
echo "<hr>";
$hasil = tambah(1, 1);
echo $hasil;
echo "<hr>";
$nilai = [10,20,20,20,10];
$rata = rata_rata($nilai);
echo $rata;
?>