<?php 
interface BaseHuman{
    function isAlive();
    function canEat();

}
class C1 implements BaseHuman{
    protected $name;
    function isAlive(){}
    function canEat(){}
}

$b  = new C1;
echo $b instanceof BaseHuman;


final class C2{
    protected $roll;

}

$b1= new C2;

class C3 extends C2{

}