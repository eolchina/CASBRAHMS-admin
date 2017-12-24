<?php

namespace App\Models\World;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'world_city';

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class, 'countryCode', 'code');
    }

    public static function options($id)
    {
        return static::where('id', $id)->get()->map(function ($city) {

            return [$city->id => $city->name];

        })->flatten();
    }
}
