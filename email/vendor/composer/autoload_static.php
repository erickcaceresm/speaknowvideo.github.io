<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit781f0b65e9ccbafb055688fc6002a47f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit781f0b65e9ccbafb055688fc6002a47f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit781f0b65e9ccbafb055688fc6002a47f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit781f0b65e9ccbafb055688fc6002a47f::$classMap;

        }, null, ClassLoader::class);
    }
}
