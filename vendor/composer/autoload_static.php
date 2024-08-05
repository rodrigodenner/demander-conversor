<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Class\\RealConverter' => __DIR__ . '/../..' . '/App/Class/RealConverter.php',
        'App\\Class\\RomanConverter' => __DIR__ . '/../..' . '/App/Class/RomanConverter.php',
        'App\\Factories\\ConverterFactory' => __DIR__ . '/../..' . '/App/Factories/ConverterFactory.php',
        'App\\Interfaces\\NumberConverterInterface' => __DIR__ . '/../..' . '/App/Interfaces/NumberConverterInterface.php',
        'App\\Utils\\RomanMap' => __DIR__ . '/../..' . '/App/Utils/RomanMap.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}