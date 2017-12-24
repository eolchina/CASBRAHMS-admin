<?php

namespace App\Models\World;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $table = 'world_country';

    public $timestamps = false;

    public static $continents = ['Asia','Europe','North America','Africa','Oceania','Antarctica','South America'];

    public function city()
    {
        return $this->belongsTo(City::class, 'capital', 'id');
    }

    public static function options($id)
    {
        return static::where('code', $id)->get()->map(function ($country) {

            return [$country->code => $country->name];

        })->flatten();
    }
}
