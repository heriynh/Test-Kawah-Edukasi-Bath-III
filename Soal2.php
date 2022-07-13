<!-- 
    2. Buatlah program untuk pengecekan tipe data:

    var data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

    hasil yang di inginkan: 
    - index ke 0 adalah integer dengan data 1
    - index ke 1 adalah string dengan data kawah
    - dan jika nilai dari index itu kurang dari  0 maka keluarkan output:  Tidak bisa di validasi sistem

    contoh : 
    var contoh = [1, "mantap", 0 ];
    expektasi output: 
    - index ke 0 adalah integer dengan data 1
    - index ke 1 adalah string dengan data mantap
    - index ke 2 Tidak bisa di validasi sistem

    buatlah programnya sampai semua data tervalidasi

 -->

<?php

use function PHPSTORM_META\type;

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] < 0) {
        echo "Data tidak bisa divalidasi sistem";
    } else {
        echo "Index KE :" + $i + "adalah" + type($data[$i]);
    }
}
?>