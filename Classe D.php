<?php
class D {
	public int $D1;
	public string $D2;
	
    function MD1()
    {
        if (isset($this)) {
            echo "Método MD1 Teste <br/>";
    }
  }
	function MD2()
    {
        if (isset($this)) {
            echo 'Método MD2 Teste <br/>';
    }
  }
	function MD3()
    {
        if (isset($this)) {
            echo 'Método MD3 <br/>';
    }
  }
}

//Teste de impressão
$d = new D);
$d->MD1();
$d->MD2();
$d->MD3();
?>