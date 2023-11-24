<?php 

try{
    //generowanie wyjątku
}catch(Exception $w){
    //wypisywanie wyjątku
    //exception - obsługa wyjątku
    //$w - zmienna pomocnicza
}
//wyjatek, w którmy liczba nie może dzielić prze zero 
//parent::__construct - konstruktor który pobiera dane od konstruktora nadrzędbegi(argumenty)
class SprLiczbaZero extends Exception{
    public function __construct(){
        ($message = "Liczba nie można dzielić przez zero", $info=0, Exception $null=null);
        parent::__construct($message, $info)    
    }

}


?>