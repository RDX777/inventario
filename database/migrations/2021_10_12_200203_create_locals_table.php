<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('floor', 255)->nullable();
            $table->string('location_name', 255)->nullable();
            $table->text('observations')->nullable();


        });

        DB::table('locals')->insert(array(
            'uuid'=>Str::uuid(),
            'floor'=>'1 andar',
            'location_name'=>'local 0',
            'observations'=>'Observação 0'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>Str::uuid(),
            'floor'=>'1 andar',
            'location_name'=>'local 1',
            'observations'=>'Observação 1'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>Str::uuid(),
            'floor'=>'1 andar',
            'location_name'=>'local 2',
            'observations'=>'Observação 2'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>Str::uuid(),
            'floor'=>'2 andar',
            'location_name'=>'local 0',
            'observations'=>'Observação 0'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>Str::uuid(),
            'floor'=>'2 andar',
            'location_name'=>'local 1',
            'observations'=>'Observação 1'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
}
