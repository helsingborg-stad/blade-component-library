<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97c9b2ed9ebe12ab52adcac4e9a89a35
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\tests\\' => 12,
            'eftec\\bladeone\\' => 15,
        ),
        'B' => 
        array (
            'BladeComponentLibrary\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/tests',
        ),
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'BladeComponentLibrary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97c9b2ed9ebe12ab52adcac4e9a89a35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97c9b2ed9ebe12ab52adcac4e9a89a35::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}