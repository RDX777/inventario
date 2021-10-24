<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Local;
use App\Models\Image;

class computer extends Model
{
    use HasFactory;

    protected $table = 'computers';

    public function local()
    {
        return $this->belongsToMany(Local::class)->withPivot(['start_date', 'end_date']);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class)->withPivot(['start_date', 'end_date']);
    }
}
