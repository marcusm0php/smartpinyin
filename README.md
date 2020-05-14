# smartpinyin
Library for analyzing mixed Chinese character and Pinyin


Installation
------------

[Download a latest package](https://github.com/2453302174/smartpinyin.git)
Library requires PHP 7.* or later 


前言
-----
中文-->拼音的转换方法已经有很多，本工具类并不提供中文-->拼音的转换方法。只是在简单转换的基础上，提供一些更加友好的设置支持，使输出尽可能多样化满足不同场景需求。
1. 本工具类并不提供中文-->拼音的转换方法，使用者请自行替换CnConvert.sample.php类，通过实现CnConvertInterface接口，按照接口要求实现ToPinyin()方法。
2. SmartPinyin类通过实现SmartPinyinSettingsInterface接口中的setCnConvert()方法，将（1）中的CnConvert对象指定给SmartPinyin::$_CnConvert
3. 库中目前提供的extensions/sample/Pinyin类，非本人作品，仅在此作为中文-->拼音的用法示例。并按照（1）（2）方法集成给本类使用。该类支持的方法还是挺好的，感谢原作者。


计划
-----
往后版本将逐步实现以下计划功能：
1. 首字母提取，  如nihao--->n,h。<br />
	 实现时间：（）
2. 音调支持，目前版本不支持音调哦。$smartPinyin->assocPinyin(SmartPinyin::PINYIN_TONE_NONE);预留了SmartPinyin::PINYIN_TONE_NONE | SmartPinyin::PINYIN_TONE_WITH | SmartPinyin::PINYIN_TONE_ALL，目前仅支持PINYIN_TONE_NONE。<br />
	 实现时间：（）
3. 设置标点符号识别，并在联想词中保留，方法名setPunctuations()，实现如setPunctuations([',', '。', '.'....])<br />
	 实现时间：（）
3. 识别英文单词，通过设置开关，使英文单词即使完全能够被解析为pinyin的情况下，也不回被分词为拼音。setKeepEnglishword(boolean)<br />
	 实现时间：（）
	 
已完成计划
-----


基础用法
-----
```php
<?php 
// ... 

require_once 'SmartPinyin.php';
use SmartPinyin\SmartPinyin as SmartPinyin;
$smartPinyin = new SmartPinyin();

$smartPinyin->setData('你好世界 XYZ');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(3) {
  [0]=>
  string(16) "你好世界 XYZ"
  [1]=>
  string(18) "ni hao shi jie XYZ"
  [2]=>
  string(18) "ni hao shi jie xyz"
}
array(4) {
  [0]=>
  string(2) "ni"
  [1]=>
  string(3) "hao"
  [2]=>
  string(3) "shi"
  [3]=>
  string(3) "jie"
}
```
说明
1. fetchAssoc()返回分词组合后的联想字符串
2. fetchChars()返回所有经识别后的单个汉字拼音。<br />
	chars收集范围可通过设置setCollectCnChar()和setCollectNotPinyinAbcChar()进一步制定，详细看Settings设置章节
3. assocSelf()，关联原文，将原文push入联想结果队列，并对原文进行单个汉字识别
4. assocPinyin()主要方法，进行联想识别


拼音分词
-----
元词如果整体能够被完全解析为拼音，则会进一步被解析。<br />
注意，中文中含有大量文字拼音结构整体为韵母。如“饿”，“昂”等。故，如jie可以被解析为jie,ji,e三个分词<br />
但是如果原串是提供中文，将不会被进一步解析，只会得出中文对应全拼作为一个分词。如“姐”虽然拼音是jie，但仅会被分词为jie<br />
示例
```php
<?php
// ...

$smartPinyin->setData('woshi smart pinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);

$smartPinyin->setData('谢jie');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(4) {
  [0]=>
  string(18) "woshi smart pinyin"
  [1]=>
  string(19) "woshi smart pin yin"
  [2]=>
  string(19) "wo shi smart pinyin"
  [3]=>
  string(20) "wo shi smart pin yin"
}
array(4) {
  [0]=>
  string(2) "wo"
  [1]=>
  string(3) "shi"
  [2]=>
  string(3) "pin"
  [3]=>
  string(3) "yin"
}


array(3) {
  [0]=>
  string(6) "谢jie"
  [1]=>
  string(7) "xie jie"
  [2]=>
  string(8) "xie ji e"
}
array(4) {
  [0]=>
  string(3) "jie"
  [1]=>
  string(3) "xie"
  [2]=>
  string(2) "ji"
  [3]=>
  string(1) "e"
}
```
分词策略：
1. 按照空格/中文字将原文拆分为元词，'woshi smart pinyin'被分为三部分woshi，smart，pinyin
2. 每一个元词将被进一步进行识别分析
3. 只有元词整体能被完全分析为拼音的情况下，元词被分词。woshi被分词为wo和shi，pinyin被分词为pin和yin；
5. 元词不是“全拼音”则不会被进一步分词。如smart中，虽然按照拼音结构，能够解析出ma，但是考虑到英文单词中，含有大量符合声母韵母的结构，如果进一步解析，将会过度


Settings设置-setCollectCnChar()
-----
作用： 设置为true后，fetchChars()的结果集中将包含中文单字<br />
示例
```php
<?php
//...

$smartPinyin->setCollectCnChar(true);->setCollectCnChar(true);
$smartPinyin->setData('你好 xyz pinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(3) {
  [0]=>
  string(17) "你好 xyz pinyin"
  [1]=>
  string(17) "ni hao xyz pinyin"
  [2]=>
  string(18) "ni hao xyz pin yin"
}
array(6) {
  [0]=>
  string(3) "你"
  [1]=>
  string(3) "好"
  [2]=>
  string(2) "ni"
  [3]=>
  string(3) "hao"
  [4]=>
  string(3) "pin"
  [5]=>
  string(3) "yin"
}
```


Settings设置-setCollectNotPinyinAbcChar()
-----
作用: 设置为true后，fetchChars()的结果集中将包含非中文、非拼音的字符串元词（可能是无法解析为拼音的英文单词，也可能无意义的字符串）<br />
示例
```php
<?php
// ...

$smartPinyin->setCollectNotPinyinAbcChar(true);

$smartPinyin->setData('你好 xyz china asldkjadskad pinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(5) {
  [0]=>
  string(36) "你好 xyz china asldkjadskad pinyin"
  [1]=>
  string(36) "ni hao xyz china asldkjadskad pinyin"
  [2]=>
  string(37) "ni hao xyz china asldkjadskad pin yin"
  [3]=>
  string(37) "ni hao xyz chi na asldkjadskad pinyin"
  [4]=>
  string(38) "ni hao xyz chi na asldkjadskad pin yin"
}
array(10) {
  [0]=>
  string(3) "xyz"
  [1]=>
  string(5) "china"
  [2]=>
  string(12) "asldkjadskad"
  [3]=>
  string(6) "pinyin"
  [4]=>
  string(2) "ni"
  [5]=>
  string(3) "hao"
  [6]=>
  string(3) "chi"
  [7]=>
  string(2) "na"
  [8]=>
  string(3) "pin"
  [9]=>
  string(3) "yin"
}
```

Settings设置-setFilter()
-----
过滤原串中的指定字符，使其避免干扰分词和拼音结构识别。<br />
示例
```php
<?php
//...

$smartPinyin->setData('woshi, pinyin.');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc1 = $smartPinyin->fetchAssoc();
$chars1 = $smartPinyin->fetchChars();
var_dump($assoc1, $chars1);

$smartPinyin->setFilter(['.']);
$smartPinyin->setData('woshi, pinyin.');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc2 = $smartPinyin->fetchAssoc();
$chars2 = $smartPinyin->fetchChars();
var_dump($assoc2, $chars2);

$smartPinyin->setFilter(['.', ',']);
$smartPinyin->setData('woshi, pinyin.');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc3 = $smartPinyin->fetchAssoc();
$chars3 = $smartPinyin->fetchChars();
var_dump($assoc3, $chars3);
```
输出
```php
array(1) {
  [0]=>
  string(14) "woshi, pinyin."
}
array(0) {
}

array(2) {
  [0]=>
  string(13) "woshi, pinyin"
  [1]=>
  string(14) "woshi, pin yin"
}
array(2) {
  [0]=>
  string(3) "pin"
  [1]=>
  string(3) "yin"
}

array(4) {
  [0]=>
  string(12) "woshi pinyin"
  [1]=>
  string(13) "woshi pin yin"
  [2]=>
  string(13) "wo shi pinyin"
  [3]=>
  string(14) "wo shi pin yin"
}
array(4) {
  [0]=>
  string(2) "wo"
  [1]=>
  string(3) "shi"
  [2]=>
  string(3) "pin"
  [3]=>
  string(3) "yin"
}
```

Settings设置-setGlues()
-----
作用：设置分隔符，可指定多个<br />
示例
```php
<?php
//... 

$smartPinyin->setGlues([' ', '-']);
$smartPinyin->setData('woshipinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc1 = $smartPinyin->fetchAssoc();
$chars1 = $smartPinyin->fetchChars();
var_dump($assoc1, $chars1);
```
输出
```php
array(3) {
  [0]=>
  string(11) "woshipinyin"
  [1]=>
  string(14) "wo shi pin yin"
  [2]=>
  string(14) "wo-shi-pin-yin"
}
array(4) {
  [0]=>
  string(2) "wo"
  [1]=>
  string(3) "shi"
  [2]=>
  string(3) "pin"
  [3]=>
  string(3) "yin"
}
```

Settings设置-setDynamicGlue()
-----
作用: 动态拼装分词。将所有分词，按照指定分隔符，排列组合得出所有分开/合并的联想词情形。<br />
示例
```php
<?php
//...

$smartPinyin->setDynamicGlue(true);
$smartPinyin->setData('woshipinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(8) {
  [0]=>
  string(11) "woshipinyin"
  [1]=>
  string(14) "wo shi pin yin"
  [2]=>
  string(13) "woshi pin yin"
  [3]=>
  string(13) "wo shipin yin"
  [4]=>
  string(12) "woshipin yin"
  [5]=>
  string(13) "wo shi pinyin"
  [6]=>
  string(12) "woshi pinyin"
  [7]=>
  string(12) "wo shipinyin"
}
array(4) {
  [0]=>
  string(2) "wo"
  [1]=>
  string(3) "shi"
  [2]=>
  string(3) "pin"
  [3]=>
  string(3) "yin"
}
```

结合setGlues()一起使用
```php
<?php
// ...

$smartPinyin->setGlues([' ', '-']);
$smartPinyin->setDynamicGlue(true);
$smartPinyin->setData('woshipinyin');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```
array(15) {
  [0]=>
  string(11) "woshipinyin"
  [1]=>
  string(14) "wo shi pin yin"
  [2]=>
  string(13) "woshi pin yin"
  [3]=>
  string(13) "wo shipin yin"
  [4]=>
  string(12) "woshipin yin"
  [5]=>
  string(13) "wo shi pinyin"
  [6]=>
  string(12) "woshi pinyin"
  [7]=>
  string(12) "wo shipinyin"
  [8]=>
  string(14) "wo-shi-pin-yin"
  [9]=>
  string(13) "woshi-pin-yin"
  [10]=>
  string(13) "wo-shipin-yin"
  [11]=>
  string(12) "woshipin-yin"
  [12]=>
  string(13) "wo-shi-pinyin"
  [13]=>
  string(12) "woshi-pinyin"
  [14]=>
  string(12) "wo-shipinyin"
}
array(4) {
  [0]=>
  string(2) "wo"
  [1]=>
  string(3) "shi"
  [2]=>
  string(3) "pin"
  [3]=>
  string(3) "yin"
}
```

Settings设置-setSupplementScope()
-----
作用: 类内目前提供了两个单字识别的补充索引库,分别为SmartPinyin::SCOPE_DUOYINZI, SmartPinyin::SCOPE_NAME<br />
<b>SmartPinyin::SCOPE_DUOYINZI</b>: 多音字补充索引。对应数组文件存放于dict/lang.pinyin.duoyinzi.cfg.php下，可根据需要自行按照已有结构进行补充<br />
<b>SmartPinyin::SCOPE_NAME</b>: 多国地区姓氏拼音支持。对应数组文件存放于dict/lang.pinyin.name.cfg.php下，可根据需要自行按照已有结构进行补充<br />
示例
```php
<?php
// ...

$smartPinyin->setSupplementScope([SmartPinyin::SCOPE_NAME]);
$smartPinyin->setData('陈');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```
array(10) {
  [0]=>
  string(3) "陈"
  [1]=>
  string(4) "chen"
  [2]=>
  string(4) "chan"
  [3]=>
  string(3) "tan"
  [4]=>
  string(4) "ting"
  [5]=>
  string(3) "jin"
  [6]=>
  string(4) "chin"
  [7]=>
  string(4) "tang"
  [8]=>
  string(4) "ding"
  [9]=>
  string(3) "sin"
}
array(7) {
  [0]=>
  string(4) "chen"
  [1]=>
  string(4) "chan"
  [2]=>
  string(3) "tan"
  [3]=>
  string(4) "ting"
  [4]=>
  string(3) "jin"
  [5]=>
  string(4) "tang"
  [6]=>
  string(4) "ding"
}
```

Settings设置-setSingleYmCharSplit()
-----
作用: 单韵母分词是有使用“韵母分隔符”进行分割，如：xinan。如果启动动态分词setDynamicGlue(true)，结果中将包含xin`an
示例
```php
<?php
// ...

$smartPinyin->setDynamicGlue(true);
$smartPinyin->setSingleYmCharSplit(true);
$smartPinyin->setData('xinan');
$smartPinyin->assocSelf();
$smartPinyin->assocPinyin();
$assoc = $smartPinyin->fetchAssoc();
$chars = $smartPinyin->fetchChars();
var_dump($assoc, $chars);
```
输出
```php
array(4) {
  [0]=>
  string(5) "xinan"
  [1]=>
  string(6) "xi nan"
  [2]=>
  string(6) "xin an"
  [3]=>
  string(6) "xin`an"
}
array(4) {
  [0]=>
  string(2) "xi"
  [1]=>
  string(3) "nan"
  [2]=>
  string(3) "xin"
  [3]=>
  string(2) "an"
}
