<?php

require 'data.php';

/**
* sizing conversion
*/
class SizeConversion extends SizeConversion_data
{
	public function women($from, $to, $size, $atyp = FALSE)
	{
		$from = strtolower($from);
		$to   = strtolower($to);
		if ($atyp == 'shoes')
			$this->shoes('woman', $from, $to, $size);
		else
			$this->woman_general($from, $to, $size);
	}

	public function man($from, $to, $size, $atyp = FALSE)
	{

		$from = strtolower($from);
		$to   = strtolower($to);

		if ($atyp)
			return $this->man_special( $from, $to, $size, $atyp );
		else
			return $this->man_general( $from, $to, $size);
	}

	private function man_special($from, $to, $size, $atyp)
	{
		$atyp = strtolower($atyp);
		if ($atyp == 't-shirts' ||  $atyp == 'tshirts')
			$type = 'tshirts';

		// for shirts us & uk is the same
		if ($atyp == 'shirts') {
			if ($from == 'uk') $from = 'us';
			if ($to   == 'uk') $to = 'us';
			$type = 'shirts';
		}

		// extra fuction for shoes
		if ($atyp == 'shoes') {
			return $this->shoes('man', $from, $to, $size);
		}

		$type .= '_man';
		$source = $this->$type;

		$index = array_search($size, $source[$from]);
		if ( $index != FALSE )
			return $source[$to][$index];
		else
			return 'Invalid size';
	}

	private function man_general($from, $to, $size)
	{
		if ($size > 62 || $size < 32 || $size%2 > 0 )
			return 'Invalid size';

		if ($from == 'eu' && ( $to == 'us' || $to == 'uk' ) )
			return $size - 10;
		else if (( $from == 'us' || $from == 'uk' ) && $to == 'eu' )
			return $size + 10;
		else
			return $size;
	}

	private function woman_general($from, $to, $size)
	{

	}

	private function shoes($sex, $from, $to ,$size)
	{

		$from = strtolower($from);
		$to   = strtolower($to);

		$source = 'shoes'.'_'.$sex;
		$source = $this->$shoes;
		$diff  = 0.5;

		if ( $sex == 'woman' ) { $diff = 2; }
		if ( $from == 'uk' )   { $size += 0.5; $from = 'us'; }

		$index = array_search($size, $source[$from]);
		if ( $index != FALSE )
		{
			if ( $to == 'uk' )
				return $source['us'][$index] - 0.5;
			else
				return $source[$to][$index];
		}
		else
			return 'Invalid size';
	}
}
?>