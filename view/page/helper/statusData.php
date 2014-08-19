<table>
    <tr>
        <td><b><?php echo __('Order ID', 'Twocheckout') ?></b></td>
        <td><?php echo esc($payment['orderId']) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Paid', 'Twocheckout') ?></b></td>
        <td><?php echo __($payment['isPaid'] ? 'Yes' : 'No', 'Twocheckout') ?>
            <?php if (!$payment['isPaid']) { ?>
                <a href="<?php echo $paymentUrl ?>">(<?php echo __('Pay Now', 'Twocheckout') ?>)</a>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <td><b><?php echo __('Item', 'Twocheckout') ?></b></td>
        <td><?php echo esc($payment['title']) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Amount', 'Twocheckout') ?></b></td>
        <td><?php echo esc(ipFormatPrice($payment['price'], $payment['currency'], 'Twocheckout')) ?></td>
    </tr>
    <tr>
        <td><b><?php echo __('Date', 'Twocheckout') ?></b></td>
        <td><?php echo esc(ipFormatDateTime(strtotime($payment['createdAt']), 'Twocheckout')) ?></td>
    </tr>
</table>
