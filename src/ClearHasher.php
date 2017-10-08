<?php
/**
 * Created by PhpStorm.
 * User: FreeBSD
 * Date: 2017/10/8
 * Time: 12:54
 */

namespace YangJiSen\Hashing;


/**
 * Class ClearHasher
 * @package YangJiSen\Hasher
 */
class ClearHasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options=[])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return $value . $salt;
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
        return $value . $salt === $hashValue;
    }
}