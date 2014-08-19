<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\Payment2checkout;


class PublicController extends \Ip\Controller
{

    public function ipn()
    {
        $this->processNotification();
        //just sending empty OK status 200
    }

    public function userBack()
    {
        $this->processNotification();

        $customData = json_decode(ipRequest()->getPost('custom'), true);
        if (empty($customData['paymentId'])) {
            throw new \Ip\Exception("Unknown order ID");
        }
        if (empty($customData['securityCode'])) {
            throw new \Ip\Exception("Unknown order security code");
        }

        $payment = Model::getPayment($customData['paymentId']);

        if ($payment['isPaid']) {
            $orderUrl = ipRouteUrl('Payment2checkout_status', array('paymentId' => $customData['paymentId'], 'securityCode' => $customData['securityCode']));
            $response = new \Ip\Response\Redirect($orderUrl);

            if (!empty($payment['successUrl'])) {
                $response = new \Ip\Response\Redirect($payment['successUrl']);
            }
            $response = ipFilter('Payment2checkout_userBackResponse', $response);
            return $response;
        } else {
            $viewData = array(
                'payment' => $payment
            );
            $response = ipView('view/paymentError.php', $viewData);
            $response = ipFilter('Payment2checkout_userBackResponseError', $response);
            return $response;
        }


    }

    protected function processNotification()
    {
        $paymentModel = PaymentModel::instance();
        $postData = ipRequest()->getPost();
        ipLog()->info('Payment2checkout.ipn: 2checkout notification', $postData);
        $paymentModel->processCallback($postData);
    }

}
