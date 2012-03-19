<?php
namespace Alpaca;

class Alpaca
{
    public static $drivers = array();

    /**
     * register driver
     *
     * @static
     * @param string $driver_class_name
     * @throws \Exception
     */
    public static function registerDriver($driver_class_name)
    {
        if (!in_array($driver_class_name, self::$drivers)) {
            self::$drivers[] = $driver_class_name;
        } else {
            throw new \Exception("the {$driver_class_name} has already registered");
        }
    }

    /**
     * @static
     * @param $driver_class_name
     * @return mixed
     * @throws \Exception
     */
    public static function getDriver($driver_class_name)
    {
        if (($key = array_search($driver_class_name, self::$drivers)) !== false) {
            $classname = self::$drivers[$key];
            return new $classname();
        } else {
            throw new \Exception("the {$driver_class_name} hasn't registered yet");
        }
    }

    /**
     * @static
     * @return array driver names array
     */
    public static function getDrivers()
    {
        return self::$drivers;
    }
}