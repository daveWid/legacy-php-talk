<?php

namespace NWOPUG;

class Format
{
	/**
	 * Formats a phone number into (xxx) xxx-xxxx format
	 *
	 * @param  mixed $num  The phone number
	 * @return string     The formatted number
	 */
	public static function phone($num)
	{
		$clean = preg_replace("/\D/", "", $num);

		$area = substr($clean, 0, 3);
		$city = substr($clean, 3, 3);
		$local = substr($clean, 6, 4);

		return "(".$area.") ".$city."-".$local;
	}

	/**
	 * Formats a YYYY-MM-DD.
	 *
	 * @param  $date   string  A YYYY-MM-DD date
	 * @param  $format string  The date format
	 * @return string          The formatted date
	 */
	public static function date($date, $format = "F jS, Y")
	{
		$date = \DateTime::createFromFormat("Y-m-d", $date);
		return $date->format($format);
	}
}
