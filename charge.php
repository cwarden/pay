<?php
require_once('./config.php');

$token  = $_POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
	'email' => $_POST['stripeEmail'],
	'card'  => $token
));

$statementDescriptor = substr(preg_replace('/[<>"\']/', '', $stripe['company_name']), 0, 22);

$charge = \Stripe\Charge::create(array(
	'customer'             => $customer->id,
	'amount'               => $stripe['amount'],
	'description'          => $stripe['product_name'],
	'statement_descriptor' => $statementDescriptor,
	'currency'             => 'usd'
));

setlocale(LC_MONETARY, 'en_US.UTF-8');
echo '<h1>Successfully charged ' . money_format('%.2n', $stripe['amount']/100) . '!</h1>';
?>

