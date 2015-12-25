<?php
namespace PhpTranspiler\Framework;

use Symfony\Component\Console\Exception\InvalidArgumentException;

class SourceDir
{
    private $url;

    public function __construct($path)
    {
        if (false === is_dir($path)) {
            throw new InvalidArgumentException('Given path is not a directory.');
        }
        $this->url = $path;
    }
}