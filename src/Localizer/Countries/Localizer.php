<?php

namespace Localizer\Countries;

use PragmaRX\Countries\Package\Countries;

class Localizer
{
	private $countries;

	public function __construct()
	{
		$this->countries = new Countries();
	}

	public function getCountryByCode($code)
	{
		$field = (strlen($code) == 3) ? "cca3" : "cca2";
		return $this
			->countries
			->where($field, $code)
			->first()
		;
	}

	public function getAllCountries()
	{
		return $this->countries->all();
	}

	public function getAllCitiesByCountry($code)
	{
		return $this
			->countries
			->where("cca3", "FRA")
			->first()
			->hydrate("cities")
			->cities
		;
	}

}
