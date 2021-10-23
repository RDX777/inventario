<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Computer;
use App\Models\Monitor;
use App\Models\Usb_Device;


class local extends Model
{
    use HasFactory;

    //protected $table = 'locals';

    public function computers()
    {
        return $this->belongsToMany(Computer::class, 'computer_local')->withPivot(['start_date', 'end_date']);
    }

    public function monitors()
    {
        return $this->belongsToMany(Monitor::class, 'monitor_local')->withPivot(['start_date', 'end_date']);
    }

    public function usb_devices()
    {
        return $this->belongsToMany(Usb_Device::class, 'usb_device_local')->withPivot(['start_date', 'end_date']);
    }

}
