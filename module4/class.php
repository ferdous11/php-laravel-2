<?php
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    public function __construct($colorCode="") {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }
    function getColor(){
        echo $this->color;
    }
    function setColor($colorCode){
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    function parseColor(){
        if($this->color)
            list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
        else
            list($this->red,$this->green,$this->blue) = array(0,0,0);
    }

    function getRed(){
        echo $this->red;
    }
    function getGreen(){
        echo $this->green;
    }
    function getBlue(){
        echo $this->blue;
    }

    function getRGBColor(){
        print_r(array($this->red,$this->green,$this->blue));
    }
    function getColorName(){
        echo "Red: {$this->red}\n"."Greeb: {$this->green}\n"."Blue: {$this->blue}\n";
    }
}
$myColor =new RGB("#ffef27");
$myColor->getRGBColor();
$myColor->setColor("#212200");
$myColor->getRGBColor();
