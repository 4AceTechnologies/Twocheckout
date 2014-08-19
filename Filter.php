<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\Twocheckout;


class Filter
{
    public static function ipPaymentMethods($paymentMethods, $data)
    {
        $paymentMethod = new Payment();
        $paymentMethods[] = $paymentMethod;
        return $paymentMethods;
    }
}
