<?php

/**
* sizing conversion
*/
class SizeConversion
{

	public $shoes_man = array('eu' => [39, 39.5, 40, 40.5, 41, 41.5, 42, 42.5, 43, 43.5, 44, 44.5, 45, 46, 47, 48, 49],
						 	  'us' => [6 , 6.5 , 7 , 7.5 , 8 , 8.5 , 9 , 9.5 , 10, 10.5, 11, 11.5, 12, 13, 14, 15, 16]);

	public $shoes_woman = array('eu' => [35, 35, 35.5, 36 , 36.5, 37 , 37.5, 38 , 38.5, 39 , 39.5, 40 , 40.5, 41  , 41.5, 42  , 42.5],
								'us' =>	[4 , 4.5, 5  , 5.5, 6   , 6.5, 7   , 7.5, 8   , 8.5, 9   , 9.5, 10  , 10.5, 11  , 11.5, 12]);

	public function shoes($sex, $from, $to ,$size)
	{

		$shoes = 'shoes'.'_'.$sex;
		$shoes = $this->$shoes;
		$diff  = 0.5;

		if ( $sex == 'woman' ) { $diff = 2; }
		if ( $from == 'uk' )   { $size += 0.5; $from = 'us'; }

		$index = array_search($size, $shoes[$from]);
		if ( $index != FALSE )
		{
			if ( $to == 'uk' ) { return $shoes['us'][$index] - 0.5; }
			return $shoes[$to][$index];
		}
		else
		{
			return 'Invalid size';
		}
	}
}

?>