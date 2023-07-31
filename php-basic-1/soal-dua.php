<h1>Berlatih Array</h1>

<?php
echo "<h3> Soal 1 </h3>";

$kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
print_r($kids); echo'<br>';
$adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
print_r($adults);echo'<br>';

echo "<h3> SOAL NO 2 </h3>";
            // Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
 
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: "; echo count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: "; echo count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "<h3> SOAL NO 3 </h3>";

    $trainer = array(
        array(
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ),
        array(
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ),
        array(
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ),
        array(
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        )
    );

    echo "<pre>";
        print_r($trainer);
        echo "</pre>";

?>