<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8c15d2d5e0b194cced9c9db26fd1235
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Ford\\Fusion\\' => 12,
            'Ford\\Escape\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ford\\Fusion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Ford/Fusion',
        ),
        'Ford\\Escape\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Ford/Escape',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8c15d2d5e0b194cced9c9db26fd1235::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8c15d2d5e0b194cced9c9db26fd1235::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
