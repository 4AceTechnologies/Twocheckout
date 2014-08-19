<?php

$routes['2checkout/pay/{paymentId}/{securityCode}'] = array(
    'name' => 'Payment2checkout_pay',
    'plugin' => 'Payment2checkout',
    'controller' => 'SiteController',
    'action' => 'pay'
);


$routes['2checkout/ipn'] = array(
    'name' => 'Payment2checkout_ipn',
    'plugin' => 'Payment2checkout',
    'controller' => 'PublicController',
    'action' => 'ipn'
);


$routes['2checkout/userback'] = array(
    'name' => 'Payment2checkout_userBack',
    'plugin' => 'Payment2checkout',
    'controller' => 'PublicController',
    'action' => 'userBack'
);

$routes['2checkout/status/{paymentId}/{securityCode}'] = array(
    'name' => 'Payment2checkout_status',
    'plugin' => 'Payment2checkout',
    'controller' => 'SiteController',
    'action' => 'status'
);
