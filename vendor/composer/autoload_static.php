<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8993eba4a5f87d759d48599ccc7d98cd
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pf\\arr\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pf\\arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/nancheng/pfinal-array/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phpml' => 
            array (
                0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8993eba4a5f87d759d48599ccc7d98cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8993eba4a5f87d759d48599ccc7d98cd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8993eba4a5f87d759d48599ccc7d98cd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
