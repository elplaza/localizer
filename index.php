<?php

require_once(__DIR__ . "/vendor/autoload.php");

use Localizer\Countries\Localizer;

try {
	echo str_pad("", 40, "-=", STR_PAD_BOTH) . PHP_EOL;
	echo str_pad(" LOCALIZER SERVICE ", 40, "-=", STR_PAD_BOTH) . PHP_EOL;
	echo str_pad("", 40, "-=", STR_PAD_BOTH) . PHP_EOL;
	echo PHP_EOL;

	$localizer = new Localizer();
	$countries = $localizer->getAllCountries();

	foreach ($countries as $country) {
		echo str_pad(
			$country->name->common,
			20,
			" ",
			STR_PAD_BOTH
		)
		. PHP_EOL;
	}

	echo PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage() . PHP_EOL;
}
