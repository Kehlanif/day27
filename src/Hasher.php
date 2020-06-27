<?php


namespace App\packages\functions\encryption\src;

/**
 * Class hasher
 * @package App\packagesDay27\kehlaniDay27\encryDay27\src
 */
class Hasher
{
    /**
     * @param $algo
     * @param $str
     * @param string $salt
     * @return string
     */
    function makeHash($algo, $str, $salt=''){
        $entry = hash($algo,$str.$salt);
        return $entry;
    }

    /**
     * @param $hash
     * @param $algo
     * @param $str
     * @param string $salt
     * @return bool
     */
    function checkHash($hash, $algo, $str, $salt=''){
        return hash($algo,$str.$salt)===$hash;
    }
}