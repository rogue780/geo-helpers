#GEO-HELPERS

This is a set of basic functions that converts between meters, kilometers, feet, miles, and nautical miles. It can also measure distance between two coordinates in decimal lat/long format and provide the distance in meters, kilometers, feet, miles, and nautical miles.

The convention for unit conversions is ```units_to_other_units($distance_in_units);``` e.g: ```miles_to_kilometers(1000);``` should return ```1609.34```.

The convention for distance measuring is ```distance_in_units($lat1, $lat2, $long1, $long2)```;