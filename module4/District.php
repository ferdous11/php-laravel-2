<?php 
class DistrictList implements IteratorAggregate,Countable{
    private $districts;
    private $name;

    function __construct(){
        $this->districts=array();
        $this->name = "Ferdous";
    }

    function __set($name, $value){
        array_push($this->$name,$value);
    }

    public function getIterator():Traversable{
        return new ArrayIterator($this);
    }

    public function count():int{
        return count($this->districts);
    }
}
$b= new DistrictList;
$b->districts = "Rajshahi";
$b->districts = "Rangpur";
$b->districts = "Bogra";

print_r ($b);
echo count($b);