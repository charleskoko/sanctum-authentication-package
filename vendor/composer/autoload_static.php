<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b0dedeb587ec76a1e556eb440b71ddc
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Charleskoko\\SanctumAuthentication\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Charleskoko\\SanctumAuthentication\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b0dedeb587ec76a1e556eb440b71ddc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b0dedeb587ec76a1e556eb440b71ddc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b0dedeb587ec76a1e556eb440b71ddc::$classMap;

        }, null, ClassLoader::class);
    }
}
