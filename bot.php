<?php

include "vk_api.php"; 


const VK_KEY = "16b6c9b882dbf342a02baeeacefdc750bb2ca738bb6caedc89f6afc38be2af839264a3520ab34260cf9f8";  // Токен сообщества
const ACCESS_KEY = "129a62b3";  // Тот самый ключ из сообщества 
const VERSION = "5.81"; // Версия API VK


$vk = new vk_api(VK_KEY, VERSION); 
$data = json_decode(file_get_contents('php://input')); 

if ($data->type == 'confirmation') { 
    exit(ACCESS_KEY); 
}
$vk->sendOK(); 
// ====== Наши переменные ============
$id = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя
// ====== *************** ============

if ($data->type == 'message_new') {

    if ($message == '!бот') {

            $vk->sendMessage($id, "Привет :-)");
            
        }


    }
