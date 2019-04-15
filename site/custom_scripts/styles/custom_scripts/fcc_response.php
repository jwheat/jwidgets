<?php

use Jadu\Service\Container;

require_once 'utilities/JaduStatus.php';

$orderMapper = new Jadu_PayBridge_DataMapper_OrderMapper(
    Container::getInstance()->getDb(),
    Container::getInstance()->getCacheManager()
);

$pspConfigMapper = new Jadu_PayBridge_DataMapper_PSPConfigurationMapper(
    Container::getInstance()->getDb(),
    Container::getInstance()->getCacheManager()
);

$pspConfig = $pspConfigMapper->getByName('First Capital Cashflow');

if (!isset($_GET['orderID'])) {
    $cancelStr = '';
    if (isset($_GET['cancelled']) && $_GET['cancelled'] == 'true') {
        $cancelStr = '&cancelled=true';
    }

    header('Location: /site/xfp/scripts/payment_complete.php?pspID='.intval($pspConfig->id).$cancelStr);
    exit;
}

$order = $orderMapper->getByID(intval($_GET['orderID']));
if (!is_object($order)) {
    header('Location: /site/xfp/scripts/payment_complete.php?pspID='.intval($pspConfig->id));
    exit;
}

if ($order->adminID <= 0) {
    header('Location: /site/xfp/scripts/payment_complete.php?orderID='.intval($order->id).'&pspID='.intval($pspConfig->id));
    exit;
}
else {
    header('Location: /jadu/xforms2/paybridge/moto-payments/complete?orderID='.intval($order->id).'&pspID='.intval($pspConfig->id));
    exit;
}