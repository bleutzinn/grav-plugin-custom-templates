<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfa9c248f48ad2c17f64a1b619c06af2
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\CustomTemplates\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\CustomTemplates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Grav\\Plugin\\CustomTemplatesPlugin' => __DIR__ . '/../..' . '/custom-templates.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfa9c248f48ad2c17f64a1b619c06af2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfa9c248f48ad2c17f64a1b619c06af2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfa9c248f48ad2c17f64a1b619c06af2::$classMap;

        }, null, ClassLoader::class);
    }
}
