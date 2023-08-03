<?php
echo "<h3> Soal No 1 Greetings </h3>";
    function greetings($name) {
        echo "Hallo $name, Selamat Datang di Jabar Coding Camp! <br>";
    }

    greetings("Bagas");
    greetings("Wahyu");
    greetings("Abdul");

    echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
    function reverse($rvr1) {
        $panjang = strlen($rvr1);
        $hasil = '';
        for ($i = ($panjang - 1); $i >= 0; $i--) {
        $hasil .= $rvr1[$i];
    }
    return $hasil;
    }
        function reverseString($rvr2) {
        $string = reverse($rvr2);
        echo $string ."<br>";
    }
        reverseString("abduh");
        reverseString("Bootcamp");
        reverseString("We Are JCC Developers");
        echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

    function palindrome($kalimat1) {
        $kalimat2 = reverse($kalimat1);
    if ($kalimat1 == $kalimat2) {
        echo 'palindrome(' . $kalimat1 . ') = true <br>';
        } else {
        echo 'palindrome(' . $kalimat1 .  ') =  false <br>';
        }
    }
    palindrome("civic") ; 
    palindrome("nababan") ; 
    palindrome("jambaban"); 
    palindrome("racecar");
    
 echo "<h3>Soal No 4 Tentukan Nilai </h3>";
        function tentukan_nilai($val) {
            $hasil1 = 'tentukan_nilai(' . $val . ') =';
        if ($val >= 85 && $val <= 100) {
            $hasil1 .= 'Sangat baik';
        } else if ($val >= 70 && $val < 85) {
            $hasil1 .= 'Baik';
        } else if ($val >= 60 && $val < 70) {
            $hasil1 .= 'Cukup';
        } else {
            $hasil1 .= 'Kurang';
        }
            return $hasil1 ."<br>";
    }
     echo tentukan_nilai(98);
     echo tentukan_nilai(76);
     echo tentukan_nilai(67);
     echo tentukan_nilai(43);

?>