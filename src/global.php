<?php

if (!function_exists('text')) {
    /**
     * @param $text
     *
     * @return \Myerscode\Utilities\Strings\Utility
     */
    function text($text)
    {
        return new \Myerscode\Utilities\Strings\Utility($text);
    }
}

if (!function_exists('number')) {
    /**
     * @param $number
     *
     * @return \Myerscode\Utilities\Numbers\Utility
     */
    function number($number)
    {
        return new \Myerscode\Utilities\Numbers\Utility($number);
    }
}

if (!function_exists('bag')) {
    /**
     * @param $bag
     *
     * @return \Myerscode\Utilities\Bags\Utility
     */
    function bag($bag)
    {
        return new \Myerscode\Utilities\Bags\Utility($bag);
    }
}

if (!function_exists('web')) {
    /**
     * @param string $url
     *
     * @return \Myerscode\Utilities\Web\Utility
     */
    function web($url)
    {
        return new \Myerscode\Utilities\Web\Utility($url);
    }
}
