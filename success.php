<?php
include  "config.php";

$session_id = $_GET['sessionId'];
$session = \Stripe\Checkout\Session::retrieve($session_id);

echo '<pre>';
print_r($session);
exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>ideal</title>
</head>
<body>
	<h1>Success</h1>
</body>
</html>