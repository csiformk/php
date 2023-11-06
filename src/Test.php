<?php

class Test
{
    public $var1 = 'Variable 1';
    private $var2 = 'Variable 2 privé';
    protected $var3 = 'Variable 3 protected';
    static $var4 = 'Variable 4 statique';
    const PI = 3.14;
    public $rayon;

    public function __construct()
    {
        echo 'I am a constructor method of the class '  . __CLASS__ . '<br>';
    }

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

    public function __destruct()
    {
        echo 'I am a destrcutor method of the class ' . __CLASS__ . '<br>';
    }
}

class TestHerite extends Test 
{
    
    public function __construct()
    {
        parent::__construct();
        //echo 'I am a constrcutor method of the class ' . __CLASS__. '<br>';
    }
    
    public function getVar()
    {
        return $this->var3;
    }
}

abstract class AbstractClass
{
    abstract protected function uneMethode();
    
    public function appelUneMethode()
    {
        $this->uneMethode();
    }
}

class AbstractClassHerite extends AbstractClass
{
    protected function uneMethode()
    {
        echo 'Une methode appelé !';
    }
}
