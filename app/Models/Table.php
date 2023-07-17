<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\TableStatus;
use App\Enums\TableLocation;
use App\models\Reservation;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','guest_number','location','status'
    ];
    protected $casts=[
        'status'=>TableStatus::class,
        'location'=>TableLocation::class,

    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
