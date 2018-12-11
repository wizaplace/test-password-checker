<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 2018-12-07
 * Time: 09:55
 */

namespace AppBundle\PasswordChecker;

abstract class AnagramChecker implements PasswordCheckerInterface
{
    function is_anagram($string_1, $string_2)
    {
        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'Yes';
        else
            return 'No';
    }
}