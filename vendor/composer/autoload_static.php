<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49ba8f6fd05c1362ceca2d2085329b4b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HugCode\\Third\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HugCode\\Third\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49ba8f6fd05c1362ceca2d2085329b4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49ba8f6fd05c1362ceca2d2085329b4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
