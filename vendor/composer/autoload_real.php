<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa053a976f66457c0d5e5e2e2e9eb74b
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

        spl_autoload_register(array('ComposerAutoloaderInitaa053a976f66457c0d5e5e2e2e9eb74b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa053a976f66457c0d5e5e2e2e9eb74b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa053a976f66457c0d5e5e2e2e9eb74b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
