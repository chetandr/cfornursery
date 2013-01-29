<?php

class DamagedTest extends WebTestCase
{
	public $fixtures=array(
		'damageds'=>'Damaged',
	);

	public function testShow()
	{
		$this->open('?r=damaged/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=damaged/create');
	}

	public function testUpdate()
	{
		$this->open('?r=damaged/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=damaged/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=damaged/index');
	}

	public function testAdmin()
	{
		$this->open('?r=damaged/admin');
	}
}
