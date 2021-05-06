<?php
include  "config.php";

$checkout_session = \Stripe\Checkout\Session::create([
      'success_url' => 'http://localhost:8000/cash-stripe-2021/success.php?sessionId={CHECKOUT_SESSION_ID}',
      'cancel_url' => 'http://localhost:8000/cash-stripe-2021/cancel.php',
      'payment_method_types' => ['card', 'ideal'],
      'mode' => 'payment',
      'line_items' => [[
      	'name' => 'Monopoly Game',
      	'description' => 'over 3 years',
      	'images' => ['https://example.com/monopoly.png'],
        'amount' => 80,
        'currency' => 'eur',
        // For metered billing, do not pass quantity
        'quantity' => 1,
      ]],
    ]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>

</head>
<body>
	<script src="https://js.stripe.com/v3/"></script>
<?php echo '
<script>
	var stripe = Stripe("'.$stripeDetail['publishableKey'] .'");
	var sessionId = "'.$checkout_session['id'] .'";
	stripe.redirectToCheckout({
	 	sessionId : sessionId
	 }).then(function(result){

	 });
</script>
' ?>


</body>
</html>



