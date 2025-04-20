<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected $primaryKey = 'id';

    public function countries()
{
    return $this->hasMany(Country::class, 'region_id');
}

}
