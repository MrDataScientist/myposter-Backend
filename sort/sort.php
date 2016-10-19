<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 19/10/2016
 * Time: 23:05
 */

$data = array(
    'order-2' => array(
        'date' => '19:22:56 2015-03-17',
        'articles' => array(
            array(
                'id'    => '1',
                'price' => 32.0
            ),
            array(
                'id'    => '2',
                'price' => 20.0
            )
        )
    ),
    'order-3' => array(
        'date' => '22:56:17 2015-03-16',
        'articles' => array(
            array(
                'id'    => '1',
                'price' => 12.0
            )
        )
    ),
    'order-1' => array(
        'date' => '19:22:43 2015-03-17',
        'articles' => array(
            array(
                'id'    => '3',
                'price' => 15.0
            ),
            array(
                'id'    => '1',
                'price' => 8.0
            ),
            array(
                'id'    => '2',
                'price' => 21.0
            )
        )
    )
);

array_multisort(
    $data['date'], SORT_ASC, SORT_STRING,
    $data['price'], SORT_ASC, SORT_STRING);
	//print_r($data);
var_dump($data);
