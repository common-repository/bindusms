<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77fd25d6d21ca34e03395a820da4dcb1
{
    public static $files = array(
        'd38ab950b7e96769779cc0f9076aef2a' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array(
        'S' =>
        array(
            'BinduSms\\BinduSms\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array(
        'BinduSms\\BinduSms\\' =>
        array(
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'BinduSms\\BinduSms\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'BinduSms\\BinduSms\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php',
        'BinduSms\\BinduSms\\Admin\\WCOrderNotification' => __DIR__ . '/../..' . '/includes/Admin/WCOrderNotification.php',
        'BinduSms\\BinduSms\\Installer' => __DIR__ . '/../..' . '/includes/Installer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77fd25d6d21ca34e03395a820da4dcb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77fd25d6d21ca34e03395a820da4dcb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77fd25d6d21ca34e03395a820da4dcb1::$classMap;
        }, null, ClassLoader::class);
    }
}
