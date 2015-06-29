<?php

if (!function_exists('kilometers_to_miles')) {
    /**
     * Converts kilometers to miles.
     *
     * @param  float  $value
     * @return float
     */
    function kilometers_to_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function kilometers_to_nautical_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function kilometers_to_meters($value, $scale = 6)
    {
        bcscale($scale);
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
    function kilometers_to_feet($value, $scale = 6)
    {
        bcscale($scale);
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
    function miles_to_kilometers($value, $scale = 6)
    {
        bcscale($scale);
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
    function miles_to_nautical_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function miles_to_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function miles_to_feet($value, $scale = 6)
    {
        bcscale($scale);
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
    function nautical_miles_to_kilometers($value, $scale = 6)
    {
        bcscale($scale);
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
    function nautical_miles_to_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function nautical_miles_to_meters($value, $scale = 6)
    {
        bcscale($scale);
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
    function nautical_miles_to_feet($value, $scale = 6)
    {
        bcscale($scale);
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
    function meters_to_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function meters_to_nautical_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function meters_to_kilometers($value, $scale = 6)
    {
        bcscale($scale);
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
    function meters_to_feet($value, $scale = 6)
    {
        bcscale($scale);
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
    function feet_to_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function feet_to_nautical_miles($value, $scale = 6)
    {
        bcscale($scale);
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
    function feet_to_kilometers($value, $scale = 6)
    {
        bcscale($scale);
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
    function feet_to_meters($value, $scale = 6)
    {
        bcscale($scale);
        return (float)bcmul($value, 0.3048);
    }
}

if (!function_exists('distance_in_kilometers')) {
    /**
     * Provides the approximate distance in kilometers between two points.
     *
     * @param $lat1
     * @param $lat2
     * @param $long1
     * @param $long2
     * @return float
     */
    function distance_in_kilometers($lat1, $lat2, $long1, $long2, $scale = 6)
    {
        bcscale($scale);
        $r = 6371; //kilometers
        $rlat1 = deg2rad($lat1);
        $rlat2 = deg2rad($lat2);
        $rdlat = deg2rad($lat2 - $lat1);
        $rdlong = deg2rad($long2 - $long1);

        $a = sin(bcdiv($rdlat, 2)) * sin(bcdiv($rdlat, 2)) + cos($rlat1) * cos($rlat2) * sin(bcdiv($rdlong, 2)) * sin(bcdiv($rdlong, 2));
        $c = bcmul(2, atan2(bcsqrt($a), bcsqrt(1-$a)));
        return (float)($r * $c);
    }
}

if (!function_exists('distance_in_meters')) {
    /**
     * Provides the approximate distance in meters between two points.
     *
     * @param $lat1
     * @param $lat2
     * @param $long1
     * @param $long2
     * @return float
     */
    function distance_in_meters($lat1, $lat2, $long1, $long2, $scale = 6)
    {
        bcscale($scale);
        $r = 6371000; //meters
        $rlat1 = deg2rad($lat1);
        $rlat2 = deg2rad($lat2);
        $rdlat = deg2rad($lat2 - $lat1);
        $rdlong = deg2rad($long2 - $long1);

        $a = sin(bcdiv($rdlat, 2)) * sin(bcdiv($rdlat, 2)) + cos($rlat1) * cos($rlat2) * sin(bcdiv($rdlong, 2)) * sin(bcdiv($rdlong, 2));
        $c = bcmul(2, atan2(bcsqrt($a), bcsqrt(1-$a)));
        return (float)($r * $c);
    }
}

if (!function_exists('distance_in_miles')) {
    /**
     * Provides the approximate distance in miles between two points.
     *
     * @param $lat1
     * @param $lat2
     * @param $long1
     * @param $long2
     * @return float
     */
    function distance_in_miles($lat1, $lat2, $long1, $long2, $scale = 6)
    {
        bcscale($scale);
        $r = 3959; //miles
        $rlat1 = deg2rad($lat1);
        $rlat2 = deg2rad($lat2);
        $rdlat = deg2rad($lat2 - $lat1);
        $rdlong = deg2rad($long2 - $long1);

        $a = sin(bcdiv($rdlat, 2)) * sin(bcdiv($rdlat, 2)) + cos($rlat1) * cos($rlat2) * sin(bcdiv($rdlong, 2)) * sin(bcdiv($rdlong, 2));
        $c = bcmul(2, atan2(bcsqrt($a), bcsqrt(1-$a)));
        return (float)($r * $c);
    }
}

if (!function_exists('distance_in_nautical_miles')) {
    /**
     * Provides the approximate distance in nautical_miles between two points.
     *
     * @param $lat1
     * @param $lat2
     * @param $long1
     * @param $long2
     * @return float
     */
    function distance_in_nautical_miles($lat1, $lat2, $long1, $long2, $scale = 6)
    {
        bcscale($scale);
        $r = 3440.06479; //nautical_miles
        $rlat1 = deg2rad($lat1);
        $rlat2 = deg2rad($lat2);
        $rdlat = deg2rad($lat2 - $lat1);
        $rdlong = deg2rad($long2 - $long1);

        $a = sin(bcdiv($rdlat, 2)) * sin(bcdiv($rdlat, 2)) + cos($rlat1) * cos($rlat2) * sin(bcdiv($rdlong, 2)) * sin(bcdiv($rdlong, 2));
        $c = bcmul(2, atan2(bcsqrt($a), bcsqrt(1-$a)));
        return (float)($r * $c);
    }
}

if (!function_exists('distance_in_feet')) {
    /**
     * Provides the approximate distance in feet between two points.
     *
     * @param $lat1
     * @param $lat2
     * @param $long1
     * @param $long2
     * @return float
     */
    function distance_in_feet($lat1, $lat2, $long1, $long2, $scale = 6)
    {
        bcscale($scale);
        $r = 20902231; //feet
        $rlat1 = deg2rad($lat1);
        $rlat2 = deg2rad($lat2);
        $rdlat = deg2rad($lat2 - $lat1);
        $rdlong = deg2rad($long2 - $long1);

        $a = sin(bcdiv($rdlat, 2)) * sin(bcdiv($rdlat, 2)) + cos($rlat1) * cos($rlat2) * sin(bcdiv($rdlong, 2)) * sin(bcdiv($rdlong, 2));
        $c = bcmul(2, atan2(bcsqrt($a), bcsqrt(1-$a)));
        return (float)($r * $c);
    }
}
