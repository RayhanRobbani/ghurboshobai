<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $guarded = ['id'];

    public function location()
    {
        return $this->BelongsTo(Location::class);
    }
}
