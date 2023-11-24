<?php
//konstruktor parent
class Parent1{
    protected $message;
    protected $code;
    protected $isNull;
    public function __construct($m = "exception", $c = null, $n = null){
        $this->message = $m;
        $this->code = $c;
        $this->isNull = $n;
    }

    public function getMessage(){
        return $this->message;
    }
}

class Child1 extends Parent1{
    public function __construct($m, $c, $n){
        parent::__construct($m);
        // $this->message = $m;
        // $this->code = $c;
        // $this->isNull = $n;
    }
}

$e = new Child1("exception message test");
echo $e->getMessage();