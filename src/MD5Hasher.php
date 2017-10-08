<?php
/**
 * Created by PhpStorm.
 * User: FreeBSD
 * Date: 2017/10/8
 * Time: 9:02
 */

namespace YangJiSen\Hashing;


/**
 * Class MD5Hasher
 * @package YangJiSen\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options=[])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options=[])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}