<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit816b1a5a8703ad7c9a4b81458caeb589
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit816b1a5a8703ad7c9a4b81458caeb589::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit816b1a5a8703ad7c9a4b81458caeb589::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit816b1a5a8703ad7c9a4b81458caeb589::$classMap;

        }, null, ClassLoader::class);
    }
}
