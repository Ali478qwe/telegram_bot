<?php 
$token = "7305960739:AAFjL383HQdvT84_ylpODx8ambhdnUh5PMw";
$web_hook = "https://github.com/Ali478qwe/telegram_bot/blob/main/bot.php";   
$api = "https://api.telegram.org/bot$token/setWebhook?url=$web_hook";
function sendMessage($chatid, $message){
   global $api;
   $url = $api . "sendMessage?chat_id=$chatid&text=" . urlencode($message);
    file_get_contents($url);
}
$content = file_get_contents("php://input");
$update = json_decode($content,true);

if(isset($update["message"])){
$chatid = $update ["message"] ["chat"] ["id"];
$text = $update ["message"] ["text"];

if($text == "/start"){
    sendMessage($chatid,"hello,Im a robot");
}
else{
sendMessage($chatid,"you say:/n" . $text);


}


}
 echo $api;

?>
