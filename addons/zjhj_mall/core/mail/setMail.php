<?php if ($type == 3) : ?>
<b>[<?php echo $store_name; ?>] 预约订单(<?php echo $order['order_no']; ?>)，用户昵称 <?php echo $user_name; ?>发起了预约订单，请及时处理!<?php echo $order['total_price']; ?>，请尽快处理！</b>

<?php else : ?>
<b>[<?php echo $store_name; ?>] 新的订单(<?php echo $order['order_no']; ?>)，用户昵称 <?php echo $user_name; ?>，下单金额<?php echo $order['total_price']; ?>，请尽快处理！</b>
<?php endif; ?>