<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcff250f710a4aa63b90b2a776b2faafa
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcff250f710a4aa63b90b2a776b2faafa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcff250f710a4aa63b90b2a776b2faafa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}