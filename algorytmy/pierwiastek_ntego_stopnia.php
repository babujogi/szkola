
<?php 
try{
    echo "Program do obliczania pierwiastka z liczby.\nProgram będzie wyświetlał liczba aż do momentu gdy będą one się powtarzały.\n";

    $liczba = readline("Podaj liczbe: ");
    $stopien = readline("Podaj stopien pierwiastka: ");
    if(!is_numeric($liczba) || !is_numeric($stopien)) throw new Exception("Nie podano liczby");
    if($liczba<0 || $stopien<0 ) throw new Exception("Liczba nie może być ujemna ");
    if($liczba==0) throw new Exception("Pierwiastek z 0 to 0");
    $tablica_liczb = array();

    for($i=0;;$i++){
        if($i==0){
            echo $liczba."\n";
            $tablica_liczb[$i]=$liczba;
            continue;
        }
        $tablica_liczb[$i]=1/2*($tablica_liczb[$i-1]+$liczba/$tablica_liczb[$i-1]);
        if($tablica_liczb[$i] == $tablica_liczb[$i-1]){  
            $pomocnicza = $i; 
            break;
        }
        echo $tablica_liczb[$i]."\n";
    }
    if($pomocnicza) echo "Wyświetlono $i liczb, ostatni wynik to $tablica_liczb[$i]";
}catch (Exception $e){
    echo $e->getMessage();
}

?>
