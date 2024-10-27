<?php 

function szyfruj($wiadomosc, $klucz, $tablica){
    $szyfrowany_tekst = '';
    $i = 1;
    
    foreach (str_split($wiadomosc) as $znak) {
        if ($i == $klucz) {
            $szyfrowany_tekst .= $tablica[array_rand($tablica)]; // Dodaj losowy znak
            $i = 1;
        }
        $indeks = array_search($znak, $tablica);
        if ($indeks !== false) {
            $szyfrowany_tekst .= $tablica[($indeks + $klucz) % count($tablica)]; // Zapewnia cykliczne przesunięcie
        }
        if ($znak == ' ') {
            $szyfrowany_tekst .= $znak;
        }
        $i++;
    }
    
    return $szyfrowany_tekst;
}

function deszyfruj($wiadomosc, $klucz, $tablica){
    $deszyfrowany_tekst = '';
    $i = 1;

    foreach (str_split($wiadomosc) as $znak) {
        if ($i == $klucz) {
            $i = 1;
            continue; // Pomijamy losowy znak
        }
        $indeks = array_search($znak, $tablica);
        if ($indeks !== false) {
            $deszyfrowany_tekst .= $tablica[($indeks - $klucz + count($tablica)) % count($tablica)]; // Cykliczne przesunięcie
        }
        if ($znak == ' ') {
            $deszyfrowany_tekst .= $znak;
        }    
        $i++;
    }
    
    return $deszyfrowany_tekst;
}

$tablica = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","w","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","R","S","T","U","W","Y","Z"];

$wiadomosc = 'To jest prZykladowy tekst';
$szyfrowany = szyfruj($wiadomosc, 4, $tablica);
echo "Zaszyfrowana wiadomość: " . $szyfrowany . "\n";
$odszyfrowany = deszyfruj($szyfrowany, 4, $tablica);
echo "Odszyfrowana wiadomość: " . $odszyfrowany . "\n";

?>
