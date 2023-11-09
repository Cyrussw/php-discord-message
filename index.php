<?php
$token = "";
$channel_id = "1121096960288497796";

$payload = array(
    "content" => "Merhaba!"
);

$ch = curl_init("https://discord.com/api/v9/channels/{$channel_id}/messages");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: {$token}"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

// İsteğin yanıtını kullanabilirsiniz
echo $response;
?>
