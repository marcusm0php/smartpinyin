<?php
namespace SmartPinyin;
use SmartPinyin\CnConvertInterface as CnConvertInterface;
require_once 'base/CnConvertInterface.php';

// Your pinyin lib
require_once 'extensions/sample/PinYin/PinYin.class.php';


class CnConvertSample implements CnConvertInterface
{
    const PINYIN_TONE_NONE = 0;
    const PINYIN_TONE_WITH = 1;
    const PINYIN_TONE_ALL = 2;
    
    /**
     *
     * @param unknown $str
     * @param unknown $mode = PINYIN_TONE_NONE | PINYIN_TONE_WITH | PINYIN_TONE_ALL
     *
     * return array
     */
    public function ToPinyin($str, $mode = self::PINYIN_TONE_NONE)
    {
        $pinyins = array();
        if($mode == self::PINYIN_TONE_ALL){
            $pinyins = array_merge(\PinYin::toPinyin($str, 0), \PinYin::toPinyin($str, 1));
        }elseif($mode == self::PINYIN_TONE_NONE){
            $pinyins = \PinYin::toPinyin($str, 0);
        }elseif($mode == self::PINYIN_TONE_WITH){
            $pinyins = \PinYin::toPinyin($str, 1);
        }
        
        return $pinyins;
    }
}