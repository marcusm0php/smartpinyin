<?php 
require_once 'src/SmartPinyin.php';

use SmartPinyin\SmartPinyin as SmartPinyin;

$smartPinyin = new SmartPinyin();
$smartPinyin->setGlues([' ']);
// $smartPinyin->setFiltersReplacement([
//     ' ' => [',', '.', '-']     // replace ,.- to empty string, 
// ]);
$smartPinyin->setPunctuations([',', '.', '-']);
// $smartPinyin->setDynamicGlue(true);
// $smartPinyin->setSupplementScope([SmartPinyin::SCOPE_DUOYINZI]);
$smartPinyin->setSingleYmCharSplit(true);
$smartPinyin->setCollectCnChar(true);
$smartPinyin->setCollectNotPinyinAbcChar(true);
// $smartPinyin->setSplitNotWholePinyin(true);
$smartPinyin->addEntireWholePinyins([
    'ao', 'iao', 'iang', 'ian', 'ua', 'uo', 'ie', 'ou', 'ue', 'uen', 'uan', 'uang', 
        'ae', 'ea', 'eo', 'oe', 'eu', 'ue', 'au', 'ua'
//     'ao', 'iao', 'ou', 'ie', 'hu', 'ia', 'iang', 'uo', 'ua', 
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

// $smartPinyin->setData('你,aklsdj, hanwo, 姐,哈好 ,jiayou');
// $smartPinyin->assocSelf();
// $smartPinyin->assocPinyin();
// $smartPinyin->assocPinyinKeepCn();
// $assoc = $smartPinyin->fetchAssoc();
// $chars = $smartPinyin->fetchChars();
// var_dump($assoc, $chars);
// $assocCapital = $smartPinyin->fetchCapitalAssoc();
// $charsCapital = $smartPinyin->fetchCapitalChars();
// var_dump($assocCapital, $charsCapital);


$batchRet = $smartPinyin->batchSetDataAssocAll('mao, wei , nimen 我们 jimgreen');
var_dump($batchRet);








