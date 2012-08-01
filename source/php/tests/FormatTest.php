<?php

class FormatTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider phoneData 
	 */
	public function testPhones($raw, $clean)
	{
		$this->assertSame($clean, \NWOPUG\Format::phone($raw));
	}

	public function phoneData()
	{
		return array(
			array(1234567890, "(123) 456-7890"),
			array("1234567890", "(123) 456-7890"),
			array("123asdf456ggasdf7890", "(123) 456-7890"),
		);
	}

	/**
	 * @dataProvider dateData
	 */
	public function testDates($raw, $formatted)
	{
		$this->assertSame($formatted, \NWOPUG\Format::date($raw));
	}

	public function dateData()
	{
		return array(
			array('2012-08-21', "August 21st, 2012")
		);
	}
}