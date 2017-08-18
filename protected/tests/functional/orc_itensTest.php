<?php

class orc_itensTest extends WebTestCase
{
	public $fixtures=array(
		'orc_itens'=>'orc_itens',
	);

	public function testShow()
	{
		$this->open('?r=orc_itens/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=orc_itens/create');
	}

	public function testUpdate()
	{
		$this->open('?r=orc_itens/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=orc_itens/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=orc_itens/index');
	}

	public function testAdmin()
	{
		$this->open('?r=orc_itens/admin');
	}
}
