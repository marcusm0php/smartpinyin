<?php 
namespace SmartPinyin;
/**
 * 
 * @author MarcunM0
 *
 */
interface CnConvertInterface
{
    /**
     * 
     * @param unknown $str
     * @param unknown $mode = PINYIN_TONE_NONE | PINYIN_TONE_WITH | PINYIN_TONE_ALL
     * 
     * return array
     */
    public function ToPinyin($str, $mode = self::PINYIN_TONE_NONE);
}