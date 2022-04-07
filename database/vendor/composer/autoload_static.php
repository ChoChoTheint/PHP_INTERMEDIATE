<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fcfd3cd6eefbe3672fc7bffe67dcd58
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\database\\DBGen' => __DIR__ . '/../..' . '/app/database/DBGen.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fcfd3cd6eefbe3672fc7bffe67dcd58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fcfd3cd6eefbe3672fc7bffe67dcd58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fcfd3cd6eefbe3672fc7bffe67dcd58::$classMap;

        }, null, ClassLoader::class);
    }
}