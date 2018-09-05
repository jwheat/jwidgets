<?php
    use Jadu\PayBridge\Widget\DirectDebitWidget;
    use Jadu\PayBridge\DataMapper\UserDirectDebitMapper;
    use Jadu\PayBridge\DirectDebit\DirectDebitService;

    $mapper = new UserDirectDebitMapper(
        \Jadu_Service_Container::getInstance()->getDb(), 
        \Jadu_Service_Container::getInstance()->getCacheManager()
    );
    $configMapper = new Jadu_PayBridge_DataMapper_ConfigurationMapper(
        \Jadu_Service_Container::getInstance()->getDb(), 
        \Jadu_Service_Container::getInstance()->getCacheManager()
    );
    $service = new DirectDebitService($mapper, $configMapper, null);

    $widget = new DirectDebitWidget($service);
    $widget->render();
?>