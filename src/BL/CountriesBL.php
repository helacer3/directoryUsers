<?php
namespace BL;

include_once 'src\Model\Country.php';

use Model\Country;

/**
* countries BL
*/
class CountriesBL {

	/**
	* load Countries List
	*/
	public function loadCountriesList() {
		return Country::all()->sortBy('country_name');
	}
}