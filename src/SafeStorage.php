<?php
/**
 * Inspired by flysystem <https://github.com/thephpleague/flysystem/blob/master/src/SafeStorage.php>
 */

namespace Hail\Util;

final class SafeStorage
{
    /**
     * @var string
     */
    private $hash;

    /**
     * @var array
     */
    private static $storage = [];

    public function __construct()
    {
        $this->hash = \spl_object_hash($this);
        self::$storage[$this->hash] = [];
    }

    public function set(string $key, $value): void
    {
        self::$storage[$this->hash][$key] = $value;
    }

    public function get(string $key)
    {
        return self::$storage[$this->hash][$key] ?? null;
    }

    public function __destruct()
    {
        unset(self::$storage[$this->hash]);
    }
}
