<?php
/**
 * @desc һ���ļ�һ���࣬ע�ͱ��붼д�����淶��һ��������Ϊ����
 * github url: https://github.com/lmyoaoa/php_code_style
 *
 * @author lmyoaoa�����ߣ� 
 * @since 2016-11-08
 */
namespace codestyle;

use db\mysql;

// �ļ����������utf-8��ʽ�����һ��з�������Unix LF (linefeed)�������ó�unix���з���windowsΪ\r\n
// �ļ������ʽ����һ��tabΪ4���ո񣨲�������4���ո��Ҫһ��tab��Ϊ4���ո����
// �������������շ�������������ʹ��this_name, key_value������ʽ

// ���������Դ��շ�ʽ����
// ����֮�������ո� 
class CodeStyleForCar {

    // �ೣ������ȫ��д����ÿ���������»���_����
    const DOMAIN = 'http://lmyoaoa.com';

    // ������̬������Ҫ��д����ͬ�����»���_����
    public static $STATUS = 1;

    // �ܱ������ྲ̬�������Լ�˽�о�̬��������ʹ���»��߿�ͷ_ÿ��������_����
    protected static $_STATUS = 2;
    private static $_SUPER_STATUS = 3;

    // �����ı�������С�շ�����
    public $line = 1;

    // �ܱ����Լ�˽�б�������_��ͷ
    protected $_protectValue = 1;
    private $_pValue = 1;

    /**
     * @desc ����������С�շ�ʽ������ע�ͱ���д
     *
     * @author ���߱���д�������պ������˿����ҵ���Ӧ������
     * @param int $keyName ����1
     * @param array $array ����2���������Ϊ���飬�����д�������ĸ�ʽ����array(1, 2, 3,...)
     * @return array
     */
    // ������ǰ�����пո񣬱��������֮������пո����
    public function carName($keyName, $array) {
        // �κ��ַ�����������ƴ�ӣ��������ÿո����
        // �Ⱥ�=��ð��:�ȵȷ���ǰ�󶼱������пո�
        $str = $keyName . '123456';

        return $array;
    }

    // ÿ�������뷽��֮�䣬����Ҫ��һ������
    /**
     * @desc �ܱ����ķ������������һֱ��ǰ����»���
     *
     * @author ��д��
     * @param int $oilUse ע��
     * return bool
     */
    protected function _engine($oilUse) {
    }

}

// �ļ���β������ʹ��php������? >����ֹ���ֶ���Ŀո�


