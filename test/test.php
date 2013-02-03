<?php

/**
 * 	Various tests for sizes library
 */

require '../size.php';

$sizes = new SizeConversion();

echo $sizes -> shoes('man', 'eu', 'us', 40).'<br>';
echo $sizes -> shoes('woman', 'us', 'eu', 12);
echo $sizes->man('us','eu','XS','tshirts');

?>