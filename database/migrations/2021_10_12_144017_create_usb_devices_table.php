<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsbDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usb_devices', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('description', 255)->nullable();
            $table->string('manufacturer_name', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('serial_number', 255)->nullable();

        });

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'9da19213-7da9-417f-b371-b53e526e0066',
            'description'=>'ASIX AX88179 USB 3.0 para Adaptador Gigabit Ethernet',
            'manufacturer_name'=>'ASIX',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'67b40481-8ec8-4a81-9f47-e54c5d2ce44c',
            'description'=>'Teclado',
            'manufacturer_name'=>'Marca 1',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'8807126c-257b-41a4-8389-4a9f0f52beb8',
            'description'=>'Mouse',
            'manufacturer_name'=>'Marca 1',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'a1dabf9d-6d64-4f25-98e8-6aab8a33ed17',
            'description'=>'Teclado',
            'manufacturer_name'=>'Marca 2',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'e909d3c5-63c8-4fc8-8c91-c01df10cc4ad',
            'description'=>'Mouse',
            'manufacturer_name'=>'Marca 2',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'486c1df0-ed81-4589-a52b-d3f662cc2c76',
            'description'=>'Headset',
            'manufacturer_name'=>'Marca 2',
            'model'=>null,
            'serial_number'=>null

        ));

        DB::table('usb_devices')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'4f2d2a46-081e-490f-8c55-3bef3c28dc2e',
            'description'=>'Headphone',
            'manufacturer_name'=>'Marca 2',
            'model'=>null,
            'serial_number'=>null

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usb_devices');
    }
}
