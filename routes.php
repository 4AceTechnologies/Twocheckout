<?php

$routes['2checkout/pay/{paymentId}/{securityCode}'] = array(
    'name' => 'Twocheckout_pay',
    'plugin' => 'Twocheckout',
    'controller' => 'SiteController',
    'action' => 'pay'
);


$routes['2checkout/ipn'] = array(
    'name' => 'Twocheckout_ipn',
    'plugin' => 'Twocheckout',
    'controller' => 'PublicController',
    'action' => 'ipn'
);


$routes['2checkout/userback'] = array(
    'name' => 'Twocheckout_userBack',
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
