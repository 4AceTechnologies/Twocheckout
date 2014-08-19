<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\Payment2checkout;


class Filter
{
    public static function ipPaymentMethods($paymentMethods, $data)
    {
        $paymentMethod = new Payment();
        $paymentMethods[] = $paymentMethod;
        return $paymentMethods;
    }
}
