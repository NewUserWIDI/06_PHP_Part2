<?php
function perkenalan(){
    echo "Assalamualaiku, ";
    echo "Perkenalkan, nama saya Widi<br/>"; 
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan(); 
perkenalan();
?>

<?php
function perkenalan($nama, $salam){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>"; 

$saya = "Elok";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
?>
