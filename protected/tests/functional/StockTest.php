<?php

class StockTest extends WebTestCase
{
	public $fixtures=array(
		'stocks'=>'Stock',
	);

	public function testShow()
	{
		$this->open('?r=stock/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=stock/create');
	}

	public function testUpdate()
	{
		$this->open('?r=stock/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=stock/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=stock/index');
	}

	public function testAdmin()
	{
		$this->open('?r=stock/admin');
	}
}
