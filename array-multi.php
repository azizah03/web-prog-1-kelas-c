<?php
$data = array(
    "web-prog" => array(
        "azizah" => 7,
        "aldi" => 8,
        "eko" =>6
    ),
    "kalkulus" => array(
        "eko" => 9,
        "aldo" => 8,
        "azizah" => 5
    )
);
echo "Nilai web-prog untuk Aldi : "
    .$data["web-prog"]["aldi"] . "<br>";
echo "Nilai Kalkulus untuk Azizah : " 
    .$data["kalkulus"]["azizah"];
?>