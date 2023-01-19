<?php 
    
    include 'Telegram.php';

    $telegram = new Telegram('5797617560:AAF1MmqHv4MNMaTiXkoMWcFTtdbxadQjHeY');
    $chat_id = $telegram->ChatID();
    // echo $chat_id;
    $text = $telegram->Text();
    $username = $telegram->UserName();
    $phone = $telegram->PhoneNumber();

   if($text == "/start")
   {
    //  $ulash = mysqli_connect("localhost","id20153853_rootbot","g)Ubi\^S[6~4wk4#","id20153853_kokandtelebot") or die("Bazaga ulanmadi");
    //              $yoz = "insert into user (username,chat_id,phone) values ({$username}','{$chat_id}','{$text}')";
    //              $r = mysqli_query($ulash,$yoz) or die(mysqli_error($ulash));
             

    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🍴 Меню")),
        //Second row 
        array($telegram->buildKeyBoardButton("🛍 Мои заказы")),
        //Third row
        array($telegram->buildKeyBoardButton("✍️ Оставить отзыв"), $telegram->buildKeyBoardButton("⚙️ Настройки")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Выберите одно из следующих");
                $telegram->sendMessage($content);
   }

   elseif($text == "🍴 Меню")
{

    $img = curl_file_create('photo_2023-01-17_09-00-03.jpg','image/jpg');
    $content = array('chat_id' => $chat_id, 'photo' => $img, 'caption' => "Важное объявление!

    Из-за погодных условий доставка заказов может быть задержана.
    
    Приносим извинения за причинённые неудобства.");
    $telegram->sendPhoto($content);

    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🗺 мои адреса")),
        //Second row 
        array($telegram->buildKeyBoardButton("📍 Отправить геолокацию", $request_location=true), $telegram->buildKeyBoardButton("⬅️ Назад")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Отправьте 📍 геолокацию или выберите адрес доставки");
                $telegram->sendMessage($content);
}

elseif($text == "🛍 Мои заказы")
{
    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🍴 Меню")),
        //Second row 
        array($telegram->buildKeyBoardButton("🛍 Мои заказы")),
        //Third row
        array($telegram->buildKeyBoardButton("✍️ Оставить отзыв"), $telegram->buildKeyBoardButton("⚙️ Настройки")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Вы совсем ничего не заказали.");
                $telegram->sendMessage($content);
   }

elseif($text == "✍️ Оставить отзыв")
{
    $option = array(
        //First row
        array($telegram->buildKeyBoardButton("📞 Мой номер", $request_contact=true)),
        //Second row
        array($telegram->buildKeyBoardButton("⬅️ Назад"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Поделитесь контактом для дальнейшего связи с Вами");
    $telegram->sendMessage($content);
    
}

elseif($text == "⚙️ Настройки")
{
    $option = array(
        array($telegram->buildKeyBoardButton("Изменить язык")),
        array($telegram->buildKeyBoardButton("⬅️ Назад"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Выберите действие:");
    $telegram->sendMessage($content);
}

elseif($text == "Изменить язык")
{
    $option = array(
        array($telegram->buildKeyBoardButton("🇷🇺 Русский"), $telegram->buildKeyBoardButton("🇺🇿 O'zbekcha")),
        array($telegram->buildKeyBoardButton("⬅️ Назад"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Выберите язык:");
    $telegram->sendMessage($content);
}

elseif($text == "🇺🇿 O'zbekcha")
{
    $option = array(
        array($telegram->buildKeyBoardButton("Tilni o'zgartirish")),
        array($telegram->buildKeyBoardButton("⬅️ Ortga"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "✅ Tayyor");
    $telegram->sendMessage($content);
}

elseif($text == "🇷🇺 Русский")
{
    $option = array(
        array($telegram->buildKeyBoardButton("Изменить язык")),
        array($telegram->buildKeyBoardButton("⬅️ Назад"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "✅ Готово");
    $telegram->sendMessage($content);
}

//Uzbekcha buyruqlar
//Uzbekcha buyruqlar
elseif($text == "⬅️ Ortga")
{
    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🍴 Menyu")),
        //Second row 
        array($telegram->buildKeyBoardButton("🛍 Mening buyurtmalarim")),
        //Third row
        array($telegram->buildKeyBoardButton("✍️ Fikr bildirish"), $telegram->buildKeyBoardButton("⚙️ Sozlamalar")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Quyidagilardan birini tanlang");
                $telegram->sendMessage($content);
}

elseif($text == "🍴 Menyu")
{

    $img = curl_file_create('photo_2023-01-17_09-00-03.jpg','image/jpg');
    $content = array('chat_id' => $chat_id, 'photo' => $img, 'caption' => "Muhim e'lon!

    Noqulay ob-havo sharoiti tufayli buyurtmalarni yetkazib berish kechikishi mumkin.
    
    Keltirilgan noqulayliklar uchun uzr so'raymiz.");
    $telegram->sendPhoto($content);

    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🗺 Mening manzillarim")),
        //Second row 
        array($telegram->buildKeyBoardButton("📍 Geolokatsiyani yuboring", $request_location=true), $telegram->buildKeyBoardButton("⬅️ ortga")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "📍 Geolokatsiyani yuboring yoki yetkazib berish manzilini tanlang");
                $telegram->sendMessage($content);
}

elseif($text == "🛍 Mening buyurtmalarim")
{
    $option = array( 
        //First row
        array($telegram->buildKeyBoardButton("🍴 Menyu")),
        //Second row 
        array($telegram->buildKeyBoardButton("🛍 Mening buyurtmalarim")),
        //Third row
        array($telegram->buildKeyBoardButton("✍️ Fikr bildirish"), $telegram->buildKeyBoardButton("⚙️ Sozlamalar")) );

                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Siz hech narsa buyurtma bermagansiz");
                $telegram->sendMessage($content);
}

elseif($text == "✍️ Fikr bildirish")
{
    $option = array(
        //First row
        array($telegram->buildKeyBoardButton("📞 Mening raqamim", $request_contact=true)),
        //Second row
        array($telegram->buildKeyBoardButton("⬅️ Ortga"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Siz bilan keyingi muloqot uchun kontaktni baham ko'ring");
    $telegram->sendMessage($content);
    
}

elseif($text == $request_contact)
{
    $option = array(
        array($telegram->buildKeyBoardButton("⬅️ Ortga"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Fikringizni yuboring");
    $telegram->sendMessage($content);
}

elseif($text == "⚙️ Sozlamalar")
{
    $option = array(
        array($telegram->buildKeyBoardButton("Tilni o'zgartirish")),
        array($telegram->buildKeyBoardButton("⬅️ Ortga"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Harakatni tanlang:");
    $telegram->sendMessage($content);
}

elseif($text == "Tilni o'zgartirish")
{
    $option = array(
        array($telegram->buildKeyBoardButton("🇷🇺 Русский"), $telegram->buildKeyBoardButton("🇺🇿 O'zbekcha")),
        array($telegram->buildKeyBoardButton("⬅️ Ortga"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Tilni tanlang:");
    $telegram->sendMessage($content);
}
    
?>
