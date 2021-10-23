<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Informa a localização e os itens desta posição</h3>

        @isset($local)

            <b>Local</b>
            <ul>
                <li><b>Chave unica (qrcode): </b> {{$local['uuid']}}</li>
                <li><b>Andar: </b> {{$local->floor}}</li>
                <li><b>Descrição local: </b>  {{$local->location_name}}</li>
                <li><b>Observações: </b> {{$local->observations}}</li>
            </ul>

            <b>Computadores</b>
            <br>

                @foreach ($computers->computers as $computer)
                    <ul>
                        <li><b>Chave unica (qrcode): </b> {{$computer['uuid']}}</li>
                        <li><b>Processador:</b> {{$computer['processor']}}</li>
                        <li><b>Quantidade memoria:</b>  {{$computer['memory_size']}}</li>
                        <li><b>Placa de Video:</b>  {{$computer['video']}}</li>
                        <li><b>Quantidade memoria de video:</b>  {{$computer['video_size']}}</li>
                        <li><b>Tamanho HD:</b>  {{$computer['hard_disk_size']}}</li>
                        <li><b>Fabricante:</b>  {{$computer['manufacturer_name']}}</li>
                    </ul>
                    
                @endforeach

                
            <b>Monitores</b>
            <br>

            @foreach ($monitors->monitors as $monitor)

                <ul>
                    <li><b>Chave unica (qrcode): </b> {{$monitor['uuid']}}</li>
                    <li><b>Fabricante: </b> {{$monitor->manufacturer_name}}</li>
                    <li><b>Polegadas: </b>  {{$monitor->iches}}</li>
                    <li><b>Modelo: </b>  {{$monitor->model}}</li>
                    <li><b>Serial: </b>  {{$monitor->serial_number}}</li>
                </ul>
    
            @endforeach

            <b>Dispositivos usb</b>
            <br>

            @foreach ($usb_devices->usb_devices as $usb_device)

                <ul>
                    <li><b>Chave unica (qrcode): </b> {{$usb_device['uuid']}}</li>
                    <li><b>Descrição: </b> {{$usb_device->description}}</li>
                    <li><b>Fabricante: </b>  {{$usb_device->manufacturer_name}}</li>
                    <li><b>Modelo: </b>  {{$usb_device->model}}</li>
                    <li><b>Serial: </b>  {{$usb_device->serial_number}}</li>
                </ul>

            @endforeach

        @endisset

    
</body>
</html>