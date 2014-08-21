<?php

$routes['2checkout/pay/{paymentId}/{securityCode}'] = array(
    'name' => 'Twocheckout_pay',
    'plugin' => 'Twocheckout',
    'controller' => 'SiteController',
    'action' => 'pay'
);


$routes['2checkout/return'] = array(
    'name' => 'Twocheckout_return',
    'plugin' => 'Twocheckout',
    'controller' => 'PublicController',
    'action' => 'userBack'
);



$routes['2checkout/status/{paymentId}/{securityCode}'] = array(
    'name' => 'Twocheckout_status',
    'plugin' => 'Twocheckout',
    'controller' => 'SiteController',
    'action' => 'status'
);
