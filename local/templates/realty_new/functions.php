<?php

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
CModule::IncludeModule('highloadblock');

//Функция получения экземпляра класса ХайлоадБлока:
function GetEntityDataClass($HlBlockId)
{
    if (empty($HlBlockId) || $HlBlockId < 1) {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}

//Функция обрезает большой текст и возвращает сокращенный с ... (для отзывов в основном )
function cut($string, $length)
{
    $string = mb_substr($string, 0, $length, 'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
    $position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
    $string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
    return $string . '...';
}