<?php
include "smsGateway.php";
$smsGateway = new SmsGateway('skambham@innominds.com', 'Innominds1234');
$otp = mt_rand(100000,999999);

$deviceID = 78003;
$number = '9951445496';
$message = 'Hello User! your otp to reset password is '.$otp;

		$options = [
				//'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
				//'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
		];

//Please note options is no required and can be left out
$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
?>
<pre>
<?php print_r ($result); ?>
</pre>