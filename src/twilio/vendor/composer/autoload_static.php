<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a79585f23e26f2db763f21d60838186
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a79585f23e26f2db763f21d60838186::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a79585f23e26f2db763f21d60838186::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
