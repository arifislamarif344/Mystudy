<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfab649059b1e2a68b7df36f961e02fcc
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfab649059b1e2a68b7df36f961e02fcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfab649059b1e2a68b7df36f961e02fcc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
