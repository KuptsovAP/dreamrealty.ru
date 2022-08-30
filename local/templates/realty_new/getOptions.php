<?php

$MY_HL_BLOCK_ID = 1;
$entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);

// Вывод элементов Highload-блока
$rs_data = $entity_data_class::getList(array(
    'select' => array('*'),
    'cache' => ['ttl' => 86400]
));
while ($el = $rs_data->fetch()){
    $options['phone'] = $el['UF_PHONE'];
    $options['logo'] = CFile::GetPath($el['UF_LOGO']);
    $options['logocolor'] = CFile::GetPath($el['UF_LOGOCOLOR']);
    $options['copyright'] = $el['UF_COPYRIGHT'];
    $options['adress'] = $el['UF_ADRESS'];
    $options['ig'] = $el['UF_IG'];
    $options['tg'] = $el['UF_TG'];
    $options['youtube'] = $el['UF_YOUTUBE'];
}