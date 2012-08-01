<?php

namespace NWOPUG\Helper;

class Beer
{
  public static $staples = array(
    'Natural Light',
    'Sam Adams',
    'Bells'
  );

  public static function random(array $beers = null)
  {
    if ($beers === null) {
      $beers = self::$staples;
    }

    $random = rand(0, (count($beers) - 1));
    return $beers[$random];
  }
}