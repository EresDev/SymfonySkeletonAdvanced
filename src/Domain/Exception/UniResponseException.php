<?php

declare(strict_types=1);

namespace App\Domain\Exception;

use Exception;

abstract class UniResponseException extends Exception
{
    abstract public function getMessageForEndUser() : string;
}
