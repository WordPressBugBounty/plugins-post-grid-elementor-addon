<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ee20fde532aa4daf97d49aa548ba15b
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nilambar\\AdminNotice\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nilambar\\AdminNotice\\' => 
        array (
            0 => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nilambar\\AdminNotice\\Notice' => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src/Notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ee20fde532aa4daf97d49aa548ba15b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ee20fde532aa4daf97d49aa548ba15b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ee20fde532aa4daf97d49aa548ba15b::$classMap;

        }, null, ClassLoader::class);
    }
}
