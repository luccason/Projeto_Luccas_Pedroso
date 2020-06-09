<?php
class C {
	public string $C1;
	public float $C2;
	
    function MC1()
    {
        if (isset($this)) {
            echo "Método MC1 <br/>";
    }
  }
	function MC2()
    {
        if (isset($this)) {
            echo 'Método MC2 <br/>';
    }
  }
  function MC3()
    {
        if (isset($this)) {
            echo 'Método MC3 <br/>';
    }
  }
}

//Teste de impressão
$c = new C);
$c->MC1();
$c->MC2();
$c->MC3();
?>