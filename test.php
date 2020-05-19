<?php 
require_once 'SmartPinyin.php';

use SmartPinyin\SmartPinyin as SmartPinyin;

$smartPinyin = new SmartPinyin();
$smartPinyin->setFilter([',']);
// $smartPinyin->setGlues([' ']);
// $smartPinyin->setPunctuations([',', '.']);
// $smartPinyin->setDynamicGlue(true);
// $smartPinyin->setSupplementScope([SmartPinyin::SCOPE_DUOYINZI]);
// $smartPinyin->setSingleYmCharSplit(true);
// $smartPinyin->setCollectCnChar(true);
// $smartPinyin->setCollectNotPinyinAbcChar(true);
// $smartPinyin->setSplitNotWholePinyin(true);
$smartPinyin->addEntireWholePinyins([
    'ao', 'iao', 'ou', 'ie', 'hu', 'ia', 'iang', 'uo', 'ua', 
//     'mao', 'lao', 'bao', 'kao', 'zao', 'cao', 'yao', 'pao', 'nao', 'tao', 'hao', 'gao', 'dao', 'sao',  
//     'miao', 'niao', 'piao', 'qiao', 'biao', 'xiao', 'liao', 'jiao', 'tiao', 
//     'mian', 'nian', 'pian', 'qian', 'bian', 'xian', 'lian', 'jian', 'tian', 
//     'jiang', 'qiang', 'liang', 'xiang', 'niang',  
//     'xia', 'qia', 'jia', 'lia', 
//     'guo', 'tuo', 'zhuo', 'chuo', 'kuo', 'luo', 'duo', 'nuo', 'cuo', 'zuo', 'huo', 
//     'gua', 'kua', 'kua', 'zhua', 'hua', 
//     'xue', 'que', 'jue', 
//     'xie', 'qie', 'lie', 'jie', 'pie', 'die', 'bie', 'nie', 'mie'
]);

// $smartPinyin->setData('08 Aug 1950 mao');
// $smartPinyin->assocSelf();
// $smartPinyin->assocPinyin();
// $assoc = $smartPinyin->fetchAssoc();
// $chars = $smartPinyin->fetchChars();
// var_dump($assoc, $chars);
$batchRet = $smartPinyin->batchSetDataAssocAll('ni, hao, ma,ya');
var_dump($batchRet);

// $assocCapital = $smartPinyin->fetchCapitalAssoc();
// $charsCapital = $smartPinyin->fetchCapitalChars();
// var_dump($assocCapital, $charsCapital);