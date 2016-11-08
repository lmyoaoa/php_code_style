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

// 类名必须以大驼峰式命名
// 类名之后必须跟空格
class CodeStyle {

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


}

// 文件结尾不允许使用php结束符? >，防止出现多余的空格


