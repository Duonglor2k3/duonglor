<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cab9202fab3dc9771dac3e4e0463a91
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6cab9202fab3dc9771dac3e4e0463a91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6cab9202fab3dc9771dac3e4e0463a91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6cab9202fab3dc9771dac3e4e0463a91::$classMap;

        }, null, ClassLoader::class);
    }
}