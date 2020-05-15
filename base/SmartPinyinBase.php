<?php
namespace SmartPinyin;

// define('SM', '(?:(?:zh)|(?:ch)|(?:sh)|(?:b)|(?:p)|(?:m)|(?:f)|(?:d)|(?:t)|(?:n)|(?:l)|(?:g)|(?:k)|(?:h)|(?:j)|(?:q)|(?:x)|(?:r)|(?:z)|(?:c)|(?:s)|(?:y)|(?:w))');
// define('YM_LEN1', '(?:a)|(?:o)|(?:e)|(?:i)|(?:u)|(?:v)');
// define('YM_LEN2', '(?:ai)|(?:ei)|(?:ui)|(?:ao)|(?:ou)|(?:iu)|(?:ie)|(?:ve)|(?:er)|(?:an)|(?:en)|(?:in)|(?:un)|(?:vn)');
// define('YM_LEN3', '(?:ang)|(?:eng)|(?:ing)|(?:ong)|(?:iao)|(?:ian)|(?:uan)|(?:i`ao)|(?:i`an)|(?:u`an)');
// define('YM_LEN4', '(?:iong)|(?:iang)|(?:uang)|(?:i`ang)|(?:u`ang)');

define('SM_YM_LEN1', '(?:cha)|(?:che)|(?:chi)|(?:chu)|(?:sha)|(?:she)|(?:shi)|(?:shu)|(?:zha)|(?:zhe)|(?:zhi)|(?:zhu)|(?:ba)|(?:bi)|(?:bo)|(?:bu)|(?:ca)|(?:ce)|(?:ci)|(?:cu)|(?:da)|(?:de)|(?:di)|(?:du)|(?:fa)|(?:fo)|(?:fu)|(?:ga)|(?:ge)|(?:gu)|(?:ha)|(?:he)|(?:hu)|(?:ji)|(?:ju)|(?:ka)|(?:ke)|(?:ku)|(?:la)|(?:le)|(?:li)|(?:lu)|(?:lv)|(?:ma)|(?:me)|(?:mi)|(?:mo)|(?:mu)|(?:na)|(?:ni)|(?:nu)|(?:nv)|(?:pa)|(?:pi)|(?:po)|(?:pu)|(?:qi)|(?:qu)|(?:re)|(?:ri)|(?:ru)|(?:sa)|(?:se)|(?:si)|(?:su)|(?:ta)|(?:te)|(?:ti)|(?:tu)|(?:wa)|(?:wo)|(?:wu)|(?:xi)|(?:xu)|(?:ya)|(?:ye)|(?:yi)|(?:yo)|(?:yu)|(?:za)|(?:ze)|(?:zi)|(?:zu)');
define('SM_YM_LEN2', '(?:chai)|(?:chan)|(?:chao)|(?:cha`o)|(?:chen)|(?:chou)|(?:chui)|(?:chun)|(?:chuo)|(?:chu`o)|(?:shai)|(?:shan)|(?:shao)|(?:sha`o)|(?:shen)|(?:shou)|(?:shua)|(?:shu`a)|(?:shui)|(?:shun)|(?:shuo)|(?:shu`o)|(?:zhai)|(?:zhan)|(?:zhao)|(?:zha`o)|(?:zhen)|(?:zhou)|(?:zhua)|(?:zhu`a)|(?:zhui)|(?:zhun)|(?:zhuo)|(?:zhu`o)|(?:bai)|(?:ban)|(?:bao)|(?:ba`o)|(?:bei)|(?:ben)|(?:bie)|(?:bin)|(?:cai)|(?:can)|(?:cao)|(?:ca`o)|(?:cen)|(?:cou)|(?:cui)|(?:cun)|(?:cuo)|(?:cu`o)|(?:dai)|(?:dan)|(?:dao)|(?:da`o)|(?:die)|(?:diu)|(?:dou)|(?:dui)|(?:dun)|(?:duo)|(?:du`o)|(?:fan)|(?:fei)|(?:fen)|(?:fou)|(?:gai)|(?:gan)|(?:gao)|(?:ga`o)|(?:gei)|(?:gen)|(?:gou)|(?:gua)|(?:gu`a)|(?:gui)|(?:gun)|(?:guo)|(?:gu`o)|(?:hai)|(?:han)|(?:hao)|(?:ha`o)|(?:hei)|(?:hen)|(?:hou)|(?:hua)|(?:hu`a)|(?:hui)|(?:hun)|(?:huo)|(?:hu`o)|(?:jia)|(?:ji`a)|(?:jie)|(?:jin)|(?:jiu)|(?:jue)|(?:ju`e)|(?:jun)|(?:kai)|(?:kan)|(?:kao)|(?:ka`o)|(?:ken)|(?:kou)|(?:kua)|(?:ku`a)|(?:kui)|(?:kun)|(?:kuo)|(?:ku`o)|(?:lai)|(?:lan)|(?:lao)|(?:la`o)|(?:lei)|(?:lia)|(?:li`a)|(?:lie)|(?:lin)|(?:liu)|(?:lou)|(?:lve)|(?:lun)|(?:luo)|(?:lu`o)|(?:mai)|(?:man)|(?:mao)|(?:ma`o)|(?:mei)|(?:men)|(?:mie)|(?:min)|(?:mou)|(?:nai)|(?:nan)|(?:nao)|(?:na`o)|(?:nei)|(?:nen)|(?:nie)|(?:nin)|(?:niu)|(?:nve)|(?:nuo)|(?:nu`o)|(?:pai)|(?:pan)|(?:pao)|(?:pa`o)|(?:pei)|(?:pen)|(?:pie)|(?:pin)|(?:pou)|(?:qia)|(?:qi`a)|(?:qie)|(?:qin)|(?:qiu)|(?:que)|(?:qu`e)|(?:qun)|(?:ran)|(?:rao)|(?:ra`o)|(?:ren)|(?:rou)|(?:rui)|(?:run)|(?:ruo)|(?:ru`o)|(?:sai)|(?:san)|(?:sao)|(?:sa`o)|(?:sen)|(?:sou)|(?:sui)|(?:sun)|(?:suo)|(?:su`o)|(?:tai)|(?:tan)|(?:tao)|(?:ta`o)|(?:tie)|(?:tou)|(?:tui)|(?:tun)|(?:tuo)|(?:tu`o)|(?:wai)|(?:wan)|(?:wei)|(?:wen)|(?:xia)|(?:xi`a)|(?:xie)|(?:xin)|(?:xiu)|(?:xue)|(?:xu`e)|(?:xun)|(?:yan)|(?:yao)|(?:ya`o)|(?:yin)|(?:you)|(?:yue)|(?:yu`e)|(?:yun)|(?:zai)|(?:zan)|(?:zao)|(?:za`o)|(?:zei)|(?:zen)|(?:zou)|(?:zui)|(?:zun)|(?:zuo)|(?:zu`o)');
define('SM_YM_LEN3', '(?:chang)|(?:cheng)|(?:chong)|(?:chuai)|(?:chuan)|(?:chu`an)|(?:shang)|(?:sheng)|(?:shuai)|(?:shuan)|(?:shu`an)|(?:zhang)|(?:zheng)|(?:zhong)|(?:zhuai)|(?:zhuan)|(?:zhu`an)|(?:bang)|(?:beng)|(?:bian)|(?:bi`an)|(?:biao)|(?:bi`ao)|(?:bing)|(?:cang)|(?:ceng)|(?:cong)|(?:cuan)|(?:cu`an)|(?:dang)|(?:deng)|(?:dian)|(?:di`an)|(?:diao)|(?:di`ao)|(?:ding)|(?:dong)|(?:duan)|(?:du`an)|(?:fang)|(?:feng)|(?:gang)|(?:geng)|(?:gong)|(?:guai)|(?:guan)|(?:gu`an)|(?:hang)|(?:heng)|(?:hong)|(?:huai)|(?:huan)|(?:hu`an)|(?:jian)|(?:ji`an)|(?:jiao)|(?:ji`ao)|(?:jing)|(?:juan)|(?:ju`an)|(?:kang)|(?:keng)|(?:kong)|(?:kuai)|(?:kuan)|(?:ku`an)|(?:lang)|(?:leng)|(?:lian)|(?:li`an)|(?:liao)|(?:li`ao)|(?:ling)|(?:long)|(?:luan)|(?:lu`an)|(?:mang)|(?:meng)|(?:mian)|(?:mi`an)|(?:miao)|(?:mi`ao)|(?:ming)|(?:nang)|(?:neng)|(?:nian)|(?:ni`an)|(?:niao)|(?:ni`ao)|(?:ning)|(?:nong)|(?:nuan)|(?:nu`an)|(?:pang)|(?:peng)|(?:pian)|(?:pi`an)|(?:piao)|(?:pi`ao)|(?:ping)|(?:qian)|(?:qi`an)|(?:qiao)|(?:qi`ao)|(?:qing)|(?:quan)|(?:qu`an)|(?:rang)|(?:reng)|(?:rong)|(?:ruan)|(?:ru`an)|(?:sang)|(?:seng)|(?:song)|(?:suan)|(?:su`an)|(?:tang)|(?:teng)|(?:tian)|(?:ti`an)|(?:tiao)|(?:ti`ao)|(?:ting)|(?:tong)|(?:tuan)|(?:tu`an)|(?:wang)|(?:weng)|(?:xian)|(?:xi`an)|(?:xiao)|(?:xi`ao)|(?:xing)|(?:xuan)|(?:xu`an)|(?:yang)|(?:ying)|(?:yong)|(?:yuan)|(?:yu`an)|(?:zang)|(?:zeng)|(?:zong)|(?:zuan)|(?:zu`an)');
define('SM_YM_LEN4', '(?:chuang)|(?:chu`ang)|(?:shuang)|(?:shu`ang)|(?:zhuang)|(?:zhu`ang)|(?:guang)|(?:gu`ang)|(?:huang)|(?:hu`ang)|(?:jiang)|(?:ji`ang)|(?:jiong)|(?:kuang)|(?:ku`ang)|(?:liang)|(?:li`ang)|(?:niang)|(?:ni`ang)|(?:qiang)|(?:qi`ang)|(?:qiong)|(?:xiang)|(?:xi`ang)|(?:xiong)');
define('SM_YM_LEN1234', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN2.'|'.SM_YM_LEN3.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN1243', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN2.'|'.SM_YM_LEN4.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN1324', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN3.'|'.SM_YM_LEN2.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN1342', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN3.'|'.SM_YM_LEN4.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN1432', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN4.'|'.SM_YM_LEN3.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN1423', '(?:'.SM_YM_LEN1.'|'.SM_YM_LEN4.'|'.SM_YM_LEN2.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN2134', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN1.'|'.SM_YM_LEN3.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN2143', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN1.'|'.SM_YM_LEN4.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN2314', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN3.'|'.SM_YM_LEN1.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN2341', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN3.'|'.SM_YM_LEN4.'|'.SM_YM_LEN1.')');
define('SM_YM_LEN2413', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN4.'|'.SM_YM_LEN1.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN2431', '(?:'.SM_YM_LEN2.'|'.SM_YM_LEN4.'|'.SM_YM_LEN3.'|'.SM_YM_LEN1.')');
define('SM_YM_LEN3124', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN1.'|'.SM_YM_LEN2.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN3142', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN1.'|'.SM_YM_LEN4.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN3214', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN2.'|'.SM_YM_LEN1.'|'.SM_YM_LEN4.')');
define('SM_YM_LEN3241', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN2.'|'.SM_YM_LEN4.'|'.SM_YM_LEN1.')');
define('SM_YM_LEN3412', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN4.'|'.SM_YM_LEN1.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN3421', '(?:'.SM_YM_LEN3.'|'.SM_YM_LEN4.'|'.SM_YM_LEN2.'|'.SM_YM_LEN1.')');
define('SM_YM_LEN4123', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN1.'|'.SM_YM_LEN2.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN4132', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN1.'|'.SM_YM_LEN3.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN4213', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN2.'|'.SM_YM_LEN1.'|'.SM_YM_LEN3.')');
define('SM_YM_LEN4231', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN2.'|'.SM_YM_LEN3.'|'.SM_YM_LEN1.')');
define('SM_YM_LEN4312', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN3.'|'.SM_YM_LEN1.'|'.SM_YM_LEN2.')');
define('SM_YM_LEN4321', '(?:'.SM_YM_LEN4.'|'.SM_YM_LEN3.'|'.SM_YM_LEN2.'|'.SM_YM_LEN1.')');
define('WHOLE_SM_YMS', [
    'SM_YM_LEN1234' => SM_YM_LEN1234, 'SM_YM_LEN1243' => SM_YM_LEN1243, 'SM_YM_LEN1324' => SM_YM_LEN1324, 'SM_YM_LEN1342' => SM_YM_LEN1342, 'SM_YM_LEN1432' => SM_YM_LEN1432, 'SM_YM_LEN1423' => SM_YM_LEN1423,
    'SM_YM_LEN2134' => SM_YM_LEN2134, 'SM_YM_LEN2143' => SM_YM_LEN2143, 'SM_YM_LEN2314' => SM_YM_LEN2314, 'SM_YM_LEN2341' => SM_YM_LEN2341, 'SM_YM_LEN2413' => SM_YM_LEN2413, 'SM_YM_LEN2431' => SM_YM_LEN2431,
    'SM_YM_LEN3124' => SM_YM_LEN3124, 'SM_YM_LEN3142' => SM_YM_LEN3142, 'SM_YM_LEN3214' => SM_YM_LEN3214, 'SM_YM_LEN3241' => SM_YM_LEN3241, 'SM_YM_LEN3412' => SM_YM_LEN3412, 'SM_YM_LEN3421' => SM_YM_LEN3421,
    'SM_YM_LEN4123' => SM_YM_LEN4123, 'SM_YM_LEN4132' => SM_YM_LEN4132, 'SM_YM_LEN4213' => SM_YM_LEN4213, 'SM_YM_LEN4231' => SM_YM_LEN4231, 'SM_YM_LEN4312' => SM_YM_LEN4312, 'SM_YM_LEN4321' => SM_YM_LEN4321
]);

define('YM_INDIVIDUAL_CHAR_LEN1', '(?:a)|(?:o)|(?:e)');
define('YM_INDIVIDUAL_CHAR_LEN2', '(?:ai)|(?:ei)|(?:ao)|(?:ou)|(?:er)|(?:an)|(?:en)');
define('YM_INDIVIDUAL_CHAR_LEN3', '(?:ang)|(?:eng)');
define('YM_INDIVIDUAL_CHAR_LEN123', '(?:'.YM_INDIVIDUAL_CHAR_LEN1.'|'.YM_INDIVIDUAL_CHAR_LEN2.'|'.YM_INDIVIDUAL_CHAR_LEN3.')');
define('YM_INDIVIDUAL_CHAR_LEN132', '(?:'.YM_INDIVIDUAL_CHAR_LEN1.'|'.YM_INDIVIDUAL_CHAR_LEN3.'|'.YM_INDIVIDUAL_CHAR_LEN2.')');
define('YM_INDIVIDUAL_CHAR_LEN213', '(?:'.YM_INDIVIDUAL_CHAR_LEN2.'|'.YM_INDIVIDUAL_CHAR_LEN1.'|'.YM_INDIVIDUAL_CHAR_LEN3.')');
define('YM_INDIVIDUAL_CHAR_LEN231', '(?:'.YM_INDIVIDUAL_CHAR_LEN2.'|'.YM_INDIVIDUAL_CHAR_LEN3.'|'.YM_INDIVIDUAL_CHAR_LEN1.')');
define('YM_INDIVIDUAL_CHAR_LEN312', '(?:'.YM_INDIVIDUAL_CHAR_LEN3.'|'.YM_INDIVIDUAL_CHAR_LEN1.'|'.YM_INDIVIDUAL_CHAR_LEN2.')');
define('YM_INDIVIDUAL_CHAR_LEN321', '(?:'.YM_INDIVIDUAL_CHAR_LEN3.'|'.YM_INDIVIDUAL_CHAR_LEN2.'|'.YM_INDIVIDUAL_CHAR_LEN1.')');
define('SINGLE_INDIVIDUAL_CHAR_YMS', [
    'YM_INDIVIDUAL_CHAR_LEN123' => YM_INDIVIDUAL_CHAR_LEN123, 'YM_INDIVIDUAL_CHAR_LEN132' => YM_INDIVIDUAL_CHAR_LEN132,
    'YM_INDIVIDUAL_CHAR_LEN213' => YM_INDIVIDUAL_CHAR_LEN213, 'YM_INDIVIDUAL_CHAR_LEN231' => YM_INDIVIDUAL_CHAR_LEN231,
    'YM_INDIVIDUAL_CHAR_LEN312' => YM_INDIVIDUAL_CHAR_LEN312, 'YM_INDIVIDUAL_CHAR_LEN321' => YM_INDIVIDUAL_CHAR_LEN321, 
]);

/**
 * 
 * @author MarcunM0
 *
 */
class SmartPinyinBase
{
    const PINYIN_TONE_NONE = 0;
    const PINYIN_TONE_WITH = 1;
    const PINYIN_TONE_ALL = 2;
    
    const SCOPE_DUOYINZI = 1;
    const SCOPE_NAME = 2;
    
    const PINYIN_YUNMU_SPLIT = '`';
    
    protected $_value = '';
    protected $_value_splited = [];
    protected $_filter = [];
    protected $_glues = [];
    protected $_punctuations = [];
    protected $_dynamic_glue = false;
    protected $_supplement_scope = [];
    protected $_single_ymchar_split = true;
    protected $_collect_cn_char = false;
    protected $_collect_not_pinyin_abc_char = false;
    protected $_assoc = [];
    protected $_chars = [];
    
    
    public static $PINYIN_YUNMU = array(
        'a', 'o', 'e', 'i', 'u', 'u',                                           // 单韵母
        'ai', 'ei', 'ao', 'ou', 'uai', 'uei', 've', 'er', 'ui',                  // 复韵母
        'an', 'en', 'un', 'eng', 'uan', 'ang', 'eng', 'iang', 'iong', 'uang',               // 鼻韵母
    );
    
    
    public static $CFG_LANG_PINYIN_DUOYINZI;
    public static $CFG_LANG_PINYIN_NAME;
    
    protected static $_CnConvert;
    
    public function __construct()
    {
        $this->init();
    }
    
    public function init()
    {
        self::$CFG_LANG_PINYIN_DUOYINZI = include 'dict/lang.pinyin.duoyinzi.cfg.php';
        self::$CFG_LANG_PINYIN_NAME = include 'dict/lang.pinyin.name.cfg.php';
        
        $this->setCnConvert();
        
        $this->setFilter([]);
        $this->setGlues([' ']);
        $this->setPunctuations([]);
        $this->setSupplementScope([]);
        $this->setSingleYmCharSplit(false);
        $this->setDynamicGlue(false);
        $this->setCollectCnChar(false);
        $this->setCollectNotPinyinAbcChar(false);
    }
    
    public function clearFetchs()
    {
        $this->_assoc = [];
        $this->_chars = [];
        $this->_value_splited = [];
    }
    
    public function setCnConvert()
    {
        
    }
    
    public function setData($value, $clear = true)
    {
        if($clear){
            $this->clearFetchs();
        }
        
        $this->_value = trim($value);
        $this->filterData();
        
        $this->valueSplitCnPinyin();
    }
    
    public function getData()
    {
        return $this->_value;
    }
    
    public function setFilter($filter = [])
    {
        $this->_filter = $filter;
    }
    
    public function filterData()
    {
        $this->_value = str_replace($this->_filter, '', $this->_value);
    }
    
    public function setGlues($glues = [' '])
    {
        if(!is_array($glues)){
            $glues = [$glues];
        }
        $this->_glues = $glues;
    }
    
    public function setPunctuations($punctuations = [])
    {
        if(!is_array($punctuations)){
            $punctuations = [$punctuations];
        }
        $this->_punctuations = $punctuations;
    }
    
    public function setDynamicGlue($dynamicGlue = false)
    {
        $this->_dynamic_glue = $dynamicGlue;
    }
    
    public function setSupplementScope($scope = [])
    {
        $this->_supplement_scope = $scope;
    }
    
    public function setSingleYmCharSplit($singleYmCharSplit = true)
    {
        $this->_single_ymchar_split = $singleYmCharSplit;
    }
    
    public function setCollectCnChar($collectCnChar = false)
    {
        $this->_collect_cn_char = $collectCnChar;
    }
    
    public function setCollectNotPinyinAbcChar($collectNotPinyinAbcChar = false)
    {
        $this->_collect_not_pinyin_abc_char = $collectNotPinyinAbcChar;
    }
    
    public function fetchAssoc()
    {
        return $this->_assoc;
    }
    
    public function fetchChars()
    {
        return $this->_chars;
    }
    
    public function pushAssoc($assoc)
    {
        if(!is_array($assoc)){
            $assoc = [$assoc];
        }
        
        foreach($assoc as $a){
            if(!in_array($a, $this->_assoc)){
                $this->_assoc[] = $a;
            }
        }
    }
    
    public function pushChar($char)
    {
        if(!is_array($char)){
            $char = [$char];
        }
        
        foreach($char as $c){
            $glue = isset($this->_glues[0])? $this->_glues[0] : ' ';
            foreach(explode($glue, $c) as $cc){
                foreach(explode(self::PINYIN_YUNMU_SPLIT, $cc) as $ccc){
                    $cccFilterPunctuations = str_replace($this->_punctuations, '', $ccc);
                    if(!in_array($cccFilterPunctuations, $this->_chars)){
                        if(self::IsAllChinese($cccFilterPunctuations)){
                            if($this->_collect_cn_char){
                                $this->_chars[] = $cccFilterPunctuations;
                            }
                        }else{
                            if($this->_collect_not_pinyin_abc_char){
                                $this->_chars[] = $cccFilterPunctuations;
                            }else{
                                foreach(SINGLE_INDIVIDUAL_CHAR_YMS as $k => $ym){
                                    foreach(WHOLE_SM_YMS as $smym){
                                        preg_match('/^('.$ym.'|(?:'.$smym.'))/', $cccFilterPunctuations, $match);
                                        if(!empty($match[0]) && $match[0] == $cccFilterPunctuations){
                                            $this->_chars[] = $cccFilterPunctuations;
                                            goto __GOTO_NEXT_CC;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                
                __GOTO_NEXT_CC:
            }
        }
    }
    
    public function valueSplitCnPinyin()
    {
        $this->_value_splited = $valueSplited = [];
        $valueArr = preg_split('/(?<!^)(?!$)/u', $this->_value);
        
        $i = 0;
        $ch_en_changed = true;
        foreach($valueArr as $k => $v){
            if($k == 0){
                $valueSplited[$i] = $v;
            }else{
                $prev = empty($valueSplited[$i])? '' : $valueSplited[$i];
                if(
                    in_array($v, $this->_glues) ||
                    (preg_match('/[\x{4e00}-\x{9fa5}]/u', $v) !== preg_match('/[\x{4e00}-\x{9fa5}]/u', $prev)) ||
                    preg_match('/[\x{4e00}-\x{9fa5}]/u', $v) === 1
                ){
                    if(!in_array($v, $this->_punctuations)){
                        $i++;
                    }
                }
                
                if(!in_array($v, $this->_glues)){
                    if(!isset($valueSplited[$i])){
                        $valueSplited[$i] = '';
                    }
                    $valueSplited[$i] = $valueSplited[$i] . $v;
                }
            }
        }
        
        
        $punctionSearch = '/[\\'. implode('\\', $this->_punctuations) .']+/';
        $value_splited_k = 0;
        foreach($valueSplited as $v){
            if(in_array($v, $this->_punctuations)){
                $value_splited_k_prev = $value_splited_k - 1;
                $value_splited_k_prev = $value_splited_k_prev < 0? 0 : $value_splited_k_prev;
                $this->_value_splited[$value_splited_k_prev] = $this->_value_splited[$value_splited_k_prev] . $v;
                $value_splited_k++;
            }else{
                preg_match_all($punctionSearch, $v, $vPunctuations);
                $vSplits = array_filter(preg_split($punctionSearch, $v));
                $vPunctuations_k = 0;
                foreach($vSplits as $k => $vSplit){
                    if(isset($vPunctuations[0][$k])){
                        $vSplit = $vSplit . $vPunctuations[0][$k];
                    }
                    
                    $this->_value_splited[$value_splited_k] = $vSplit;
                    $value_splited_k++;
                }
            }
        }
            
        $this->_value_splited = array_filter($this->_value_splited);
        
        $this->pushChar($this->_value_splited);
    }
    
    public function assocSelf()
    {
        $value = $this->_value;
        $this->pushAssoc($this->_value);
        $this->filterData();
        if($value != $this->_value){
            $this->pushAssoc($this->_value);
        }
    }
    
    /**
     * 
     * @param String $pinyinTone <br />
     *  <b>Options</b>: SmartPinyin::PINYIN_TONE_NONE | SmartPinyin::PINYIN_TONE_WITH | SmartPinyin::PINYIN_TONE_ALL<br />
     *  Warning: Only SmartPinyin::PINYIN_TONE_NONE is supported on current version<br />
     */
    public function assocPinyin($pinyinTone = self::PINYIN_TONE_NONE)
    {
        $punctionSearch = '/[\\'. implode('\\', $this->_punctuations) .']+/';
        foreach($this->_glues as $glue){
            $charPinyin = array();
            foreach($this->_value_splited as $k => $char){
                $k_char = $k . $char;
                preg_match($punctionSearch, $char, $charPunctuations);
                $charPunctuations = isset($charPunctuations[0])? $charPunctuations[0] : '';
                $charWithoutPunctuations = str_replace($charPunctuations, '', $char);
                $charPinyin[$k_char] = [];
                if(!empty($char)){
                    $pinyins = [];
                    if($pinyinTone == self::PINYIN_TONE_ALL){
                        $pinyins = array_merge(static::$_CnConvert->toPinyin($char, 0), static::$_CnConvert->toPinyin($char, 1));
                    }elseif($pinyinTone == self::PINYIN_TONE_NONE){
                        $pinyins = static::$_CnConvert->toPinyin($char, 0);
                    }elseif($pinyinTone == self::PINYIN_TONE_WITH){
                        $pinyins = static::$_CnConvert->toPinyin($char, 1);
                    }
                    
                    $this->pushChar($pinyins);
                    foreach($pinyins as $pinyin){
                        if(self::IsAllChinese($charWithoutPunctuations)){
                            $charPinyin[$k_char][] = str_replace($charPunctuations, '', $pinyin) . $charPunctuations;
                        }else{
                            $pinyinAnalyzers = self::PinyinAnalyzer($pinyin, $this->_punctuations);
                            
                            $this->pushChar($pinyinAnalyzers['chars']);
                            foreach($pinyinAnalyzers['pinyins'] as $analyzedPinyin){
                                $singleCombo = self::SinglePinYinComb($analyzedPinyin, $glue, $this->_dynamic_glue, $this->_single_ymchar_split, $this->_punctuations);
                                $charPinyin[$k_char] = array_merge($charPinyin[$k_char], $singleCombo);
                            }
                        }
                    }
                }
                
                if(empty($charPinyin[$k_char])){
                    $charPinyin[$k_char] = array($char);
                }
                
                if(in_array(self::SCOPE_DUOYINZI, $this->_supplement_scope)){
                    if(isset(self::$CFG_LANG_PINYIN_DUOYINZI[$char])){
                        if($pinyinTone == self::PINYIN_TONE_ALL){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_DUOYINZI[$char]['no_tone'],
                                self::$CFG_LANG_PINYIN_DUOYINZI[$char]['with_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_DUOYINZI[$char]['no_tone']);
                            $this->pushChar(self::$CFG_LANG_PINYIN_DUOYINZI[$char]['with_tone']);
                        }elseif($pinyinTone == self::PINYIN_TONE_NONE){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_DUOYINZI[$char]['no_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_DUOYINZI[$char]['no_tone']);
                        }elseif($pinyinTone == self::PINYIN_TONE_WITH){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_DUOYINZI[$char]['with_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_DUOYINZI[$char]['with_tone']);
                        }
                    }
                }
                
                if(in_array(self::SCOPE_NAME, $this->_supplement_scope)){
                    if(isset(self::$CFG_LANG_PINYIN_NAME[$char])){
                        if($pinyinTone == self::PINYIN_TONE_ALL){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_NAME[$char]['no_tone'],
                                self::$CFG_LANG_PINYIN_NAME[$char]['with_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_NAME[$char]['no_tone']);
                            $this->pushChar(self::$CFG_LANG_PINYIN_NAME[$char]['with_tone']);
                        }elseif($pinyinTone == self::PINYIN_TONE_NONE){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_NAME[$char]['no_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_NAME[$char]['no_tone']);
                        }elseif($pinyinTone == self::PINYIN_TONE_WITH){
                            $charPinyin[$k_char] = array_merge(
                                $charPinyin[$k_char],
                                self::$CFG_LANG_PINYIN_NAME[$char]['with_tone']
                                );
                            $this->pushChar(self::$CFG_LANG_PINYIN_NAME[$char]['with_tone']);
                        }
                    }
                }
            }
            
            foreach($charPinyin as $char => $pinyin){
                $charPinyin[$char] = array_filter(array_unique($pinyin));
                if(empty($charPinyin[$char])){
                    $charPinyin[$char] = array($char);
                }
            }
            
            $combs = self::CharPinYinsComb($charPinyin, $glue, $this->_dynamic_glue, $this->_single_ymchar_split, $this->_punctuations);
            
            if(!empty($this->_punctuations)){
                $punctionReplaceSearch = '/[\\'. implode('\\', $this->_glues) .']([\\'. implode('\\', $this->_punctuations) .']+)/';
                foreach($combs as $k => $comb){
                    $combs[$k] = preg_replace($punctionReplaceSearch, '\1', $comb);
                }
            }
            
            $combs = array_unique($combs);
            
            $this->pushAssoc($combs);
        }
    }
    
    /**
     * 
     * @param Array $charPinyins
     * @param string $glues
     * @param string $dynamicGlue
     *      能改使拼音按照不同有/无glue的排列组合生成
     *      假如$glues=['', ' ']
     *      当$dynamicGlue=true,  那么针对第二个' '， 刘慈欣将被排列组合为:  1.liucixin  2.liu cixin  3.liuci xin  4.liu ci xin
     *      当$dynamicGlue=false, 刘慈欣将被排列组合为:  1.liucixin  2.liu ci xin
     * @return string[]|unknown[]
     */
    public static function CharPinYinsComb($charPinyins, $glues = ' ', $dynamicGlue = false, $singleYmCharSplit = true, $punctuations = [], $deep = 0)
    {
        $ret = [];
        
        $remainCharPinyins = $charPinyins;
        $firstCharPinyins = array_shift($remainCharPinyins);
        
        if(count($remainCharPinyins) == 0){
            return $firstCharPinyins;
        }
            
        $firstCharPinyins = array_unique($firstCharPinyins);
        
        if(is_string($glues)){
            $glue = $glues;
            
            foreach($firstCharPinyins as $pinyin){
                if($singleYmCharSplit && in_array($pinyin, self::$PINYIN_YUNMU)){
                    // 全词首字不加韵母分词符
                    if($deep > 0){
                        $pinyin = self::PINYIN_YUNMU_SPLIT . $pinyin;
                    }
                }
                
                if(count($remainCharPinyins) == 1){
                    foreach($remainCharPinyins as $remainChar => $remainPinyins){
                        $remainPinyins = array_unique($remainPinyins);
                        foreach($remainPinyins as $remainPinyin){
                            // 最后一个字如果是全韵母，特殊处理韵母分词符号
                            $ret[] = $pinyin . $glue . $remainPinyin;
                            if($singleYmCharSplit && in_array($remainPinyin, self::$PINYIN_YUNMU)){
                                $ret[] = $pinyin . $glue . self::PINYIN_YUNMU_SPLIT . $remainPinyin;
                            }
                            
                            if($dynamicGlue){
                                if($singleYmCharSplit && in_array($remainPinyin, self::$PINYIN_YUNMU)){
                                    $remainPinyinWithYunmuSplit = self::PINYIN_YUNMU_SPLIT . $remainPinyin;
                                    $ret[] = $pinyin . $remainPinyinWithYunmuSplit;
                                    $ret[] = $pinyin . $remainPinyin;
                                }else{
                                    $ret[] = $pinyin . $remainPinyin;
                                }
                            }
                        }
                    }
                }else{
                    foreach(self::CharPinYinsComb($remainCharPinyins, $glues, $dynamicGlue, $singleYmCharSplit, $punctuations, $deep+1) as $remainPinyin){
                        $ret[] = $pinyin . $glue . $remainPinyin;
                        if($dynamicGlue){
                            $ret[] = $pinyin . $remainPinyin;
                        }
                    }
                }
            }
        }elseif(is_array($glues)){
            foreach($glues as $glue){
                foreach(self::CharPinYinsComb($charPinyins, $glue, $dynamicGlue, $singleYmCharSplit, $punctuations, $deep) as $remainPinyin){
                    $ret[] = $remainPinyin;
                }
            }
        }
        
        if(is_string($glues)){
            $glues = array($glues);
        }
        if($deep == 0){
            foreach($glues as $glue){
                if(!empty($glue)){
                    foreach($ret as $k => $v){
                        $ret[$k] = str_replace($glue . self::PINYIN_YUNMU_SPLIT, $glue, $v);
                    }
                }
            }
        }
        
        return $ret;
    }
    
    /**
     * 
     * @param String $singlePinyin
     * @param string $glues
     * @param string $dynamicGlue
     * @param number $deep
     * @return mixed|string[]|string[][]|unknown[][]
     */
    public static function SinglePinYinComb($singlePinyin, $glues = ' ', $dynamicGlue = false, $singleYmCharSplit = true, $punctuations = [], $deep = 0)
    {
        $ret = [];
        
        if($deep == 0){
            $singlePinyinPunctuation = '';
            if(!empty($punctuations)){
                $punctuationSearch = '([\\'. implode('\\', $punctuations) .']+)';
                
                preg_match($punctuationSearch, $singlePinyin, $singlePinyinPunctuation);
                if(isset($singlePinyinPunctuation[0])){
                    $singlePinyinPunctuation = $singlePinyinPunctuation[0];
                }else{
                    $singlePinyinPunctuation = '';
                }
                $singlePinyin = preg_replace($punctuationSearch, '', $singlePinyin);
            }
        }
        
        $singlePinyinSplited = explode(' ', $singlePinyin);
        $remainSinglePinyin = $singlePinyinSplited;
        $firstSinglePinyin = array_shift($remainSinglePinyin);
        $firstSinglePinyinYmSplited = $firstSinglePinyin;        
        
        if($singleYmCharSplit && $deep > 0 && in_array($firstSinglePinyin, self::$PINYIN_YUNMU)){
            // 全词首字不加韵母分词符
            $firstSinglePinyinYmSplited = self::PINYIN_YUNMU_SPLIT . $firstSinglePinyin;
        }
        
        if(empty($remainSinglePinyin)){
            $ret = [$firstSinglePinyin, $firstSinglePinyinYmSplited];
        }else{
            if(is_string($glues)){
                $glue = $glues;
                if(count($remainSinglePinyin) <= 1){
                    $lastPinyin = array_shift($remainSinglePinyin);
                    $ret[] = $firstSinglePinyin . $glue . $lastPinyin;
                    $ret[] = $firstSinglePinyinYmSplited . $glue . $lastPinyin;
                    if($singleYmCharSplit && in_array($lastPinyin, self::$PINYIN_YUNMU)){
                        $ret[] = $firstSinglePinyin . $glue . self::PINYIN_YUNMU_SPLIT . $lastPinyin;
                        $ret[] = $firstSinglePinyinYmSplited . $glue . self::PINYIN_YUNMU_SPLIT . $lastPinyin;
                    }
                    
                    if($dynamicGlue){
                        if($singleYmCharSplit && in_array($lastPinyin, self::$PINYIN_YUNMU)){
                            $lastPinyinWithYunmuSplit = self::PINYIN_YUNMU_SPLIT . $lastPinyin;
                            $ret[] = $firstSinglePinyin . $lastPinyinWithYunmuSplit;
                            $ret[] = $firstSinglePinyin . $lastPinyin;
                            $ret[] = $firstSinglePinyinYmSplited . $lastPinyinWithYunmuSplit;
                            $ret[] = $firstSinglePinyinYmSplited . $lastPinyin;
                        }else{
                            $ret[] = $firstSinglePinyin . $lastPinyin;
                            $ret[] = $firstSinglePinyinYmSplited . $lastPinyin;
                        }
                    }
                }else{
                    foreach(self::SinglePinYinComb(implode(' ', $remainSinglePinyin), $glues, $dynamicGlue, $singleYmCharSplit, $punctuations, $deep+1) as $remainPinyin){
                        $ret[] = $firstSinglePinyin . $glue . $remainPinyin;
                        $ret[] = $firstSinglePinyinYmSplited . $glue . $remainPinyin;
                        if($dynamicGlue){
                            $ret[] = $firstSinglePinyin . $remainPinyin;
                            $ret[] = $firstSinglePinyinYmSplited . $remainPinyin;
                        }
                    }
                }
            }elseif(is_array($glues)){
                foreach($glues as $glue){
                    foreach(self::SinglePinYinComb($singlePinyin, $glue, $dynamicGlue, $singleYmCharSplit, $punctuations, $deep) as $remainPinyin){
                        $ret[] = $remainPinyin;
                    }
                }
            }
        }
        
        if(is_string($glues)){
            $glues = array($glues);
        }
        if($deep == 0){
            foreach($glues as $glue){
                if(!empty($glue)){
                    foreach($ret as $k => $v){
                        $ret[$k] = str_replace($glue . self::PINYIN_YUNMU_SPLIT, $glue, $v) . $singlePinyinPunctuation;
                    }
                }else{
                    $ret[$k] = $v . $singlePinyinPunctuation;
                }
            }
            
            $ret = array_unique($ret);
        }
        
        return $ret;
    }
    
    public static function N($arr)
    {
        $results = array();
        foreach($arr as $k => $v){
            if(!empty($v)){
                $recrRet = self::N($v);
                foreach($recrRet as $r){
                    $results[] = $k . ' ' . $r;
                }
            }else{
                $results[] = $k;
            }
        }
        
        return $results;
    }
    
    public static function SplitSinglePinyin($str, $seq = 0){
        $str = trim($str);
        
        $charMatches = array($seq => array());
        $calStr = $str;
        foreach(SINGLE_INDIVIDUAL_CHAR_YMS as $k => $ym){
            foreach(WHOLE_SM_YMS as $kk => $smym){
                preg_match('/^('.$ym.'|(?:'.$smym.'))/', $calStr, $match);
                if(!empty($match[0])){
                    $charMatches[$seq][] =  $match[0];
                }
            }
        }
        
        $charMatches[$seq] = array_unique($charMatches[$seq]);
        
        $results = array();
        foreach($charMatches[$seq] as $k => $charMatch){
            $results[$charMatch] = array();
            
            $strRemain = substr($str, strlen($charMatch));
            if(!empty($strRemain)){
                $nextCharMatches = self::SplitSinglePinyin($strRemain, $seq+1);
                $results[$charMatch] = $nextCharMatches;
            }
        }
        
        if($seq == 0){
            $results = self::N($results);
            
        }
        return $results;
    }
    
    public static function PinyinAnalyzer($str, $punctuations = [], $deep = 0)
    {
        $str = strtolower($str);
        $pinyins = [
            'chars' => [],
            'pinyins' => []
        ];
        
        
        if($deep == 0){
            $strPunctuations = '';
            if(!empty($punctuations)){
                $punctionSearch = '([\\'. implode('\\', $punctuations) .']+)';
                preg_match($punctionSearch, $str, $strPunctuations);
                $strPunctuations = isset($strPunctuations[0])? $strPunctuations[0] : '';
                
                $str = preg_replace($punctionSearch, '', $str);
            }
        }
        
        $splitBySpace = explode(' ', $str);
        if(count($splitBySpace) > 1){
            foreach($splitBySpace as $splitStr){
                $recrRet = self::PinyinAnalyzer($splitStr, $punctuations, $deep+1);
                
                $pinyins['chars'] = array_merge($pinyins['chars'], $recrRet['chars']);
                if(!empty($recrRet['pinyins'])){
                    if(empty($pinyins['pinyins'])){
                        $pinyins['pinyins'] = $recrRet['pinyins'];
                    }else{
                        $tmp = $pinyins['pinyins'];
                        $pinyins['pinyins'] = [];
                        foreach($tmp as $k => $pinyin){
                            foreach($recrRet['pinyins'] as $rpinyin){
                                $pinyins['pinyins'][] = $pinyin . ' ' . $rpinyin;
                            }
                        }
                    }
                }
            }
        }else{
            $pinyins = [
                'chars' => [],
                'pinyins' => [$str]
            ];
            
            $splitedFromSinglePinyins = self::SplitSinglePinyin($str);
            foreach($splitedFromSinglePinyins as $splitedFromSinglePinyin){
                if(str_replace(' ', '', $splitedFromSinglePinyin) == $str){
                    $pinyins['chars'] = array_merge($pinyins['chars'], explode(' ', $splitedFromSinglePinyin));
                    $pinyins['pinyins'][] = $splitedFromSinglePinyin;
                }
            }
        }
        
        $pinyins['chars'] = array_unique($pinyins['chars']);
        $pinyins['pinyins'] = array_unique($pinyins['pinyins']);
        
        if($deep == 0){
            if(!empty($strPunctuations)){
                foreach($pinyins['pinyins'] as $k => $v){
                    $pinyins['pinyins'][$k] = $v . $strPunctuations;
                }
            }
        }
        
        return $pinyins;
    }
    
    public static function IsAllChinese($str)
    {
        return preg_match('/^[\x{4e00}-\x{9fa5}]+$/u', $str) && true;
    }
}