<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 2018-12-07
 * Time: 09:54
 */

namespace AppBundle\PasswordChecker;


interface PasswordCheckerInterface
{
    public function AsciiChecker();
    public function AnagramChecker();
}