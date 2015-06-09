<?php

require_once __DIR__.'/../../include/desconto.php';

class descontoTest extends PHPUnit_Framework_TestCase{

	public function testaDesconto(){
		$desconto = new Desconto();
		$desconto->setDescontoValor(0.1, 10);
		$this->assertEquals(1, $desconto->getValor());
	}
}

?>