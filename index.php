<?php
class A {
	public int $A1;
	public float $A2;
	
    function MA1()
    {
        if (isset($this)) {
            echo 'Método MA1';
    }
  }
	function MA2()
    {
        if (isset($this)) {
            echo 'Método MA2';
    }
  }
}
class B {
	public int $B1;
	public float $B2;
	
    function MB1()
    {
        if (isset($this)) {
            echo 'Método MB1';
    }
  }
	function MB2()
    {
        if (isset($this)) {
            echo 'Método MB2';
    }
  }
}

$a = new A();
$a->MA1();
$a->MA2();

$b = new B();
$b->MB1();
$b->MB2();

?>