<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Local;

class computer extends Model
{
    use HasFactory;

    protected $table = 'computers';

    public function local()
    {
        return $this->belongsToMany(Local::class)->withPivot(['start_date', 'end_date']);
    }
}
