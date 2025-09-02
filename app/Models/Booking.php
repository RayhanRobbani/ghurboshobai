<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\User;
use App\Models\Cruise;
use App\Models\Resort;
use App\Models\Transportation;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function tour()
    {
        return $this->BelongsTo(Tour::class);
    }

    public function resort()
    {
        return $this->BelongsTo(Resort::class);
    }

    public function cruise()
    {
        return $this->BelongsTo(Cruise::class);
    }

    public function transportation()
    {
        return $this->BelongsTo(Transportation::class);
    }
}
