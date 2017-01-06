<?php

namespace GDMobile\Deppenapostroph;

/**
 * Deppenapostroph provides easy functionality to check the usage of genitive
 * for names in german language.
 */
class Deppenapostroph
{
    private static $indicators = [
        's',
        'ß',
        'z',
        'x'
    ];

    /**
     * Returns true if the string needs only an apostrophe at the end.
     *
     * @param $string
     * @return bool
     */
    public static function needsApostropheOnly($string)
    {
        if (!is_string($string)) {
            return false;
        }

        $string = strtolower($string);

        if (in_array(substr($string, -1, 1), self::$indicators)) {
            return true;
        }

        return false;
    }

    /**
     * Returns the transformed string.
     *
     * @param $string
     * @return string
     */
    public static function transform($string)
    {
        if (self::needsApostropheOnly($string)) {
            return sprintf("%s'", $string);
        } else {
            return sprintf("%ss", $string);
        }
    }
}
