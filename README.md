# Quickly Accept Payment Using Stripe

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

Quickly spin up a heroku site to allow someone to pay a fixed amount for a
single product.

## Installation

Use the [Deploy to Heroku](https://heroku.com/deploy) button above to create a copy of the app.

## Developing

Install [composer](https://getcomposer.org/).

```
$ composer install
$ env SECRET_KEY=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PUBLISHABLE_KEY=pk_XXXXXXXXXXXXXXXXXXXXXXXXXXXXX COMPANY_NAME='Your Company' PRODUCT_NAME='Product Name' AMOUNT=100.00 php -S localhost:8000
```
