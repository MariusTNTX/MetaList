<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdfe12f4aaaf5a3de8e73a2614bd111cb
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdfe12f4aaaf5a3de8e73a2614bd111cb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdfe12f4aaaf5a3de8e73a2614bd111cb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdfe12f4aaaf5a3de8e73a2614bd111cb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
