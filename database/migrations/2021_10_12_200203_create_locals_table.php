<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('floor', 255)->nullable();
            $table->string('location_name', 255)->nullable();
            $table->text('observations')->nullable();


        });

        DB::table('locals')->insert(array(
            'uuid'=>'6a093c82-6d0a-43e3-9a97-bde6b813ef16',
            'floor'=>'1 andar',
            'location_name'=>'local 0',
            'observations'=>'Observação 0'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>'67d24771-6cb0-4d9e-9d07-ae307cda58ff',
            'floor'=>'1 andar',
            'location_name'=>'local 1',
            'observations'=>'Observação 1'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>'52a9b60e-03f2-446f-927f-63bf2adae19b',
            'floor'=>'1 andar',
            'location_name'=>'local 2',
            'observations'=>'Observação 2'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>'748d0a9c-0134-4d4a-9f6c-c8a62444c967',
            'floor'=>'2 andar',
            'location_name'=>'local 0',
            'observations'=>'Observação 0'
        ));

        DB::table('locals')->insert(array(
            'uuid'=>'9b12a894-ec3a-46cb-8ff3-9e312130ffcd',
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
