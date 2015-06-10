<?php

$express_data = [
    'user' => [
        [
            'sender_name' => 'sender_name',
            'sender_address' => 'sender_address',
            'sender_phone' => 'sender_phone',
            'receiver_name' => 'receiver_name',
            'receiver_address' => 'receiver_address',
            'receiver_phone' => 'receiver_phone'
        ],
        //....
    ], //user info on express paper, two-dimension
    'express' => 'yuantong', //express name, yuantong/yunda..., corresponding to css name under css folder
    'batch' => 0, //whether is batch print express, 0 & 1 for single print & batch print
];
$js_data = json_encode($express_data); //used in print.html
echo $js_data;exit;