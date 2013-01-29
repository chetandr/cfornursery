<?php

class SalesTest extends WebTestCase
{
	public $fixtures=array(
		'sales'=>'Sales',
	);

	public function testShow()
	{
		$this->open('?r=sales/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=sales/create');
	}

	public function testUpdate()
	{
		$this->open('?r=sales/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=sales/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=sales/index');
	}

	public function testAdmin()
	{
		$this->open('?r=sales/admin');
	}
}
