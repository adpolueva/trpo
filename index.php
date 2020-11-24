<?php

class A{
    
}

class B extends A
{
    public function __construct($a)
    {
        $this->a = $a;
        
    }
    
    protected $a;  
}


class C extends B
{
    public function __construct($a,$b,$c)
    {
		$this->b = $b;
        $this->c = $c;
        parent::__construct($a);
    }
	protected $b;
    protected $c;
    
}

$a1 = new A ();
$a2 = new A ();
$a3 = new A ();
$b4 = new B ($a3);
$c5 = new C ($b4,$a1,$a2);

?>