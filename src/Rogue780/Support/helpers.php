<?php

if (!function_exists('kilometers_to_miles')) {
    /**
     * Converts kilometers to miles.
     *
     * @param  float  $value
     * @return float
     */
    function kilometers_to_miles($value)
    {
        return (float)bcmul($value, 0.621371);
    }
}

if (!function_exists('kilometers_to_nautical_miles')) {
    /**
     * Converts kilometers to nautical miles.
     *
     * @param  float  $value
     * @return float
     */
    function kilometers_to_nautical_miles($value)
    {
        return (float)bcmul($value, 0.539957);
    }
}

if (!function_exists('kilometers_to_meters')) {
    /**
     * Converts kilometers to meters.
     *
     * @param  float  $value
     * @return float
     */
    function kilometers_to_meters($value)
    {
        return (float)bcmul($value, 1000);
    }
}

if (!function_exists('kilometers_to_feet')) {
    /**
     * Converts kilometers to feet.
     *
     * @param  float  $value
     * @return float
     */
    function kilometers_to_feet($value)
    {
        return (float)bcmul($value, 3280.84);
    }
}

if (!function_exists('miles_to_kilometers')) {
    /**
     * Converts miles to kilometers.
     *
     * @param  float  $value
     * @return float
     */
    function miles_to_kilometers($value)
    {
        return (float)bcmul($value,1.60934);
    }
}

if (!function_exists('miles_to_nautical_miles')) {
    /**
     * Converts miles to nautical miles.
     *
     * @param  float  $value
     * @return float
     */
    function miles_to_nautical_miles($value)
    {
        return (float)bcmul($value, 0.868976);
    }
}

if (!function_exists('miles_to_meters')) {
    /**
     * Converts miles to meters.
     *
     * @param  float  $value
     * @return float
     */
    function miles_to_miles($value)
    {
        return (float)bcmul($value,1609.34);
    }
}

if (!function_exists('miles_to_feet')) {
    /**
     * Converts miles to feet.
     *
     * @param  float  $value
     * @return float
     */
    function miles_to_feet($value)
    {
        return (float)bcmul($value, 5280);
    }
}

if (!function_exists('nautical_miles_to_kilometers')) {
    /**
     * Converts nautical miles to kilometers.
     *
     * @param  float  $value
     * @return float
     */
    function nautical_miles_to_kilometers($value)
    {
        return (float)bcmul($value,1.852);
    }
}

if (!function_exists('nautical_miles_to_miles')) {
    /**
     * Converts nautical miles to miles.
     *
     * @param  float  $value
     * @return float
     */
    function miles_to_nautical_miles($value)
    {
        return (float)bcmul($value, 1.15078);
    }
}

if (!function_exists('nautical_miles_to_meters')) {
    /**
     * Converts nautical miles to meters.
     *
     * @param  float  $value
     * @return float
     */
    function nautical_miles_to_miles($value)
    {
        return (float)bcmul($value,1852);
    }
}

if (!function_exists('nautical_miles_to_feet')) {
    /**
     * Converts nautical miles to feet.
     *
     * @param  float  $value
     * @return float
     */
    function nautical_miles_to_feet($value)
    {
        return (float)bcmul($value, 6076.12);
    }
}

if (!function_exists('meters_to_miles')) {
    /**
     * Converts meters to miles.
     *
     * @param  float  $value
     * @return float
     */
    function meters_to_miles($value)
    {
        return (float)bcmul($value, 0.000621371);
    }
}

if (!function_exists('meters_to_nautical_miles')) {
    /**
     * Converts meters to nautical miles.
     *
     * @param  float  $value
     * @return float
     */
    function meters_to_nautical_miles($value)
    {
        return (float)bcmul($value, 0.000539957);
    }
}

if (!function_exists('meters_to_kilometers')) {
    /**
     * Converts meters to kilometers.
     *
     * @param  float  $value
     * @return float
     */
    function meters_to_kilometers($value)
    {
        return (float)bcmul($value, 0.001);
    }
}

if (!function_exists('meters_to_feet')) {
    /**
     * Converts meters to feet.
     *
     * @param  float  $value
     * @return float
     */
    function meters_to_feet($value)
    {
        return (float)bcmul($value, 3.28084);
    }
}

if (!function_exists('feet_to_miles')) {
    /**
     * Converts feet to miles.
     *
     * @param  float  $value
     * @return float
     */
    function feet_to_miles($value)
    {
        return (float)bcmul($value, 0.000189394);
    }
}

if (!function_exists('feet_to_nautical_miles')) {
    /**
     * Converts feet to nautical miles.
     *
     * @param  float  $value
     * @return float
     */
    function feet_to_nautical_miles($value)
    {
        return (float)bcmul($value, 0.000164579);
    }
}

if (!function_exists('feet_to_kilometers')) {
    /**
     * Converts feet to kilofeet.
     *
     * @param  float  $value
     * @return float
     */
    function feet_to_kilometers($value)
    {
        return (float)bcmul($value, 0.0003048);
    }
}

if (!function_exists('feet_to_meters')) {
    /**
     * Converts feet to meters.
     *
     * @param  float  $value
     * @return float
     */
    function feet_to_meters($value)
    {
        return (float)bcmul($value, 0.3048);
    }
}