<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Local;
use App\Models\Computer;
use App\Models\Monitor;
use App\Models\Usb_Device;
use App\Models\Image;

use Illuminate\Database\Eloquent\ModelNotFoundException;

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


        $computer = Computer::with('locals')
            ->with(['images' => function ($query){
                $query->select(['file_name',
                    'file_extension'
                ]);
            }])
            ->with('softwares')
            ->where('id', request('id'))
            ->first();

        //dd($computer);

        return view("teste.computers_teste", compact('computer'));

    }

    public function find_computer_api(Request $request)
    {

        //busca pelo computador
        $computer = Computer::with('locals')
        ->with(['images' => function ($query){
            $query->select(['images.id',
                'file_name',
                'file_extension'
            ]);
        }])
        ->with('softwares')
        ->where('id', request('id'))
        ->first()
        ->toArray();

        //manipula dados das imagens
        $images = array();
        foreach ($computer['images'] as $image) {

            $aimage = array(
                'id' => $image['id'],
                'file_name' => $image['file_name'],
                'file_extension' => $image['file_extension'],
                'url_image' => route('image.getImage', $image['id']),
                'start_date' => $image['pivot']['start_date'],
                'end_date' => $image['pivot']['end_date']
            );

            array_push($images, $aimage);
            unset($aimage);
        }
        unset($computer['images']);
        $computer = array_merge($computer, array('images' => $images));
        unset($images);


        //manipula dados do local
        $locals = array();
        foreach ($computer['locals'] as $local) {

            $alocal = array(
                'floor' => $local['floor'],
                'location_name' => $local['location_name'],
                'observations' => $local['observations'],
                'start_date' => $local['pivot']['start_date'],
                'end_date' => $local['pivot']['end_date']
            );

            array_push($locals, $alocal);
            unset($alocal);
        }
        unset($computer['locals']);
        $computer = array_merge($computer, array('locals' => $locals));
        unset($locals);


        //manipula dados do local
        $softwares = array();
        foreach ($computer['softwares'] as $software) {

            $asoftware = array(
                'manufacturer_name' => $software['manufacturer_name'],
                'name' => $software['name'],
                'version' => $software['version'],
                'description' => $software['description'],
                'type' => $software['type'],
                'start_date' => $software['pivot']['start_date'],
                'end_date' => $software['pivot']['end_date']
            );

            array_push($softwares, $asoftware);
            unset($asoftware);
        }
        unset($computer['softwares']);
        $computer = array_merge($computer, array('softwares' => $softwares));
        unset($softwares);

       return response()
            ->json($computer, 200)
            ->setEncodingOptions(JSON_UNESCAPED_SLASHES)
            ->header('Content-Type', 'application/json');

    }


    public function find_image_api(Request $request)
    {
        try
        {
            $image = Image::where('id', request('id'))->firstOrFail();
        }
        catch(ModelNotFoundException $e)
        {
            $image = Image::where('id', 0)->first();
        }

        return response($image->data, 200)->header('Content-Type', 'image/jpeg');

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
