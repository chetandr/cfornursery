<?php

class PriceTest extends WebTestCase
{
	public $fixtures=array(
		'prices'=>'Price',
	);

	public function testShow()
	{
		$this->open('?r=price/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=price/create');
	}

	public function testUpdate()
	{
		$this->open('?r=price/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=price/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=price/index');
	}

	public function testAdmin()
	{
		$this->open('?r=price/admin');
	}
}
