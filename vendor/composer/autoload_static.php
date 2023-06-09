<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf179be33fb1056f710478da60a49569f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf179be33fb1056f710478da60a49569f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf179be33fb1056f710478da60a49569f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf179be33fb1056f710478da60a49569f::$classMap;

        }, null, ClassLoader::class);
    }
}
