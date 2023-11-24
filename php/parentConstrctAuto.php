<?php 

class Auto{
    protected $marka;
    protected $model;

    public function __construct($marka, $model){
        $this->marka=$marka;
        $this->model=$model;
        echo "Utworzono auto: ".$marka." ".$model."\n";
    }

    public function wypiszAuto(){
        return "Auto: ".$this->marka." ".$this->model;
    }
}


class Kierowca extends Auto{
    protected $imie;
    protected $nazwisko;

    public function __construct($marka,$model,$imie,$nazwisko){
        parent::__construct($marka,$model);
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;

        echo "Utworzono kierowce: $this->imie , $this->nazwisko";
    }

    public function wypiszKierowce(){
        return $this->wypiszAuto()."Kierowca: ".$this->imie." ".$this->nazwisko;
    }
}


$auto=new Kierowca("mercedes","g63","Jan","Kowalski");

$auto->wypiszKierowce();
?>