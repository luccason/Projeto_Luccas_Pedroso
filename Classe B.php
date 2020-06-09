<?php
class B {
	public int $B1;
	public float $B2;
	
    function MB1()
    {
        if (isset($this)) {
            echo "Método MB1 <br/>";
    }
  }
	function MB2()
    {
        if (isset($this)) {
            echo 'Método MB2 <br/>';
    }
  }
}

//Teste de impressão
$b = new B();
$b->MB1();
$b->MB2();
?>