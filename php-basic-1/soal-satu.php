<h1>Berlatih String PHP</h1>
<?php   
        echo "<h3> Soal No 1</h3>";

        $first_sentence = ("Hello PHP!") ; // Panjang string 10, jumlah kata: 2
        $panjang_string = strlen($first_sentence);
        $jumlah_kata = str_word_count($first_sentence);
        echo "Panjang String: ". $panjang_string; 
        echo    ", ";
        echo "Jumlah kata: " . $jumlah_kata;
        echo " ";
        echo "Dari Kata " . $first_sentence . "<br>";
        
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        $panjang_string = strlen($second_sentence);
        $jumlah_kata = str_word_count($second_sentence);
        echo "Panjang String: ". $panjang_string; 
        echo    ", ";
        echo "Jumlah kata: " . $jumlah_kata;
        echo " ";
        echo "Dari Kata " . $second_sentence;
        
        echo "<h3> Soal No 2</h3>";
       
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>"  ;
        echo "<br> Kata Ketiga: " . substr($string2, 7, 8) . "<br>";

        echo "<h3> Soal No 3 </h3>";
        
        $kalimat = "PHP is old but Good!";
        echo "String: \"$kalimat\" "; 
        $kata_baru = "is old but awesome";
        $kalimat_baru = substr_replace($kalimat,$kata_baru, 4 );
        echo "" . "<br>";
        echo $kalimat_baru;

    ?>