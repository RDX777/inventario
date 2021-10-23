<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Local;
use App\Models\Computer;
use App\Models\Monitor;
use App\Models\Usb_Device;


class TesteController extends Controller
{
    public function show_local(Request $request)
    {
        $local = Local::where('id', request('id'))->first();
        $computers = Local::with('computers')->where('id', request('id'))->first();
        $monitors = Local::with('monitors')->where('id', request('id'))->first();
        $usb_devices = Local::with('usb_devices')->where('id', request('id'))->first();

        //dd($itens);

        return view("teste.locals_teste", compact('local', 'computers', 'monitors', 'usb_devices'));
    }

    public function show_computer(Request $request)
    {


        $computer = Computer::with('local')->where('id', request('id'))->first();

        //dd($itens);

        return view("teste.computers_teste", compact('computer'));

    }

    public function show_monitor(Request $request)
    {


        $monitor = Monitor::with('local')->where('id', request('id'))->first();

        //dd($monitor);

        return view("teste.monitors_teste", compact('monitor'));

    }

    
    public function show_usb_device(Request $request)
    {


        $usb_device = Usb_Device::with('local')->where('id', request('id'))->first();

        //dd($monitor);

        return view("teste.usb_devices_teste", compact('usb_device'));

    }
}
