<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e270015e4b5aa33d5bb8c3d3eb6f4b8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e270015e4b5aa33d5bb8c3d3eb6f4b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e270015e4b5aa33d5bb8c3d3eb6f4b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e270015e4b5aa33d5bb8c3d3eb6f4b8::$classMap;

        }, null, ClassLoader::class);
    }
}