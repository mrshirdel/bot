<?php
$message=file_get_contents("php://input");

$resulte=json_decode($message,true);
$token="340204096:AAHMuLCMHpJ3_bU6uzYre5VXjl83sYqh7hU";


if($resulte['message']['text']=='/start'){
$text="لطفا پیام خود را بنویسید";

$url="https://api.telegram.org/bot".$token.'/sendMessage?chat_id='.$resulte['message']['chat']['id'].'&text='.$text;
file_get_contents($url);

}

else{
$text="پیام ارسال شد";

$url="https://api.telegram.org/bot".$token.'/sendMessage?chat_id='.$resulte['message']['chat']['id'].'&text='.$text;
file_get_contents($url);

$url="https://api.telegram.org/bot".$token.'/forwardMessage?chat_id=304445768&from_chat_id='.$resulte['message']['chat']['id'].'&message_id='.$resulte['message']['message_id'];
file_get_contents($url);

}

?>



