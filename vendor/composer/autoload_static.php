<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6e118f99c6345649739a3571d99fd08
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6e118f99c6345649739a3571d99fd08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6e118f99c6345649739a3571d99fd08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6e118f99c6345649739a3571d99fd08::$classMap;

        }, null, ClassLoader::class);
    }
}
