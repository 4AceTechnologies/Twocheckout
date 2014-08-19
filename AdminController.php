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

namespace Plugin\Twocheckout;


class AdminController {
    public function index()
    {
        $config = array(
            'table' => 'twocheckout',
            'orderBy' => '`id` desc',
            'fields' => array(
                array(
                    'label' => __('Order ID', 'Twocheckout', false),
                    'field' => 'orderId',
                    'allowUpdate' => false,
                    'allowInsert' => false
                ),
                array(
                    'label' => __('Title', 'Twocheckout', false),
                    'field' => 'title'
                ),
                array(
                    'label' => __('Price', 'Twocheckout', false),
                    'field' => 'price',
                    'type' => 'Currency',
                    'currencyField' => 'currency'
                ),
                array(
                    'label' => __('Currency', 'Twocheckout', false),
                    'field' => 'currency'
                ),
                array(
                    'label' => __('Paid', 'Twocheckout', false),
                    'field' => 'isPaid',
                    'type' => 'Checkbox'
                ),
                array(
                    'label' => __('User ID', 'Twocheckout', false),
                    'field' => 'userId',
                    'type' => 'Integer'
                ),
                array(
                    'label' => __('First Name', 'Twocheckout', false),
                    'field' => 'payer_first_name'
                ),
                array(
                    'label' => __('Last Name', 'Twocheckout', false),
                    'field' => 'payer_last_name'
                ),
                array(
                    'label' => __('Email', 'Twocheckout', false),
                    'field' => 'payer_email'
                ),
                array(
                    'label' => __('Country', 'Twocheckout', false),
                    'field' => 'payer_country'
                ),
                array(
                    'label' => __('Created At', 'Twocheckout', false),
                    'field' => 'createdAt'
                ),



            )
        );
        return ipGridController($config);
    }
}
