<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbe1356e8b4165f5a0825e5a98796728
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
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbe1356e8b4165f5a0825e5a98796728::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbe1356e8b4165f5a0825e5a98796728::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
