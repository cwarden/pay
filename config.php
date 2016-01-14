<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => getenv('SECRET_KEY'),
  "publishable_key" => getenv('PUBLISHABLE_KEY'),
  "company_name"    => getenv('COMPANY_NAME'),
  "product_name"    => getenv('PRODUCT_NAME'),
  "amount"          => getenv('AMOUNT') * 100
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
