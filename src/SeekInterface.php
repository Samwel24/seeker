<?php

namespace Dreamaker\Seeker;

interface SeekInterface
{

    public static function accessible($value);

    public static function add(&$array, $key, $value);

    public static function set(&$array, $key, $value);

    public static function exists($array, $key);

    public static function has($array, $keys);

    public static function get($array, $key, $default = null);

}
