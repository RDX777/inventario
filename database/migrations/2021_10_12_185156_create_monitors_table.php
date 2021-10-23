<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('manufacturer_name', 255)->nullable();
            $table->float('iches')->nullable();
            $table->string('model', 255)->nullable();
            $table->string('serial_number', 255)->nullable();
        });

        DB::table('monitors')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'3769e1a5-46c5-42b0-9a23-a0db61a07e83',
            'manufacturer_name'=>'Samsung',
            'iches'=>15.5,
            'model'=>'TA550',
            'serial_number'=>null
        ));

        DB::table('monitors')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'845a6391-cc29-400e-8dfb-5e9c37d6d47c',
            'manufacturer_name'=>'Marca 1',
            'iches'=>15.5,
            'model'=>'TA551',
            'serial_number'=>null
        ));

        DB::table('monitors')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'6a3e9387-48f1-4897-99f5-bc751b9e5e35',
            'manufacturer_name'=>'Marca 2',
            'iches'=>14,
            'model'=>'TA552',
            'serial_number'=>'ASD585S5S'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitors');
    }
}
