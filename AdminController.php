<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 7/30/14
 * Time: 2:19 PM
 */

namespace Plugin\Payment2checkout;


class AdminController {
    public function index()
    {
        $config = array(
            'table' => '2checkout',
            'orderBy' => '`id` desc',
            'fields' => array(
                array(
                    'label' => __('Order ID', 'Payment2checkout', false),
                    'field' => 'orderId',
                    'allowUpdate' => false,
                    'allowInsert' => false
                ),
                array(
                    'label' => __('Title', 'Payment2checkout', false),
                    'field' => 'title'
                ),
                array(
                    'label' => __('Price', 'Payment2checkout', false),
                    'field' => 'price',
                    'type' => 'Currency',
                    'currencyField' => 'currency'
                ),
                array(
                    'label' => __('Currency', 'Payment2checkout', false),
                    'field' => 'currency'
                ),
                array(
                    'label' => __('Paid', 'Payment2checkout', false),
                    'field' => 'isPaid',
                    'type' => 'Checkbox'
                ),
                array(
                    'label' => __('User ID', 'Payment2checkout', false),
                    'field' => 'userId',
                    'type' => 'Integer'
                ),
                array(
                    'label' => __('First Name', 'Payment2checkout', false),
                    'field' => 'payer_first_name'
                ),
                array(
                    'label' => __('Last Name', 'Payment2checkout', false),
                    'field' => 'payer_last_name'
                ),
                array(
                    'label' => __('Email', 'Payment2checkout', false),
                    'field' => 'payer_email'
                ),
                array(
                    'label' => __('Country', 'Payment2checkout', false),
                    'field' => 'payer_country'
                ),
                array(
                    'label' => __('Created At', 'Payment2checkout', false),
                    'field' => 'createdAt'
                ),



            )
        );
        return ipGridController($config);
    }
}
