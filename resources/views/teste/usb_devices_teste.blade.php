<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Mostra dados de um disposivo USB e onde ele esta</h1>

    <h3>USB Device</h3>

    @isset($usb_device)

        <ul>
            <li><b>Chave unica (qrcode): </b> {{$usb_device['uuid']}}</li>
            <li><b>Descrição: </b> {{$usb_device->description}}</li>
            <li><b>Fabricante: </b>  {{$usb_device->manufacturer_name}}</li>
            <li><b>Modelo: </b>  {{$usb_device->model}}</li>
            <li><b>Serial: </b>  {{$usb_device->serial_number}}</li>
        </ul>

        <h3>Local</h3>

        @foreach ($usb_device->local as $local)

            <ul>
                <li><b>Local:</b> {{$local->location_name}}</li>
                <li><b>Andar:</b> {{$local->floor}}</li>
                <li><b>Instalado em:</b> {{$local->pivot->start_date}}</li>
                <li><b>Retirado em:</b> {{$local->pivot->end_date}}</li>

            </ul>

        @endforeach


        
    @endisset

    
</body>
</html>