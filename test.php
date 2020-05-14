<?php 
require_once 'SmartPinyin.php';

use SmartPinyin\SmartPinyin as SmartPinyin;

$smartPinyin = new SmartPinyin();
// $smartPinyin->setFilter(['.', ',']);
// $smartPinyin->setGlues([' ', '-']);
// $smartPinyin->setDynamicGlue(true);
// $smartPinyin->setSupplementScope([SmartPinyin::SCOPE_NAME]);
// $smartPinyin->setSingleYmCharSplit(true);
// $smartPinyin->setCollectCnChar(true);
$smartPinyin->setCollectNotPinyinAbcChar(true);

$smartPinyin->setData('你好 xyz china asldkjadskad pinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);