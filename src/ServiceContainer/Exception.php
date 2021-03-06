<?php

declare(strict_types=1);

namespace IW\ServiceContainer;

use Psr\Container\ContainerExceptionInterface;
use Throwable;

abstract class Exception extends \Exception implements ContainerExceptionInterface
{
    public function __construct(?string $message = null, ?Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
