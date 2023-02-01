<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita9c46bdfee0a7c5d950eac387d257bfd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita9c46bdfee0a7c5d950eac387d257bfd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita9c46bdfee0a7c5d950eac387d257bfd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita9c46bdfee0a7c5d950eac387d257bfd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
