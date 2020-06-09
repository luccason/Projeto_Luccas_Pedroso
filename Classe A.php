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
  
?>