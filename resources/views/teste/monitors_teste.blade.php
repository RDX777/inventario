<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Mostra dados do monitor e onde ele esta</h1>

    <h3>Monitor</h3>

    @isset($monitor)

        <ul>
            <li><b>Chave unica (qrcode): </b> {{$monitor->uuid}}</li>
            <li><b>Fabricante: </b> {{$monitor->manufacturer_name}}</li>
            <li><b>Polegadas: </b>  {{$monitor->iches}}</li>
            <li><b>Modelo: </b>  {{$monitor->model}}</li>
            <li><b>Serial: </b>  {{$monitor->serial_number}}</li>
        </ul>

        <h3>Local</h3>

        @foreach ($monitor->local as $local)

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