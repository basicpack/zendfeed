<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48c97be5546c9e901de6866a632bcd23
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Feed\\' => 10,
            'Zend\\Escaper\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Feed\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-feed/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48c97be5546c9e901de6866a632bcd23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48c97be5546c9e901de6866a632bcd23::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
