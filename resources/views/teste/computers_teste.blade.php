<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Mostra dados do computador e onde ele esta</h1>

    <h3>Computador</h3>

    @isset($computer)

        <ul>
            <li><b>Chave unica (qrcode): </b> {{$computer['uuid']}}</li>
            <li><b>Processador:</b> {{$computer['processor']}}</li>
            <li><b>Quantidade memoria:</b>  {{$computer['memory_size']}}</li>
            <li><b>Placa de Video:</b>  {{$computer['video']}}</li>
            <li><b>Quantidade memoria de video:</b>  {{$computer['video_size']}}</li>
            <li><b>Tamanho HD:</b>  {{$computer['hard_disk_size']}}</li>
            <li><b>Sistema Operacional:</b>  {{$computer['so_id']}}</li>
            <li><b>Fabricante:</b>  {{$computer['manufacturer_name']}}</li>
            <li><b>Codigo de barra:</b> 
                @php
                    $barcode = vsprintf("%'.012d", $computer['id']);
                    echo DNS1D::getBarcodeHTML($barcode, 'C39+', 3, 33,'black', true);
                @endphp
            </li>
            <li><b>QR Code:</b> 
                @php
                    $barcode = vsprintf("%'.012d", $computer['id']);
                    echo DNS2D::getBarcodeHTML($barcode, 'QRCODE');
                @endphp
            </li>

        </ul>

        <h3>Local</h3>

        @foreach ($computer->local as $local)

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