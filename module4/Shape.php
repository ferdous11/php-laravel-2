<?php
class Shape{
    protected $name;
    protected $area;
    public function __construct($name) {
        $this->name = $name;
        $this->calculateArea();
    }

    function getArea(){
        echo "The Ara of {$this->name} is : {$this->area}";
    }

    function calculateArea(){}
}

class Triangle extends Shape{
    private $a,$b,$c;
    public function __construct($a,$b,$c) {
        $this->a = $a;$this->b = $b;$this->c = $c;
        parent::__construct("Triangle");
    }
    function calculateArea(){
        $diamiter  =  ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($diamiter*($diamiter-$this->a)*($diamiter-$this->b)*($diamiter-$this->c));
    }
}

class Rectangle extends Shape{
    private $a,$b,$c;
    public function __construct($a,$b) {
        $this->a = $a;$this->b = $b;
        parent::__construct("Rectangle");
    }
    function calculateArea(){
        
        $this->area = $this->a*$this->b;
    }
}
$r=new Rectangle(22,5);
$r->getArea();

$r=new Triangle(22,10,13);
$r->getArea();