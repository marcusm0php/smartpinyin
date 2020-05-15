<?php 
require_once 'SmartPinyin.php';

use SmartPinyin\SmartPinyin as SmartPinyin;

$smartPinyin = new SmartPinyin();
// $smartPinyin->setFilter([',']);
// $smartPinyin->setGlues([' ']);
$smartPinyin->setPunctuations([',', '.']);
// $smartPinyin->setDynamicGlue(true);
// $smartPinyin->setSupplementScope([SmartPinyin::SCOPE_DUOYINZI]);
// $smartPinyin->setSingleYmCharSplit(true);
// $smartPinyin->setCollectCnChar(true);
// $smartPinyin->setCollectNotPinyinAbcChar(true);
$smartPinyin->setData('我beijing,.上海.hubei!');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$assocCapital = $smartPinyin->fetchCapitalAssoc();
$chars = $smartPinyin->fetchChars();
$charsCapital = $smartPinyin->fetchCapitalChars();
var_dump($assoc, $assocCapital, $chars, $charsCapital);