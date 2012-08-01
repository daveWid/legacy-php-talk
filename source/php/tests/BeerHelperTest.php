<?php

class StringHelperTest extends PHPUnit_Framework_TestCase
{
	public function testRandomBeer()
	{
		$this->assertContains(\NWOPUG\Helper\Beer::random(), \NWOPUG\Helper\Beer::$staples);
	}
}