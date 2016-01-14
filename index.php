<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	data-key="<?= $stripe['publishable_key'] ?>"
	data-name="<?= htmlentities($stripe['company_name']) ?>"
	data-description="<?= htmlentities($stripe['product_name']) ?>"
	data-label="Pay for <?= htmlentities($stripe['product_name']) ?>"
	data-amount="<?= $stripe['amount'] ?>"
	data-locale="auto"></script>
</form>
