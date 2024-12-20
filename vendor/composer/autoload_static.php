<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa053a976f66457c0d5e5e2e2e9eb74b
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'laravel\\frontend-template\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'laravel\\frontend-template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa053a976f66457c0d5e5e2e2e9eb74b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa053a976f66457c0d5e5e2e2e9eb74b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa053a976f66457c0d5e5e2e2e9eb74b::$classMap;

        }, null, ClassLoader::class);
    }
}
