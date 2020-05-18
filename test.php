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

// $smartPinyin->setData('08 Aug 1950 mao');
// $smartPinyin->assocSelf();
// $smartPinyin->assocPinyin();
// $assoc = $smartPinyin->fetchAssoc();
// $chars = $smartPinyin->fetchChars();
// var_dump($assoc, $chars);
$batchRet = $smartPinyin->batchSetDataAssocAll('08 Aug 1950 mao');
var_dump($batchRet);

// $assocCapital = $smartPinyin->fetchCapitalAssoc();
// $charsCapital = $smartPinyin->fetchCapitalChars();
// var_dump($assocCapital, $charsCapital);