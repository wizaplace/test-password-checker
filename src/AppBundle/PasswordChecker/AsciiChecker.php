<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 2018-12-07
 * Time: 09:54
 */

namespace AppBundle\PasswordChecker;

abstract class AsciiChecker implements PasswordCheckerInterface
{
    function is_ascii($string = '') {
        $num = 0;
        while (isset($string[$num])) {
            if (ord($string[$num]) & 0x80) {
                return false;
            }
            $num++;
        }
        return true;
    }
}