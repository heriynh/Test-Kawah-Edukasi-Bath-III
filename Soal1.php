<!-- 
    1. Kami mempunyai data array dengan nama variable  data : 

    var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

    - buatlah program FizzBuzz dengan looping: 
        - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
        - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
        - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"
 -->

<?php
$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] === 5) {
        echo "Fizz";
    } else if ($data[$i] === 11) {
        echo "Buzz";
    } else if ($data[$i] === 5 && $data[$i] === 11) {
        echo "Fizzbuz";
    }
}
