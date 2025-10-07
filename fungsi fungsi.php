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

<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>"; 


$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>

$saya = "Elok";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
?>

<?php
// membuat fungsi 
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2006, 2025) . " tahun";

?>
<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Elok");

?>
