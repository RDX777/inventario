<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Local;

class monitor extends Model
{
    use HasFactory;

    protected $table = 'monitors';

    public function local()
    {
        return $this->belongsToMany(Local::class, 'monitor_local')->withPivot(['start_date', 'end_date']);
    }
}


