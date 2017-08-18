<?php

class materiaisTest extends WebTestCase
{
	public $fixtures=array(
		'materiaises'=>'materiais',
	);

	public function testShow()
	{
		$this->open('?r=materiais/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=materiais/create');
	}

	public function testUpdate()
	{
		$this->open('?r=materiais/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=materiais/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=materiais/index');
	}

	public function testAdmin()
	{
		$this->open('?r=materiais/admin');
	}
}
