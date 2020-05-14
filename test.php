<?php 
require_once 'SmartPinyin.php';

use SmartPinyin\SmartPinyin as SmartPinyin;

$smartPinyin = new SmartPinyin();
// $smartPinyin->setFilter(['.', '-', ',', '!']);
// $smartPinyin->setGlues([' ', '-']);
// $smartPinyin->setDynamicGlue(true);
// $smartPinyin->setSupplementScope([SmartPinyin::SCOPE_DUOYINZI, SmartPinyin::SCOPE_NAME]);
// $smartPinyin->setSingleYmCharSplit(true);
// $this->setCollectCnChar(true);
// $this->setCollectNotPinyinAbcChar(true);

$smartPinyin->setData('你好世界 XYZ');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);