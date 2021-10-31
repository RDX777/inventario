<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computers';

    public function locals()
    {
        return $this->belongsToMany(Local::class)->withPivot(['start_date', 'end_date']);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class)->withPivot(['start_date', 'end_date']);
    }

    public function softwares()
    {
        return $this->belongsToMany(Software::class)->withPivot(['start_date', 'end_date']);
    }
}
