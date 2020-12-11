<?php

namespace cylab\hello;

/**
 * A quick and dirty counter. Don't use for a real app!
 */
class VisitorsCounter
{
    private static $FILE = __DIR__ . "/db.json";

    public static function inc()
    {
         $count = self::total();
         $count = $count + 1;
         self::set("visitors", $count);
    }


    public static function total() : int
    {
         return self::get("visitors");
    }

    private static function get(string $key)
    {
         $data = @json_decode(file_get_contents(self::$FILE), true);

        if (isset($data[$key])) {
            return $data[$key];
        }

         return 0;
    }

    private static function set(string $key, $value)
    {
        $data = [];
        try {
             $data = json_decode(file_get_contents(self::$FILE), true);
        } catch (\Exception $ex) {
        }

         $data[$key] = $value;
         file_put_contents(self::$FILE, json_encode($data));
    }

    public static function reset()
    {
        if (is_file(self::$FILE)) {
            unlink(self::$FILE);
        }
    }
}
