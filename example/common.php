<?php
define('TEST_CONSTANT_WITH_VALUE_42', 42);

function someFunc($a) {
    return abs($a * 42);
}

class Example {
    const STATIC_DO_SMTH_RESULT = 42;
    const DYNAMIC_DO_SMTH_RESULT = 84;

    public static function doSmthStatic()
    {
        return self::STATIC_DO_SMTH_RESULT;
    }

    public function doSmthDynamic()
    {
        return self::DYNAMIC_DO_SMTH_RESULT;
    }

    public function bad_mock($some_var, $params = [])
    {
        return $params['key'];
    }
}

