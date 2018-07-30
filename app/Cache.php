<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    /**
     * Table of model
     * @var string
     */
    protected $table = 'cache';

    /**
     * Define if the table uses timestamps
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Define name of cached value that stores all another cached values
     * @var string
     */
    const PAGINA_COMPLETA = 'pagina_completa';

    /**
     * Sets the name of the primary key on the table
     * @var string
     */
    public $primaryKey = 'key';

    /**
     * Gets all cached values
     * @return stdClass Caches
     */
    public function getAllCache()
    {
        $Cache = clone ($this);
        $pagina_completa = $Cache->find(self::PAGINA_COMPLETA);
        if (count($pagina_completa) > 0) {
            $pagina_completa = json_decode($pagina_completa->value);
            if ($pagina_completa != new \stdClass()) {
                return $pagina_completa;
            }
        }
        $caches = $this->get();

        $cache = new \stdClass();
        foreach ($caches as $key => $value) {
            $key_object = is_numeric($value->key) ? $value->attributes['key'] : $value->key;
            if ($key_object == self::PAGINA_COMPLETA) {
                continue;
            }
            $cache->{$key_object} = $value->value;
        }
        $this->saveCache(self::PAGINA_COMPLETA, json_encode($cache));
        return $cache;
    }

    /**
     * Save a cache value
     * @param  String $key   Key of the cache
     * @param  String $value Value of the cache
     */
    public function saveCache($key, $value)
    {
        $Cache = clone ($this);
        $cache = $Cache->where('key', '=', $key)->get();
        if ($key != self::PAGINA_COMPLETA) {
            $CacheDelete = clone ($this);
            $CacheDelete->destroy(self::PAGINA_COMPLETA);
        }
        if (count($cache) > 0) {
            $Cache->where('key', '=', $key)
                ->update(['value' => $value]);
        } else {
            $Cache->key = $key;
            $Cache->value = $value;
            $Cache->expiration = 0;
            $Cache->save();
        }
    }
}
