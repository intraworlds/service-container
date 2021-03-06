<?php

declare(strict_types=1);

namespace IW\ServiceContainer;

use ReflectionParameter;

final class UnsupportedAutowireParam extends Exception
{
    public function __construct(ReflectionParameter $reflectionParam)
    {
        if ($reflectionParam->hasType()) {
            parent::__construct('Unsupported type hint for param: ' . $reflectionParam);
        } else {
            parent::__construct('No type hint for param: ' . $reflectionParam);
        }
    }
}
