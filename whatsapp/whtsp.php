<?php
require_once('../whatsapp/ultramsg.class.php'); // if you download ultramsg.class.php
	
$token="4akheqndnhsearlw"; // Ultramsg.com token
$instance_id="instance49499"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($token,$instance_id);

if (isset($_POST['submit'])) {

$numero =trim($_POST['phone']);
	
$to=$numero;
$body="Probando 1";
$api=$client->sendChatMessage($to,$body);
print_r($api);

}
?>