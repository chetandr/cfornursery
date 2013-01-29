<?php

class BookingsTest extends WebTestCase
{
	public $fixtures=array(
		'bookings'=>'Bookings',
	);

	public function testShow()
	{
		$this->open('?r=bookings/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=bookings/create');
	}

	public function testUpdate()
	{
		$this->open('?r=bookings/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=bookings/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=bookings/index');
	}

	public function testAdmin()
	{
		$this->open('?r=bookings/admin');
	}
}
