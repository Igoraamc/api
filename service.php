<?php
	header('Content-Type: application/json; charset=utf-8');


	$data = (object)array(
				'menu' => array(
					(object)array(
						'id' => '1',
				        'name' => 'Macarrão',
				        'price' => 'R$ 34,80'
				    ),
				    (object)array(
				        'id' => '2',
				        'name' => 'Feijoada',
				        'price' => 'R$ 50,90'
				    ),
				    (object)array(
				    	'id' => '3',
				    	'name' => 'Salada Ceaser',
				        'price' => 'R$ 24,50'
				    ),
				    (object)array(
				    	'id' => '4',
				    	'name' => 'Churrasco',
				        'price' => 'R$ 68,00'
				    ),
				    (object)array(
				    	'id' => '5',
				    	'name' => 'Coca-Cola',
				        'price' => 'R$ 6,90'
				    ),
				    (object)array(
				    	'id' => '6',
				    	'name' => 'Sprite',
				        'price' => 'R$ 6,90'
				    ),
				    (object)array(
				    	'id' => '7',
				    	'name' => 'Suco (Copo)',
				        'price' => 'R$ 8,90'
				    ),
				    (object)array(
				    	'id' => '8',
				    	'name' => 'Suco Jarra',
				        'price' => 'R$ 17,90'
				    ),
				    (object)array(
				    	'id' => '9',
				    	'name' => 'Milk-Shake',
				        'price' => 'R$ 15,90'
				    ),
				    (object)array(
				    	'id' => '10',
				    	'name' => 'Fritas',
				        'price' => 'R$ 9,99'
				    ),
				    (object)array(
				    	'id' => '11',
				    	'name' => 'Hamburguer',
				        'price' => 'R$ 14,50'
				    ),
				    (object)array(
				    	'id' => '12',
				    	'name' => 'Legumes na Chapa',
				        'price' => 'R$ 19,99'
				    ),
				    (object)array(
				    	'id' => '13',
				    	'name' => 'Carne de Sol Acebolada',
				        'price' => 'R$ 37,40'
				    ),
				)
			);

	$json = json_encode($data, JSON_UNESCAPED_UNICODE);

	echo $json;
?>