<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit461e6a61d1ab6aeceaa09e9815fc89d0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit461e6a61d1ab6aeceaa09e9815fc89d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit461e6a61d1ab6aeceaa09e9815fc89d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit461e6a61d1ab6aeceaa09e9815fc89d0::$classMap;

        }, null, ClassLoader::class);
    }
}
