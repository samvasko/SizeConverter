<?php
/**
 * Data sources for size conversion script
 */

class SizeConversion_data
{

	/**
	 * Source
	 * http://www.zappos.com/measure-your-shoe-size
	 */
	public $shoes_man = array(
		'eu' => [39, 39.5, 40, 40.5, 41, 41.5, 42, 42.5, 43, 43.5, 44, 44.5, 45, 46, 47, 48, 49],
		'us' => [6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 13, 14, 15, 16]);

	public $shoes_woman = array(
		'eu' => [35, 35, 35.5, 36, 36.5, 37, 37.5, 38, 38.5, 39, 39.5, 40, 40.5, 41, 41.5, 42, 42.5],
		'us' =>	[4, 4.5, 5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12]);

	/**
	 * Source
	 * http://asknumbers.com
	 */
	public $tshirts_man = array(
		'eu' => [87, 91, 97, 102, 107, 112, 117, 122],
		'us' => ['S','M','M','L','XL','XL','XXL','XXL'],
		'uk' => [34, 36, 38, 40, 42, 44, 46, 48] );

	public $shirts_man = array(
		'eu' => [36, 37, 38, 39, 40, 41, 42, 43, 44],
		'us' => [14, 14.5, 15, 15.5, 15.75, 16, 16.5, 17, 17.5]);

	public $general_woman = array(
		'eu' => [32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54],
		'us' => ['XS','S','S','M','M','L','L','XL','XL','XXL','XXXL','XXXL'],
		'uk' => [4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26] );
}


?>