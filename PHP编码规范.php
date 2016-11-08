<?php
/**
 * @desc 一个文件一个类，注释必须都写，本规范以一个类来作为范例
 *
 * @author lmyoaoa（作者）
 * @since 2016-11-08
 */
namespace codestyle;

use db\mysql;

// 文件编码必须是utf-8格式，并且换行符必须是\n，即设置成unix换行符，windows为\r\n
// 文件必须格式化成一个tab为4个空格（不仅仅是4个空格宽，要一个tab变为4个空格符）
// 基本命名均以驼峰命名，不允许使用this_name, key_value这种形式

// 类名必须以大驼峰式命名
// 类名之后必须跟空格
class CodeStyleForCar {

    // 类常量必须全大写，且每个单词以下划线_隔开
    const DOMAIN = 'http://lmyoaoa.com';

    // 公共静态变量需要大写，且同样以下划线_隔开
    public static $STATUS = 1;

    // 受保护的类静态变量，以及私有静态变量，均使用下划线开头_每个单词以_隔开
    protected static $_STATUS = 2;
    private static $_SUPER_STATUS = 3;

    // 公共的变量采用小驼峰命名
    public $line = 1;

    // 受保护以及私有变量都以_开头
    protected $_protectValue = 1;
    private $_pValue = 1;

    /**
     * @desc 公共方法以小驼峰式命名，注释必须写
     *
     * @author 作者必须写，方便日后其他人可以找到对应负责人
     * @param int $keyName 参数1
     * @param array $array 参数2，假如参数为数组，则必须写清楚数组的格式，如array(1, 2, 3,...)
     * @return array
     */
    // 大括号前必须有空格，变量与变量之间必须有空格隔开
    public function carName($keyName, $array) {
        // 任何字符串，变量等拼接，都必须用空格隔开
        // 等号=，冒号:等等符号前后都必须留有空格
        $str = $keyName . '123456';

        return $array;
    }

    // 每个方法与方法之间，必须要有一个空行
    /**
     * @desc 受保护的方法命名与变量一直，前面加下划线
     *
     * @author 编写者
     * @param int $oilUse 注释
     * return bool
     */
    protected function _engine($oilUse) {
    }

}

// 文件结尾不允许使用php结束符? >，防止出现多余的空格


