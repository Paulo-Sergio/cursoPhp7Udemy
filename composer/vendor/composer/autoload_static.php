<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit194aad8368bd75af7debee6077a61156
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit194aad8368bd75af7debee6077a61156::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
