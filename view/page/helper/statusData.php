<table>
    <tr>
        <td><b><?php echo __('Order ID', 'Payment2checkout') ?></b></td>
        <td><?php echo esc($payment['orderId']) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Paid', 'Payment2checkout') ?></b></td>
        <td><?php echo __($payment['isPaid'] ? 'Yes' : 'No', 'Payment2checkout') ?>
            <?php if (!$payment['isPaid']) { ?>
                <a href="<?php echo $paymentUrl ?>">(<?php echo __('Pay Now', 'Payment2checkout') ?>)</a>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <td><b><?php echo __('Item', 'Payment2checkout') ?></b></td>
        <td><?php echo esc($payment['title']) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Amount', 'Payment2checkout') ?></b></td>
        <td><?php echo esc(ipFormatPrice($payment['price'], $payment['currency'], 'Payment2checkout')) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Date', 'Payment2checkout') ?></b></td>
        <td><?php echo esc(ipFormatDateTime(strtotime($payment['createdAt']), 'Payment2checkout')) ?></td>
    </tr>
</table>
