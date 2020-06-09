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
<<<<<<< HEAD
	function MD3()
    {
        if (isset($this)) {
            echo 'Método MD3 <br/>';
=======
	function MD4()
    {
        if (isset($this)) {
            echo 'Método MD4 <br/>';
>>>>>>> 51c31f49770801dd23d85db09e1c4d4a18f98b80
    }
  }
}

//Teste de impressão
$d = new D);
$d->MD1();
$d->MD2();
<<<<<<< HEAD
$d->MD3();
?>
=======
?>
>>>>>>> 51c31f49770801dd23d85db09e1c4d4a18f98b80
