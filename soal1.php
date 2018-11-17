<?php 

	$json = array(

		'itemId' => '12341882', 

		'itemName' => 'FGX Flannel Shirt', 

		'price' => 195000,

		'availableColorAndSize' => array(['color' => 'Blue-Black', 'size' => 'M,L,XL'],['color' => 'Black-White', 'size' => 'L']),

		'freeShiping' => 'false');

	echo json_encode($json); 

?>

