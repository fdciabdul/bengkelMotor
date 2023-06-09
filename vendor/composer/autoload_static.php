<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d8915dd075a12f903f732d95bd8bf9e
{
    public static $files = array (
        '5d9c5be1aa1fbc12016e2c5bd16bbc70' => __DIR__ . '/..' . '/dusank/knapsack/src/collection_functions.php',
        'e5fde315a98ded36f9b25eb160f6c9fc' => __DIR__ . '/..' . '/dusank/knapsack/src/utility_functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WhichBrowser\\' => 13,
        ),
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'S' => 
        array (
            'Simplon\\Mysql\\' => 14,
            'Simplon\\Helper\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'D' => 
        array (
            'DusanKasan\\Knapsack\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/whichbrowser/parser/src',
            1 => __DIR__ . '/..' . '/whichbrowser/parser/tests/src',
        ),
        'Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/test',
        ),
        'Simplon\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/src',
        ),
        'Simplon\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/helper/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'DusanKasan\\Knapsack\\' => 
        array (
            0 => __DIR__ . '/..' . '/dusank/knapsack/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d8915dd075a12f903f732d95bd8bf9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d8915dd075a12f903f732d95bd8bf9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d8915dd075a12f903f732d95bd8bf9e::$classMap;

        }, null, ClassLoader::class);
    }
}
