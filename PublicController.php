<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\Twocheckout;


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
            $orderUrl = ipRouteUrl('Twocheckout_status', array('paymentId' => $customData['paymentId'], 'securityCode' => $customData['securityCode']));
            $response = new \Ip\Response\Redirect($orderUrl);

            if (!empty($payment['successUrl'])) {
                $response = new \Ip\Response\Redirect($payment['successUrl']);
            }
            $response = ipFilter('Twocheckout_userBackResponse', $response);
            return $response;
        } else {
            $viewData = array(
                'payment' => $payment
            );
            $response = ipView('view/paymentError.php', $viewData);
            $response = ipFilter('Twocheckout_userBackResponseError', $response);
            return $response;
        }


    }

    protected function processNotification()
    {
        $paymentModel = PaymentModel::instance();
        $postData = ipRequest()->getPost();
        ipLog()->info('Twocheckout.ipn: 2checkout notification', $postData);
        $paymentModel->processCallback($postData);
    }

}
