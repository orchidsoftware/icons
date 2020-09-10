<?php

declare(strict_types=1);

namespace Orchid\IconPack;

class Path
{
    /**
     * @return string
     */
    public static function getFolder(): string
    {
        $current = dirname(__DIR__, 1);

        return realpath($current . '/svg');
    }
}
