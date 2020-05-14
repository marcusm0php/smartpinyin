<?php
namespace SmartPinyin;
use SmartPinyin\SmartPinyinBase as SmartPinyinBase;
use SmartPinyin\CnConvert as CnConvert;

require_once 'base/SmartPinyinBase.php';
require_once 'CnConvert.sample.php';


interface SmartPinyinSettings
{
    public function setCnConvert();
}
class SmartPinyin extends SmartPinyinBase implements SmartPinyinSettings
{    
    public function setCnConvert()
    {
        self::$_CnConvert = new CnConvertSample();
    }
    
}