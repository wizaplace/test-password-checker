<?php

declare(strict_types=1);

namespace AppBundle\Service;

use AppBundle\PasswordChecker\MinSizeChecker;

class PasswordChecker
{
    /**
     * @var MinSizeChecker
     */
    private $minSizeChecker;

    public function __construct(MinSizeChecker $minSizeChecker)
    {
        $this->minSizeChecker = $minSizeChecker;
    }

    /**
     * Check a password against all configured PasswordChecker classes
     *
     * @param string $password
     *
     * @return string|null an error message, or null if password is valid
     */
    public function check(string $password): ?string
    {
        if (false === $this->minSizeChecker->check($password)) {
            return $this->minSizeChecker->message();
        }

        return null;
    }
}
