<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_local', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('computer_id');
            $table->bigInteger('local_id');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
        });

        DB::table('computer_local')->insert(array(
            'computer_id' => 1,
            'local_id' => 1,
            'start_date' => '2021-10-12 19:48'

        ));

        DB::table('computer_local')->insert(array(
            'computer_id' => 2,
            'local_id' => 2,
            'start_date' => '2021-11-12 19:48',
            'end_date' => '2021-10-11 19:48'

        ));

        DB::table('computer_local')->insert(array(
            'computer_id' => 3,
            'local_id' => 3,
            'start_date' => '2021-11-12 19:48',
            'end_date' => '2021-10-11 19:48'

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_local');
    }
}
