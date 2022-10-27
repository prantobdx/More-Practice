<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit29f8c8e43355fa49de542954fda33746
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

        spl_autoload_register(array('ComposerAutoloaderInit29f8c8e43355fa49de542954fda33746', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit29f8c8e43355fa49de542954fda33746', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit29f8c8e43355fa49de542954fda33746::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
