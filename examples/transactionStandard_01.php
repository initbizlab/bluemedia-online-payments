<?php

require_once './.config.php';

/**
 * Transaction standard request - example no 1.
 *
 * @author    Piotr Żuralski <piotr@zuralski.net>
 * @copyright 2015 Blue Media
 * @since     2015-08-08
 * @version   2.3.2
 */
use BlueMedia\OnlinePayments\Gateway;
use BlueMedia\OnlinePayments\Model;

//echo configForm();

$transactionStandard = new Model\TransactionStandard();
$transactionStandard->setOrderId((string) time())
    ->setAmount('9876.54')
    ->setDescription('Test transaction')
//    ->setGatewayId(106)
    ->setCurrency('PLN')
    ->setCustomerEmail('test@zuralski.net')
    ->setCustomerNrb('39105017641000009217760264')
    ->setCustomerIp('192.168.0.34')
    ->setTitle(sprintf('Test transaction %s', $transactionStandard->getOrderId()))
    ->setReceiverName('Zuralski.net')
;

/** @type Gateway $gateway */
echo $gateway->doTransactionStandard($transactionStandard);
