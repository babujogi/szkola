<?php

function czyCzasJestUjemny($x){
    if($x<0){
        throw new Exception("Czas jest ujemny");
    }else return true;
    
}
interface Zadaniowy{
    public function wykonajZadanie($czas);
}

abstract class Pracownik implements Zadaniowy{
    abstract function otrzymajWynagrodzenie();
}

class Programista extends Pracownik{
    public function __construct($czas){
        if(czyCzasJestUjemny($czas)) $this->czas=$czas;
    }

    function wykonajZadanie($czas){
        echo "Wykonano zadanie w czasie $czas\n";
    }

    function otrzymajWynagrodzenie(){
        return $this->czas*50;
    }

    
    
}

class InzynierTestow extends Pracownik{
    public function __construct($czas){
        if(czyCzasJestUjemny($czas)) $this->czas=$czas;
    }

    function wykonajZadanie($czas){
        echo "Wykonano zadanie w czasie $czas\n";
    }

    function otrzymajWynagrodzenie(){
        return $this->czas*30;
    }
}

try{
    $Programista=new Programista(-10);
    $InzynierTestow=new InzynierTestow(12);

    $Programista->wykonajZadanie(5);
    $InzynierTestow->wykonajZadanie(7);

    echo "Programista otrzumał: ".$Programista->otrzymajWynagrodzenie()."\n";
    echo "InzynierTestow otrzumał: ".$InzynierTestow->otrzymajWynagrodzenie()."\n";
}catch(Exception $a){
    echo "Błąd: ".$a->getMessage();
}
?>

