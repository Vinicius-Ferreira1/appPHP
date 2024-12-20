<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa1741ae510f411fb6483d4f2c647d6a
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

        spl_autoload_register(array('ComposerAutoloaderInitaa1741ae510f411fb6483d4f2c647d6a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa1741ae510f411fb6483d4f2c647d6a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa1741ae510f411fb6483d4f2c647d6a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
