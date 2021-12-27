<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6052977145b4e3381e300b9084d7bcf
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hcg\\RunTimer\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hcg\\RunTimer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Hcg\\RunTimer\\RunTimer' => __DIR__ . '/../..' . '/src/RunTimer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6052977145b4e3381e300b9084d7bcf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6052977145b4e3381e300b9084d7bcf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6052977145b4e3381e300b9084d7bcf::$classMap;

        }, null, ClassLoader::class);
    }
}