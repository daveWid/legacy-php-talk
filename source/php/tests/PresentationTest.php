<?php

/**
 * Random code from the presentation... 
 */
class PresentationTest extends PHPUnit_Framework_TestCase
{
	public function testRandomBeer()
	{
		$beer = \NWOPUG\Helper\Beer::random();
		var_dump($beer);
	}

	public function testArrayMapLambda()
	{
		$cube = function($number) {
			return pow($number, 3);
		};

		$cubed = array_map($cube, range(1,5));
		var_dump($cubed);
	}

	public function testArrayMapToUpper()
	{
		$beers = array('guiness', 'sam adams', 'bells');

		$capitalized = array_map('ucwords', $beers);
		var_dump($capitalized);
	}

}