<?php
ob_start();
define('API_KEY','5201457382:AAESjgaMsm51I4zeFvjC9BYFPMAmyDUCkTE');
//tokenni yozing
$admin = "5297487683"; 
$kun = date('d-m-20y', strtotime('12 hour'));
$soat= date('H:i', strtotime('12 hour'));
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  
   function ty($chat_id){ 
   return bot('sendChatAction', [
   'chat_id' => $chat_id,
   'action' => 'typing',
   ]);
   } 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$efede = json_decode(file_get_contents('php://input'), true);

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
$first_name = $message->from->first_name;
$step = file_get_contents("data/$fadmin/name.txt");
$is_bot = $message->new_chat_member->is_bot;
$new_chat_members = $message->new_chat_member->id;
$titlea = $message->chat->title;
$cty = $update->message->chat->type;
$capt = $message->caption;
$forwardch = $message->forward_from_chat;



//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//bu yerni o'zgartirishingiz mumkin.
//files
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;

//group
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;
$cty = $update->message->chat->type;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$ufname = $update->message->from->first_name;
$chatuser = $update->message->chat->username;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;

//reply

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;


$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward2 = $update->message->forward_from;
$editm = $update->edited_message;

//Yangi odam id si
$new_user = $message->new_chat_member;
$new_user_id = $message->new_chat_member->id;
$new_user_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$is_member = $message->new_chat_member->is_member;
mkdir("del");
mkdir("panel");
mkdir("stat");



// start
    if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}






// start
    if(stripos($mtext,"/start") !== false){
  $text = "😎 Assalom Alaykum!
👨‍✈️Qorovul_2007_bot ni Guruhingizga Admin qilsangiz:
📝 Guruh infosiga soat, hafta kuni, sana va chiroyli status qo'yadi (Hamisha ishlab turadi).
🛡 Guruhingizni botlardan himoya qiladi.
😷 Reklamalarni Tozalaydi.
⭕️ Kirdi chiqdilarni tozalaydi.
🔞 Video, Sticker, Reklama va boshqalarni o'chiradi!
💎 Va yana Koplab vazifalarni bajaradi!
🔥 Endi /panel buyrug'i orqali botni o'z guruhingizga moslab olishingiz mumkin!
Biror muammo bo'lsa adminga yozishingiz mumkin admin Sheroz Saparboyev";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'➕ Guruhga Qushish','url'=>'https://telegram.me/Qorovul_2007_bot?startgroup=new'],['text'=>'👨‍💻 Admin','url'=>'https://telegram.me/Xacker_07_UZ']],
            [['text'=>'♨Buyruqlar','callback_data'=>"buyruq"],['text'=>'🤖 Loyihalar','callback_data'=>"botlar"]],
            [['text'=>'🔥 Pul ishlash','callback_data'=>"referal"],['text'=>'🇺🇿 Telegram tillari','callback_data'=>"tgtili"]]
       ]
    ])
  ]));
}

if($data=="buyruq"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"/panel - bu buyruq guruh adminlarida ishlaydi
/warn - Bitta ogohlantirish (Ayblov) beradi
/nowarn - Ayblovlarni olib tashlaydi
/mywarn - Sizdagi ayblovlar soni
/mute - Mute rejimiga tushuradi
/unmute - Mute rejimidan chiqaradi
/ban - Guruhdan ban qiladi
/unban - Ban rejimidan chiqaradi
/kalit so'z - Biror so'zni kiritsa adminga yuboradi yoki gruppadan u so'zni o'chiradi
url= so'z - share ssilka tayyorlash
#nick so'z - Chiroyli usulda ism yoki nik yasash
/new_year - Yangi yilga qolgan vaqtni bilish
/bot va so'z - Keep Calmga yozish
/love va so'z - Yurakchaga yozish",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}

if($data=="tgtili"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🇺🇿 Bu bo'lim orqali telegramingiz tilini qulay oson o'zgartira olasiz!
⬇️ Shunchaki o'rnatmoqchi bo'lgan tilingizni tanlang:

<a href='tg://setlanguage?lang=uzbekcyr'>🇸🇱 O'zbek</a>

<a href='tg://setlanguage?lang=ru'>🇷🇺 Русский</a>

<a href='tg://setlanguage?lang=en'>🇵🇷 English</a>",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}





if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 30 minutes "),
      ]);

   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$user_id'>$ufname</a> Habarida Arab Harflari Qatnashgani Uchun MUTE Qilindi",
        'parse_mode'=>'html',
      ]);
  }



if(mb_stripos($tx,"/screen")!==false){
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id, 
    'can_send_messages'=>false,    
    'can_send_media_messages'=>false,    
    'can_send_other_messages'=>false,    
    'can_add_web_page_previews'=>false    
  ]);    


}

if($data=="referal"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"*Pul Ushlash Uchun Eng Zor Botlar Royhati Va Ular 100% ISHONCHLI*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>'1⃣ Minimalka 7 rubl','url'=>'https://t.me/PR_Service_bot?start=631797884']],
              [['text'=>'3⃣ Minimalka 20 rubl','url'=>'https://t.me/tegmo_bot?start=631797884']],
              [['text'=>'4⃣ Minimalka 10 rubl','url'=>'https://t.me/teleprofiitbot?start=631797884']],
              [['text'=>'5⃣ Minimalka 3 dollor','url'=>'http://t.me/FutureNet_Uz_Bot?start=115056828']],
              [['text'=>'5⃣ Minimalka 10 rubl','url'=>'https://t.me/PhoneMoney_bot?start=645245957']],
              [['text'=>'5⃣ Minimalka 10 rubl','url'=>'https://t.me/TGEARN_BOT?start=645245957']],
              [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]],
           ]
        ])
    ]);
}


$iwonc=get("del/$chat_id.txt");

     $gett = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $user_id,]);
     $get = $gett->result->status;

     $gett1 = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $id,]);
     $get1 = $gett1->result->status;

     $gett2 = bot('getChatMember', ['chat_id' => $callcid,'user_id' => $clid,]);
     $get2 = $gett2->result->status;




if($tx=="/allstars" or $tx=="/allstarsQorovul_2007_bot"){
if((mb_stripos($iwonc,$user_id)!==false) or ($get =="administrator" or $get == "creator") or $user_id==$admin){
$list=[];
$star=get("del/$chat_id.txt");
$ex=explode("\n",$star);
foreach($ex as $txt){
$exp=explode("~",$txt);
$names="$exp[0]";
$ids="$exp[1]";
$users="$exp[2]";
array_push($list,[['text'=>$names,'url'=>"https://telegram.me/$users"],]);
}
$dels=get("del/$chat_id.dat");
$send=get("del/$chat_id.php");
$ex=explode("~",$send);
$send=$ex[0];
$adm=$ex[1];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*Guruhimizdagi ishonchi odamlar Ro'yhati:*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>
         $list
        ])
    ]);
  }
}

if(mb_stripos($tx,"/addstar")!==false){
if($get =="administrator" or $get == "creator"){
if($get1 =="administrator" or $get1 == "creator"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida Admin bo'lgani uchun *Ishonchli odam* Ro'yxatiga qo'shilmaydi",
        'parse_mode'=>'markdown']);
}else{
$baza=get("del/$chat_id.txt");
if(mb_stripos($baza,$id)!==false){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida avvalroq *ishonchli odam* deb qabul qilingan\n*Ishonchli odamlar Royhati* /allstars",
        'parse_mode'=>'markdown',
      ]);
}else{
put("del/$chat_id.txt","$baza\n$repname~$id~$repulogin");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida *ishonchli odam* deb qabul qilindi\n*Ishonchli odamlar Royhati* /allstars",
        'parse_mode'=>'markdown',
      ]);
   }
  }
 }
}

if(mb_stripos($tx,"/delstar")!==false){
$baza=get("del/$chat_id.txt");
if($get =="administrator" or $get == "creator"){
$str=str_replace("$repname~$id~$repulogin\n","",$baza);
put("del/$chat_id.txt",$str);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida ishonchli odam qatoridan chiqarildi",
        'parse_mode'=>'markdown',
      ]);
   }
}

if(mb_stripos($tx,"/addpagon")!==false){
if($get =="administrator" or $get == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id,
      'user_id'=>$id,
      'can_change_info'=>true,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>true,
      'can_invite_users'=>true,
      'can_restrict_members'=>true,
      'can_pin_messages'=>true,
      'can_promote_members'=>false
   ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida admin qilib tayinlandi",
        'parse_mode'=>'markdown',
      ]);
}
}

if(mb_stripos($tx,"/delpagon")!==false){
if($get =="administrator" or $get == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id,
      'user_id'=>$id,
      'can_change_info'=>false,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>false,
      'can_invite_users'=>false,
      'can_restrict_members'=>false,
      'can_pin_messages'=>false,
      'can_promote_members'=>false
   ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida adminlikdan olindi",
        'parse_mode'=>'markdown',
      ]);
}
}

if(mb_stripos($tx,"/kalit")!==false){
if($turi=="supergroup" or $turi=="group"){
if($get=="administrator" or $get == "creator"){
$tx=strtolower($tx);
$ex=explode("/kalit",$tx);
$tx="$ex[1]";
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$tx,
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[ 
                [['text'=>"⚠ Taqiqlansin",'callback_data'=>"deleted"]],
                [['text'=>"📩 Menga yuborilsin",'callback_data'=>"sending"]],
            ]
        ])
      ]);
    }
  }
}

if($data=="deleted"){
if($get2 =="administrator" or $get2 == "creator"){
  $str=str_replace(",","\n",$calltext);
  put("del/$callcid.dat","$str");
   bot('editmessagetext',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'text'=>"😉Ok:Ushbu kalit so'zlar shu Groupdan o'chirib tashlanadi\n*$str*",
       'parse_mode'=>"markdown"
     ]);
   }
}

if($data=="sending"){
if($get2 =="administrator" or $get2 == "creator"){
  $str=str_replace(",","\n",$calltext);
  put("del/$callcid.php","$str~$clid");
   bot('editmessagetext',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'text'=>"😉Ok:Ushbu kalit so'zlarni Sizga yuborib turaman\n*$str*",
       'parse_mode'=>"markdown"
     ]);
  }
}

$maxsus=file_get_contents("del/$chat_id.dat");
$ex=explode("\n",$maxsus);
foreach($ex as $soz){
if(mb_stripos($tx,$soz)!==false){
if($get=="member"){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
   $send=bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Hurmatli [$ufname](tg://user?id=$user_id) Sizni ogohlantiraman Siz taqiqlangan So'z ishlatdingiz😡\nbu Hol boshqa qaytarilmasin",
        'parse_mode'=>'markdown',
      ]);
  }
$sending=$send->ok;
if($sending){
exit;
}
}
}

$spes=file_get_contents("del/$chat_id.php");
$ex=explode("~",$spes);
$adm="$ex[1]";
$txt3="$ex[0]";
$ex=explode("\n",$txt3);
foreach($ex as $soz){
if(mb_stripos($tx,$soz)!==false){
   $send=bot('sendmessage',[
        'chat_id'=>$adm,
        'text'=>"[$ufname](tg://user?id=$user_id) kalit so'z ishlatdi\n*$tx*",
        'parse_mode'=>'markdown',
      ]);
  }
$sending=$send->ok;
if($sending){
exit;
}
}






if (($cty=="supergroup")&&($new_chat_members != NUll)&&($is_bot!=false)) {
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>😡 Guruhda Men Borman, Boshqa Bot Qo'shish Mumkin Emas!</b>",
      'parse_mode' => 'html'
  ]);
}



if($data=="botlar"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🤖 @eLikeBot - Like Ustida Ishlaydi
🤖 @ - YouTubedan Musiqa va Video Qidiradi va Saqlab Olish Imkonini Beradi
🤖 @X_0GameBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @UzFileNameBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @UzChanBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @SuperNickBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @UzMarkBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @Tozalovchi_supwr_bot shunga o'xshash bot kodi kerak shunaqa bot kerak bo'lsa admin (tezroq adminga murojat qiling shu oy tekinga yasab beramiz keyingi oy pullik bo'ladi)
🤖 @QiWi_Sum_Bot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @Qitmir_Group_Bot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
🤖 @LampaBot - Shunaqa bot kerak bo'lsa yaratib beramiz buning adminga murojat qiling admin Sheroz Saparboyev
👥 Guruh: @Superdasturchilar
📡 Kanal: @https://t.me/+qF9L3QoM9ws1MTMx
👨‍💻 Admin: @Xacker_07_UZ",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="back"){
  $text = "😎 Assalom Alaykum!
👨‍✈️@Qorovul_2007_bot ni Guruhingizga Admin qilsangiz:
📝 Guruh infosiga soat, hafta kuni, sana va chiroyli status qo'yadi (Hamisha ishlab turadi).
🛡 Guruhingizni botlardan himoya qiladi.
😷 Reklamalarni Tozalaydi.
⭕️ Kirdi chiqdilarni tozalaydi.
🔞 Video, Sticker, Reklama va boshqalarni o'chiradi!
💎 Va yana Koplab vazifalarni bajaradi!";
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>$text,
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'➕ Guruhga Qushish','url'=>'https://telegram.me/Qorovul_2007_bot?startgroup=/start'],['text'=>'👨‍💻 Admin','url'=>'https://telegram.me/Xavker_07_UZ']],
            [['text'=>'♨Buyruqlar','callback_data'=>"buyruq"],['text'=>'🤖 Loyihalar','callback_data'=>"botlar"]],
            [['text'=>'🔥 Pul ishlash','callback_data'=>"referal"],['text'=>'🇺🇿 Telegram tillari','callback_data'=>"tgtili"]]
           ]
        ])
    ]);
}


$gett = bot('getChatMember', [
     'chat_id' => $chat_id,
     'user_id' => $user_id,
     ]);
     $get = $gett->result->status;

if($tx=="/mute"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Siz Admin Buyrugi Bilan 3 Soatga *Mute* Rejimiga Tushurildingiz",
        'parse_mode'=>'markdown',
    ]);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
    'until_date'=>strtotime("+ 180 minutes "), 
  ]);    
}
}


if($tx=="/unmute"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Siz Admin Ruxsati Bilan *Mute* Rejimidan Olindingiz! *Qoidalarga Amal Qiling*☝️",
        'parse_mode'=>'markdown',
    ]);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id, 
    'can_send_messages'=>true,    
    'can_send_media_messages'=>true,    
    'can_send_other_messages'=>true,    
    'can_add_web_page_previews'=>true    
  ]);    
}
}


if($tx=="/ban" or $tx=="/Ban" or $tx=="/ban@Qorovul_2007_bot"){
if($get =="administrator" or $get == "creator"){ 
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id, 
    'can_send_messages'=>false,    
    'can_send_media_messages'=>false,    
    'can_send_other_messages'=>false,    
    'can_add_web_page_previews'=>false    
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Admin Tomonidan Guruhdan Chiqarilib *Ban* Qilindi",
        'parse_mode'=>'markdown',
    ]);
  }
}

if($tx=="/warn" or $tx=="/Jazo" or $tx=="/Warn" or $tx=="/warn@Qorovul_2007_bot"){
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$id";
file_put_contents("warn.dat",$jazo);
$war=file_get_contents("warn.dat");
$soni="$chat_id=$id";
 $str=substr_count($war,"$soni");
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
    'until_date'=>strtotime("+ 9999999999999999 minutes "), 
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizga Admin Tomonidan *1 Ogohlantirish*️ Berildi!\n Ogohlantrilishlaringiz Soni *3* Taga Yetganligi Sababli *Mute* Rejimidasiz!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizga Admin Tomonidan *1 Ogohlantirish*️ Berildi!\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
}
}
}
if($tx=="/nowarn" or $tx=="/Nowarn" or $tx=="/delwarn" or $tx=="/nowarn@Qorovul_2007_bot"){
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$id";
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizdan Admin Buyrug'i Bilan Ayblovlar Olib Tashlandi",
        'parse_mode'=>'markdown',
    ]);
  }
}

if($tx=="/mywarn" or $tx=="/Jazolarim" or $tx=="/MyWarn" or $tx=="/mywarn@Qorovul_2007_bot"){
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id)Sizdagi Ayblovlar Soni $str~3",
        'parse_mode'=>'markdown',
    ]);
}

if($tx=="/unban" or $tx=="/Unban" or $tx=="/unban@Qorovul_2007_bot"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Admin Ruxsati Bilan😎 *Bandan* Olindi!",
        'parse_mode'=>'markdown',
    ]);
  bot('unbanChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
  ]);    
}
}






if($soat<"77"){
$usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
$kun3 = date('N'); 
$yil =date('Y');
$mast ="💎 Bosh Homiy:  @PHP_Owners"; 
$kun =date('d-M', strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$message="👋 Guruhimizga Hush Kelibsiz!
😊 Kuningiz Hayrli Va Barokatli O'tsin!
☺️ Eslatib O'tamiz:
🗓 Bugun: $kun $yil-yil
🔵 Hafta kuni: $hafta1
⌚️ Soat: $soat
👥 Guruh Azolari: $count
💎 Bosh Homiy:  https://t.me/+qF9L3QoM9ws1MTMx"; 
  bot('setChatDescription',[ 
        'chat_id'=>$chat_id, 
        'description'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}



if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

  
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $text = "<b>📡 Bot Foydalanuvchilari
👥 Super Group: $gr
👤 Userlar: $us
👨‍👩‍👧‍👦 Jami: $all
🏆</b> @https://t.me/+qF9L3QoM9ws1MTMx
📣 @https://t.me/+qF9L3QoM9ws1MTMx";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$text,
  ]);
}





if($tx == "/new_year" or $tx == "/new_year@Qorovul_2007_bot") {   
$kun1 = date('z ',strtotime('5 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('5 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('5 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('5 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('5 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
  bot('sendmessage',[   
   'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,  
   'text'=>"😃* Urra!
🎄 Yangi Yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!
❄️ Kirib Kelayotgan Yangi yil Bilan! *", 'parse_mode'=>'markdown', 
]);   
  bot('sendChatAction',['chat_id'=>$chat_id,
 'action'=>"typing"]);
}   


if(mb_stripos($tx,"#nick") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace(' ','  ',$content);
$content=str_replace('a',' 🇦',$content);
$content=str_replace('b',' 🇧',$content);
$content=str_replace('c',' 🇨',$content);
$content=str_replace('d',' 🇩',$content);
$content=str_replace('e',' 🇪',$content);
$content=str_replace('f',' 🇫',$content);
$content=str_replace('g',' 🇬',$content);
$content=str_replace('h',' 🇭',$content);
$content=str_replace('i',' 🇮',$content);
$content=str_replace('j',' 🇯',$content);
$content=str_replace('k',' 🇰',$content);
$content=str_replace('l',' 🇱',$content);
$content=str_replace('m',' 🇲',$content);
$content=str_replace('n',' 🇳',$content);
$content=str_replace('o',' 🇴',$content);
$content=str_replace('p',' 🇵',$content);
$content=str_replace('q',' 🇶',$content);
$content=str_replace('r',' 🇷',$content);
$content=str_replace('s',' 🇸',$content);
$content=str_replace('t',' 🇹',$content);
$content=str_replace('u',' 🇺',$content);
$content=str_replace('v',' 🇻',$content);
$content=str_replace('w',' 🇼',$content);
$content=str_replace('x',' 🇽',$content);
$content=str_replace('y',' 🇾',$content);
$content=str_replace('z',' 🇿',$content);
$content=str_replace('‘​','*',$content);
$content=str_replace('sh','SH',$content);
$content=str_replace('A',' 🇦',$content);
$content=str_replace('B',' 🇧',$content);
$content=str_replace('C',' 🇨',$content);
$content=str_replace('D',' 🇩',$content);
$content=str_replace('E',' 🇪',$content);
$content=str_replace('F',' 🇫',$content);
$content=str_replace('G',' 🇬',$content);
$content=str_replace('H',' 🇭',$content);
$content=str_replace('I',' 🇮',$content);
$content=str_replace('J',' 🇯',$content);
$content=str_replace('K',' 🇰',$content);
$content=str_replace('L',' 🇱',$content);
$content=str_replace('M',' 🇲',$content);
$content=str_replace('N',' 🇳',$content);
$content=str_replace('O',' 🇴',$content);
$content=str_replace('P',' 🇵',$content);
$content=str_replace('Q',' 🇶',$content);
$content=str_replace('R',' 🇷',$content);
$content=str_replace('S',' 🇸',$content);
$content=str_replace('T',' 🇹',$content);
$content=str_replace('U',' 🇺',$content);
$content=str_replace('V',' 🇻',$content);
$content=str_replace('W',' 🇼',$content);
$content=str_replace('X',' 🇽',$content);
$content=str_replace('Y',' 🇾',$content);
$content=str_replace('Z',' 🇿',$content);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$content,
'parse_mode'=>'markdown'
]);  
}











if($tx== "Vaqt" or $tx== "Soat" or $tx== "vaqt" or $tx== "soat" or $tx== "sana" or $tx== "Sana" or $tx== "вакт" or $tx== "Вакт" or $tx== "Bugun" or $tx== "bugun"){ 
      $kun3 = date('N'); 
      $yil =date('Y');
      $mast ="@https://t.me/+qF9L3QoM9ws1MTMx\n📣 @https://t.me/+qF9L3QoM9ws1MTMx"; 
      $kun =date('d-M', strtotime('2 hour')); 
      $soat=date('H:i:s', strtotime('2 hour')); 
      $hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
      $ex=explode("$kun3",$hafta); 
      $hafta1="$ex[1]"; 
      $message="🗓 <b>Bugun: $kun $yil-yil</b>
🔵 Hafta kuni: <b>$hafta1</b>
⌚️ Soat: <b>$soat</b>
👨‍💻 $mast"; 
  bot('sendmessage',[ 
        'chat_id'=>$chat_id, 
        'text'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}

$textmessage = isset($update->message->text)?$update->message->text:'';
$text1 = $message->text;
if(mb_stripos($tx,"url=")!==false){
$rek=" ";
$str=str_replace("$rek","%20","$tx");
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'markdown',
   'text'=>"*Mana sizga share qiladigan kod:*
`http://telegram.me/share/url?$str`",
  ]);
}

// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}



if(mb_stripos($tx,"Sheroz")!==false){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'parse_mode'=>'markdown',
   'disable_web_page_preview'=>true,
   'text'=>"✉️ *Yangi Xabar!*
👥 Guruh: *$ctitle*
👤 Kimdan: *$ufname $uname*
📎 Login: [@$ulogin]
🆔 : *$user_id* 
🗝 Guruh Useri: [@$chatuser]
[⤴️ Xabarga Borish](t.me/$chatuser/$mid)
📝 Matn: *$tx*",
  ]);
}

if(mb_stripos($tx,"myid")!==false){
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"` $chat_id `",
'parse_mode'=>'markdown'
]);
}
if(mb_stripos($tx,"newgr")!==false){
  $usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"*Assalom alaykum $titlea Guruhining $count Azolari!
Siz Bilan Ekanimdan Bahtiyorman!
Guruhingizni Himoya Qilishim Uchun Meni Admin Qiling*",
'parse_mode'=>'markdown'
]);
}




if(mb_stripos($tx,"logo10") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=80&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo11") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=18&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}


if(mb_stripos($tx,"logo12") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=60&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo13") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=61&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo14") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=62&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo15") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=63&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo16") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=64&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo17") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=68&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo18") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=69&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo19") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=70&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo20") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=71&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo21") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=72&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo22") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=72&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo23") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=73&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo24") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=74&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo25") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=75&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo26") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=76&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo27") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=72&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo28") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=79&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo29") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=81&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo30") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=84&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo31") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=83&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo32") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=85&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo33") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=86&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

if(mb_stripos($tx,"logo34") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('/logo1','',$content);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://mehdiyousefii.lordmizban.ir/api/ephoto.php?type=88&text=$content",
'caption'=>"by this @Qorovul_2007_bot",
]);
}


if($forward or $forwardch){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,

]);
bot ('SendMessage',[
"chat_id"=> $chat_id,
'text'=>"<a href='tg://user?id=$chat_id'>$first_name</a> <b>Kechirasiz bu guruhda forward qilish mumkin emas!</b>",
'parse_mode'=>"html",
]);
}
}

if(mb_stripos($tx,"/bot") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$ex[1]%0D%0A$ex[2]%0D%0A$ex[3]%0D%0A$ex[4]%0D%0A$ex[5]%0D%0A$ex[6]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @Qorovul_2007_bot",
]);
}
if(mb_stripos($tx,"/love") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0ABy%20%20@Qorovul_2007_bot&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by this @Qorovul_2007_bot",
]);
}

 $gett = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $user_id,]);
     $get = $gett->result->status;

     $gett1 = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $id,]);
     $get1 = $gett1->result->status;

     $gett2 = bot('getChatMember', ['chat_id' => $callcid,'user_id' => $clid,]);
     $get2 = $gett2->result->status;
$iwonc=get("del/$chat_id.txt");

if((mb_stripos($iwonc,$user_id)!==false) or ($get =="administrator" or $get == "creator") or $user_id==$admin){
}else{
    if(isset($photo) || isset($gif)){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"📷 Photo ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
 $vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Rasm Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
}
}
}


































if(isset($sticker)){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"🎭 Sticker ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Sticker Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }

if($document){
if(isset($gif)){
}else{
$fot=get("panel/$chat_id.dat");
     if(mb_stripos($fot,"📁 Fayl ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Fayl Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }
}

if(mb_stripos($tx,"http") !==false){
$fot=get("panel/$chat_id.dat");
if(mb_stripos($fot,"🔗 Link ❎") !==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Reklama Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
}
if($video){
$vid=get("panel/$chat_id.dat");
     if(mb_stripos($vid,"🎬 Video ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Video Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }

if($music){
$fot=get("panel/$chat_id.dat");
     if(mb_stripos($fot,"🎶 Music ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Music Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }

if($forward){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"➡ Forward ❎")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Forward Qilish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }
}

if($turi=="supergroup" or $turi=="group"){
$baza=get("del/$chat_id.txt");
if(mb_stripos($baza,$user_id)!==false){
$ex=explode("~$user_id~",$baza);
$name=$ex[0];
$user=$ex[1];
if($ufname != $name){
$str=str_replace("$name","$ufname",$baza);
put("del/$chat_id.txt",$str);
}
$baza=get("del/$chat_id.txt");
if($user != $ulogin){
$str=str_replace("$user","$ulogin",$baza);
put("del/$chat_id.txt",$str);
}
}
}


if(isset($message)){
$baza=get("panel/$chat_id.dat");
if($baza){
}else{
$txt="🎭 Sticker ✅\n📷 Photo ✅\n📁 Fayl ✅\n🔗 Link ✅\n🎬 Video ✅\n🎶 Music ✅\n➡ Forward ✅\n Ball";
put("panel/$chat_id.dat","$txt");
}
}
if ($get=="administrator" or $get=="creator"){
if($tx=="/panel" or $tx=="/panel@Qorovul_2007_bot"){
$markup=[];
$baza=get("panel/$chat_id.dat");
$ex=explode("\n",$baza);
foreach($ex as $get){
array_push($markup,[['text'=>$get,'callback_data'=>"+$get"],]);
}
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"👨‍✈️ * Guruh Adminlari Uchun:\n⚙️ Sozlamalarni belgilang\n✅ Ruhsat etilgan fayllar\n❎Taqiqlangan fayllar*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>
         $markup
       ])
    ]);
}
}
if($tx=="/panel" or $tx=="/ban" or $tx=="/mute" or $tx=="/warn" or $tx=="/kalit"or $tx=="/unban"or $tx=="/unmute"or $tx=="/nowarn"or $tx=="/kalit" and $get=="member"){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
    }

if($get2 =="administrator" or $get2 == "creator"){ 
if(mb_stripos($data,"+")!==false){
$ex=explode("+",$data);
$button=$ex[1];
$exp=explode(" ",$button);
$type=$exp[1];
$var=$exp[2];
$get=get("panel/$callcid.dat");
if($var=="✅"){
$str=str_replace("$type ✅","$type ❎",$get);
}else{
$str=str_replace("$type ❎","$type ✅",$get);
}
put("panel/$callcid.dat",$str);
$markup=[];
$file=get("panel/$callcid.dat");
$ex2=explode("\n",$file);
foreach($ex2 as $buttons){
array_push($markup,[['text'=>$buttons,'callback_data'=>"+$buttons"],]);
}
    bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$qid,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>
            $markup
          ])
    ]);
}
}