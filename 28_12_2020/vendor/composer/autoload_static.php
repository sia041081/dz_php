<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16a0f87e85e86e1cf570e43109164adb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16a0f87e85e86e1cf570e43109164adb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16a0f87e85e86e1cf570e43109164adb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16a0f87e85e86e1cf570e43109164adb::$classMap;

        }, null, ClassLoader::class);
    }
}