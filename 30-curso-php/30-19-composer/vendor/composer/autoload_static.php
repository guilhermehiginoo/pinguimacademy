<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd598e4c720ed146a6a56c6aa85a5cf45
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pinguimacademy\\CursoPhpBasico\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pinguimacademy\\CursoPhpBasico\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd598e4c720ed146a6a56c6aa85a5cf45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd598e4c720ed146a6a56c6aa85a5cf45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd598e4c720ed146a6a56c6aa85a5cf45::$classMap;

        }, null, ClassLoader::class);
    }
}
