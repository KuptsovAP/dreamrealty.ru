<?php

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('', 'BrandReferenceOnAfterAdd', 'clearBrandReferenceCache');
$eventManager->addEventHandler('', 'BrandReferenceOnAfterUpdate', 'clearBrandReferenceCache');
$eventManager->addEventHandler('', 'BrandReferenceOnAfterDelete', 'clearBrandReferenceCache');

function clearBrandReferenceCache($event)
{
    $event->getEntity()->cleanCache();
}