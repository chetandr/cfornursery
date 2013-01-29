<?php

class PlantsTest extends WebTestCase
{
	public $fixtures=array(
		'plants'=>'Plants',
	);

	public function testShow()
	{
		$this->open('?r=plants/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=plants/create');
	}

	public function testUpdate()
	{
		$this->open('?r=plants/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=plants/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=plants/index');
	}

	public function testAdmin()
	{
		$this->open('?r=plants/admin');
	}
}
