<?php

namespace NWOPUG\Helper;

class Beer
{
  public static function random()
  {
	$beers = array(
      'Guiness',
      'Sam Adams',
      'Bells'
    );

	$key = array_rand($beers, 1);
	return $beers[$key];
  }
}