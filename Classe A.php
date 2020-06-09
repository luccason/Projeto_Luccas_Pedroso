<?php
class A {
	public int $A1;
	public float $A2;
	
    function MA1()
    {
        if (isset($this)) {
            echo "Método MA1 <br/>";
    }
  }
	function MA2()
    {
        if (isset($this)) {
            echo 'Método MA2 <br/>';
    }
  }
	function MA3()
    {
        if (isset($this)) {
            echo '”Alteração a classe A partir do clone” <br/>';
    }
  }
}

//Teste de impressão
$a = new A();
$a->MA1();
$a->MA2();
$a->MA3();
?>