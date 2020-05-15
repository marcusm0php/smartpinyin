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
$smartPinyin->setData('beijing,.上海.haikou!');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);