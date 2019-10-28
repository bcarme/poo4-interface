<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf942afbd802c958b712ba3aaf060ada
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf942afbd802c958b712ba3aaf060ada::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf942afbd802c958b712ba3aaf060ada::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
