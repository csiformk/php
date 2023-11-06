<?php

class Test {
    public $var1 = 'Variable 1';
    private $var2 = 'Variable 2 privé';
    protected $var3 = 'Variable 3 protected';
    static $var4 = 'Variable 4 statique';
    const PI = 3.14;
    public $rayon;

    public function displayVar($value) 
    {
        //echo 'Test';
        //return 'Test';
        return $this->var2 . ' ' . $value;
    }

    public function calculAire() 
    {
        return self::PI * $this->rayon * $this->rayon;
    }

    static function stacticFunc() 
    {
        return 'Methode statique : ' . self::$var4;
    }

}
