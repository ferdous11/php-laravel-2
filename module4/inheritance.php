
<?php 
class ParentClass{
    protected $name;
    public function __construct($name) {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi(){
        echo "Hi {$this->name}";
    }
}

class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        echo "Hello";
    }
}
$ob = new ChildClass("Ferdous");
//$ob->sayHi();
