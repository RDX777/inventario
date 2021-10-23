<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('processor', 255)->nullable();
            $table->integer('memory_size')->nullable();
            $table->string('video', 255)->nullable();
            $table->integer('video_size')->nullable();
            $table->integer('hard_disk_size')->nullable();
            $table->integer('ssd_size')->nullable();
            $table->string('network_cable_mac', 255)->nullable();
            $table->string('network_wireless_mac', 255)->nullable();
            $table->string('manufacturer_name', 255)->nullable();
            $table->string('so_id', 255)->nullable()->nullable();
            $table->boolean('is_notebook', 255)->nullable();
            $table->string('comments', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('serial_number', 255)->unique();
            $table->string('image_id', 255)->nullable();

        });

        DB::table('computers')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'76e7c739-a349-415b-b600-16ac7c5da777',
            'processor'=>'Intel(R) Core(TM) i7-2617M CPU @ 1.50GHz   1.50 GHz',
            'memory_size'=>12,
            'video'=>'NVIDIA GeForce GTX 1060 3GB',
            'video_size'=>3,
            'hard_disk_size'=>1000,
            'ssd_size'=>null,
            'network_cable_mac'=>'00-00-00-00-00-00',
            'network_wireless_mac'=>null,
            'manufacturer_name'=>'DELL',
            'so_id'=>'Ruindows 10',
            'is_notebook'=>false,
            'comments'=>'Micro de teste',
            'model'=>'modelo 1',
            'serial_number'=>'a1',
            'image_id'=>null
        ));

        DB::table('computers')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'d1a37e0c-1d5d-4386-b162-dafefa6e4bb9',
            'processor'=>'AMD Ryzen 5 3600X, 3.8GHz',
            'memory_size'=>4,
            'video'=>null,
            'video_size'=>null,
            'hard_disk_size'=>500,
            'ssd_size'=>null,
            'network_cable_mac'=>'00-00-00-00-00-00',
            'network_wireless_mac'=>null,
            'manufacturer_name'=>'HP',
            'so_id'=>'Lixux',
            'is_notebook'=>false,
            'comments'=>'Micro de teste 2',
            'model'=>'modelo 1',
            'serial_number'=>'a2',
            'image_id'=>null
        ));

        DB::table('computers')->insert(array(
            //'uuid'=>Str::uuid(),
            'uuid'=>'198199ae-ebe1-42c3-9be2-c7c4437457ee',
            'processor'=>'Intel(R) Core(TM) i5-2617M CPU @ 4.0GHz',
            'memory_size'=>8,
            'video'=>null,
            'video_size'=>null,
            'hard_disk_size'=>500,
            'ssd_size'=>null,
            'network_cable_mac'=>'00-00-00-00-00-00',
            'network_wireless_mac'=>null,
            'manufacturer_name'=>'HP',
            'so_id'=>'Ruindows 11',
            'is_notebook'=>false,
            'comments'=>'Micro de teste 2',
            'model'=>'modelo 1',
            'serial_number'=>'a3',
            'image_id'=>null
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
